<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersCompanies6 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_companies', function($table)
        {
            $table->string('featured')->nullable();
            $table->integer('featured_order_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_companies', function($table)
        {
            $table->dropColumn('featured');
            $table->dropColumn('featured_order_id');
        });
    }
}
