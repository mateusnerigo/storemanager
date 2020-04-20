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
            $table->integer('phone1')->nullable();
            $table->integer('phone2')->nullable();
            $table->string('email')->nullable();
            $table->boolean('vip')->default(false);
            $table->integer('rg')->nullable();
            $table->integer('cpf')->nullable();
            $table->text('obs')->nullable();
            $table->string('photo_location')->nullable();
            $table->double('total_spent');

            $table->unsignedBigInteger('adress_id')->nullable();
            $table->foreign('adress_id')->references('id')->on('adresses');
            $table->integer('adress_number');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->boolean('is_active')->default(true);
            $table->softDeletes('inactive');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
