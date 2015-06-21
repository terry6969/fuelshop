<?php

use \Model\Category;
use \Model\Product;

class Controller_Top extends Controller{

	public function before(){
		$_isLogin = Session::get('islogin');
		
		if($_isLogin !== true){
			Response::redirect('login');
		}
	}

	/**
	 *Veiw商品一覧画面表示Controller
	 */
	public function action_index(){
		$_category_list = Category::get_category();
		$view = View::forge('top/top');
		$view -> set('category_list', $_category_list, false);


		$res_product = Product::get_product_category_zaiko(Input::post('s_category'), Input::post('s_zaiko'));
		$view -> set('product_list', $res_product, false);


		return $view;
	}

}
?>