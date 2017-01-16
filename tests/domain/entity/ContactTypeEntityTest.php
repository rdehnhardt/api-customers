<?php

declare(strict_types = 1);

use Domain\Entity\ContactType;

class ContactTypeEntityTest extends TestCase
{
    /**
     * @var ContactType
     */
    private $entity;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity = new ContactType();
    }

    /**
     * Check if class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(ContactType::class, new ContactType);
    }

    /**
     * Check id methods should by Integer
     */
    public function testIdValue()
    {
        $this->assertInstanceOf(ContactType::class, $this->entity->setId(1));
        $this->assertTrue(is_int($this->entity->getId()));
    }

    /**
     * Check name methods should by StringLiteral
     */
    public function testNameValue()
    {
        $this->assertInstanceOf(ContactType::class, $this->entity->setName('PASSPORT'));
        $this->assertTrue(is_string($this->entity->getName()));
    }

    /**
     * Check setSlug not exists
     */
    public function testCheckSetSlugNotExists()
    {
        $this->assertFalse(method_exists(ContactType::class, 'setSlug'));
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
