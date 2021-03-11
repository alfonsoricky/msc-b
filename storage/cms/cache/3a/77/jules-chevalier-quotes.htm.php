<?php 
use BenFreke\MenuManager\Models\Menu;
use RainLab\Blog\Models\Category;
use RainLab\Blog\Models\Post;
class Cms60499c27e2539272756098_4070512badb773ef6f931aa9d213068fClass extends Cms\Classes\PageCode
{
public function onStart() {
		
		$query = Post::with('categories')->whereHas('categories', function($query) {
			return $query->where('slug', 'jules-chevalier-quotes');
		})->orderBy('published_at', 'desc')->paginate('10');


		$this['query'] = $query;

		$menu = Menu::where('title', 'jules chevalier quotes')->where('nest_depth', '>', '1')->first();

		$groupOfMenu = array();

		if(!is_null($menu)){
		  $groupOfMenu = Menu::where('parent_id',$menu->parent_id)->orderBy('nest_left', 'ASC')->get();
		}

		$this['menu'] = $menu;
		
		$this['groupOfMenu'] = $groupOfMenu;
	}
}
