<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersCompanies5 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_companies', function($table)
        {
            $table->integer('bronze_price')->nullable();
            $table->integer('bronze_discount')->nullable();
            $table->integer('silver_price')->nullable();
            $table->integer('silver_discount')->nullable();
            $table->integer('gold_price')->nullable();
            $table->integer('gold_discount')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_companies', function($table)
        {
            $table->dropColumn('bronze_price');
            $table->dropColumn('bronze_discount');
            $table->dropColumn('silver_price');
            $table->dropColumn('silver_discount');
            $table->dropColumn('gold_price');
            $table->dropColumn('gold_discount');
        });
    }
}
