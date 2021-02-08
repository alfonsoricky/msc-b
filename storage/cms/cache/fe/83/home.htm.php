<?php 
use Mscindonesia\Staticpage\Models\Settings;use RainLab\Blog\Models\Category;use RainLab\Blog\Models\Post;use Pixel\Shop\Models\Item;class Cms60209c8d4fcac608047654_f5c26aeb20a1dcb6d993df5db8bf6042Class extends Cms\Classes\PageCode
{

  
  
  
public function onStart() {

		$query = Settings::where('item', 'msc_management_settings')->first();

		$this['banners'] = $query->banners;

		$value = $query->value;

		/*content*/
		
		$this['content'] = array(
			'left' => array(
				'title' => $value['content_left_title'],
				'description' => $value['content_left_description'],
				'link' => $value['content_left_link']
			),
			'center' => array(
				'title' => $value['content_center_title'],
				'description' => $value['content_center_description'],
				'link' => $value['content_center_link']
			),
			'right' => array(
				'title' => $value['content_right_title'],
				'description' => $value['content_right_description'],
				'link' => $value['content_right_link']
			)
		);


    // get category berita dulu   
    $posts = Post::with(['categories'])->whereHas('categories', function($query) {
      return $query->where('slug', 'berita');
    })->where('published',1)->limit('1')->orderBy('published_at', 'desc')->get();

    $this['posts'] = $posts;
    
        // get category berita dulu   
    $msctv = Post::with(['categories'])->whereHas('categories', function($query) {
      return $query->where('slug', 'msc-tv');
    })->where('published',1)->limit('1')->orderBy('published_at', 'desc')->get();

    $this['msctv'] = $msctv;


    //get product
    $products = Item::where(array('is_visible'=>1,'is_featured'=>1))->limit(4)->get();


    $this['products'] = $products;






	}
}
