<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $Faker): void
    {
        //
        $dataArray = ["javascript", "php", "html", "laravel", "react"];

        foreach ($dataArray as $data) {
            $newTechnology = new Technology();
            $newTechnology->name = $data;
            $newTechnology->save();
        }
    }
}
