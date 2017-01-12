<?php

declare(strict_types = 1);

use Domain\Entity\DocumentType;
use ValueObjects\Number\Integer;
use ValueObjects\StringLiteral\StringLiteral;

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
        $this->assertInstanceOf(DocumentType::class, $this->entity->setId(new Integer(1)));
        $this->assertInstanceOf(Integer::class, $this->entity->getId());
    }

    /**
     * Check name methods should by StringLiteral
     */
    public function testNameValue()
    {
        $this->assertInstanceOf(DocumentType::class, $this->entity->setName(new StringLiteral('PASSPORT')));
        $this->assertInstanceOf(StringLiteral::class, $this->entity->getName());
    }

    /**
     * Check mask methods should by StringLiteral
     */
    public function testMaskValue()
    {
        $this->assertInstanceOf(DocumentType::class, $this->entity->setMask(new StringLiteral('99.99.999')));
        $this->assertInstanceOf(StringLiteral::class, $this->entity->getMask());
    }

    /**
     * Check country methods should by StringLiteral
     */
    public function testCountryValue()
    {
        $this->assertInstanceOf(DocumentType::class, $this->entity->setCountry(new StringLiteral('BR')));
        $this->assertInstanceOf(StringLiteral::class, $this->entity->getCountry());
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
        $this->entity->setName(new StringLiteral('CHECK SLUG'));

        $this->assertSame(str_slug('CHECK SLUG'), $this->entity->getSlug()->toNative());
    }
}
