<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGiftLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GiftLists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('EventID');
            $table->string('Name');
            $table->string('Images');
            $table->string('Description');
            $table->boolean('Available');
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
        Schema::dropIfExists('GiftLists');
    }
}
