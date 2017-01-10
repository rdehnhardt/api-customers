<?php

declare(strict_types = 1);

use Domain\Entity\Customer;

class MethodsExistsInCustomerTest extends TestCase
{
    public function testClassMethodsExistence()
    {
        $this->assertTrue(method_exists(Customer::class, 'getId'));
        $this->assertTrue(method_exists(Customer::class, 'setId'));

        $this->assertTrue(method_exists(Customer::class, 'getDocumentType'));
        $this->assertTrue(method_exists(Customer::class, 'setDocumentType'));

        $this->assertTrue(method_exists(Customer::class, 'getCode'));
        $this->assertTrue(method_exists(Customer::class, 'setCode'));

        $this->assertTrue(method_exists(Customer::class, 'getName'));
        $this->assertTrue(method_exists(Customer::class, 'setName'));
    }
}
