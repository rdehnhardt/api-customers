<?php

declare(strict_types = 1);

use App\Models\DocumentType;
use Illuminate\Database\Seeder;

class DocumentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DocumentType::class, 10)->create()->each(function (DocumentType $documentType) {
            $documentType->customers()->save(factory(App\Models\Customer::class)->make());
        });
    }
}
