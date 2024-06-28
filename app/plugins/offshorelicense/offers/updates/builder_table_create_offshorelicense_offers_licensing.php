<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOffshorelicenseOffersLicensing extends Migration
{
    public function up()
    {
        Schema::create('offshorelicense_offers_licensing', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('info')->nullable();
            $table->text('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('logo')->nullable();
            $table->string('source')->nullable();
            $table->string('region')->nullable();
            $table->text('tab_features')->nullable();
            $table->text('tab_procedure')->nullable();
            $table->text('tab_documents')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offshorelicense_offers_licensing');
    }
}
