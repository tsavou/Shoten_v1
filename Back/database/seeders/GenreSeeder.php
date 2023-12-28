<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['name' => 'Action'],
            ['name' => 'Aventure'],
            ['name' => 'Comédie'],
            ['name' => 'Drame'],
            ['name' => 'Fantastique'],
            ['name' => 'Horreur'],
            ['name' => 'Policier'],
            ['name' => 'Romance'],
            ['name' => 'Science-fiction'],
            ['name' => 'Thriller'],
            ['name' => 'Western'],
            ['name' => 'Histoire'],
            ['name' => 'Musical'],
            ['name' => 'Sport'],
            ['name' => 'Guerre'],
            ['name' => 'Mystere'],
            ['name' => 'Supernaturel'],
            ['name' => 'Tranche de vie'],
            ['name' => 'Famille'],
            ['name' => 'School Life'],
            ['name' => 'Cuisine'],
            ['name' => 'Nekketsu'],
            ['name' => 'Tragique'],
            ['name' => 'Voyage'],
            ['name' => 'Mecha'],
            ['name' => 'Isekai'],
            ['name' => 'Psychologie'],
            ['name' => 'Sciences'],
            ['name' => 'Biographie'],

        ]);
    }
}
