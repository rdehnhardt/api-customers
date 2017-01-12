<?php

declare(strict_types = 1);

namespace Domain\Entity;

class Document
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var DocumentType
     */
    private $type;

    /**
     * @var string
     */
    private $number;

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
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $mask
     * @return Document
     */
    public function setNumber(string $mask): self
    {
        $this->number = $mask;

        return $this;
    }
}
