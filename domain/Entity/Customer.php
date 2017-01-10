<?php

namespace Domain\Entity;

use ValueObjects\Identity\UUID;
use ValueObjects\StringLiteral\StringLiteral;

class Customer
{
    /**
     * @var UUID
     */
    private $id;

    /**
     * @var StringLiteral
     */
    private $name;

    /**
     * @return UUID
     */
    public function getId(): UUID
    {
        return $this->id;
    }

    /**
     * @param UUID $id
     * @return self
     */
    public function setId(UUID $id): self
    {
        $this->id = $id;

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
     * @param StringLiteral $name
     * @return self
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }
}
