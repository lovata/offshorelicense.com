<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersAccounting8 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_accounting', function($table)
        {
            $table->string('tabs_title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_accounting', function($table)
        {
            $table->dropColumn('tabs_title');
        });
    }
}
