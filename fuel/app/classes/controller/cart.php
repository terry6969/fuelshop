<?php

use \Model\User;
use \Model\Category;
use \Model\Hinan;

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
	 	$total =Input::post('total');
	 	$buy_count =Input::post('stock');
	 	$money =session::get('money');
		if ($money <= $total) {
			echo "残高不足です";
		}else{
		$stock = Hinan::zaiko_target_zaiko(Input::post('id'));
		foreach ($stock as $val) {
			$stock_all =$val['count'];
			$res_stock =$stock_all - $buy_count;
			Hinan::zaiko_delete_stock(Input::post('id'),$res_stock);
		}
			Hinan::buylog_user_buy(Input::post('id'),Input::post('stock'),session::get('login'));
			Response::redirect('cart/comp');
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
		//unset($target[$del_num]);
		//session::set('cart',$test)
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
1)商品の削除ボタン
2)検索結果のデフォルト(答えあり)
4)残高不足だった時の処理(js？)
5)見た目の改善
6)buylogでのdate関数の追加
*/


}
?>