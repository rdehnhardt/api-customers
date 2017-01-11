<?php

declare(strict_types = 1);

use Domain\Entity\Customer;

class MethodsExistsInCustomerTest extends TestCase
{
    public function testClassMethodsExistence()
    {
        $this->assertTrue(method_exists(Customer::class, 'getId'));
        $this->assertTrue(method_exists(Customer::class, 'setId'));

        $this->assertTrue(method_exists(Customer::class, 'getCode'));
        $this->assertTrue(method_exists(Customer::class, 'setCode'));

        $this->assertTrue(method_exists(Customer::class, 'getName'));
        $this->assertTrue(method_exists(Customer::class, 'setName'));

        $this->assertTrue(method_exists(Customer::class, 'getBornIn'));
        $this->assertTrue(method_exists(Customer::class, 'setBornIn'));

        $this->assertTrue(method_exists(Customer::class, 'getGender'));
        $this->assertTrue(method_exists(Customer::class, 'setGender'));
    }
}
