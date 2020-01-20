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
        /*
            $table->bigIncrements('id');
            $table->bigInteger('request_id')->unsigned();
            $table->foreign('request_id')->references('id')->on('requests');
            $table->bigInteger('item_id')->unsigned();
            $table->foreign('item_id')->references('id')->on('items');
            $table->enum('size', array('S', 'M', 'L', 'XL', 'XXL', 'XXXL'));
            $table->string('color');
            $table->double('priceSnapshot', 10, 2);
            $table->timestamps();
        */
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
