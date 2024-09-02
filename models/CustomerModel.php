<?php namespace NielsVanDenDries\Assetmanagement\Models;

use Model;

/**
 * Model
 */
class CustomerModel extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'nielsvandendries_assetmanagement_customers';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
