<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requests')->insert([
            [
                'buyer_id' => 1,
                'seller_id' => 2,
                'status' => 'WAITING_FOR_APPROVAL'
            ]
        ]);
    }
}
