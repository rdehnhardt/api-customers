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
        $type = new DocumentType();
        $type->slug = 'cpf';
        $type->name = 'CPF';
        $type->mask = '999.999.999-99';
        $type->country = 'BR';
        $type->save();
    }
}
