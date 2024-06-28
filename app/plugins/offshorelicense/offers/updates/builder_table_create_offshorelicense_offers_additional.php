<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOffshorelicenseOffersAdditional extends Migration
{
    public function up()
    {
        Schema::create('offshorelicense_offers_additional', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('body')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offshorelicense_offers_additional');
    }
}
