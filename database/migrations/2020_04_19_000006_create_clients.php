<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClients extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('nickname')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('email')->nullable();
            $table->boolean('vip')->default(false);
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->text('obs')->nullable();
            $table->string('photo_location')->nullable();
            $table->double('total_spent');

            $table->string('address')->nullable();
            $table->string('address_number')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->unsignedBigInteger('uf_id')->nullable();
            $table->foreign('uf_id')->references('id')->on('ufs');
            $table->string('cep')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->softDeletes();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
