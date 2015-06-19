<?php

use \Model\User;
use \Model\Category;

class Controller_Cart extends Controller{
/////////////////////////////////////////////////////////
	/**
	 *セッションbefore
	 */	
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
		$res = Category::get_category();
		$view = View::forge('top/top');
		$view -> set('cc', $res, false);
		return $view;
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiwカート画面表示Controller
	 */
	public function action_cart(){
		return View::forge('cart/cart');
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiw購入完了画面表示Controller
	 */
	public function action_comp(){
		return View::forge('cart/comp');
	}
/////////////////////////////////////////////////////////


}
?>