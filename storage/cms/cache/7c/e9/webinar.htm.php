<?php 
use BenFreke\MenuManager\Models\Menu;
use RainLab\Blog\Models\Category;
use RainLab\Blog\Models\Post;
class Cms6020a170d0800751195698_fb4214712ecdebf94ade6992d76838cfClass extends Cms\Classes\PageCode
{
 

	
		public function onStart() {
		
		$query = Post::with('categories')->whereHas('categories', function($query) {
			return $query->where('slug', 'webinar');
		})->orderBy('published_at', 'desc')->paginate('10');

		$this['query'] = $query;

		$menu = Menu::where('title', 'webinar')->where('nest_depth', '>', '1')->first();

		$groupOfMenu = array();

		if(!is_null($menu)){
		  $groupOfMenu = Menu::where('parent_id',$menu->parent_id)->orderBy('nest_left', 'ASC')->get();
		}


		$this['menu'] = $menu;

		$this['groupOfMenu'] = $groupOfMenu;
	}
}
