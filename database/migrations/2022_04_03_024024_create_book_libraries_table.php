<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_libraries', function (Blueprint $table) {
            $table->id();

            $table->foreignId('book_id')
                ->constrained('books')
                ->onDelete('cascade');

            $table->foreignId('library_id')
                ->constrained('libraries')
                ->onDelete('cascade');

            // Since this is a string value, I will use string/varchar.
            // I am not using enum or boolean, I think string/varchar is better.
            $table->string('status')->default('in');
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
        Schema::dropIfExists('book_libraries');
    }
}
