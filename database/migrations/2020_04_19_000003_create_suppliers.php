<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliers extends Migration
{
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('adress')->nullable();
            $table->integer('number')->nullable();
            $table->integer('cep')->nullable();
            $table->integer('phone1')->nullable();
            $table->integer('phone2')->nullable();
            $table->string('email')->nullable();
            $table->integer('cnpj')->nullable();
            $table->string('company')->nullable();
            $table->integer('ie')->nullable();
            $table->text('obs')->nullable();
            $table->double('spent')->default(0);
            $table->boolean('is_active')->default(true);
            $table->softDeletes('inactive');
            
            $table->unsignedBigInteger('uf_id');
            $table->foreign('uf_id')->references('id')->on('uf');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
