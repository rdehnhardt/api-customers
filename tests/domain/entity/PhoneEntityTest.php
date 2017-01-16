<?php

declare(strict_types = 1);

use Domain\Entity\Phone;
use Domain\Entity\PhoneType;

class PhoneEntityTest extends TestCase
{
    /**
     * @var Phone
     */
    private $entity;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity = new Phone();
    }

    /**
     * Check class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(Phone::class, new Phone);
    }

    /**
     * Check id methods
     */
    public function testIdValue()
    {
        $this->assertInstanceOf(Phone::class, $this->entity->setId(1));
        $this->assertTrue(is_int($this->entity->getId()));
    }

    /**
     * Check type methods
     */
    public function testTypeValue()
    {
        $type = $this->getMockBuilder(PhoneType::class)->getMock();

        $this->assertInstanceOf(Phone::class, $this->entity->setType($type));
        $this->assertInstanceOf(PhoneType::class, $this->entity->getType());
    }

    /**
     * Check number methods
     */
    public function testNumberValue()
    {
        $this->assertInstanceOf(Phone::class, $this->entity->setNumber('99 9999 9999'));
        $this->assertTrue(is_string($this->entity->getNumber()));
    }

    /**
     * Check observation methods
     */
    public function testObservationValue()
    {
        $this->assertInstanceOf(Phone::class, $this->entity->setObservation('BL9'));
        $this->assertTrue(is_string($this->entity->getObservation()));
    }
}