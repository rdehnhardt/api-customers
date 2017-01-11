<?php

declare(strict_types = 1);

use Domain\Entity\DocumentType;

class MethodsExistsInDocumentTypeTest extends TestCase
{
    public function testClassMethodsExistence()
    {
        $this->assertTrue(method_exists(DocumentType::class, 'getId'));
        $this->assertTrue(method_exists(DocumentType::class, 'setId'));

        $this->assertTrue(method_exists(DocumentType::class, 'getName'));
        $this->assertTrue(method_exists(DocumentType::class, 'setName'));
    }
}
