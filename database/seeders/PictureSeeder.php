<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->insert([
            [
                'src' => 'default-user.png'
            ],
            [
                'src' => 'team/1.jpg'
            ],
            [
                'src' => 'team/2.jpg'
            ],
            [
                'src' => 'team/3.jpg'
            ],
            [
                'src' => 'team/4.jpg'
            ],
            [
                'src' => 'team/5.jpg'
            ],
        ]);
    }
}
