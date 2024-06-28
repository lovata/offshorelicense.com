<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseStorageContactform7 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_storage_contactform', function($table)
        {
            $table->string('email_subscribtion', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_storage_contactform', function($table)
        {
            $table->dropColumn('email_subscribtion');
        });
    }
}
