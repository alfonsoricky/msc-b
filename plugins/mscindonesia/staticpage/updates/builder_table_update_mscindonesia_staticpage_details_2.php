<?php namespace Mscindonesia\Staticpage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMscindonesiaStaticpageDetails2 extends Migration
{
    public function up()
    {
        Schema::table('mscindonesia_staticpage_details', function($table)
        {
            $table->text('abstract')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mscindonesia_staticpage_details', function($table)
        {
            $table->dropColumn('abstract');
        });
    }
}
