<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catg = new Category;
        $catg->name ='nintendo switch';
        $catg->description ='a fun game console';
        $catg->save();

        $catg = new Category;
        $catg->name ='Xbox X';
        $catg->description ='play gamepass';
        $catg->save();

        $catg = new Category;
        $catg->name ='Play 5';
        $catg->description ='the world of exclusive games';
        $catg->save();
    }
}
