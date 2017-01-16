<?php

declare(strict_types = 1);

use Domain\Entity\Address;
use Domain\Entity\AddressType;

class AddressEntityTest extends TestCase
{
    /**
     * @var Address
     */
    private $entity;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity = new Address();
    }

    /**
     * Check class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(Address::class, new Address);
    }

    /**
     * Check id methods
     */
    public function testIdValue()
    {
        $this->assertInstanceOf(Address::class, $this->entity->setId(1));
        $this->assertTrue(is_int($this->entity->getId()));
    }

    /**
     * Check type methods
     */
    public function testTypeValue()
    {
        $type = $this->getMockBuilder(AddressType::class)->getMock();

        $this->assertInstanceOf(Address::class, $this->entity->setType($type));
        $this->assertInstanceOf(AddressType::class, $this->entity->getType());
    }

    /**
     * Check country methods
     */
    public function testCountryValue()
    {
        $this->assertInstanceOf(Address::class, $this->entity->setCountry('BL9'));
        $this->assertTrue(is_string($this->entity->getCountry()));
    }

    /**
     * Check region methods
     */
    public function testRegionValue()
    {
        $this->assertInstanceOf(Address::class, $this->entity->setRegion('BL9'));
        $this->assertTrue(is_string($this->entity->getRegion()));
    }

    /**
     * Check city methods
     */
    public function testCityValue()
    {
        $this->assertInstanceOf(Address::class, $this->entity->setCity('BL9'));
        $this->assertTrue(is_string($this->entity->getCity()));
    }

    /**
     * Check district methods
     */
    public function testDistrictValue()
    {
        $this->assertInstanceOf(Address::class, $this->entity->setDistrict('BL9'));
        $this->assertTrue(is_string($this->entity->getDistrict()));
    }

    /**
     * Check street methods
     */
    public function testStreetValue()
    {
        $this->assertInstanceOf(Address::class, $this->entity->setStreet('STREET'));
        $this->assertTrue(is_string($this->entity->getStreet()));
    }

    /**
     * Check number methods
     */
    public function testNumberValue()
    {
        $this->assertInstanceOf(Address::class, $this->entity->setNumber('AP22'));
        $this->assertTrue(is_string($this->entity->getNumber()));
    }

    /**
     * Check complement methods
     */
    public function testComplementValue()
    {
        $this->assertInstanceOf(Address::class, $this->entity->setComplement('BL9'));
        $this->assertTrue(is_string($this->entity->getComplement()));
    }

    /**
     * Check zip code methods
     */
    public function testZipCodeValue()
    {
        $this->assertInstanceOf(Address::class, $this->entity->setZipCode('BL9'));
        $this->assertTrue(is_string($this->entity->getZipCode()));
    }

    /**
     * Check observation methods
     */
    public function testObservationValue()
    {
        $this->assertInstanceOf(Address::class, $this->entity->setObservation('BL9'));
        $this->assertTrue(is_string($this->entity->getObservation()));
    }
}