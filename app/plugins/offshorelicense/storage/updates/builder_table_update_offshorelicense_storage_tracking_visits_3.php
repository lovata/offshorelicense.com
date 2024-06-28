<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseStorageTrackingVisits3 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_storage_tracking_visits', function($table)
        {
            $table->string('pid', 255)->change();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_storage_tracking_visits', function($table)
        {
            $table->string('pid', 10)->change();
        });
    }
}
