<?php

declare(strict_types = 1);

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * @var array
     */
    private $genders = ['Male', 'Female'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->genders as $gender) {
            $record = new Gender();
            $record->slug = str_slug($gender);
            $record->name = $gender;
            $record->save();
        }
    }
}
