<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersBanks5 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_banks', function($table)
        {
            $table->string('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_banks', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
