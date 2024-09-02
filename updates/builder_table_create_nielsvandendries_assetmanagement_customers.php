<?php namespace NielsVanDenDries\Assetmanagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesAssetmanagementCustomers extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_assetmanagement_customers', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('company_name');
            $table->string('contact_name');
            $table->string('contact_mail');
            $table->string('contact_mobile');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_assetmanagement_customers');
    }
}
