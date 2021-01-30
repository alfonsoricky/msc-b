<?php namespace Mscindonesia\Staticpage\Models;

use Model;

/**
 * Model
 */
class Details extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;


    protected $dates = ['deleted_at'];



    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name', ['slug', 'index' => true], 'content', 'abstract'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mscindonesia_staticpage_details';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required'
    ];


    public $attachOne = [
        'image' => 'System\Models\File',
        'banner' => 'System\Models\File',
        'file' => 'System\Models\File'
    ];

    public $belongsTo = [
        'page' => [
            '\Mscindonesia\Staticpage\Models\Pages',
            'key' => 'page_id'
        ]  
    ];

    public $hasMany = [
        'details' => [
            'Mscindonesia\Staticpage\Models\Details',
            'key' => 'page_id'
        ]
    ];

    public function getPageTypeOptions() {
        return array(
            'page-no-banner' => 'page-no-banner', 
            'page-banner' => 'page-banner', 
            'page-banner-list-image-no-detail' =>  'page-banner-list-image-no-detail', 
            'page-list-with-detail' => 'page-list-with-detail', 
            'page-video' => 'page-video', 
            'page-list-two-detail' => 'page-list-two-detail', 
            'page-list-three-detail' =>  'page-list-three-detail',
            'page-image-left-side' => 'page-image-left-side', 
            'page-donasi' => 'page-donasi', 
            'page-banner-two-side-readmore' => 'page-banner-two-side-readmore' , 
            'page-detail-left-image' => 'page-detail-left-image' , 
            'page-photo' => 'page-photo' , 
            'page-misa-jadwal' => 'page-misa-jadwal', 
            'page-misa-text' => 'page-misa-text',
            'page-spiritualitas-hati' => 'page-spiritualitas-hati',
            'page-doa' => 'page-doa',
            'page-renungan' => 'page-renungan',
            'page-renungan-menu' => 'page-renungan-menu',
            'video-renungan' => 'video-renungan', 
        );
    }

}
