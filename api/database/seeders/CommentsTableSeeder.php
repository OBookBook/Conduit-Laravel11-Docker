<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CommentsTableSeeder extends Seeder
{
    public function run(): void
    {
        Comment::factory(5)->create();
    }
}