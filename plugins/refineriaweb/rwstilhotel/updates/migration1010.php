<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration1010 extends Migration
{
    public function up()
    {
         Schema::create('refineriaweb_rwstilhotel_hotel_service', function($table)
         {
             $table->unsignedInteger('hotel_id');
             $table->foreign('hotel_id')
                   ->references('id')
                   ->on('hotels')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
             $table->integer('service_id')->unsigned();
             $table->foreign('service_id')
                   ->references('id')
                   ->on('services')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
             
             $table->primary(['hotel_id','service_id']);
             
         });
        
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::drop('refineriaweb_rwstilhotel_hotel_service');
        Schema::enableForeignKeyConstraints();
    }
}