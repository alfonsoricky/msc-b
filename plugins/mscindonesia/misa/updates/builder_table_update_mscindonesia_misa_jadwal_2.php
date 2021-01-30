<?php namespace Mscindonesia\Misa\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMscindonesiaMisaJadwal2 extends Migration
{
    public function up()
    {
        Schema::table('mscindonesia_misa_jadwal', function($table)
        {
            $table->date('date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mscindonesia_misa_jadwal', function($table)
        {
            $table->dropColumn('date');
        });
    }
}
