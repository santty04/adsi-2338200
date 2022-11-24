<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gm = new Game;
        $gm->name = 'Zelda';
        $gm->description = 'a great game';
        $gm->user_id = 1;
        $gm->category_id = 1;
        $gm->slider = 0;
        $gm->price = 60;
        $gm->save();

        $gm = new Game;
        $gm->name = 'Forza Horizon';
        $gm->description = 'race simulated game';
        $gm->user_id = 1;
        $gm->category_id = 2;
        $gm->slider = 0;
        $gm->price = 80;
        $gm->save();

        $gm = new Game;
        $gm->name = 'Spiderman';
        $gm->description = 'great power had great responsabilities';
        $gm->user_id = 1;
        $gm->category_id = 3;
        $gm->slider = 0;
        $gm->price = 80;
        $gm->save();
        
    }
}
