<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersCompanies4 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_companies', function($table)
        {
            $table->string('checks')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_companies', function($table)
        {
            $table->dropColumn('checks');
        });
    }
}
