<?php 
use Mscindonesia\Staticpage\Models\Pages;
use BenFreke\MenuManager\Models\Menu;
class Cms6024981edc97b864521130_8194ab052d9332e8d93bf8283509a3c1Class extends Cms\Classes\PageCode
{
public function onStart() {
		$slug = $this->param('slug');

		//cari page di statik page

		$query = Pages::with(['details'])->transWhere('slug', $slug)->where(array('status'=>1))->first();

		if(is_null($query)){
			return Response::make( View::make( 'cms::404' ), 404 );
		}

		$templateDefault = 'page-no-banner';

		$useTemplate = $query->page_type;


		if($query->page_type == 'default' || is_null($query->page_type)){
			$useTemplate = $templateDefault;
		}


		$this['template'] = $useTemplate;

		$this['page'] = $query;

    //find in menu

    $menu = Menu::where('title', 'like', "%$query->name%")->first();

    $groupOfMenu = array();

    if(!is_null($menu)){
      $groupOfMenu = Menu::where('parent_id',$menu->parent_id)->orderBy('nest_left', 'ASC')->get();
    }


    $this['menu'] = $menu;

    $this['groupOfMenu'] = $groupOfMenu;


	}
}
