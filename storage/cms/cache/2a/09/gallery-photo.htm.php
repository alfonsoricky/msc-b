<?php 
use BenFreke\MenuManager\Models\Menu;
use RainLab\Blog\Models\Category;
use RainLab\Blog\Models\Post;
class Cms6014ecebf31ee312018989_47269f19d529410208736789d452aa3eClass extends Cms\Classes\PageCode
{
public function onStart() {
		
		$query = Post::with('categories')->whereHas('categories', function($query) {
			return $query->where('slug', 'gallery-photo');
		})->orderBy('published_at', 'desc')->paginate('10');


		$this['query'] = $query;

		$menu = Menu::where('title', 'galeri foto')->where('nest_depth', '>', '1')->first();

		$groupOfMenu = array();

		if(!is_null($menu)){
		  $groupOfMenu = Menu::where('parent_id',$menu->parent_id)->orderBy('nest_left', 'ASC')->get();
		}


		$this['menu'] = $menu;

		$this['groupOfMenu'] = $groupOfMenu;
	}
}
