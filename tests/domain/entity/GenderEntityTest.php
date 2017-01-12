<?php

declare(strict_types = 1);

use Domain\Entity\Gender;

class MethodsExistsInGenderTest extends TestCase
{
    /**
     * @var Gender
     */
    private $entity;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity = new Gender();
    }

    /**
     * Check if class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(Gender::class, new Gender);
    }

    /**
     * Check id methods should by Integer
     */
    public function testIdValue()
    {
        $this->assertInstanceOf(Gender::class, $this->entity->setId(1));
        $this->assertTrue(is_int($this->entity->getId()));
    }

    /**
     * Check name methods should by StringLiteral
     */
    public function testNameValue()
    {
        $this->assertInstanceOf(Gender::class, $this->entity->setName('PASSPORT'));
        $this->assertTrue(is_string($this->entity->getName()));
    }

    /**
     * Check setSlug not exists
     */
    public function testCheckSetSlugNotExists()
    {
        $this->assertFalse(method_exists(Gender::class, 'setSlug'));
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
