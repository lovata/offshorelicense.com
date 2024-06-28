<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseStorageContactform2 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_storage_contactform', function($table)
        {
            $table->string('lastname');
            $table->renameColumn('name', 'firstname');
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_storage_contactform', function($table)
        {
            $table->dropColumn('lastname');
            $table->renameColumn('firstname', 'name');
        });
    }
}
