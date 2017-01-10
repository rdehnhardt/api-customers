<?php

declare(strict_types = 1);

use Domain\Entity\Customer;

class MethodsExistsInCustomerTest extends TestCase
{
    public function testClassMethodsExistence()
    {
        $this->assertTrue(method_exists(Customer::class, 'getId'));
        $this->assertTrue(method_exists(Customer::class, 'setId'));

        $this->assertTrue(method_exists(Customer::class, 'getName'));
        $this->assertTrue(method_exists(Customer::class, 'setName'));
    }
}
