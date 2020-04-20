<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdresses extends Migration
{
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('neighborhood')->nullable();
            $table->integer('cep')->nullable();
            $table->string('city');
            $table->softDeletes('inactive');
            $table->unsignedBigInteger('uf_id');
            $table->foreign('uf_id')->references('id')->on('uf');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
