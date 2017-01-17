<?php

declare(strict_types = 1);

use Domain\Entity\PhoneType;

class PhoneTypeEntityTest extends TestCase
{
    /**
     * @var PhoneType
     */
    private $entity;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity = new PhoneType();
    }

    /**
     * Check if class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(PhoneType::class, new PhoneType);
    }

    /**
     * Check id methods should by Integer
     */
    public function testIdValue()
    {
        $this->assertInstanceOf(PhoneType::class, $this->entity->setId(1));
        $this->assertTrue(is_int($this->entity->getId()));
    }

    /**
     * Check name methods should by StringLiteral
     */
    public function testNameValue()
    {
        $this->assertInstanceOf(PhoneType::class, $this->entity->setName('CEL PHONE'));
        $this->assertTrue(is_string($this->entity->getName()));
    }

    /**
     * Check name methods should by StringLiteral
     */
    public function testMaskValue()
    {
        $this->assertInstanceOf(PhoneType::class, $this->entity->setMask('99 9999 9999'));
        $this->assertTrue(is_string($this->entity->getMask()));
    }

    /**
     * Check setSlug not exists
     */
    public function testCheckSetSlugNotExists()
    {
        $this->assertFalse(method_exists(PhoneType::class, 'setSlug'));
    }

    /**
     * Check if slug is slugfy of name
     */
    public function testCheckIfSlugIsSlugfyOfName()
    {
        $this->entity->setName('CHECK SLUG');

        $this->assertSame(str_slug('CHECK SLUG'), $this->entity->getSlug());
    }
}
