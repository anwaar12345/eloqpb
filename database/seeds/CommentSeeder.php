<?php

use Illuminate\Database\Seeder;
use App\User;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'comment' => "Anwar shah is learning laravel",
            'post_id' => 1,
            'uid' => User::get()->last()->id,
        ]);
        DB::table('comments')->insert([
            'comment' => "so Anwar shah is learning laravel again he is revising every thing he knew about laravel but now he has forgotten every thing",
            'post_id' => 1,
            'uid' => User::get()->last()->id,
        ]);
        DB::table('comments')->insert([
            'comment' => "so mr Anwar shah is learning laravel again he is revising every thing he knew about laravel but now",
            'post_id' => 2,
            'uid' => User::get()->last()->id,
        ]);        
        DB::table('comments')->insert([
            'comment' => "so mr Anwar shah is learning laravel again he is revising every thing he knew about laravel but now he has forgotten every thing even basics of laravel",
            'post_id' => 1,
            'uid' => User::get()->last()->id,
        ]);        
        DB::table('comments')->insert([
            'comment' => "so mr Anwar shah is learning laravel again he is revising every thing he knew about laravel but now he has forgotten every thing even basics of laravel",
            'post_id' => 3,
            'uid' => User::get()->first()->id,
        ]);
    }
}
