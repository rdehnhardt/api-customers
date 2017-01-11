<?php

declare(strict_types = 1);

use Domain\Entity\DataEntity;

class MethodsExistsInDataEntityTest extends TestCase
{
    public function testClassMethodsExistence()
    {
        $this->assertTrue(method_exists(DataEntity::class, 'getCreatedAt'));
        $this->assertTrue(method_exists(DataEntity::class, 'setCreatedAt'));

        $this->assertTrue(method_exists(DataEntity::class, 'getUpdatedAt'));
        $this->assertTrue(method_exists(DataEntity::class, 'setUpdatedAt'));
    }
}
