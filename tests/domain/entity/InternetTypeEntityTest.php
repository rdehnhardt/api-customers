<?php

declare(strict_types = 1);

use Domain\Entity\InternetType;

class InternetTypeEntityTest extends TestCase
{
    /**
     * @var InternetType
     */
    private $entity;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity = new InternetType();
    }

    /**
     * Check if class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(InternetType::class, new InternetType);
    }

    /**
     * Check id methods should by Integer
     */
    public function testIdValue()
    {
        $this->assertInstanceOf(InternetType::class, $this->entity->setId(1));
        $this->assertTrue(is_int($this->entity->getId()));
    }

    /**
     * Check name methods should by StringLiteral
     */
    public function testNameValue()
    {
        $this->assertInstanceOf(InternetType::class, $this->entity->setName('PASSPORT'));
        $this->assertTrue(is_string($this->entity->getName()));
    }

    /**
     * Check setSlug not exists
     */
    public function testCheckSetSlugNotExists()
    {
        $this->assertFalse(method_exists(InternetType::class, 'setSlug'));
    }

    /**
     * Check if slug is slugfy of name
     */
    public function testCheckIfSlugIsSlugfyOfName()
    {
        $this->entity->setName('CHECK SLUG');

        $this->assertSame(str_slug('CHECK SLUG'), $this->entity->getSlug());
    }
}
