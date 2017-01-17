<?php

declare(strict_types = 1);

namespace Domain\Exception;

use InvalidArgumentException as InvalidArgumentExceptionBase;

class InvalidArgumentException extends InvalidArgumentExceptionBase
{
    public function __construct($value, array $allowed_types)
    {
        $this->message = sprintf('Argument "%s" is invalid. Allowed types for argument are "%s".', $value, implode(', ', $allowed_types));
    }
}
