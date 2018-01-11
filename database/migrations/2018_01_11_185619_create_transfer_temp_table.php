<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_temp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->decimal('cost_price', 9, 2);
            $table->integer('quantity');
            $table->decimal('total_cost', 9, 2);
            $table->integer('branch_id')->unsigned();
            $table->timestamps();

            $table->foreign('item_id')->references('id')->on('items')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_temp');
    }
}
