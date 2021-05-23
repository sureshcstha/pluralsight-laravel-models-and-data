<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $tag = new \App\Tag();
        // $tag->name = 'Tutorial';
        // $tag->save();

        // $tag = new \App\Tag();
        // $tag->name = 'Industry News';
        // $tag->save();

        DB::table('tags')->insert([
            'name' => 'Tutorial',
        ]);

        DB::table('tags')->insert([
            'name' => 'Industry News',
        ]);
    }
}
