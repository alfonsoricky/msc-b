<?php 
use BenFreke\MenuManager\Models\Menu;class Cms60209c62bc116638742655_f88021a75c48a17aba04dbf2e4a0d145Class extends Cms\Classes\PartialCode
{

public function onStart() {

    $groupOfMenu = array();


      $groupOfMenu = Menu::where('parent_id',1)->orderBy('nest_left', 'ASC')->get();



    $this['groupOfMenu'] = $groupOfMenu;



  }
}
