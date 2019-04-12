<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("id_theloai");
            $table->string('tieude');
            $table->string('tomtat');
            $table->text('noidung');
            $table->string('hinhanh1');
            $table->text('motahinhanh1'); 
            $table->string('hinhanh2');
            $table->text('motahinhanh2');
            $table->string('hinhanh3');
            $table->text('motahinhanh3');
            $table->string('hinhanh4');
            $table->text('motahinhanh4');
            $table->string('hinhanh5');
            $table->text('motahinhanh5');
            $table->string('hinhanh6');
            $table->text('motahinhanh6');
            $table->string('hinhanh7');
            $table->text('motahinhanh7');
            $table->integer('noibat');
            $table->integer('soluotxem');
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
        Schema::dropIfExists('tintuc');
    }
}
