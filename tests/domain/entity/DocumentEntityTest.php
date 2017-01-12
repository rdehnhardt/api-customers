<?php

declare(strict_types = 1);

use Domain\Entity\Document;
use Domain\Entity\DocumentType;
use ValueObjects\Number\Integer;
use ValueObjects\StringLiteral\StringLiteral;

class DocumentEntityTest extends TestCase
{
    /**
     * @var Document
     */
    private $entity;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity = new Document();
    }

    /**
     * Check class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(Document::class, new Document);
    }

    /**
     * Check id methods should by Integer
     */
    public function testIdValue()
    {
        $this->assertInstanceOf(Document::class, $this->entity->setId(new Integer(1)));
        $this->assertInstanceOf(Integer::class, $this->entity->getId());
    }

    /**
     * Check number methods should by StringLiteral
     */
    public function testNumberValue()
    {
        $this->assertInstanceOf(Document::class, $this->entity->setNumber(new StringLiteral('999999999')));
        $this->assertInstanceOf(StringLiteral::class, $this->entity->getNumber());
    }

    /**
     * Check type methods should by DocumentType
     */
    public function testTypeValue()
    {
        $type = $this->getMockBuilder(DocumentType::class)->getMock();

        $this->assertInstanceOf(Document::class, $this->entity->setType($type));
        $this->assertInstanceOf(DocumentType::class, $this->entity->getType());
    }
}
