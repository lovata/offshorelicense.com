<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersIntprop6 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_intprop', function($table)
        {
            $table->text('meta_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_intprop', function($table)
        {
            $table->dropColumn('meta_description');
        });
    }
}
