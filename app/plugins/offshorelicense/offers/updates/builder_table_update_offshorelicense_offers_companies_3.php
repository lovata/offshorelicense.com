<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOffshorelicenseOffersCompanies3 extends Migration
{
    public function up()
    {
        Schema::table('offshorelicense_offers_companies', function($table)
        {
            $table->text('company_incorporation')->nullable();
            $table->text('apostilled_documents')->nullable();
            $table->text('nominee_director_and_shareholder')->nullable();
            $table->text('tab_company')->nullable();
            $table->text('tab_services')->nullable();
            $table->text('tab_requirements')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offshorelicense_offers_companies', function($table)
        {
            $table->dropColumn('company_incorporation');
            $table->dropColumn('apostilled_documents');
            $table->dropColumn('nominee_director_and_shareholder');
            $table->dropColumn('tab_company');
            $table->dropColumn('tab_services');
            $table->dropColumn('tab_requirements');
        });
    }
}
