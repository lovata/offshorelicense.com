<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersBanks2 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_banks', function($table)
        {
            $table->text('info')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_banks', function($table)
        {
            $table->string('info', 255)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
