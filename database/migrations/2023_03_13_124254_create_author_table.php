<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->text('img');
            $table->string('bio'); 
            $table->string('tautan_wa');
            $table->string('tautan_ig');
            $table->string('tautan_twitter');
            $table->string('tautan_email');
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
        Schema::dropIfExists('author');
    }
}
