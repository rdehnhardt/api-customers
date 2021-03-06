<?php

declare(strict_types = 1);

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GendersTableSeeder::class);
        $this->call(DocumentTypesTableSeeder::class);
        $this->call(InternetTypesTableSeeder::class);
        $this->call(AddressTypesTableSeeder::class);
    }
}
