<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRefineriawebRwstilhotelAmenities extends Migration
{
    public function up()
    {
        Schema::table('refineriaweb_rwstilhotel_amenities', function($table)
        {
            $table->text('location');
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('refineriaweb_rwstilhotel_amenities', function($table)
        {
            $table->dropColumn('location');
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
        });
    }
}
