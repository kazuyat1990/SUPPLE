<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('posts')->insert([
                'title' => 'News of ' . Str::random(10),
                'content' => 'This is a sample content for ' . Str::random(10),
                'image' => 'img/other/_thumb-post 1.jpg' ,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
