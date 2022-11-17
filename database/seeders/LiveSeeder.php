<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Lives')->insert([
            'course_id' => '#tjo123',
            'banner' => 'banner.jpg',
            'start_date' => '20',
            'end_date' => '30',
        ]);
    }
}
