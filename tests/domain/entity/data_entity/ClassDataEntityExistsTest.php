<?php

declare(strict_types = 1);

use Domain\Entity\DataEntity;

class ClassDataEntityExistsTest extends TestCase
{
    public function testClassExists()
    {
        $mock = $this->getMockBuilder(DataEntity::class)->getMock();

        $this->assertInstanceOf(DataEntity::class, $mock);
    }
}
