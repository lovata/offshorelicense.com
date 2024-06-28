<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseStorageTrackingVisits extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_storage_tracking_visits', function($table)
        {
            $table->string('detected_device')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_storage_tracking_visits', function($table)
        {
            $table->dropColumn('detected_device');
        });
    }
}
