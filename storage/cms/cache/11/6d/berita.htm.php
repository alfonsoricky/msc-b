<?php 
use BenFreke\MenuManager\Models\Menu;
use RainLab\Blog\Models\Category;
use RainLab\Blog\Models\Post;
class Cms6014eb3752877391246747_d3b74d95a0871eca448abf49d0f6eeeaClass extends Cms\Classes\PageCode
{
public function onStart() {
		
		$query = Post::with('categories')->whereHas('categories', function($query) {
			return $query->where('slug', 'berita');
		})->orderBy('published_at', 'desc')->paginate('10');


		$this['query'] = $query;

		$menu = Menu::where('title', 'berita')->where('nest_depth', '>', '1')->first();

		$groupOfMenu = array();

		if(!is_null($menu)){
		  $groupOfMenu = Menu::where('parent_id',$menu->parent_id)->orderBy('nest_left', 'ASC')->get();
		}

		$this['menu'] = $menu;
		
		$this['groupOfMenu'] = $groupOfMenu;
	}
}
