<?php

use Illuminate\Database\Seeder;
use App\User;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
         DB::table('posts')->insert([
            'content' => "Anwar shah is learning laravel again he is revising every thing he knew about laravel but now he has forgotten every thing even basics of laravel",
            'user_id' => User::get()->first()->id,
        ]);
        DB::table('posts')->insert([
            'content' => "so Anwar shah is learning laravel again he is revising every thing he knew about laravel but now he has forgotten every thing even basics of laravel",
            'user_id' => User::get()->first()->id,
        ]);
        DB::table('posts')->insert([
            'content' => "so mr Anwar shah is learning laravel again he is revising every thing he knew about laravel but now he has forgotten every thing even basics of laravel",
            'user_id' => User::get()->first()->id,
        ]);        
        DB::table('posts')->insert([
            'content' => "so mr Anwar shah is learning laravel again he is revising every thing he knew about laravel but now he has forgotten every thing even basics of laravel",
            'user_id' => User::get()->last()->id,
        ]);        
        DB::table('posts')->insert([
            'content' => "so mr Anwar shah is learning laravel again he is revising every thing he knew about laravel but now he has forgotten every thing even basics of laravel",
            'user_id' => User::get()->last()->id,
        ]);        
    }
}
