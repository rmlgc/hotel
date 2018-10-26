<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRefineriawebRwstilhotelHoteles extends Migration
{
    public function up()
    {
        Schema::create('refineriaweb_rwstilhotel_hoteles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('email')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('refineriaweb_rwstilhotel_hoteles');
    }
}
