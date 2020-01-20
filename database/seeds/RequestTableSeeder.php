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
        /*
            $table->bigIncrements('id');
            $table->bigInteger('buyer_id')->unsigned();
            $table->foreign('buyer_id')->references('id')->on('users');
            $table->bigInteger('seller_id')->unsigned();
            $table->foreign('seller_id')->references('id')->on('users');
            $table->enum('status', array('WAITING_FOR_APPROVAL', 'APPROVED', 'DECILINED', 'WORK_IN_PROGRESS', 'ON SHIPPING', 'DONE'));
            $table->dateTime('approval_at');
            $table->timestamps();
        */
        DB::table('requests')->insert([
            [
                'buyer_id' => 1,
                'seller_id' => 2,
                'status' => 'WAITING_FOR_APPROVAL'
            ]
        ]);
    }
}
