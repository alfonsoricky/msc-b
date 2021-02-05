<?php namespace Mscindonesia\Staticpage;

use System\Classes\PluginBase;
use Event;
use RainLab\Blog\Models\Post;

class Plugin extends PluginBase
{

    public $require = ['RainLab.Blog'];
    public function registerComponents()
    {

    }
    public function registerSettings()
    {
        return [
            'blog' => [
                'label' => 'Management MSC Homepage',
                'description' => 'For management MSC Homepage Content',
                'category' => 'Management MSC Homepage',
                'icon' => 'icon-pencil',
                'class' => 'Mscindonesia\Staticpage\Models\Settings',
                'order' => 500,
                'keywords' => 'management msc homepage',
                'permissions' => ['msc.manage']
            ]
        ];
    }


    public function boot()
    {  

        // Extending a backend form
        Event::listen('backend.form.extendFields', function($widget) {
             // Only for the User controller
            if (!$widget->getController() instanceof \RainLab\Blog\Controllers\Posts) {
                return;
            }

            // Only for the User model
            if (!$widget->model instanceof \RainLab\Blog\Models\Post) {
                return;
            }



            $widget->addFields([

                'youtube' => [
                    'label' => 'Youtube',
                    'span' => 'auto',
                    'type' => 'text',
                    'comment' => 'Only ID of youtube',
                    'tab' => 'rainlab.blog::lang.post.tab_manage'
                ],
                'location' => [
                    'label' => 'location',
                    'span' => 'auto',
                    'type' => 'text',
                    'comment' => 'Insert Location',
                    'tab' => 'rainlab.blog::lang.post.tab_manage'
                ],
                'banner' => [
                    'label' => 'Banner',
                    'mode'  => 'image',
                    'type'  => 'fileupload',
                    'imageWidth' => 260,
                    'tab' => 'rainlab.blog::lang.post.tab_manage'
                ],

                'galleries' => [
                    'label' => 'Galleries',
                    'mode'  => 'image',
                    'type'  => 'fileupload',
                    'imageWidth' => 260,
                    'tab' => 'rainlab.blog::lang.post.tab_manage'
                ]

            ], 'secondary');



        });

        Post::extend(function($model) {            

            $model->attachOne = [
                'banner' => \System\Models\File::class
            ];

            $model->attachMany['galleries'] = array(\System\Models\File::class);

        });

    }  

}
