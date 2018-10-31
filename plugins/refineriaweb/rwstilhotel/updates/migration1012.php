<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration1012 extends Migration
{
    public function up()
    {
        // Schema::create('refineriaweb_rwstilhotel_table', function($table)
        // {
        // });
         Schema::table('refineriaweb_rwstilhotel_services', function($table)
        {
             $table->integer('published')->default(1);

         });
    }

    public function down()
    {
         Schema::table('refineriaweb_rwstilhotel_services', function($table)
        {
             $table->dropColumn('published');
         });
    }
}