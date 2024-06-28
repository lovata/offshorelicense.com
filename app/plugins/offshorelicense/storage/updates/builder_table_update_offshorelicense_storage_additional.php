<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseStorageAdditional extends Migration
{
    public function up()
    {
        Schema::rename('offshorelicense_storage_additonal', 'offshorelicense_storage_additional');
    }
    
    public function down()
    {
        Schema::rename('offshorelicense_storage_additional', 'offshorelicense_storage_additonal');
    }
}
