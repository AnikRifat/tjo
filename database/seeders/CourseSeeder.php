<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'course_id' => '#tjo123',
            'title' => 'demo title',
            'price' => '5.00',
            'image' => 'demo.jpg',
            'cover_image' => 'cover_demo.jpg',
            'preview' => 'demo-preview',
            'intro' => 'intro',
            'overview' => 'overview',
            'duration' => '30',
            'classes' => '30',
            'category' => 'demo category',
            'category_id' => '1',
        ]);
    }
}
