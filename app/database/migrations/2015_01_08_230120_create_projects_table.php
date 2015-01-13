<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 255)->default('');
            $table->string('slug', 255)->default('');
            $table->text('summary');
            $table->longText('blocks');
            $table->integer('status')->default('1');
            $table->integer('comment')->default('0');
            $table->integer('sticky')->default('0');

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
        Schema::drop('projects');
    }

}
