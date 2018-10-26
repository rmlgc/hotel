<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRefineriawebRwstilhotelAmenities extends Migration
{
    public function up()
    {
        Schema::create('refineriaweb_rwstilhotel_amenities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('refineriaweb_rwstilhotel_amenities');
    }
}
