<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersFaq extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_faq', function($table)
        {
            $table->string('group')->nullable();
            $table->integer('reviews')->nullable();
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_faq', function($table)
        {
            $table->dropColumn('group');
            $table->dropColumn('reviews');
            $table->increments('id')->unsigned()->change();
        });
    }
}
