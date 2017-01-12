<?php

declare(strict_types = 1);

use Domain\Entity\DocumentType;

class DocumentTypeEntityTest extends TestCase
{
    /**
     * @var DocumentType
     */
    private $entity;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity = new DocumentType();
    }

    /**
     * Check if class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(DocumentType::class, new DocumentType);
    }

    /**
     * Check id methods should by Integer
     */
    public function testIdValue()
    {
        $this->assertInstanceOf(DocumentType::class, $this->entity->setId(1));
        $this->assertTrue(is_int($this->entity->getId()));
    }

    /**
     * Check name methods should by StringLiteral
     */
    public function testNameValue()
    {
        $this->assertInstanceOf(DocumentType::class, $this->entity->setName('PASSPORT'));
        $this->assertTrue(is_string($this->entity->getName()));
    }

    /**
     * Check mask methods should by StringLiteral
     */
    public function testMaskValue()
    {
        $this->assertInstanceOf(DocumentType::class, $this->entity->setMask('99.99.999'));
        $this->assertTrue(is_string($this->entity->getMask()));
    }

    /**
     * Check country methods should by StringLiteral
     */
    public function testCountryValue()
    {
        $this->assertInstanceOf(DocumentType::class, $this->entity->setCountry('BR'));
        $this->assertTrue(is_string($this->entity->getCountry()));
    }

    /**
     * Check setSlug not exists
     */
    public function testCheckSetSlugNotExists()
    {
        $this->assertFalse(method_exists(DocumentType::class, 'setSlug'));
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
