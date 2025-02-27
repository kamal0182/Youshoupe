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
        schema::create('commandeitems',function(Blueprint $table){
            $table->uuid('id')->primary();
            $table->integer('quantity');
            $table->float('priceintime');
            $table->uuid('commande_id');
            $table->foreign('commande_id')->references('id')->on('commandes');
            $table->uuid('product_id');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('commandeitems');

    }
};
