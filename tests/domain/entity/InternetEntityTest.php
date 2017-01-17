<?php

declare(strict_types = 1);

use Domain\Entity\Internet;
use Domain\Entity\InternetType;

class InternetEntityTest extends TestCase
{
    /**
     * @var Internet
     */
    private $entity;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity = new Internet();
    }

    /**
     * Check class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(Internet::class, new Internet);
    }

    /**
     * Check id methods should by Integer
     */
    public function testIdValue()
    {
        $this->assertInstanceOf(Internet::class, $this->entity->setId(1));
        $this->assertTrue(is_int($this->entity->getId()));
    }

    public function testAddressValue()
    {
        $this->assertInstanceOf(Internet::class, $this->entity->setAddress('address'));
        $this->assertTrue(is_string($this->entity->getAddress()));
    }

    /**
     * Check type methods should by InternetType
     */
    public function testTypeValue()
    {
        $type = $this->getMockBuilder(InternetType::class)->getMock();

        $this->assertInstanceOf(Internet::class, $this->entity->setType($type));
        $this->assertInstanceOf(InternetType::class, $this->entity->getType());
    }
}
