<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration1010 extends Migration
{
    public function up()
    {
         Schema::create('refineriaweb_rwstilhotel_hotel_service', function($table)
        {
             $table->integer('hotel_id')->unsigned();
             $table->integer('service_id')->unsigned();
        });
        Schema::table('refineriaweb_rwstilhotel_hotel_service', function($table)
        {
             $table->foreign('hotel_id', 'hotel_id')
                 ->references('id')
                 ->on('refineriaweb_rwstilhotel_hoteles')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');
             $table->foreign('service_id')
                 ->references('id')
                 ->on('refineriaweb_rwstilhotel_services')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');

             $table->primary(['hotel_id','service_id'], 'hotel_service_id');
         });
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::drop('refineriaweb_rwstilhotel_hotel_service');
        Schema::enableForeignKeyConstraints();
    }
}
