<?php

use Illuminate\Support\Str;
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
            [
                'email' => 'munyaaa@gmail.com',
                'password' => bcrypt('munyaaa'),
                'name' => 'munyaaa',
                'store_name' => NULL
            ],
            [
                'email' => 'stanleymarv@gmail.com',
                'password' => bcrypt('stannel'),
                'name' => 'stanley',
                'store_name' => 'bucin',
            ]
        ]);
    }
}
