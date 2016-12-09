<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeripheralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peripherals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barcode')->unique();
            $table->string('name');
            $table->integer('type_id')->unsigned()->index()->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->integer('location_id')->unsigned()->index()->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->index()->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('status', ['NG', 'G'])->default('G');
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
        Schema::dropIfExists('peripherals');
    }
}
