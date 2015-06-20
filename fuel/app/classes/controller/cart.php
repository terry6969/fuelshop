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
		$id =Session::get('i_id');
		$name =session::get('i_name');
		$price =Session::get('i_price');
		$stock =Session::get('i_stock');
		$view = View::forge('cart/cart');
		$view->set('id', $id, false);
		$view->set('name', $name, false);
		$view->set('price', $price, false);
		$view->set('stock', $stock, false);

		return $view;
	}
/////////////////////////////////////////////////////////
	/**
	 *購入完了Controller
	 */
	 public function action_comp(){
	 	$total =Input::post('total');
	 	$money =session::get('money');
		if ($money <= $total) {
			echo "残高不足です";
		}else{
			
		}
	// 	DBから対象のzaiko減らして
	// 	User_buyに履歴書き込む
	// 	//商品セッション消して
	// 	Session::delete('i_id');
	// 	Session::delete('i_name');
	// 	Session::delete('i_price');
	// 	Session::delete('i_stock');
	// 	//compに飛ぶ
	// 	Response::redirect('cart/comp');
	}
/////////////////////////////////////////////////////////
	/**
	 *商品削除Controller
	 */
	public function action_del_item(){
		Session::delete('i_id');
		Session::delete('i_name');
		Session::delete('i_price');
		Session::delete('i_stock');
		Response::redirect('cart/cart');
	}
/////////////////////////////////////////////////////////

}
?>