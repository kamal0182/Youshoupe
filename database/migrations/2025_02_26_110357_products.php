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
        schema::create('products',function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('description');
            $table->double('price');
            $table->string('image');
            $table->integer('admin');
            $table->foreign('admin')->references('id')->on('users');
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
        schema::drop('products');
    }
};
