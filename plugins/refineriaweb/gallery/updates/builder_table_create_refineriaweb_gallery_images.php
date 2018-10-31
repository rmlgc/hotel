<?php namespace Refineriaweb\Gallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRefineriawebGalleryImages extends Migration
{
    public function up()
    {
        Schema::create('refineriaweb_gallery_images', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')
                 ->references('id')
                 ->on('refineriaweb_gallery_categories')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('refineriaweb_gallery_images');
        Schema::enableForeignKeyConstraints();
    }
}