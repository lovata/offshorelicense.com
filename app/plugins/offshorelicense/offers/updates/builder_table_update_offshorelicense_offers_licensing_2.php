<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersLicensing2 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_licensing', function($table)
        {
            $table->renameColumn('source', 'type');
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_licensing', function($table)
        {
            $table->renameColumn('type', 'source');
        });
    }
}
