<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOffshorelicenseOffersBanks extends Migration
{
    public function up()
    {
        Schema::create('offshorelicense_offers_banks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('info')->nullable();
            $table->text('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('logo')->nullable();
            $table->string('country')->nullable();
            $table->string('type')->nullable();
            $table->integer('price')->nullable();
            $table->text('tab_rates')->nullable();
            $table->text('tab_services')->nullable();
            $table->text('tab_requirements')->nullable();
            $table->string('region')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offshorelicense_offers_banks');
    }
}
