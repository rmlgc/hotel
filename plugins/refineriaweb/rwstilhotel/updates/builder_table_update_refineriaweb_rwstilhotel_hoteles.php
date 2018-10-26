<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRefineriawebRwstilhotelHoteles extends Migration
{
    public function up()
    {
        Schema::table('refineriaweb_rwstilhotel_hoteles', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
            $table->string('slug')->change();
            $table->string('email')->change();
        });
    }
    
    public function down()
    {
        Schema::table('refineriaweb_rwstilhotel_hoteles', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
            $table->string('slug', 191)->change();
            $table->string('email', 191)->change();
        });
    }
}
