<?php namespace Mscindonesia\Doarenungan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMscindonesiaDoarenunganDoa extends Migration
{
    public function up()
    {
        Schema::create('mscindonesia_doarenungan_doa', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191)->nullable();
            $table->text('description')->nullable();
            $table->integer('sort_order')->unsigned()->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mscindonesia_doarenungan_doa');
    }
}
