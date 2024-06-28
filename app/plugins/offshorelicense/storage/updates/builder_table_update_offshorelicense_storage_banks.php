<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseStorageBanks extends Migration
{
    public function up()
    {
        Schema::rename('offshorelicense_storage_applyform', 'offshorelicense_storage_banks');
    }
    
    public function down()
    {
        Schema::rename('offshorelicense_storage_banks', 'offshorelicense_storage_applyform');
    }
}
