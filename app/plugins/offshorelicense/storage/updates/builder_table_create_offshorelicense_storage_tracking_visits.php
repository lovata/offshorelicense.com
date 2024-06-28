<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOffshorelicenseStorageTrackingVisits extends Migration
{
    public function up()
    {
        Schema::create('offshorelicense_storage_tracking_visits', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->dateTime('datetime')->nullable();
            $table->string('url_ref', 500)->nullable();
            $table->string('url', 500)->nullable();
            $table->string('promo', 20)->nullable();
            $table->string('kw_ref', 55)->nullable();
            $table->string('kw', 255)->nullable();
            $table->string('gclid', 255)->nullable();
            $table->string('result', 255)->nullable();
            $table->string('ip', 255)->nullable();
            $table->string('device', 10)->nullable();
            $table->string('user_agent', 400)->nullable();
            $table->string('pid', 10)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('path', 255)->nullable();
            $table->string('address_id', 10)->nullable();
            $table->string('mt', 10)->nullable();
            $table->string('ad', 10)->nullable();
            $table->string('adgroup_id', 10)->nullable();
            $table->string('adposition', 10)->nullable();
            $table->string('g_device', 10)->nullable();
            $table->string('devicemodel', 10)->nullable();
            $table->string('loc_interest_ms', 10)->nullable();
            $table->string('loc_physical_ms', 10)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offshorelicense_storage_tracking_visits');
    }
}
