<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnhtintucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anhtintuc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_tintuc');
            $table->string('anh1');
            $table->string('anh2');
            $table->string('anh3');
            $table->string('anh4');
            $table->string('anh5');
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
        Schema::dropIfExists('anhtintuc');
    }
}
