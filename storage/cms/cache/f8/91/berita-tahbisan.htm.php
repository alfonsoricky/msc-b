<?php 
use BenFreke\MenuManager\Models\Menu;
use RainLab\Blog\Models\Category;
use RainLab\Blog\Models\Post;
class Cms6014f044f04ef517272275_e376342a6320f263606cb8b11f0371c4Class extends Cms\Classes\PageCode
{
public function onStart() {
		
		$query = Post::with('categories')->whereHas('categories', function($query) {
			return $query->where('slug', 'kaul-tahbisan-para-msc');
		})->orderBy('published_at', 'desc')->paginate('10');


		$this['query'] = $query;

		$menu = Menu::where('title', 'kaul - tahbisan para msc')->where('nest_depth', '>', '1')->first();

		$groupOfMenu = array();

		if(!is_null($menu)){
		  $groupOfMenu = Menu::where('parent_id',$menu->parent_id)->orderBy('nest_left', 'ASC')->get();
		}

		$this['menu'] = $menu;
		
		$this['groupOfMenu'] = $groupOfMenu;
	}
}
