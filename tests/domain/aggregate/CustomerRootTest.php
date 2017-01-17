<?php

declare(strict_types = 1);

use Domain\Aggregate\CustomerRoot;
use Domain\Entity\Address;
use Domain\Entity\Document;
use Domain\Entity\SocialNetwork;

class CustomerRootTest extends TestCase
{
    /**
     * @var CustomerRoot
     */
    private $aggregate;

    /**
     * Setup test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->aggregate = new CustomerRoot();
    }

    /**
     * Check class exists
     */
    public function testClassExists()
    {
        $this->assertInstanceOf(CustomerRoot::class, new CustomerRoot);
    }

    /**
     * Check addresses methods
     */
    public function testAddressesValue()
    {
        $address = $this->getMockBuilder(Address::class)->getMock();

        $this->assertInstanceOf(CustomerRoot::class, $this->aggregate->addAddress($address));
        $this->assertTrue(is_array($this->aggregate->getAddresses()));
    }

    /**
     * Check internets methods
     */
    public function testSocialNetworksValue()
    {
        $socialNetwork = $this->getMockBuilder(SocialNetwork::class)->getMock();

        $this->assertInstanceOf(CustomerRoot::class, $this->aggregate->addSocialNetwork($socialNetwork));
        $this->assertTrue(is_array($this->aggregate->getSocialNetworks()));
    }

    /**
     * Check internets methods
     */
    public function testDocumentsValue()
    {
        $document = $this->getMockBuilder(Document::class)->getMock();

        $this->assertInstanceOf(CustomerRoot::class, $this->aggregate->addDocument($document));
        $this->assertTrue(is_array($this->aggregate->getDocuments()));
    }
}
