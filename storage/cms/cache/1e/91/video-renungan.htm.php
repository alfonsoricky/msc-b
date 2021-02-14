<?php 
use Mscindonesia\Doarenungan\Models\Video;
class Cms6024982d2cfbd480027810_2b2c90f9f28db9aa527c75e184106176Class extends Cms\Classes\PartialCode
{
public function onStart(){
    $slug = $this->param('slug');
    $query = Video::orderBy('created_at','desc')->paginate('10');
    
    $this['query'] = $query;
}
}
