<?php namespace Mscindonesia\Misa\Models;

use Model;

/**
 * Model
 */
class Text extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;


    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mscindonesia_misa_text';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $attachOne = [
        'file' => 'System\Models\File'
    ];
}
