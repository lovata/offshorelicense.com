<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersAccounting2 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_accounting', function($table)
        {
            $table->text('tab_rates');
            $table->text('tab_services');
            $table->text('tab_requirements');
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_accounting', function($table)
        {
            $table->dropColumn('tab_rates');
            $table->dropColumn('tab_services');
            $table->dropColumn('tab_requirements');
        });
    }
}
