<?php 
use BenFreke\MenuManager\Models\Menu;use RainLab\Blog\Models\Category;use RainLab\Blog\Models\Post;class Cms60209cab69c18765020382_314f15b7e011366d6115ea68d51545bbClass extends Cms\Classes\PageCode
{


	
	
public function onStart() {
		
		$query = Post::with('categories')->whereHas('categories', function($query) {
			return $query->where('slug', 'msc-tv');
		})->orderBy('published_at', 'desc')->paginate('10');

		$this['query'] = $query;

		$menu = Menu::where('title', 'msc tv')->where('nest_depth', '>', '1')->first();

		$groupOfMenu = array();

		if(!is_null($menu)){
		  $groupOfMenu = Menu::where('parent_id',$menu->parent_id)->orderBy('nest_left', 'ASC')->get();
		}


		$this['menu'] = $menu;

		$this['groupOfMenu'] = $groupOfMenu;
	}
}
