<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('workshop_id');
            $table->integer('quotas');
            $table->string('title');
            $table->string('title_es');
            $table->float('price', 10, 0);
            $table->float('children_price', 10, 0);
            $table->string('class_lang');
            $table->time('start');
            $table->time('end');
            $table->integer('day_of_week');

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
        Schema::drop('courses');
    }
}
