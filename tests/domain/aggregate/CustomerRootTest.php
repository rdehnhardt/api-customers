<?php

declare(strict_types = 1);

use Domain\Aggregate\CustomerRoot;
use Domain\Entity\Address;
use Domain\Entity\SocialNetwork;

class CustomerRootTest extends TestCase
{
    /**
     * @var CustomerRoot
     */
    private $aggregate;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->aggregate = new CustomerRoot();
    }

    /**
     * Check class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(CustomerRoot::class, new CustomerRoot);
    }

    /**
     * Check addresses methods
     */
    public function testAddressesValue()
    {
        $address = $this->getMockBuilder(Address::class)->getMock();

        $this->assertInstanceOf(CustomerRoot::class, $this->aggregate->addAddress($address));
        $this->assertTrue(is_array($this->aggregate->getAddresses()));
    }

    /**
     * Check internets methods
     */
    public function testInternetsValue()
    {
        $internet = $this->getMockBuilder(SocialNetwork::class)->getMock();

        $this->assertInstanceOf(CustomerRoot::class, $this->aggregate->addInternet($internet));
        $this->assertTrue(is_array($this->aggregate->getInternets()));
    }
}
