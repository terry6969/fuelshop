<?php

use \Model\Category;

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
		$res = Category::get_category();
		$view = View::forge('shop/top');
		$view -> set('cc', $res, false);
		return $view;
		//return View::forge('shop/top');
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiw商品詳細画面表示Controller
	 */
	public function action_show_item(){
		return View::forge('shop/item');
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiwカート画面表示Controller
	 */
	public function action_show_cart(){
		return View::forge('shop/cart');
	}

/////////////////////////////////////////////////////////
	/**
	 *ログアウトController(済)
	 */
	public function action_logout(){
		Session::delete('session');
		Response::redirect('/shop/show_login');
	}
/////////////////////////////////////////////////////////
	/**
	 *カテゴリ検索用Controller
	 */
	public function action_c_search(){
		
	}
/////////////////////////////////////////////////////////
	/**
	 *一覧表示用Controller
	 */
	static function join_cate_pro(){
		$join = DB::select()->from('category_tb');
		$join->join('product_tb');
	
	}
/////////////////////////////////////////////////////////

}
?>