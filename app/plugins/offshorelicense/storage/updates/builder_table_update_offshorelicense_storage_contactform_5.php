<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseStorageContactform5 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_storage_contactform', function($table)
        {
            $table->string('product_type')->nullable();
            $table->string('product_name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_storage_contactform', function($table)
        {
            $table->dropColumn('product_type');
            $table->dropColumn('product_name');
        });
    }
}
