<?php

use \Model\Category;
use \Model\Product;

class Controller_Top extends Controller{

	// public function before(){
	// 	$_isLogin = Session::get('islogin');
		
	// 	if($_isLogin !== true){
	// 		Response::redirect('login/show_login');
	// 	}
	// }
/////////////////////////////////////////////////////////
	/**
	 *Veiw商品一覧画面表示Controller
	 */
	public function action_top(){
		$category_list = Category::get_category();
		$view = View::forge('top/top');
		$view->set('category_list', $category_list,false);
		$res_product = Product::get_search(Input::post('category'), Input::post('stock'));
		$view -> set('item_list', $res_product, false);
		return $view;
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiw商品詳細画面表示Controller
	 */
	public function action_item(){
		$id = Input::get('id');
		$target = Product::get_item_one($id);
		$view = View::forge('top/item');
		$view->set('target', $target, false);
		return $view;

	}
/////////////////////////////////////////////////////////


}
