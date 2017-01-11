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
     * Check id methods should by Integer
     */
    public function testIdValue()
    {
        $this->assertInstanceOf(DocumentType::class, $this->entity->setId(1));
        $this->assertInstanceOf(Integer::class, $this->entity->getId());
    }

    /**
     * Check name methods should by StringLiteral
     */
    public function testNameValue()
    {
        $this->assertInstanceOf(DocumentType::class, $this->entity->setName('PASSPORT'));
        $this->assertInstanceOf(StringLiteral::class, $this->entity->getName());
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

        $this->assertSame(str_slug('CHECK SLUG'), $this->entity->getSlug()->toNative());
    }
}
