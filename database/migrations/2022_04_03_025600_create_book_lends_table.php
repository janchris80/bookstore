<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookLendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_lends', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_lend');
            $table->dateTime('date_to_return');
            $table->timestamps();

            $table->foreignId('book_library_id')
                ->constrained('book_libraries')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_lends');
    }
}
