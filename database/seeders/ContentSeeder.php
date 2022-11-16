<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'name' => 'Teacher Jack Online',
            'title' => 'Title',
            'sub_title' => 'sub Title',
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'image' => 'image.png',
        ]);
    }
}
