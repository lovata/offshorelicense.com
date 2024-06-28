<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseStorageContactform3 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_storage_contactform', function($table)
        {
            $table->string('lastname')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_storage_contactform', function($table)
        {
            $table->string('lastname', 255)->nullable(false)->change();
        });
    }
}
