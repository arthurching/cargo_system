<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity')->default(1);
            $table->integer('item_length')->default(1);
            $table->integer('item_width')->default(1);
            $table->integer('item_height')->default(1);
            $table->integer('cbm');
            $table->integer('item_value')->nullable();
            $table->string('deliver_address');
            $table->string('expect_arrive_day');
            $table->string('status');
            $table->string('img')->nullable();
            $table->string('memo')->nullable();
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
        Schema::dropIfExists('items');
    }
}
