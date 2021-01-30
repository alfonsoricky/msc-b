<?php namespace Mscindonesia\Staticpage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMscindonesiaStaticpagePages2 extends Migration
{
    public function up()
    {
        Schema::table('mscindonesia_staticpage_pages', function($table)
        {
            $table->string('page_type', 191)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mscindonesia_staticpage_pages', function($table)
        {
            $table->dropColumn('page_type');
        });
    }
}
