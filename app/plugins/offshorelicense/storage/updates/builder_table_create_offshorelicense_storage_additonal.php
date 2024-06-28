<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOffshorelicenseStorageAdditonal extends Migration
{
    public function up()
    {
        Schema::create('offshorelicense_storage_additonal', function($table)
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
            $table->string('subject')->nullable();
            $table->string('ip')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offshorelicense_storage_additonal');
    }
}
