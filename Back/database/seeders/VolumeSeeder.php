<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VolumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 72; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 1,
                    'image' => '/img/mangas/Naruto/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 107; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 2,
                    'image' => '/img/mangas/OnePiece/volume_' . $i . '.jpg',
                    'number' => $i,
                ]
            ]);
        }

        for ($i = 1; $i <= 42; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 3,
                    'image' => '/img/mangas/DragonBall/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 27; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 4,
                    'image' => '/img/mangas/FullmetalAlchemist/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 21; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 5,
                    'image' => '/img/mangas/JujutsuKaisen/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 41; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 6,
                    'image' => '/img/mangas/Berserk/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 34; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 7,
                    'image' => '/img/mangas/snk/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 15; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 8,
                    'image' => '/img/mangas/ChainsawMan/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 74; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 9,
                    'image' => '/img/mangas/Bleach/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <=13 ; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 10,
                    'image' => '/img/mangas/DeathNote/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);

        }

        for ($i = 1; $i <= 23; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 11,
                    'image' => '/img/mangas/DemonSlayer/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 27; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 12,
                    'image' => '/img/mangas/VinlandSaga/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);

        }

        for ($i = 1; $i <= 66; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 13,
                    'image' => '/img/mangas/Kingdom/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 37; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 14,
                    'image' => '/img/mangas/Vagabond/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 18; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 15,
                    'image' => '/img/mangas/Boruto/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 37; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 16,
                    'image' => '/img/mangas/HunterxHunter/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 37; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 17,
                    'image' => '/img/mangas/mha/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);

        }

        for ($i = 1; $i <= 28; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 18,
                    'image' => '/img/mangas/OnePunchMan/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 19,
                    'image' => '/img/mangas/tpn/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 28; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 20,
                    'image' => '/img/mangas/TokyoRevengers/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 21; $i++) {
            DB::table('volumes')->insert([
                [
                    'manga_id' => 21,
                    'image' => '/img/mangas/Nana/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 10; $i++){
            DB::table('volumes')->insert([
                [
                    'manga_id' => 22,
                    'image' => '/img/mangas/SailorMoon/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }

        for ($i = 1; $i <= 23; $i++){
            DB::table('volumes')->insert([
                [
                    'manga_id' => 23,
                    'image' => '/img/mangas/FruitsBasket/volume_' . $i . '.jpg',
                    'number' => $i
                ]
            ]);
        }
    }
}
