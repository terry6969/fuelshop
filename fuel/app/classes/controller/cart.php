<?php

use \Model\User;
use \Model\Category;

class Controller_Cart extends Controller{
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
	 *Veiw購入完了画面表示Controller
	 */
	public function action_show_comp(){
		return View::forge('shop/comp');
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
	 *購入用Controller
	 */
	public function action_sell(){
		Response::redirect('/shop/show_comp');
	}
/////////////////////////////////////////////////////////


}
?>