<?php namespace Mscindonesia\Misa\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMscindonesiaMisaJadwal3 extends Migration
{
    public function up()
    {
        Schema::table('mscindonesia_misa_jadwal', function($table)
        {
            $table->renameColumn('sort_oder', 'sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('mscindonesia_misa_jadwal', function($table)
        {
            $table->renameColumn('sort_order', 'sort_oder');
        });
    }
}
