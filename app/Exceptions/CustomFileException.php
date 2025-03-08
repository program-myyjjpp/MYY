<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class CustomFileException extends Exception
{
    protected string $filePath;

    public function __construct($filePath, $message, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
        $this->filePath = $filePath;
    }

    public function getFilePath(): string
    {
        return $this->filePath;
    }
}
