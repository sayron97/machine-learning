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
        Schema::create('steps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('step_num')->nullable();
            $table->integer('res_1')->nullable();
            $table->integer('res_2')->nullable();
            $table->integer('res_3')->nullable();
            $table->integer('res_4')->nullable();
            $table->integer('res_5')->nullable();
            $table->integer('res_6')->nullable();
            $table->integer('res_7')->nullable();
            $table->integer('res_8')->nullable();
            $table->integer('res_9')->nullable();
            $table->string('result')->nullable();
            $table->string('first_start');
            $table->rememberToken();
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
        //
    }
}
