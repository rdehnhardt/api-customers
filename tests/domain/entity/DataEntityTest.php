<?php

declare(strict_types = 1);

use Carbon\Carbon;
use Domain\Entity\DataEntity;

class DataEntityTest extends TestCase
{
    /**
     * @var DataEntity
     */
    private $entity;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity = $this->getMockBuilder(DataEntity::class)->getMock();
    }

    /**
     * Check created_at methods should by Carbon
     */
    public function testCreatedAtValue()
    {
        $bornIn = Carbon::now();

        $this->assertInstanceOf(DataEntity::class, $this->entity->setCreatedAt($bornIn));
        $this->assertInstanceOf(Carbon::class, $this->entity->getCreatedAt());
    }

    /**
     * Check updated_at methods should by Carbon
     */
    public function testUpdatedAtValue()
    {
        $bornIn = Carbon::now();

        $this->assertInstanceOf(DataEntity::class, $this->entity->setUpdatedAt($bornIn));
        $this->assertInstanceOf(Carbon::class, $this->entity->getUpdatedAt());
    }
}
