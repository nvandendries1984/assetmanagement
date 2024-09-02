<?php namespace NielsVanDenDries\Assetmanagement\Models;

use Model;
use NielsVanDenDries\Assetmanagement\Models\CustomerModel;

class AssetModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sluggable;

    protected $slugs = ['slug' => 'asset_id'];

    protected $dates = ['deleted_at'];

    public $table = 'nielsvandendries_assetmanagement_assets';

    public $rules = [
    ];

    public $hasOne = [
        'customer' => CustomerModel::class
    ];

    public $attachOne = [
        'photo' => [\System\Models\File::class, 'public' => false]
    ];
}