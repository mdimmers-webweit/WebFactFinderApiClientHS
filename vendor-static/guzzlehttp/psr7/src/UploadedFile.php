<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace GuzzleHttp6\Psr7;

use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UploadedFileInterface;

class UploadedFile implements UploadedFileInterface
{
    /**
     * @var int[]
     */
    private static $errors = [
        UPLOAD_ERR_OK,
        UPLOAD_ERR_INI_SIZE,
        UPLOAD_ERR_FORM_SIZE,
        UPLOAD_ERR_PARTIAL,
        UPLOAD_ERR_NO_FILE,
        UPLOAD_ERR_NO_TMP_DIR,
        UPLOAD_ERR_CANT_WRITE,
        UPLOAD_ERR_EXTENSION,
    ];

    /**
     * @var string
     */
    private $clientFilename;

    /**
     * @var string
     */
    private $clientMediaType;

    /**
     * @var int
     */
    private $error;

    /**
     * @var string|null
     */
    private $file;

    /**
     * @var bool
     */
    private $moved = false;

    /**
     * @var int
     */
    private $size;

    /**
     * @var StreamInterface|null
     */
    private $stream;

    /**
     * @param StreamInterface|string|resource $streamOrFile
     * @param int                             $size
     * @param int                             $errorStatus
     * @param string|null                     $clientFilename
     * @param string|null                     $clientMediaType
     */
    public function __construct(
        $streamOrFile,
        $size,
        $errorStatus,
        $clientFilename = null,
        $clientMediaType = null
    ) {
        $this->setError($errorStatus);
        $this->setSize($size);
        $this->setClientFilename($clientFilename);
        $this->setClientMediaType($clientMediaType);

        if ($this->isOk()) {
            $this->setStreamOrFile($streamOrFile);
        }
    }

    /**
     * @return bool
     */
    public function isMoved()
    {
        return $this->moved;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \RuntimeException if the upload was not successful
     */
    public function getStream()
    {
        $this->validateActive();

        if ($this->stream instanceof StreamInterface) {
            return $this->stream;
        }

        return new LazyOpenStream($this->file, 'r+');
    }

    /**
     * {@inheritdoc}
     *
     * @see http://php.net/is_uploaded_file
     * @see http://php.net/move_uploaded_file
     *
     * @param string $targetPath path to which to move the uploaded file
     *
     * @throws \RuntimeException         if the upload was not successful
     * @throws \InvalidArgumentException if the $path specified is invalid
     * @throws \RuntimeException         on any error during the move operation, or on
     *                                   the second or subsequent call to the method
     */
    public function moveTo($targetPath): void
    {
        $this->validateActive();

        if ($this->isStringNotEmpty($targetPath) === false) {
            throw new \InvalidArgumentException(
                'Invalid path provided for move operation; must be a non-empty string'
            );
        }

        if ($this->file) {
            $this->moved = php_sapi_name() === 'cli'
                ? rename($this->file, $targetPath)
                : move_uploaded_file($this->file, $targetPath);
        } else {
            copy_to_stream(
                $this->getStream(),
                new LazyOpenStream($targetPath, 'w')
            );

            $this->moved = true;
        }

        if ($this->moved === false) {
            throw new \RuntimeException(
                sprintf('Uploaded file could not be moved to %s', $targetPath)
            );
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return int|null the file size in bytes or null if unknown
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * {@inheritdoc}
     *
     * @see http://php.net/manual/en/features.file-upload.errors.php
     *
     * @return int one of PHP's UPLOAD_ERR_XXX constants
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * {@inheritdoc}
     *
     * @return string|null the filename sent by the client or null if none
     *                     was provided
     */
    public function getClientFilename()
    {
        return $this->clientFilename;
    }

    /**
     * {@inheritdoc}
     */
    public function getClientMediaType()
    {
        return $this->clientMediaType;
    }

    /**
     * Depending on the value set file or stream variable
     *
     * @throws \InvalidArgumentException
     */
    private function setStreamOrFile($streamOrFile): void
    {
        if (\is_string($streamOrFile)) {
            $this->file = $streamOrFile;
        } elseif (\is_resource($streamOrFile)) {
            $this->stream = new Stream($streamOrFile);
        } elseif ($streamOrFile instanceof StreamInterface) {
            $this->stream = $streamOrFile;
        } else {
            throw new \InvalidArgumentException(
                'Invalid stream or file provided for UploadedFile'
            );
        }
    }

    /**
     * @param int $error
     *
     * @throws \InvalidArgumentException
     */
    private function setError($error): void
    {
        if (\is_int($error) === false) {
            throw new \InvalidArgumentException(
                'Upload file error status must be an integer'
            );
        }

        if (\in_array($error, UploadedFile::$errors, true) === false) {
            throw new \InvalidArgumentException(
                'Invalid error status for UploadedFile'
            );
        }

        $this->error = $error;
    }

    /**
     * @param int $size
     *
     * @throws \InvalidArgumentException
     */
    private function setSize($size): void
    {
        if (\is_int($size) === false) {
            throw new \InvalidArgumentException(
                'Upload file size must be an integer'
            );
        }

        $this->size = $size;
    }

    /**
     * @return bool
     */
    private function isStringOrNull($param)
    {
        return \in_array(\gettype($param), ['string', 'NULL'], true);
    }

    /**
     * @return bool
     */
    private function isStringNotEmpty($param)
    {
        return \is_string($param) && empty($param) === false;
    }

    /**
     * @param string|null $clientFilename
     *
     * @throws \InvalidArgumentException
     */
    private function setClientFilename($clientFilename): void
    {
        if ($this->isStringOrNull($clientFilename) === false) {
            throw new \InvalidArgumentException(
                'Upload file client filename must be a string or null'
            );
        }

        $this->clientFilename = $clientFilename;
    }

    /**
     * @param string|null $clientMediaType
     *
     * @throws \InvalidArgumentException
     */
    private function setClientMediaType($clientMediaType): void
    {
        if ($this->isStringOrNull($clientMediaType) === false) {
            throw new \InvalidArgumentException(
                'Upload file client media type must be a string or null'
            );
        }

        $this->clientMediaType = $clientMediaType;
    }

    /**
     * Return true if there is no upload error
     *
     * @return bool
     */
    private function isOk()
    {
        return $this->error === UPLOAD_ERR_OK;
    }

    /**
     * @throws \RuntimeException if is moved or not ok
     */
    private function validateActive(): void
    {
        if ($this->isOk() === false) {
            throw new \RuntimeException('Cannot retrieve stream due to upload error');
        }

        if ($this->isMoved()) {
            throw new \RuntimeException('Cannot retrieve stream after it has already been moved');
        }
    }
}
