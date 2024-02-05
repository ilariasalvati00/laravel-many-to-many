<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types=["Musical", "Drammatico", "Fantasy", "Horror", "Commedia", "Thriller", "Biografico", "Fantascienza", "Sentimentale", "Western", "Period-drama", "Storico"];

        foreach ($types as $tipo) {
            $x = new Type();
            $x->type = $tipo;
            $x->save();
        }
    }
}
