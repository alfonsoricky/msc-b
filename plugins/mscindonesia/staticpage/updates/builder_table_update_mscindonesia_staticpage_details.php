<?php namespace Mscindonesia\Staticpage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMscindonesiaStaticpageDetails extends Migration
{
    public function up()
    {
        Schema::table('mscindonesia_staticpage_details', function($table)
        {
            $table->string('slug', 191)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mscindonesia_staticpage_details', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
