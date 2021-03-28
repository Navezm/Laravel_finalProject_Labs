<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workers')->insert([
            [
                'name' => 'Williams',
                'surname' => 'Christinne',
                'email' => 'a@a',
                'job_id' => '1',
                'role_id' => '1',
                'photo_id' => '',
                'description' => '',
            ],
        ]);
    }
}
