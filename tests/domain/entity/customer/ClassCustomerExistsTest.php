<?php

declare(strict_types = 1);

use Domain\Entity\Customer;

class ClassCustomerExistsTest extends TestCase
{
    public function testClassExists()
    {
        $this->assertInstanceOf(Customer::class, new Customer);
    }
}
