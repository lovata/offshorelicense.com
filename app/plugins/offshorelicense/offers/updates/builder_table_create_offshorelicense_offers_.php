<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOffshorelicenseOffers extends Migration
{
    public function up()
    {
        Schema::create('offshorelicense_offers_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('info')->nullable();
            $table->text('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('logo')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offshorelicense_offers_');
    }
}
