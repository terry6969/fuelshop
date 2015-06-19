<?php

use \Model\Category;
use \Model\Product;

class Controller_Top extends Controller{

// 	public function before(){
// 		$_isLogin = Session::get('islogin');
		
// 		if($_isLogin !== true){
// 			Response::redirect('login');
// 		}
// 	}

// 	/**
// 	 *Veiw商品一覧画面表示Controller
// 	 */

	public function action_show_top(){
		$item_list =Product::get_items();
		$category_list = Category::get_Category();
		$view = View::forge('top/top');
		$view->set('item_list', $item_list, false);
		$view->set('category_list', $category_list,false);
		$res_product = Product::get_product(Input::post('category'), Input::post('stock'));
		$view -> set('product_list', $res_product, false);
		return $view;
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiw商品詳細画面表示Controller
	 */
	public function action_show_item(){
		$id = Input::get('id');
		$target = Product::get_item_one($id);
		if(count($target) == 0){
			Response::redirect('top/top');
		}else{
			$view = View::forge('top/item');
			$view->set('target', $target[0], false);
			return $view;
		}

		// $um =Product::get_items();
		// $view = View::forge('top/item');
		// $view->set('item_list', $um, false);
		// return $view;
		//GETで送られてきたIDを参照して各項目を表示

	}
/////////////////////////////////////////////////////////
	/**
	 *Veiwカート画面表示Controller
	 */
	public function action_show_cart(){
		return View::forge('cart/cart');
	}

/////////////////////////////////////////////////////////
	/**
	 *ログアウトController
	 */
	public function action_logout(){
		Session::delete('session');
		Response::redirect('/login/show_login');
	}
/////////////////////////////////////////////////////////
	/**
	 *カテゴリ検索用Controller
	 */
	public function action_c_search(){
		if ($_POST['stock'] == 's_all'){
			if($_POST['category'] == 'c_all') {
				/*結果１*/Response::redirect('top/show_top');	 		
			}else{
				/*結果2*/echo "ポストのカテゴリをセレクトしてその全てを返す";
			}
		}elseif ($_POST['stock'] == 's_only') {
			if($_POST['category'] == 'c_all') {
				/*結果3*/echo"zaiko_tb.count　!==0 でないものを返す";
			}else{
				/*結果4*/echo "ポストのカテゴリをセレクトかつ、zaiko_tb.count　!==0でないものを返す";
			}
		}	
	}
//////////////////////////////////////////////////////////
	public function action_index(){
		$_category_list = Category::get_category();
		$view = View::forge('top/top');
		$view -> set('category_list', $_category_list, false);


		$res_product = Product::get_product(Input::post('s_category'), Input::post('s_zaiko'));
		$view -> set('product_list', $res_product, false);


		return $view;
	}


}
