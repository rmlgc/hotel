<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration108 extends Migration
{
    public function up()
    {
        // Schema::create('refineriaweb_rwstilhotel_table', function($table)
        // {
        // });
         Schema::table('keios_multisite_settings', function($table)
        {
             $table->integer('hotel_id')->unsigned()->nullable();
             $table->foreign('hotel_id')
                 ->references('id')
                 ->on('refineriaweb_rwstilhotel_hoteles')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');
         });
    }

    public function down()
    {
         Schema::table('keios_multisite_settings', function($table)
        {
             $table->dropColumn('hotel_id');
         });
    }
}