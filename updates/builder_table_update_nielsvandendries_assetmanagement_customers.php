<?php namespace NielsVanDenDries\Assetmanagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesAssetmanagementCustomers extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_assetmanagement_customers', function($table)
        {
            $table->integer('asset_model_id');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_assetmanagement_customers', function($table)
        {
            $table->dropColumn('asset_model_id');
        });
    }
}
