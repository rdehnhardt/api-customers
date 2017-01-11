<?php

declare(strict_types = 1);

namespace Domain\Entity;

use ValueObjects\Number\Integer;
use ValueObjects\StringLiteral\StringLiteral;

class Gender extends DataEntity
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
     * @var StringLiteral
     */
    private $slug;

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
        $this->slug = new StringLiteral(str_slug($this->name));

        return $this;
    }

    /**
     * @return StringLiteral
     */
    public function getSlug(): StringLiteral
    {
        return $this->slug;
    }
}
