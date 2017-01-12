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
     * @var array
     */
    private $documents = [];

    /**
     * @return Integer
     */
    public function getId(): Integer
    {
        return $this->id;
    }

    /**
     * @param Integer $id
     * @return self
     */
    public function setId(Integer $id): self
    {
        $this->id = $id;

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
     * @param StringLiteral $code
     * @return self
     */
    public function setCode(StringLiteral $code): self
    {
        $this->code = $code;

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
    public function setName(StringLiteral $name): self
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

    /**
     * @return array
     */
    public function getDocuments(): array
    {
        return $this->documents;
    }

    /**
     * @param Document $document
     * @return self
     */
    public function addDocument(Document $document): self
    {
        $this->documents[$document->getId()->toNative()] = $document;

        return $this;
    }

    /**
     * @param Document $document
     * @return self
     */
    public function removeDocument(Document $document): self
    {
        unset($this->documents[$document->getId()->toNative()]);

        return $this;
    }
}
