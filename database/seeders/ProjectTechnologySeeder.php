<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Ottieni tutti i progetti e tutte le tecnologie
        $projects = Project::all();
        $technologies = Technology::all();

        // Per ogni progetto, associa da 1 a 3 tecnologie casuali
        foreach ($projects as $project) {
            // Genera un numero casuale di tecnologie da associare (da 1 a 3)
            $numberOfTechnologies = $faker->numberBetween(1, 3);

            // Ottieni un array di ID di tecnologie casuali
            $randomTechnologies = $technologies->random($numberOfTechnologies);

            // Associa le tecnologie al progetto
            $project->technologies()->attach($randomTechnologies->pluck('id')->toArray());
        }
    }
}
