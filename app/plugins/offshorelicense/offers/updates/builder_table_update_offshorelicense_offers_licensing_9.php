<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersLicensing9 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_licensing', function($table)
        {
            $table->string('tabs_title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_licensing', function($table)
        {
            $table->dropColumn('tabs_title');
        });
    }
}
