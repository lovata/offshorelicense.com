<?php namespace Offshorelicense\Offers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOffshorelicenseOffersFaq extends Migration
{
    public function up()
    {
        Schema::create('offshorelicense_offers_faq', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('body')->nullable();
            $table->integer('order_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offshorelicense_offers_faq');
    }
}
