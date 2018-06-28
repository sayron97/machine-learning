<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Steps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('step_num');
            $table->integer('res_1');
            $table->integer('res_2');
            $table->integer('res_3');
            $table->integer('res_4');
            $table->integer('res_5');
            $table->integer('res_6');
            $table->integer('res_7');
            $table->integer('res_8');
            $table->integer('res_9');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
