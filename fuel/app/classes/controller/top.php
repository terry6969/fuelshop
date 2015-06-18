<?php

use \Model\Category;
use \Model\Product;

class Controller_Top extends Controller{
/////////////////////////////////////////////////////////
	/**
	 *セッションbefore
	 */	
	//public function before(){
		// $session = Session::get('session');
		// $seg =Uri::segment(2);
		// if($session == NULL && strpos($seg, "login") === FALSE){
		// 	Response::redirect('shop/show_login');
		// }elseif($session !== NULL && $seg == 'show_login'){
		// 	Response::redirect('shop/top');
		// }	
	//}
/////////////////////////////////////////////////////////

	/**
	 *Veiw商品一覧画面表示Controller
	 */
	public function action_show_top(){
		$um =Product::join_cate_pro();
		$_category_list = Category::get_Category();
		$view = View::forge('top/top');
		$view->set('item_list', $um, false);
		$view->set('category_list', $_category_list,false);
		return $view;
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiw商品詳細画面表示Controller
	 */
	public function action_show_item(){
		return View::forge('top/item');
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
				$res_1 =Product::join_cate_pro();
				$res_1 =View::forge('top/top');
				$res_1->set('res', $res_1, false);
				return $res_1;
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

}
