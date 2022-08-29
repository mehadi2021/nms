<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booklists', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->string('category');
            $table->string('writer');
            $table->string('file');
            $table->string('price');
            $table->string('available')->default('yes');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booklists');
    }
}