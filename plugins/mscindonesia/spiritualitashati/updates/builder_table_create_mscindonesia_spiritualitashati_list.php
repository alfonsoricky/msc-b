<?php namespace Mscindonesia\Spiritualitashati\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMscindonesiaSpiritualitashatiList extends Migration
{
    public function up()
    {
        Schema::create('mscindonesia_spiritualitashati_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191)->nullable();
            $table->string('description', 191)->nullable();
            $table->integer('sort_order')->nullable()->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mscindonesia_spiritualitashati_list');
    }
}
