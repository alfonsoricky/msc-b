<?php namespace Mscindonesia\Doarenungan\Models;

use Model;

/**
 * Model
 */
class Doa extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mscindonesia_doarenungan_doa';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $attachOne = [
        'image' => 'System\Models\File'
    ];
}
