<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('User_id'); 
            $table->unsignedBigInteger('borrow_book');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('registers')->onDelete('cascade');
            $table->foreign('borrow_book')->references('id')->on('add_books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrows');
    }
};
