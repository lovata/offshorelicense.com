<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOffshorelicenseStorageApplyform extends Migration
{
    public function up()
    {
        Schema::create('offshorelicense_storage_applyform', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('skype')->nullable();
            $table->string('phone')->nullable();
            $table->text('message')->nullable();
            $table->string('can_attend_meeting')->nullable();
            $table->string('require_license')->nullable();
            $table->string('ip')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('page')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offshorelicense_storage_applyform');
    }
}
