<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersBanks4 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_banks', function($table)
        {
            $table->string('disabled')->default('0');
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_banks', function($table)
        {
            $table->dropColumn('disabled');
        });
    }
}
