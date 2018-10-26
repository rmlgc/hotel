<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRefineriawebRwstilhotelRooms extends Migration
{
    public function up()
    {
        Schema::table('refineriaweb_rwstilhotel_rooms', function($table)
        {
            $table->integer('hotel_id');
        });
    }
    
    public function down()
    {
        Schema::table('refineriaweb_rwstilhotel_rooms', function($table)
        {
            $table->dropColumn('hotel_id');
        });
    }
}
