<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('branch_id');
            $table->integer('user_id')->unsigned();
            $table->string('payment_type', 15)->nullable();
            $table->string('comments', 255)->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('transfer');
    }
}
