<?php

declare(strict_types = 1);

use Domain\ValueObject\Domain;
use Domain\ValueObject\Email;

class EmailValueObjectTest extends TestCase
{
    public function testValidEmail()
    {
        $email1 = new Email('foo@bar.com');
        $this->assertInstanceOf(Email::class, $email1);

        $email2 = new Email('foo@[120.0.0.1]');
        $this->assertInstanceOf(Email::class, $email2);
    }

    /**
     * @expectedException Domain\Exception\InvalidArgumentException
     */
    public function testInvalidEmail()
    {
        new Email('invalid');
    }

    public function testGetLocalPart()
    {
        $email = new Email('foo@bar.baz');

        $this->assertEquals('foo', $email->getLocalPart());
    }

    public function testGetDomainPart()
    {
        $email = new Email('foo@bar.com');

        $this->assertEquals('bar.com', $email->getDomainPart());
        $this->assertInstanceOf(Domain::class, $email->getDomainPart());
    }
}