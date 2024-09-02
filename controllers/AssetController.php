<?php namespace NielsVanDenDries\Assetmanagement\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class AssetController extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'Assetmanagement_manager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.Assetmanagement', 'main-menu-item-assetmanagement', 'side-menu-item-assets');
    }

}
