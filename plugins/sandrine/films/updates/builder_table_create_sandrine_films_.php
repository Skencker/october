<?php namespace Sandrine\Films\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSandrineFilms extends Migration
{
    public function up()
    {
        Schema::create('sandrine_films_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sandrine_films_');
    }
}
