<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->String('name')->unique();
            $table->String('description')->nullable();      //->nullable(); significa campo no requerido

        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
