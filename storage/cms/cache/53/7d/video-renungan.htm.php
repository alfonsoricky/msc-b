<?php 
use Mscindonesia\Doarenungan\Models\Video;class Cms6020a1888db7b149305504_5a44136dcb64c20a19264d89a6bc5755Class extends Cms\Classes\PartialCode
{

public function onStart(){
    $slug = $this->param('slug');
    $query = Video::orderBy('created_at','desc')->paginate('10');
    
    $this['query'] = $query;
}
}
