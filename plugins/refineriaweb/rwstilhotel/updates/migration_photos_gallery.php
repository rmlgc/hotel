<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class MigrationPhotosGallery extends Migration
{
    public function up()
    {
        // Schema::create('refineriaweb_rwstilhotel_table', function($table)
        // {
        // });
         Schema::table('refineriaweb_gallery_photos', function($table)
        {
             $table->integer('hotel_id')->unsigned()->nullable();
             $table->foreign('hotel_id')
                 ->references('id')
                 ->on('refineriaweb_rwstilhotel_hoteles')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');
         });
        Schema::table('refineriaweb_gallery_categories', function($table)
        {
             $table->integer('hotel_id')->unsigned()->nullable();
             $table->foreign('hotel_id')
                 ->references('id')
                 ->on('refineriaweb_rwstilhotel_hoteles')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');
         });
        Schema::table('refineriaweb_gallery_images', function($table)
        {
             $table->integer('hotel_id')->unsigned()->nullable();
             $table->foreign('hotel_id')
                 ->references('id')
                 ->on('refineriaweb_rwstilhotel_hoteles')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');
         });
    }

    public function down()
    {
         Schema::table('refineriaweb_gallery_photos', function($table)
        {
             $table->dropColumn('hotel_id');
         });
         Schema::table('refineriaweb_gallery_categories', function($table)
        {
             $table->dropColumn('hotel_id');
         });
         Schema::table('refineriaweb_gallery_images', function($table)
        {
             $table->dropColumn('hotel_id');
         });
    }
}