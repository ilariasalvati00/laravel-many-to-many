<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies= ["IMAX", "3D", "DOLBY Vision"];

        foreach ($technologies as $technology){
            $x = new Technology();
            $x->name= $technology;
            $x->save();
        }
    }
}
