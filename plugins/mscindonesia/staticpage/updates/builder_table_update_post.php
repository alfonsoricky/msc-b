<?php namespace Mscindonesia\Staticpage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePost extends Migration
{
    public function up()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->string('youtube', 191)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->dropColumn('youtube');
        });
    }
}
