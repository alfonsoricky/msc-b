<?php 
use BenFreke\MenuManager\Models\Menu;
class Cms6024980e35a49644414513_cf7587f6637b1cb469694814cd79d1c2Class extends Cms\Classes\PartialCode
{
public function onStart() {

    $groupOfMenu = array();


      $groupOfMenu = Menu::where('parent_id',1)->orderBy('nest_left', 'ASC')->get();



    $this['groupOfMenu'] = $groupOfMenu;



  }
}
