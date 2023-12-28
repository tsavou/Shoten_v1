<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MangaGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('manga_genres')->insert([


            // Naruto
            ['manga_id' => 1, 'genre_id' => 1], // Action
            ['manga_id' => 1, 'genre_id' => 2], // Aventure
            ['manga_id' => 1, 'genre_id' => 9], // Science-fiction
            ['manga_id' => 1, 'genre_id' => 22], // Nekketsu
            ['manga_id' => 1, 'genre_id' => 3], // Comédie

            // One Piece
            ['manga_id' => 2, 'genre_id' => 1], // Action
            ['manga_id' => 2, 'genre_id' => 2], // Aventure
            ['manga_id' => 2, 'genre_id' => 22], // Nekketsu
            ['manga_id' => 2, 'genre_id' => 16], // Mystère
            ['manga_id' => 2, 'genre_id' => 24], // Voyage
            ['manga_id' => 2, 'genre_id' => 9], // Science-fiction
            ['manga_id' => 2, 'genre_id' => 5], // Fantastique


            // Dragon Ball
            ['manga_id' => 3, 'genre_id' => 1], // Action
            ['manga_id' => 3, 'genre_id' => 2], // Aventure
            ['manga_id' => 3, 'genre_id' => 9], // Science-fiction
            ['manga_id' => 3, 'genre_id' => 22], // Nekketsu
            ['manga_id' => 3, 'genre_id' => 17], // Supernaturel
            ['manga_id' => 3, 'genre_id' => 5], // Fantastique

            // Fullmetal Alchemist
            ['manga_id' => 4, 'genre_id' => 1], // Action
            ['manga_id' => 4, 'genre_id' => 9], // Science-fiction
            ['manga_id' => 4, 'genre_id' => 12], // Histoire
            ['manga_id' => 4, 'genre_id' => 27], // Psychologie
            ['manga_id' => 4, 'genre_id' => 4], // Drame
            ['manga_id' => 4, 'genre_id' => 28], // Sciences

            // Jujutsu Kaisen
            ['manga_id' => 5, 'genre_id' => 1], // Action
            ['manga_id' => 5, 'genre_id' => 6], // Horreur
            ['manga_id' => 5, 'genre_id' => 17], // Supernaturel
            ['manga_id' => 5, 'genre_id' => 2], // Aventure
            ['manga_id' => 5, 'genre_id' => 5], // Fantastique
            ['manga_id' => 5, 'genre_id' => 4], // Drame
            ['manga_id' => 5, 'genre_id' => 20], // School Life

            // Berserk
            ['manga_id' => 6, 'genre_id' => 2], // Aventure
            ['manga_id' => 6, 'genre_id' => 6], // Horreur
            ['manga_id' => 6, 'genre_id' => 16], // Mystère
            ['manga_id' => 6, 'genre_id' => 17], // Supernaturel
            ['manga_id' => 6, 'genre_id' => 5], // Fantastique

            // L'attaque des titans
            ['manga_id' => 7, 'genre_id' => 1], // Action
            ['manga_id' => 7, 'genre_id' => 6], // Horreur
            ['manga_id' => 7, 'genre_id' => 16], // Mystère
            ['manga_id' => 7, 'genre_id' => 17], // Supernaturel
            ['manga_id' => 7, 'genre_id' => 5], // Fantastique

            // Chainsaw Man
            ['manga_id' => 8, 'genre_id' => 1], // Action
            ['manga_id' => 8, 'genre_id' => 6], // Horreur
            ['manga_id' => 8, 'genre_id' => 17], // Supernaturel
            ['manga_id' => 8, 'genre_id' => 19], // Famille
            ['manga_id' => 8, 'genre_id' => 5], // Fantastique

            // Bleach
            ['manga_id' => 9, 'genre_id' => 1], // Action
            ['manga_id' => 9, 'genre_id' => 6], // Horreur
            ['manga_id' => 9, 'genre_id' => 17], // Supernaturel
            ['manga_id' => 9, 'genre_id' => 22], // Nekketsu
            ['manga_id' => 9, 'genre_id' => 5], // Fantastique


            // Death Note
            ['manga_id' => 10, 'genre_id' => 8], // Mystère
            ['manga_id' => 10, 'genre_id' => 13], // Psychologique
            ['manga_id' => 10, 'genre_id' => 27], // Philosophique
            ['manga_id' => 10, 'genre_id' => 7], // Policier

            // Demon Slayer
            ['manga_id' => 11, 'genre_id' => 1], // Action
            ['manga_id' => 11, 'genre_id' => 6], // Horreur
            ['manga_id' => 11, 'genre_id' => 17], // Supernaturel
            ['manga_id' => 11, 'genre_id' => 22], // Nekketsu


            // Vinland Saga
            ['manga_id' => 12, 'genre_id' => 1], // Action
            ['manga_id' => 12, 'genre_id' => 2], // Aventure
            ['manga_id' => 12, 'genre_id' => 16], // Mystère
            ['manga_id' => 12, 'genre_id' => 18], // Tranche de vie
            ['manga_id' => 12, 'genre_id' => 15], // Guerre
            ['manga_id' => 12, 'genre_id' => 12], // Histoire

            // Kingdom
            ['manga_id' => 13, 'genre_id' => 1], // Action
            ['manga_id' => 13, 'genre_id' => 2], // Aventure
            ['manga_id' => 13, 'genre_id' => 16], // Mystère
            ['manga_id' => 13, 'genre_id' => 18], // Tranche de vie
            ['manga_id' => 13, 'genre_id' => 15], // Guerre
            ['manga_id' => 13, 'genre_id' => 12], // Histoire


            // Vagabond
            ['manga_id' => 14, 'genre_id' => 1], // Action
            ['manga_id' => 14, 'genre_id' => 18], // Tranche de vie
            ['manga_id' => 14, 'genre_id' => 16], // Mystère

            // Boruto: Naruto next generations
            ['manga_id' => 15, 'genre_id' => 1], // Action
            ['manga_id' => 15, 'genre_id' => 2], // Aventure
            ['manga_id' => 15, 'genre_id' => 9], // Science-fiction
            ['manga_id' => 15, 'genre_id' => 22], // Nekketsu
            ['manga_id' => 15, 'genre_id' => 3], // Comédie

            // Hunter x Hunter
            ['manga_id' => 16, 'genre_id' => 1], // Action
            ['manga_id' => 16, 'genre_id' => 2], // Aventure
            ['manga_id' => 16, 'genre_id' => 22], // Nekketsu
            ['manga_id' => 16, 'genre_id' => 5], // Fantastique


            // My Hero Academia
            ['manga_id' => 17, 'genre_id' => 1], // Action
            ['manga_id' => 17, 'genre_id' => 18], // Tranche de vie
            ['manga_id' => 17, 'genre_id' => 20], // School Life
            ['manga_id' => 17, 'genre_id' => 2], // Aventure
            ['manga_id' => 17, 'genre_id' => 22], // Nekketsu
            ['manga_id' => 17, 'genre_id' => 5], // Fantastique


            // One Punch Man
            ['manga_id' => 18, 'genre_id' => 1], // Action
            ['manga_id' => 18, 'genre_id' => 9], // Science-fiction
            ['manga_id' => 18, 'genre_id' => 18], // Tranche de vie

            // The Promised Neverland
            ['manga_id' => 19, 'genre_id' => 4], // Drame
            ['manga_id' => 19, 'genre_id' => 8], // Mystère
            ['manga_id' => 19, 'genre_id' => 12], // Histoire
            ['manga_id' => 19, 'genre_id' => 17], // Supernaturel

            // Tokyo Revengers
            ['manga_id' => 20, 'genre_id' => 1], // Action
            ['manga_id' => 20, 'genre_id' => 2], // Aventure
            ['manga_id' => 20, 'genre_id' => 22], // Nekketsu
            ['manga_id' => 20, 'genre_id' => 16], // Mystère
            ['manga_id' => 20, 'genre_id' => 24], // Voyage
            ['manga_id' => 20, 'genre_id' => 4], // Drame
            ['manga_id' => 20, 'genre_id' => 20], // School Life

            // Nana
            ['manga_id' => 21, 'genre_id' => 18], // Tranche de vie
            ['manga_id' => 21, 'genre_id' => 3], // Comédie
            ['manga_id' => 21, 'genre_id' => 8], // Romance
            ['manga_id' => 21, 'genre_id' => 4], // Drame
            ['manga_id' => 21, 'genre_id' => 13], // Musical

            // Sailor Moon
            ['manga_id' => 22, 'genre_id' => 18], // Tranche de vie
            ['manga_id' => 22, 'genre_id' => 3], // Comédie
            ['manga_id' => 22, 'genre_id' => 8], // Romance
            ['manga_id' => 22, 'genre_id' => 4], // Drame
            ['manga_id' => 22, 'genre_id' => 5], // Fantastique

            // Fruits Basket
            ['manga_id' => 23, 'genre_id' => 18], // Tranche de vie
            ['manga_id' => 23, 'genre_id' => 3], // Comédie
            ['manga_id' => 23, 'genre_id' => 8], // Romance
            ['manga_id' => 23, 'genre_id' => 4], // Drame



        ]);
    }
}
