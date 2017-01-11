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
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->slug = new StringLiteral(str_slug($name));
        $this->name = new StringLiteral($name);

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
     * @param string $mask
     * @return DocumentType
     */
    public function setMask(string $mask): self
    {
        $this->mask = new StringLiteral($mask);

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
     * @param string $country
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = new StringLiteral($country);

        return $this;
    }
}
