<?php

declare(strict_types = 1);

namespace Domain\Entity;

use Carbon\Carbon;
use ValueObjects\Number\Integer;
use ValueObjects\StringLiteral\StringLiteral;

class Customer extends DataEntity
{
    /**
     * @var Integer
     */
    private $id;

    /**
     * @var StringLiteral
     */
    private $code;

    /**
     * @var StringLiteral
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
    public function getCode(): StringLiteral
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = new StringLiteral($code);

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
