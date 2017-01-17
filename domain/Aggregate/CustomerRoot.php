<?php

declare(strict_types = 1);

namespace Domain\Aggregate;

use Domain\Entity\Address;
use Domain\Entity\Customer;
use Domain\Entity\SocialNetwork;

class CustomerRoot extends Customer
{
    /**
     * @var array Address
     */
    private $addresses = [];

    /**
     * @var array SocialNetwork
     */
    private $socialNetworks = [];

    /**
     * @return mixed
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param mixed $addresses
     * @return self
     */
    public function addAddress(Address $addresses): self
    {
        $this->addresses[] = $addresses;

        return $this;
    }

    /**
     * @return array
     */
    public function getSocialNetworks(): array
    {
        return $this->socialNetworks;
    }

    /**
     * @param SocialNetwork $socialNetwork
     * @return self
     */
    public function addInternet(SocialNetwork $socialNetwork): self
    {
        $this->socialNetworks[] = $socialNetwork;

        return $this;
    }
}