<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resources')->insert([
            [
                'icon' => 'flaticon-023-flask',
                'title' => 'Get in the lab',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-011-compass',
                'title' => 'Projects online',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-037-idea',
                'title' => 'SMART MARKETING',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-039-vector',
                'title' => 'Social Media',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-036-brainstorming',
                'title' => 'Brainstorming',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-026-search',
                'title' => 'Documented',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-018-laptop-1',
                'title' => 'Responsive',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-043-sketch',
                'title' => 'Retina ready',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-012-cube',
                'title' => 'Ultra modern',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-003-energy-drink',
                'title' => 'Fast Response',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-002-caliper',
                'title' => 'Quick Learning',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-005-thinking-1',
                'title' => 'Easily find',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-006-prism',
                'title' => 'On Your Own',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-013-puzzle',
                'title' => 'Accountable',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-010-diamond',
                'title' => 'Flashy',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-034-cactus',
                'title' => 'The Grande Cactus',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-036-brainstorming',
                'title' => 'Plus Ultra',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-042-typography',
                'title' => 'Main Title',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon' => 'flaticon-050-satellite',
                'title' => 'Resources',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ]
        ]);
    }
}
