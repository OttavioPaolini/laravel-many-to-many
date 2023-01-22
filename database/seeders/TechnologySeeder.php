<?php

namespace Database\Seeders;


use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['html', 'css', 'js', 'php', 'laravel'];
        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->title = $technology;
            $newTechnology->slug = Technology::generateSlug($technology);
            $newTechnology->save();
        }
    }
}
