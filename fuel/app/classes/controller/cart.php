<?php

use \Model\User;
use \Model\Category;

class Controller_Cart extends Controller{
/////////////////////////////////////////////////////////
	/**
	 *セッションチェックbefore
	 */	
	public function before(){
		$login = Session::get('login');
		$seg =Uri::segment(2);
		if($login == NULL && strpos($seg, "login") === FALSE){
			Response::redirect('login/login');
		}elseif($login !== NULL && $seg == 'login'){
			Response::redirect('top/top');
		}
		
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