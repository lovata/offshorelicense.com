<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersLicensing4 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_licensing', function($table)
        {
            $table->string('logo', 255)->nullable();
            $table->string('license_name', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_licensing', function($table)
        {
            $table->dropColumn('logo');
            $table->string('license_name', 255)->nullable(false)->change();
        });
    }
}
