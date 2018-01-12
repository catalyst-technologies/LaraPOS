<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transfer_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->decimal('cost_price', 9, 2)->nullable();
            $table->integer('quantity');
            $table->decimal('total_cost', 9, 2)->nullable();
            $table->integer('branch_id');
            $table->timestamps();

            $table->foreign('transfer_id')->references('id')->on('transfer')->onDelete('restrict');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('restrict');
            #$table->foreign('branch_id')->references('id')->on('branch')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_items');
    }
}
