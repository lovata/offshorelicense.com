<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseStorageRmproducts extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_storage_rmproducts', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->text('meta_keywords')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_storage_rmproducts', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->text('meta_keywords')->nullable(false)->change();
        });
    }
}
