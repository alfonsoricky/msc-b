<?php namespace Mscindonesia\Misa\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Text extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'msc.text' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Mscindonesia.Misa', 'msc.misa', 'msc.misa.text');
    }
}
