]3t<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('upc_ean_isbn', 90);
            $table->string('name');
            $table->string('size', 20);
            $table->string('description');
            $table->string('img')->default('no-foto.png');
            #$table->qty('int'); // we'll transfer this to inventory table
            #$table->integer('price');
            $table->decimal('cost_price', 9, 2);
            $table->decimal('selling_price', 9, 2);
            $table->integer('qty');
            $table->date('expiry')->nullable(); //remove nullable on final
            $table->integer('type')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('products');
    }

}
