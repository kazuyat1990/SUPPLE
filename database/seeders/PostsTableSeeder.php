<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('ja_JP');

        for ($i = 0; $i < 60; $i++) {
            DB::table('posts')->insert([
                'title' => '講習会を開催しました。',
                'content' => $faker->realText(800),
                'image' => 'img/other/_thumb-post 1.jpg' ,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
