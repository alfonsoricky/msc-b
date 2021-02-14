<?php 
use Mscindonesia\Staticpage\Models\Details;
use BenFreke\MenuManager\Models\Menu;
class Cms6024982976697511922591_3b7a7f801abd2184c0f70d3904110b3dClass extends Cms\Classes\PageCode
{
public function onStart() {
		$slug = $this->param('slug');
		$detail = $this->param('detail');
		$query = Details::with('page')->whereHas('page', function($query) use ($slug){
			return $query->transWhere('slug', $slug);
		})->transWhere('slug', $detail)->first();
		

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

	    $find = $query->page->name;
	    $menu = Menu::where('title', 'like', "%$find%")->first();
        
        
		if($slug == 'renungan-harian'){
            $query->page->name = 'doa & renungan harian';
        }

	    $groupOfMenu = array();

	    if(!is_null($menu)){
	      $groupOfMenu = Menu::where('parent_id',$menu->parent_id)->orderBy('nest_left', 'ASC')->get();
	    }


	    $this['menu'] = $menu;

	    $this['groupOfMenu'] = $groupOfMenu;
	}
}
