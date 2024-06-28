<?php namespace Offshorelicense\Storage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOffshorelicenseStorageRmproducts extends Migration
{
    public function up()
    {
        Schema::create('offshorelicense_storage_rmproducts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('published')->nullable();
            $table->string('slug')->nullable();
            $table->text('body')->nullable();
            $table->text('excerpt')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->dateTime('published_datetime')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords');
            $table->text('tags')->nullable();
            $table->string('category')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offshorelicense_storage_rmproducts');
    }
}
