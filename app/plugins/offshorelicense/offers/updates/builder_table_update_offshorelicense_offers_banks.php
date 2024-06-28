<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersBanks extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_banks', function($table)
        {
            $table->integer('discount')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_banks', function($table)
        {
            $table->dropColumn('discount');
        });
    }
}
