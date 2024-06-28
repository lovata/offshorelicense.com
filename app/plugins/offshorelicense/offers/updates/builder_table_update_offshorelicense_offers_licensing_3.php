<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersLicensing3 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_licensing', function($table)
        {
            $table->renameColumn('logo', 'logo1');
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_licensing', function($table)
        {
            $table->renameColumn('logo1', 'logo');
        });
    }
}
