<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Ottieni tutti i tipi disponibili
        $types = Type::all();

        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title = $faker->sentence(3);
            $project->description = $faker->paragraph(5);
            $project->start_date = $faker->date(); // data casuale
            $project->end_date = $faker->optional()->date(); // a volte null
            // Seleziona un type_id casuale tra quelli esistenti
            $project->type_id = $types->random()->id;
            $project->save();
        }
    }
}
