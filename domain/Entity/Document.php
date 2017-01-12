<?php

declare(strict_types = 1);

namespace Domain\Entity;

use ValueObjects\Number\Integer;
use ValueObjects\StringLiteral\StringLiteral;

class Document
{
    /**
     * @var Integer
     */
    private $id;

    /**
     * @var DocumentType
     */
    private $type;

    /**
     * @var StringLiteral
     */
    private $number;

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
     * @return DocumentType
     */
    public function getType(): DocumentType
    {
        return $this->type;
    }

    /**
     * @param DocumentType $type
     * @return self
     */
    public function setType(DocumentType $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return StringLiteral
     */
    public function getNumber(): StringLiteral
    {
        return $this->number;
    }

    /**
     * @param StringLiteral $mask
     * @return Document
     */
    public function setNumber(StringLiteral $mask): self
    {
        $this->number = $mask;

        return $this;
    }
}
