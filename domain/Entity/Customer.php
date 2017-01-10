<?php

namespace Domain\Entity;

use ValueObjects\Number\Integer;
use ValueObjects\StringLiteral\StringLiteral;

class Customer
{
    /**
     * @var Integer
     */
    private $id;

    /**
     * @var StringLiteral
     */
    private $name;

    /**
     * @return Integer
     */
    public function getId(): Integer
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = new Integer($id);

        return $this;
    }

    /**
     * @return StringLiteral
     */
    public function getName(): StringLiteral
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = new StringLiteral($name);

        return $this;
    }
}
