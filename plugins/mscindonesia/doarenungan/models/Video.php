<?php namespace Mscindonesia\Doarenungan\Models;

use Model;

/**
 * Model
 */
class Video extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mscindonesia_doarenungan_video';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
