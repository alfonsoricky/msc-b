<?php namespace Mscindonesia\Doarenungan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMscindonesiaDoarenunganVideo extends Migration
{
    public function up()
    {
        Schema::create('mscindonesia_doarenungan_video', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('link_youtube', 191);
            $table->string('title', 191);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('sort_id')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mscindonesia_doarenungan_video');
    }
}
