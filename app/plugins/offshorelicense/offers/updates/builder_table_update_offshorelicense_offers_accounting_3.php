<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersAccounting3 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_accounting', function($table)
        {
            $table->text('tab_rates')->nullable()->change();
            $table->text('tab_services')->nullable()->change();
            $table->text('tab_requirements')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_accounting', function($table)
        {
            $table->text('tab_rates')->nullable(false)->change();
            $table->text('tab_services')->nullable(false)->change();
            $table->text('tab_requirements')->nullable(false)->change();
        });
    }
}
