<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration1011 extends Migration
{
    public function up()
    {
         Schema::create('refineriaweb_rwstilhotel_room_amenity', function($table)
         {
             $table->unsignedInteger('room_id');
             $table->foreign('room_id')
                   ->references('id')
                   ->on('rooms')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
             $table->integer('amenity_id')->unsigned();
             $table->foreign('amenity_id')
                   ->references('id')
                   ->on('amenities')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
             
             $table->primary(['room_id','amenity_id']);
             
         });
        
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::drop('refineriaweb_rwstilhotel_room_amenity');
        Schema::enableForeignKeyConstraints();
    }
}