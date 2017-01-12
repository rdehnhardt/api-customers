<?php

declare(strict_types = 1);

namespace Domain\Entity;

use ValueObjects\Number\Integer;
use ValueObjects\StringLiteral\StringLiteral;

class DocumentType
{
    /**
     * @var Integer
     */
    private $id;

    /**
     * @var StringLiteral
     */
    private $slug;

    /**
     * @var StringLiteral
     */
    private $name;

    /**
     * @var StringLiteral
     */
    private $mask;

    /**
     * @var StringLiteral
     */
    private $country;

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
    public function getSlug(): StringLiteral
    {
        return $this->slug;
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
        $this->slug = new StringLiteral(str_slug($name->toNative()));
        $this->name = $name;

        return $this;
    }

    /**
     * @return StringLiteral
     */
    public function getMask(): StringLiteral
    {
        return $this->mask;
    }

    /**
     * @param StringLiteral $mask
     * @return DocumentType
     */
    public function setMask(StringLiteral $mask): self
    {
        $this->mask = $mask;

        return $this;
    }

    /**
     * @return StringLiteral
     */
    public function getCountry(): StringLiteral
    {
        return $this->country;
    }

    /**
     * @param StringLiteral $country
     * @return self
     */
    public function setCountry(StringLiteral $country): self
    {
        $this->country = $country;

        return $this;
    }
}
