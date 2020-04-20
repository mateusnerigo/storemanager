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
            $table->integer('phone1')->nullable();
            $table->integer('phone2')->nullable();
            $table->integer('rg')->nullable();
            $table->integer('cpf')->nullable();
            $table->text('obs')->nullable();
            //$table->timestamp('birthday');
            
            $table->unsignedBigInteger('adress_id')->nullable();
            $table->foreign('adress_id')->references('id')->on('adresses');
            $table->integer('adress_number')->default(0);
            
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
