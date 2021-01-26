<?php

use Illuminate\Database\Seeder;
// use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Anwar shah",
            'email' => 'syedanwar016@gmail.com',
            'password' =>"shah",
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('users')->insert([
            'name' => "Anwar",
            'email' => 'syedanwar01@gmail.com',
            'password' =>"shah",
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
