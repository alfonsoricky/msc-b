<?php namespace Mscindonesia\Spiritualitashati\Models;

use Model;

/**
 * Model
 */
class SpiritualitasHati extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;
     use \October\Rain\Database\Traits\Sortable;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mscindonesia_spiritualitashati_list';

    /**
     * @var array Validation rules
     */


     public $attachOne = [
        'file' => 'System\Models\File'
    ];


    public $rules = [
    ];
}
