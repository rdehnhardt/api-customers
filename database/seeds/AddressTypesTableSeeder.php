<?php

declare(strict_types = 1);

use App\Models\AddressType;
use Illuminate\Database\Seeder;

class AddressTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new AddressType();
        $type->slug = 'commercial';
        $type->name = 'Commercial';
        $type->save();
    }
}
