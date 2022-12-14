<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Videos')->insert([
            'link' => 'https://youtu.be/UlaAYWKwTjw',
            'thumbnail' => 'dummy.jpg',
        ]);
    }
}
