<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>'1',
            'name'=>'MD.Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt(value('admin')),

        ]);

        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'MD.author',
            'email'=>'author@gmail.com',
            'password'=>bcrypt(value('author')),

        ]);

        DB::table('users')->insert([
            'role_id'=>'3',
            'name'=>'MD.diller',
            'email'=>'diller@gmail.com',
            'password'=>bcrypt(value('diller')),

        ]);
    }
}
