<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Post::firstOrCreate(
                ['title' => 'Как приручить дракона?',
                    'image' => 'uploads/pGJv4C8MoBsBRTUJxYe4eVBDkLsVNwLNmeUzPzrL.jpg',
                    'description' => 'Вы узнаете историю подростка Иккинга, которому не слишком близки традиции его героического племени, много лет ведущего войну с драконами. Мир Иккинга переворачивается с ног на голову, когда он неожиданно встречает дракона Беззубика, который поможет ему и другим викингам увидеть привычный мир с совершенно другой стороны…',
                ]
            );     Post::firstOrCreate(
                ['title' => 'Как достать соседа?',
                    'image' => 'uploads/evX9c9yk5qWwp1qXDnC4JsWsV9pOXb90b5gVh5iX.jpg',
                    'description' => '«Как достать соседа» (англ. Neighbours from Hell) — компьютерная игра-аркада. Главной целью игры является месть соседу. Герою нужно находить предметы и использовать их, чтобы навредить соседу.',
                ]
            );  Post::firstOrCreate(
                ['title' => 'Как стать большим?',
                    'image' => 'uploads/9TZYG3tTnUQUKpMORXcLGD1xXKE6XdLbhpU0K6Nf.webp',
                    'description' => 'Очаровательный котенок очень хочет вырасти, но не знает как. Мультфильм от режиссера «Гадкого утенка»',
                ]
            );
        }

}
