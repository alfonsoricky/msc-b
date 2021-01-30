<?php 
use BenFreke\MenuManager\Models\Menu;
class Cms6014e5fa0c890612764987_29c16758111c1aeb0051076cd65ecfb5Class extends Cms\Classes\PartialCode
{
public function onStart() {

    $groupOfMenu = array();


      $groupOfMenu = Menu::where('parent_id',1)->orderBy('nest_left', 'ASC')->get();



    $this['groupOfMenu'] = $groupOfMenu;



  }
}
