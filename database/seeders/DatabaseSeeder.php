<?php

namespace Database\Seeders;

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
            CarrouselSeeder::class,
            TestimonialSeeder::class,
            WitnessSeeder::class,
            ServicesSeeder::class,
            TeamSeeder::class,
            
        ]);
    }
}
