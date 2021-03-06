<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('items', function(Blueprint $table) {
            $table->increments('id');
            $table->string('upc_ean_isbn', 90)->unique();
            $table->string('item_name', 90)->unique();
            $table->string('size', 20);
            $table->text('description')->nullable();
            $table->string('avatar', 255)->default('no-foto.png');
            $table->decimal('cost_price', 9, 2);
            $table->decimal('selling_price', 9, 2);
            #$table->integer('quantity');
            $table->date('expiry')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('items');
    }

}
