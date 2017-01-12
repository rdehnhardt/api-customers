<?php

declare(strict_types = 1);

use App\Models\InternetType;
use Illuminate\Database\Seeder;

class InternetTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new InternetType();
        $type->slug = 'web-page';
        $type->name = 'Web page';
        $type->save();
    }
}
