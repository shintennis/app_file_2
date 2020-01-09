<?php

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
        DB::table('posts')->insert([
            'content' => 'テキスト1'
        ]);
        DB::table('posts')->insert([
            'content' => 'テキスト2'
        ]);
        DB::table('posts')->insert([
            'content' => 'テキスト3'
        ]);
    }
}
