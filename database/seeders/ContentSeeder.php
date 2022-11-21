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
            'title' => '<h2><strong>Develop your English,&nbsp;</strong></h2><h2><strong>Step Up to the World</strong></h2>',
            'about' => '<p>TESOL Certified, ELT Teacher Jack is experienced and has taught students from China, South
            Korea, Mexico and the United States of America over the last 7 years.
            <br>
            <br>
            Teacher Jack is friendly, helpful, open minded and affordable. He goes the extra mile to
            ensure student understanding of the lessons. He travels a lot and interacts with people from
            different background.
            <br>
            <br>

            He is knowledgeable and knows exactly which student requires what level of training. He is
            easily reachable and is always ready to help his students.
        </p>',
            'sub_title' => 'Take Lessons from Teacher Jack and Speak Like a Native English Speaker',
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'image' => 'image.png',
        ]);
    }
}
