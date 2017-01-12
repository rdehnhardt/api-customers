<?php

declare(strict_types = 1);

use Carbon\Carbon;
use Domain\Entity\Document;
use Domain\Entity\Customer;
use Domain\Entity\Gender;
use ValueObjects\Number\Integer;
use ValueObjects\StringLiteral\StringLiteral;

class CustomerEntityTest extends TestCase
{
    /**
     * @var Customer
     */
    private $entity;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity = new Customer();
    }

    /**
     * Check class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(Customer::class, new Customer);
    }

    /**
     * Check id methods should by Integer
     */
    public function testIdValue()
    {
        $this->assertInstanceOf(Customer::class, $this->entity->setId(new Integer(1)));
        $this->assertInstanceOf(Integer::class, $this->entity->getId());
    }

    /**
     * Check id methods should by StringLiteral
     */
    public function testCodeValue()
    {
        $this->assertInstanceOf(Customer::class, $this->entity->setCode(new StringLiteral('XPTO')));
        $this->assertInstanceOf(StringLiteral::class, $this->entity->getCode());
    }

    /**
     * Check id methods should by StringLiteral
     */
    public function testNameValue()
    {
        $this->assertInstanceOf(Customer::class, $this->entity->setName(new StringLiteral('MY NAME IS BOND!')));
        $this->assertInstanceOf(StringLiteral::class, $this->entity->getName());
    }

    /**
     * Check id methods should by Carbon
     */
    public function testBornInValue()
    {
        $bornIn = Carbon::now();

        $this->assertInstanceOf(Customer::class, $this->entity->setBornIn($bornIn));
        $this->assertInstanceOf(Carbon::class, $this->entity->getBornIn());
    }

    /**
     * Check id methods should by Gender
     */
    public function testGenderValue()
    {
        $gender = $this->getMockBuilder(Gender::class)->getMock();

        $this->assertInstanceOf(Customer::class, $this->entity->setGender($gender));
        $this->assertInstanceOf(Gender::class, $this->entity->getGender());
    }

    /**
     * Check id methods should by Gender
     */
    public function testDocumentsValue()
    {
        $document = $this->getMockBuilder(Document::class)->getMock();

        $this->assertInstanceOf(Customer::class, $this->entity->addDocument($document));
        $this->assertInstanceOf(Customer::class, $this->entity->removeDocument($document));
        $this->assertTrue(is_array($this->entity->getDocuments()));
    }
}
