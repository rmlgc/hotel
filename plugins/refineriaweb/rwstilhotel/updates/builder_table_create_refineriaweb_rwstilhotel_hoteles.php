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
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->text('phone')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('refineriaweb_rwstilhotel_hoteles');
    }
}
