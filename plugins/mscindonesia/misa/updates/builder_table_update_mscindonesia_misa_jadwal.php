<?php namespace Mscindonesia\Misa\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMscindonesiaMisaJadwal extends Migration
{
    public function up()
    {
        Schema::table('mscindonesia_misa_jadwal', function($table)
        {
            $table->integer('sort_oder')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('mscindonesia_misa_jadwal', function($table)
        {
            $table->dropColumn('sort_oder');
        });
    }
}
