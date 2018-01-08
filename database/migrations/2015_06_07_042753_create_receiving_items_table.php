<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceivingItemsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('receiving_items', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('receiving_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->decimal('cost_price', 9, 2);
            $table->integer('quantity');
            $table->decimal('total_cost', 9, 2);
            $table->integer('branch_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('receiving_id')->references('id')->on('receivings')->onDelete('restrict');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('receiving_items');
    }

}
