<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        [
        	'name' => 'Автор не известен',
        	'email' => 'author_unknown@g.g',
        	'password' => bcrypt(str_random(16)),
        ],
        [
        	'name' => 'Автор',
        	'email' => 'author1@g.g',
        	'password' => bcrypt('123123'),
        ],	
        ];
        DB::table('users')->insert($data);
    }
}
