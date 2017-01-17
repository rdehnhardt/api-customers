<?php

declare(strict_types = 1);

namespace Domain\Entity;

class SocialNetwork
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var SocialNetworkType
     */
    private $type;

    /**
     * @var string
     */
    private $address;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return SocialNetwork
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return SocialNetworkType
     */
    public function getType(): SocialNetworkType
    {
        return $this->type;
    }

    /**
     * @param SocialNetworkType $type
     * @return SocialNetwork
     */
    public function setType(SocialNetworkType $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return SocialNetwork
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }
}
