<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUfs extends Migration
{
    public function up()
    {
        Schema::create('ufs', function (Blueprint $table) {
            $table->id();
            $table->string('initials');
            $table->string('name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ufs');
    }
}
