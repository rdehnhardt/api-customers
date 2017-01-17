<?php

declare(strict_types = 1);

use Carbon\Carbon;
use Domain\Entity\Customer;
use Domain\Entity\Gender;
use Domain\ValueObject\Email;

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
     * Check id methods should by Email
     */
    public function testEmailValue()
    {
        $this->assertInstanceOf(Customer::class, $this->entity->setEmail(new Email('email@domain.com')));
        $this->assertInstanceOf(Email::class, $this->entity->getEmail());
    }

    /**
     * Check id methods should by string
     */
    public function testPasswordValue()
    {
        $this->assertInstanceOf(Customer::class, $this->entity->setPassword('secret'));
        $this->assertTrue(is_string($this->entity->getPassword()));
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
}
