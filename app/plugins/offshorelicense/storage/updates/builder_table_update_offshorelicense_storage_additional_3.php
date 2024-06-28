<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseStorageAdditional3 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_storage_additional', function($table)
        {
            $table->dropColumn('skype');
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_storage_additional', function($table)
        {
            $table->string('skype', 255)->nullable();
        });
    }
}
