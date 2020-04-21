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
            $table->string('address')->nullable();
            $table->string('address_number')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->unsignedBigInteger('uf_id')->nullable();
            $table->foreign('uf_id')->references('id')->on('ufs');
            $table->string('cep')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('email')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('company')->nullable();
            $table->string('ie')->nullable();
            $table->text('obs')->nullable();
            $table->double('spent')->default(0);
            $table->boolean('is_active')->default(true);
            $table->softDeletes('inactive');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
