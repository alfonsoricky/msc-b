<?php namespace Grandfamily\Doctor\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePixelShopItems extends Migration
{
    public function up()
    {
        Schema::table('pixel_shop_items', function($table)
        {
            $table->integer('is_featured')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('pixel_shop_items', function($table)
        {
            $table->dropColumn('is_featured');
        });
    }
}
