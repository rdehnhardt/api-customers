<?php

declare(strict_types = 1);

use Domain\Entity\Gender;

class ClassGenderExistsTest extends TestCase
{
    public function testClassExists()
    {
        $this->assertInstanceOf(Gender::class, new Gender);
    }
}
