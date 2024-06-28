<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseStorageAdditional2 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_storage_additional', function($table)
        {
            $table->string('company')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_storage_additional', function($table)
        {
            $table->dropColumn('company');
        });
    }
}
