<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            categorySeeder::class,
            CourseSeeder::class,
            LiveSeeder::class,
            VideoSeeder::class,
            CampaignSeeder::class,
            TestimonialSeeder::class,
            ContentSeeder::class,
            ContactSeeder::class,
            UserSeeder::class,
            CheckoutSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
