<?php

declare(strict_types = 1);

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
     * @var DocumentType
     */
    private $document_type;

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

    /**
     * @return DocumentType
     */
    public function getDocumentType(): DocumentType
    {
        return $this->document_type;
    }

    /**
     * @param DocumentType $document_type
     * @return self
     */
    public function setDocumentType(DocumentType $document_type): self
    {
        $this->document_type = $document_type;

        return $this;
    }
}
