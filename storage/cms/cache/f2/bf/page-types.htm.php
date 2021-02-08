<?php 
use Mscindonesia\Staticpage\Models\Pages;
use BenFreke\MenuManager\Models\Menu;
class Cms60209ca7265ab431671060_7a05b10ce32a45364c635d9f30b9fc24Class extends Cms\Classes\PageCode
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
