<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Williams',
                'surname' => 'Christinne',
                'email' => 'a@a',
                'job_id' => '1',
                'role_id' => '1',
                'photo_id' => 3,
                'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'password' => Hash::make('test-test'),
                'approuved' => true
            ],
            [
                'name' => 'Doe',
                'surname' => 'John',
                'email' => 'z@z',
                'job_id' => '2',
                'role_id' => '2',
                'photo_id' => 4,
                'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'password' => Hash::make('test-test'),
                'approuved' => true
            ],
            [
                'name' => 'Burnham',
                'surname' => 'Michael',
                'email' => 'e@e',
                'job_id' => '3',
                'role_id' => '3',
                'photo_id' => 2,
                'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'password' => Hash::make('test-test'),
                'approuved' => true
            ],
            [
                'name' => 'Haught',
                'surname' => 'Nicole',
                'email' => 'n@n',
                'job_id' => '4',
                'role_id' => '2',
                'photo_id' => 5,
                'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'password' => Hash::make('test-test'),
                'approuved' => true
            ],
            [
                'name' => 'Law',
                'surname' => 'Trafalgar D.',
                'email' => 't@t',
                'job_id' => '4',
                'role_id' => '4',
                'photo_id' => 6,
                'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'password' => Hash::make('test-test'),
                'approuved' => true
            ]
        ]);
    }
}
