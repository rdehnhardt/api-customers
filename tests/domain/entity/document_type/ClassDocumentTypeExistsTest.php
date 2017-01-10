<?php

declare(strict_types = 1);

use Domain\Entity\DocumentType;

class ClassDocumentTypeExistsTest extends TestCase
{
    public function testClassExists()
    {
        $this->assertInstanceOf(DocumentType::class, new DocumentType);
    }
}
