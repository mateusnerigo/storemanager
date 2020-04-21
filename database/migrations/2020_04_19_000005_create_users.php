<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->string('email')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->text('obs')->nullable();
            //$table->timestamp('birthday');
            
            $table->string('address')->nullable();
            $table->string('address_number')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->unsignedBigInteger('uf_id')->nullable();
            $table->foreign('uf_id')->references('id')->on('ufs');
            $table->string('cep')->nullable();
            
            $table->string('photo_location')->nullable();
            $table->boolean('is_admin')->default(true);
            $table->boolean('is_active')->default(true);
            $table->softDeletes('inactive');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
