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
        schema::create('souscategories',function(Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('title');
            $table->uuid('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->uuid('product_id');
            $table->foreign('product_id')->references('id')->on('products');
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
        schema::drop('souscategories');
    }
};
