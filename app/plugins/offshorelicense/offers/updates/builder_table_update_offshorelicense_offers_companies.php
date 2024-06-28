<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersCompanies extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_companies', function($table)
        {
            $table->string('slug')->nullable();
            $table->string('logo')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_companies', function($table)
        {
            $table->dropColumn('slug');
            $table->dropColumn('logo');
        });
    }
}
