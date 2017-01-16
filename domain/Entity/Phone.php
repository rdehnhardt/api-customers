<?php

declare(strict_types = 1);

namespace Domain\Entity;

class Phone
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var PhoneType
     */
    private $type;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $observation;

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
     * @return PhoneType
     */
    public function getType(): PhoneType
    {
        return $this->type;
    }

    /**
     * @param PhoneType $type
     * @return self
     */
    public function setType(PhoneType $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getObservation(): string
    {
        return $this->observation;
    }

    /**
     * @param string $observation
     * @return self
     */
    public function setObservation(string $observation): self
    {
        $this->observation = $observation;

        return $this;
    }
}
