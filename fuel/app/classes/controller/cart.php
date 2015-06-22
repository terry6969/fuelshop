<?php

use \Model\User;
use \Model\Category;
use \Model\zaiko;
use \Model\buylog;

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
	 *購入Controller
	 */
	 public function action_sell(){
	 	$total =Input::post('sum');
	 	//$buy_count =Input::post('stock');
	 	$money =session::get('money');
	 	$xx =session::get('cart');
		if ($money <= $total) {
			echo "残高不足です";
		}else{
			$c =count($xx);
			for ($i=0; $i < $c; $i++) { 
			 	$stock = Zaiko::target_zaiko($xx[$i]['i_id']);
				$stock_all =$stock[0]['count'];
				$buy_count = $xx[$i]['i_stock'];
				$res_stock =$stock_all - $buy_count;
				//var_dump($res_stock);
				Zaiko::update_stock($xx[$i]['i_id'],$res_stock);
			 
				Buylog::user_buy($xx[$i]['i_id'],$buy_count,session::get('login'));

				$ss =$money - $total;

				User::after_buy($ss,session::get('login'));
				Response::redirect('cart/comp');

			}
		}
		
	}
/////////////////////////////////////////////////////////
	/**
	 *商品削除Controller
	 */
	public function action_del_item(){
		$del_num =Input::post('del');
		$target =session::get('cart');
		Session::delete('cart.'.$del_num.'');
		Response::redirect('cart/cart');
		
	}
/////////////////////////////////////////////////////////
	/**
	 *購入完了Controller
	 */
	public function action_comp(){
		Session::delete('cart');
		return View::forge('cart/comp');

	}
/////////////////////////////////////////////////////////
/*残り作業
4)残高不足だった時の処理(js？)
6)buylogでのdate関数の追加
*/
}
?>