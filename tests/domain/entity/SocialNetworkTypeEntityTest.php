<?php

declare(strict_types = 1);

use Domain\Entity\SocialNetworkType;

class SocialNetworkTypeEntityTest extends TestCase
{
    /**
     * @var SocialNetworkType
     */
    private $entity;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity = new SocialNetworkType();
    }

    /**
     * Check if class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(SocialNetworkType::class, new SocialNetworkType);
    }

    /**
     * Check id methods should by Integer
     */
    public function testIdValue()
    {
        $this->assertInstanceOf(SocialNetworkType::class, $this->entity->setId(1));
        $this->assertTrue(is_int($this->entity->getId()));
    }

    /**
     * Check name methods should by StringLiteral
     */
    public function testNameValue()
    {
        $this->assertInstanceOf(SocialNetworkType::class, $this->entity->setName('PASSPORT'));
        $this->assertTrue(is_string($this->entity->getName()));
    }

    /**
     * Check name methods should by StringLiteral
     */
    public function testIconValue()
    {
        $this->assertInstanceOf(SocialNetworkType::class, $this->entity->setIcon('PASSPORT'));
        $this->assertTrue(is_string($this->entity->getIcon()));
    }

    /**
     * Check setSlug not exists
     */
    public function testCheckSetSlugNotExists()
    {
        $this->assertFalse(method_exists(SocialNetworkType::class, 'setSlug'));
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
