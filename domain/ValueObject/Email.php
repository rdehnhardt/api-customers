<?php

declare(strict_types = 1);

namespace Domain\ValueObject;

use Domain\Exception\InvalidArgumentException;

class Email
{
    /**
     * @var string
     */
    private $value;

    /**
     * Returns an Email object given a PHP native string as parameter.
     *
     * @param string $value
     * @throws \InvalidArgumentException
     */
    public function __construct(string $value)
    {
        $filteredValue = filter_var($value, FILTER_VALIDATE_EMAIL);

        if ($filteredValue === false) {
            throw new InvalidArgumentException($value, array('string (valid email address)'));
        }

        $this->value = $value;
    }

    /**
     * Returns the local part of the email address
     *
     * @return string
     */
    public function getLocalPart(): string
    {
        $parts = explode('@', $this->value);

        return current($parts);
    }

    /**
     * Returns the domain part of the email address
     *
     * @return Domain
     * @throws \InvalidArgumentException
     */
    public function getDomainPart(): Domain
    {
        $parts = explode('@', $this->value);

        return new Domain(end($parts));
    }

    /**
     * Returns the string value itself
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }
}