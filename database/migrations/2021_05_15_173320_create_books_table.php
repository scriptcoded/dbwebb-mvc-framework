<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            // Although books don't really need timestamps, it's nice to keep
            // track of creates and updates for debugging purposes.
            $table->timestamps();

            $table->string('isbn');
            $table->string('title');
            $table->string('author');
            $table->string('cover_image');

            $table->primary('isbn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
