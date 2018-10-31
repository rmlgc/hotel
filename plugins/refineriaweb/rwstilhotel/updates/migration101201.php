<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration101201 extends Migration
{
    public function up()
    {
        // Schema::create('refineriaweb_rwstilhotel_table', function($table)
        // {
        // });
         Schema::table('refineriaweb_gallery_photos', function($table)
        {
             $table->integer('hotel_published')->default(1);
             $table->integer('stilhotels_published')->default(1);

         });
        Schema::table('refineriaweb_gallery_images', function($table)
        {
             $table->integer('hotel_published')->default(1);
             $table->integer('stilhotels_published')->default(1);

         });
        Schema::table('refineriaweb_gallery_categories', function($table)
        {
             $table->integer('hotel_published')->default(1);
             $table->integer('stilhotels_published')->default(1);

         });
    }

    public function down()
    {
         Schema::table('refineriaweb_gallery_photos', function($table)
        {
             $table->dropColumn('hotel_published');
             $table->dropColumn('stilhotels_published');
         });
        Schema::table('refineriaweb_gallery_images', function($table)
        {
             $table->dropColumn('hotel_published');
             $table->dropColumn('stilhotels_published');
         });
        Schema::table('refineriaweb_gallery_categories', function($table)
        {
             $table->dropColumn('hotel_published');
             $table->dropColumn('stilhotels_published');
         });
    }
}