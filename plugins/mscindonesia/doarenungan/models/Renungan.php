<?php namespace Mscindonesia\Doarenungan\Models;

use Model;

/**
 * Model
 */
class Renungan extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mscindonesia_doarenungan_renungan';

    /**
     * @var array Validation rules
     */


    public $attachOne = [
        'file' => 'System\Models\File'
    ];

    public $rules = [
    ];
}
