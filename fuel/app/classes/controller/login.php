<?php

use \Model\User;

class Controller_Login extends Controller{
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
	 *Veiwログイン画面表示Controller
	 */
	public function action_show_login(){
		return View::forge('login/login');
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiw商品一覧画面表示Controller
	 */
	public function action_show_top(){
		$res = Category::get_category();
		$view = View::forge('top/top');
		$view -> set('cc', $res, false);
		return $view;
		//return View::forge('shop/top');
	}
/////////////////////////////////////////////////////////

	/**
	 *ログイン用Controller
	 */
	public function action_login(){
		$res =User::login_user(Input::post('id'),Input::post('pass'));
		if (count($res) == 0) {
			$e_msg = View::forge('login/login');
			$e_msg->set('msg', 'ログイン失敗');
			return $e_msg;
		}else{
			Session::set('session',1);
			Response::redirect('top/show_top');
		}
	}
/////////////////////////////////////////////////////////
}
?>