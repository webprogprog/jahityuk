<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('request_details')->insert([
            [
                'request_id' => 1,
                'item_id' => 1,
                'size' => 'S',
                'color' => 'red',
                'priceSnapshot' => 50000
            ]
        ]);
    }
}
