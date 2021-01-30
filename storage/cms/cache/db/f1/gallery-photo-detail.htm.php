<?php 
use BenFreke\MenuManager\Models\Menu;
use RainLab\Blog\Models\Category;
use RainLab\Blog\Models\Post;
class Cms6014ecf0bd028892143609_e4c57caab5ad10952823d0a7313d4ba7Class extends Cms\Classes\PageCode
{
public function onStart() {
		$slug = $this->param('slug');

		$query = Post::with('categories')->whereHas('categories', function($query) {
			return $query->where('slug', 'gallery-photo');
		})->where('slug', $slug)->orderBy('published_at', 'desc')->first();

		if(is_null($query)){
			return Response::make( View::make( 'cms::404' ), 404 );
		}

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
