<?php

declare(strict_types = 1);

namespace Domain\Entity;

class Internet
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var InternetType
     */
    private $type;

    /**
     * @var string
     */
    private $address;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return InternetType
     */
    public function getType(): InternetType
    {
        return $this->type;
    }

    /**
     * @param InternetType $type
     * @return self
     */
    public function setType(InternetType $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Internet
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }
}
