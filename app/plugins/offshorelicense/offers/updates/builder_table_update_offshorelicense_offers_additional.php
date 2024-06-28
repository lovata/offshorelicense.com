<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersAdditional extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_additional', function($table)
        {
            $table->integer('order_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_additional', function($table)
        {
            $table->dropColumn('order_id');
        });
    }
}
