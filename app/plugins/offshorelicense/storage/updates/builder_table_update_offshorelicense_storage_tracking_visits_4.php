<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseStorageTrackingVisits4 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_storage_tracking_visits', function($table)
        {
            $table->string('promo', 50)->change();
            $table->string('kw_ref', 255)->change();
            $table->string('device', 50)->change();
            $table->string('adgroup_id', 50)->change();
            $table->string('adposition', 50)->change();
            $table->string('g_device', 50)->change();
            $table->string('devicemodel', 50)->change();
            $table->string('loc_interest_ms', 50)->change();
            $table->string('loc_physical_ms', 50)->change();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_storage_tracking_visits', function($table)
        {
            $table->string('promo', 20)->change();
            $table->string('kw_ref', 55)->change();
            $table->string('device', 10)->change();
            $table->string('adgroup_id', 10)->change();
            $table->string('adposition', 10)->change();
            $table->string('g_device', 10)->change();
            $table->string('devicemodel', 10)->change();
            $table->string('loc_interest_ms', 10)->change();
            $table->string('loc_physical_ms', 10)->change();
        });
    }
}
