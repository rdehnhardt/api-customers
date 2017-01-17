<?php

declare(strict_types = 1);

use Domain\Entity\SocialNetwork;
use Domain\Entity\SocialNetworkType;

class SocialNetworkEntityTest extends TestCase
{
    /**
     * @var SocialNetwork
     */
    private $entity;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity = new SocialNetwork();
    }

    /**
     * Check class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(SocialNetwork::class, new SocialNetwork);
    }

    /**
     * Check id methods should by Integer
     */
    public function testIdValue()
    {
        $this->assertInstanceOf(SocialNetwork::class, $this->entity->setId(1));
        $this->assertTrue(is_int($this->entity->getId()));
    }

    public function testAddressValue()
    {
        $this->assertInstanceOf(SocialNetwork::class, $this->entity->setAddress('address'));
        $this->assertTrue(is_string($this->entity->getAddress()));
    }

    /**
     * Check type methods should by SocialNetworkType
     */
    public function testTypeValue()
    {
        $type = $this->getMockBuilder(SocialNetworkType::class)->getMock();

        $this->assertInstanceOf(SocialNetwork::class, $this->entity->setType($type));
        $this->assertInstanceOf(SocialNetworkType::class, $this->entity->getType());
    }
}
