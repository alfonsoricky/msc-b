<?php 
use BenFreke\MenuManager\Models\Menu;
use RainLab\Blog\Models\Category;
use RainLab\Blog\Models\Post;
class Cms6014ebb6004fa874154310_6feee3c96410b12e9ca5b87a6d067776Class extends Cms\Classes\PageCode
{
public function onStart() {
		$slug = $this->param('slug');

		$query = Post::with('categories')->whereHas('categories', function($query) {
			return $query->where('slug', 'berita');
		})->where('slug', $slug)->orderBy('published_at', 'desc')->first();


		if(is_null($query)){
			return Response::make( View::make( 'cms::404' ), 404 );
		}


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
