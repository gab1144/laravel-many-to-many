<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['VueJs', 'Laravel', 'JS'];
        foreach($data as $technology){
            $new_technology = new Technology;
            $new_technology->name = $technology;
            $new_technology->slug = Technology::generateSlug($technology);
            $new_technology->save();
        }
    }
}
