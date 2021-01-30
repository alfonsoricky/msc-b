<?php namespace Mscindonesia\Misa\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMscindonesiaMisaJadwal extends Migration
{
    public function up()
    {
        Schema::create('mscindonesia_misa_jadwal', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191)->nullable();
            $table->time('time')->nullable();
            $table->string('youtube', 191)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mscindonesia_misa_jadwal');
    }
}
