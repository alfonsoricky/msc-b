<?php namespace Mscindonesia\Misa\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMscindonesiaMisaText extends Migration
{
    public function up()
    {
        Schema::create('mscindonesia_misa_text', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191)->nullable();
            $table->date('date')->nullable();
            $table->integer('sort_order')->nullable()->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mscindonesia_misa_text');
    }
}
