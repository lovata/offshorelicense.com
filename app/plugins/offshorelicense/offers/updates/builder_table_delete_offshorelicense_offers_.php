<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteOffshorelicenseOffers extends Migration
{
    public function up()
    {
        Schema::dropIfExists('offshorelicense_offers_');
    }
    
    public function down()
    {
        Schema::create('offshorelicense_offers_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255)->nullable();
            $table->text('info')->nullable();
            $table->text('description')->nullable();
            $table->string('slug', 255)->nullable();
            $table->string('logo', 255)->nullable();
        });
    }
}
