<?php
// use \Model\Buy_log;
// use \Model\Category;
// use \Model\Product;
use \Model\User;
// use \Model\Zaiko;


class Controller_Shop extends Controller{
/////////////////////////////////////////////////////////
	/**
	 *セッション他Controller
	 */	
	public function before(){
		// $session = Session::get('session');
		// $seg =Uri::segment(2);
		// if($session == NULL && strpos($seg, "login") === FALSE){
		// 	Response::redirect('shop/show_login');
		// }elseif($session !== NULL && $seg == 'show_login'){
		// 	Response::redirect('shop/top');
		// }	
	}
/////////////////////////////////////////////////////////
////////////////////////Veiw/////////////////////////////
	/**
	 *Veiwログイン画面表示Controller(済)
	 */
	public function action_show_login(){
		return View::forge('shop/login');
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiw商品一覧画面表示Controller(済)
	 */
	public function action_show_top(){
		return View::forge('shop/top');
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiw商品詳細画面表示Controller(済)
	 */
	public function action_show_item(){
		return View::forge('shop/item');
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiwカート画面表示Controller(済)
	 */
	public function action_show_cart(){
		return View::forge('shop/cart');
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiw購入完了画面表示Controller(済)
	 */
	public function action_show_comp(){
		return View::forge('shop/comp');
	}
////////////////////////Veiw/////////////////////////////

/////////////////////////////////////////////////////////
	/**
	 *ログイン用Controller
	 */
	public function action_login(){
		// $res =User::login_user(Input::post('id'),Input::post('pass'));
		// if (count($res) == 0) {
		// 	$e_msg = View::forge('shop/login');
		// 	$e_msg->set('msg', 'ログイン失敗');
		// 	return $e_msg;
		// }else{
		// 	Session::set('session',1);
		// 	Response::redirect('shop/index');
		// }
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
	public function action_make_list(){

	}
/////////////////////////////////////////////////////////
	/**
	 *購入用Controller
	 */
	public function action_sell(){

	}
/////////////////////////////////////////////////////////


}
?>