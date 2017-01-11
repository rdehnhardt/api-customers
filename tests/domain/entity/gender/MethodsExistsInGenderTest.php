<?php

declare(strict_types = 1);

use Domain\Entity\Gender;

class MethodsExistsInGenderTest extends TestCase
{
    public function testClassMethodsExistence()
    {
        $this->assertTrue(method_exists(Gender::class, 'getId'));
        $this->assertTrue(method_exists(Gender::class, 'setId'));

        $this->assertTrue(method_exists(Gender::class, 'getName'));
        $this->assertTrue(method_exists(Gender::class, 'setName'));

        $this->assertTrue(method_exists(Gender::class, 'getSlug'));
        $this->assertFalse(method_exists(Gender::class, 'setSlug'));
    }
}
