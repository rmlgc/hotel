<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration109 extends Migration
{
    public function up()
    {
        // Schema::create('refineriaweb_rwstilhotel_table', function($table)
        // {
        // });
         Schema::table('refineriaweb_rwstilhotel_services', function($table)
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
         Schema::table('refineriaweb_rwstilhotel_services', function($table)
        {
             $table->dropColumn('hotel_id');
         });
    }
}