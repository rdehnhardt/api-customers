<?php

declare(strict_types = 1);

use Carbon\Carbon;
use Domain\Entity\Customer;
use Domain\Entity\Document;
use Domain\Entity\DocumentType;
use Domain\Entity\Gender;

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
        $this->assertInstanceOf(Customer::class, $this->entity->setId(1));
        $this->assertTrue(is_int($this->entity->getId()));
    }

    /**
     * Check id methods should by StringLiteral
     */
    public function testCodeValue()
    {
        $this->assertInstanceOf(Customer::class, $this->entity->setCode('XPTO'));
        $this->assertTrue(is_string($this->entity->getCode()));
    }

    /**
     * Check id methods should by StringLiteral
     */
    public function testNameValue()
    {
        $this->assertInstanceOf(Customer::class, $this->entity->setName('MY NAME IS BOND!'));
        $this->assertTrue(is_string($this->entity->getName()));
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

    /**
     * Get document by slug
     * @dataProvider provideDocuments
     * @param $name
     * @param $mask
     * @param $country
     * @param $number
     */
    public function testGetDocumentBySlug($name, $mask, $country, $number)
    {
        $type = new DocumentType();
        $type->setName($name);
        $type->setMask($mask);
        $type->setCountry($country);

        $document = new Document;
        $document->setId(1);
        $document->setType($type);
        $document->setNumber($number);

        $customer = new Customer();
        $customer->addDocument($document);

        $get = $customer->getDocumentBySlug(str_slug($name));

        $this->assertSame(str_slug($name), $get->getType()->getSlug());
    }

    public function provideDocuments()
    {
        return [
            ['CPF', '999.999.999-99', 'BR', '123.123.123-12'],
            ['RG', '9999999999', 'BR', '1234567890'],
        ];
    }
}
