<?php

declare(strict_types = 1);

namespace Domain\ValueObject;

class Domain
{
    /**
     * @var string
     */
    private $value;

    /**
     * Returns an Domain object given a PHP native string as parameter.
     *
     * @param string $value
     * @throws \InvalidArgumentException
     */
    public function __construct(string $value)
    {
        if (!$this->isValid($value)) {
            throw new InvalidNativeArgumentException($value, array('string (valid hostname)'));
        }

        $this->value = $value;
    }

    /**
     * Returns the string value itself
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }

    /**
     * @param $value
     * @return bool
     */
    private function isValid($value)
    {
        return (preg_match("/^([a-z\d](-*[a-z\d])*)(\.([a-z\d](-*[a-z\d])*))*$/i", $value) //valid chars check
            && preg_match("/^.{1,253}$/", $value) //overall length check
            && preg_match("/^[^\.]{1,63}(\.[^\.]{1,63})*$/", $value)); //length of each label
    }
}
