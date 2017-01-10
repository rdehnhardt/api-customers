<?php

use Domain\Entity\Customer;

class ClassCustomerExistsTest extends TestCase
{
    public function testClassExists()
    {
        $this->assertInstanceOf(Customer::class, new Customer);
    }
}
