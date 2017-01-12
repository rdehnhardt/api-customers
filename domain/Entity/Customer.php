<?php

declare(strict_types = 1);

namespace Domain\Entity;

use Carbon\Carbon;

class Customer extends DataEntity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Carbon
     */
    private $born_in;

    /**
     * @var Gender
     */
    private $gender;

    /**
     * @var array
     */
    private $documents = [];

    /**
     * @return Integer
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
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Carbon
     */
    public function getBornIn(): Carbon
    {
        return $this->born_in;
    }

    /**
     * @param Carbon $born_in
     * @return self
     */
    public function setBornIn(Carbon $born_in): self
    {
        $this->born_in = $born_in;

        return $this;
    }

    /**
     * @return Gender
     */
    public function getGender(): Gender
    {
        return $this->gender;
    }

    /**
     * @param Gender $gender
     * @return self
     */
    public function setGender(Gender $gender): self
    {
        $this->gender = $gender;

        return $this;
    }
}
