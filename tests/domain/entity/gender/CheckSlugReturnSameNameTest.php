<?php

declare(strict_types = 1);

use Domain\Entity\Gender;
use Faker\Factory as Faker;

class CheckSlugReturnSameNameTest extends TestCase
{
    /**
     * @param $name
     * @dataProvider provider
     */
    public function testField($name)
    {
        $gender = new Gender();
        $gender->setName($name);

        $this->assertSame(str_slug($name), $gender->getSlug()->toNative());
    }

    public function provider()
    {
        $faker = Faker::create();
        $output = [];

        for ($i = 0; $i < 9; $i++) {
            $output[$i][] = $faker->name;
        }

        return $output;
    }
}
