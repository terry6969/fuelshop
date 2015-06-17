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
		$view = View::forge('top/top');
		$view -> set('cc', $res, false);
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
	 *Veiw購入完了画面表示Controller
	 */
	public function action_show_comp(){
		return View::forge('cart/comp');
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
	 *購入用Controller
	 */
	public function action_sell(){
		Response::redirect('/cart/show_comp');
	}
/////////////////////////////////////////////////////////


}
?>