<?php namespace Refineriaweb\RwStilhotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRefineriawebRwstilhotelHoteles2 extends Migration
{
    public function up()
    {
        Schema::table('refineriaweb_rwstilhotel_hoteles', function($table)
        {
            $table->text('address')->nullable();
            $table->text('phone')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('refineriaweb_rwstilhotel_hoteles', function($table)
        {
            $table->dropColumn('address');
            $table->dropColumn('phone');
        });
    }
}
