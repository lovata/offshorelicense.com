<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersAccounting5 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_accounting', function($table)
        {
            $table->integer('order_id')->nullable();
            $table->renameColumn('logo1', 'featured');
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_accounting', function($table)
        {
            $table->dropColumn('order_id');
            $table->renameColumn('featured', 'logo1');
        });
    }
}
