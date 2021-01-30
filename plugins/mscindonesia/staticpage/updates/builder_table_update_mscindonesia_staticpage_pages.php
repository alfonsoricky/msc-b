<?php namespace Mscindonesia\Staticpage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMscindonesiaStaticpagePages extends Migration
{
    public function up()
    {
        Schema::table('mscindonesia_staticpage_pages', function($table)
        {
            $table->integer('status')->nullable()->default(0);
            $table->integer('sort_order')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('mscindonesia_staticpage_pages', function($table)
        {
            $table->dropColumn('status');
            $table->dropColumn('sort_order');
        });
    }
}
