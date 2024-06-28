<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersLicensing extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_licensing', function($table)
        {
            $table->string('license_name');
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_licensing', function($table)
        {
            $table->dropColumn('license_name');
        });
    }
}
