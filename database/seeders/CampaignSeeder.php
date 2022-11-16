<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Campaigns')->insert([
            'course_id' => '#tjo123',
            'name' => 'demo name',
            'thumbnail' => 'demo_thumbail.jpg',
            'price' => '5.00',
            'discount' => '50',
            'discounted_price' => '2.50',
            'start_date' => '1jun',
            'end_date' => '30jun',
            'hasDiscount' => '1',
        ]);
    }
}
