<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('request_id')->unsigned();
            $table->foreign('request_id')->references('id')->on('requests');
            $table->bigInteger('item_id')->unsigned();
            $table->foreign('item_id')->references('id')->on('items');
            $table->enum('size', array('S', 'M', 'L', 'XL', 'XXL', 'XXXL'));
            $table->string('color');
            $table->double('priceSnapshot', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_details');
    }
}
