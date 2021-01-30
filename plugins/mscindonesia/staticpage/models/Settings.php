<?php namespace Mscindonesia\Staticpage\Models;

use October\Rain\Database\Model;

class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'msc_management_settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [

    ];

    public $attachMany = [
        'banners' => 'System\Models\File',
    ];


}
