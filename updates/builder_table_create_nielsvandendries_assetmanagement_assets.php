<?php namespace NielsVanDenDries\Assetmanagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesAssetmanagementAssets extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_assetmanagement_assets', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('asset_id');
            $table->string('status');
            $table->boolean('enabled');
            $table->integer('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_assetmanagement_assets');
    }
}
