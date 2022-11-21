<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'name' => 'brook',
            'image' => 'brook.jpg',
            'title' => 'student',
            'text' => 'Jack is the most devoted and knowledgeable English teacher I’ve ever met. As an average Chinese student seeking for development in English, I consider myself lucky for having sessions with him. Not only did he correct my pronunciation errors, he also delivered me with spectacular insights in writing. The patience and devotion he has shown is also well appreciated. In spite of all that, he broadens my horizon to a new perspective to English and makes my eyes wide open to a new world. I do appreciate his hard work and thanks to him.',
        ]);
    }
}
