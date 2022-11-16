<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'email' => 'demo@email.com',
            'phone' => '000000',
            'phone2' => '00000',
            'adress' => 'abcd,201,dhk',
            'wechat' => 'wechat',
            'qq' => 'qq',
        ]);
    }
}
