<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pos', function (Blueprint $table) {
            $table->id();
            $table->string('name_post');
            $table->string('category');
            $table->integer('id_tags');
            $table->integer('id_author');
            $table->text('img');
            $table->string('id_comments');
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
        Schema::dropIfExists('table_pos');
    }
}
