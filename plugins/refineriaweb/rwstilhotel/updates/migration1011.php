<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration1011 extends Migration
{
    public function up()
    {
         Schema::create('refineriaweb_rwstilhotel_room_amenity', function($table)
        {
             $table->integer('room_id')->unsigned();
             $table->integer('amenity_id')->unsigned();
        });
        Schema::table('refineriaweb_rwstilhotel_room_amenity', function($table)
        {
             $table->foreign('room_id')
                 ->references('id')
                 ->on('refineriaweb_rwstilhotel_rooms')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');
             $table->foreign('amenity_id')
                 ->references('id')
                 ->on('refineriaweb_rwstilhotel_amenities')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');

             $table->primary(['room_id','amenity_id'], 'room_amenity_id');
         });
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::drop('refineriaweb_rwstilhotel_');
        Schema::enableForeignKeyConstraints();
    }
}
