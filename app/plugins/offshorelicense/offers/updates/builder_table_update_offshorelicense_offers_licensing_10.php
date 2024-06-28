<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersLicensing10 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_licensing', function($table)
        {
            $table->string('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_licensing', function($table)
        {
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_keywords');
            $table->dropColumn('meta_description');
        });
    }
}
