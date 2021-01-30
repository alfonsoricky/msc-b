<?php namespace Mscindonesia\Staticpage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMscindonesiaStaticpageDetails3 extends Migration
{
    public function up()
    {
        Schema::table('mscindonesia_staticpage_details', function($table)
        {
            $table->integer('sort_order')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('mscindonesia_staticpage_details', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
