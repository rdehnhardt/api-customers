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
     * @var array Internet
     */
    private $internets = [];

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
    public function getInternets(): array
    {
        return $this->internets;
    }

    /**
     * @param SocialNetwork $internets
     * @return self
     */
    public function addInternet(SocialNetwork $internets): self
    {
        $this->internets[] = $internets;

        return $this;
    }
}