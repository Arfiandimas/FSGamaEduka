<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); 
            $table->string('pendidikan_terakhir');
            $table->integer('umur');
            $table->text('alamat_lengkap');
            $table->integer('no_telp');
            $table->string('email')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')->references('id')->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
