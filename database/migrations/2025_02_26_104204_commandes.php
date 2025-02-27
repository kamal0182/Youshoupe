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
        schema::create('commandes',function(Blueprint $table)
        {
            $table->uuid('id')->primary();
            $table->string('status');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->uuid('adress_id');
            $table->foreign('adress_id')->references('id')->on('adresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('commandes');
    }
};
