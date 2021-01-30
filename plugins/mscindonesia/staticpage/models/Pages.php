<?php namespace Mscindonesia\Staticpage\Models;

use Model;

/**
 * Model
 */
class Pages extends Model
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
    public $table = 'mscindonesia_staticpage_pages';

    /**
     * @var array Validation rules
     */

    public $attachOne = [
        'banner' => 'System\Models\File',
        'file' => 'System\Models\File'
    ];

    public $rules = [
        'name' => 'required',
        'slug' => 'required'
    ];


    public $hasMany = [
        'details' => [
            'Mscindonesia\Staticpage\Models\Details',
            'key' => 'page_id'
        ]
    ];


    public function getPageTypeOptions() {
        return array(
            'default' => 'default',
            'page-no-banner' => 'page-no-banner', 
            'page-banner' => 'page-banner', 
            'page-banner-list-image-no-detail' =>  'page-banner-list-image-no-detail', 
            'page-list-with-detail' => 'page-list-with-detail', 
            'page-video' => 'page-video', 
            'page-list-two-detail' => 'page-list-two-detail', 
            'page-list-three-detail' =>  'page-list-three-detail',
            'page-image-left-side' => 'page-image-left-side', 
            'page-banner-scedule-youtube' =>  'page-banner-scedule-youtube', 
            'page-banner-list-pdf' => 'page-banner-list-pdf', 
            'page-donasi' => 'page-donasi', 
            'page-banner-two-side-readmore' => 'page-banner-two-side-readmore' , 
            'page-detail-in-one-list' => 'page-detail-in-one-list', 
            'page-detail-left-image' => 'page-detail-left-image' , 
            'page-news' => 'page-news', 
            'page-new-with-list' =>'page-new-with-list',
            'page-photo' => 'page-photo' , 
            'page-video-youtube-small' => 'page-video-youtube-small', 
            'page-video-youtube-large' =>  'page-video-youtube-large',
            'page-donasi' => 'page-donasi', 
            'page-contact' => 'page-contact', 
            'page-video-with-banner' => 'page-video-with-banner',
            
        );
    }
}
