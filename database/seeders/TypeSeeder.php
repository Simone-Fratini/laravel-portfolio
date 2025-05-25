<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $Faker): void
    {
        $typeArray = ["personal", "learning", "fun", "usefull", "utility"];
        for ($i = 0; $i < 5; $i++) {
            $newType = new Type();
            $newType->name = $typeArray[$i];
            $newType->save();
        }
    }
}
