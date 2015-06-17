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
	 *Veiwログイン画面表示Controller(済)
	 */
	public function action_show_login(){
		return View::forge('shop/login');
	}

/////////////////////////////////////////////////////////
	/**
	 *ログイン用Controller(済)
	 */
	public function action_login(){
		$res =User::login_user(Input::post('id'),Input::post('pass'));
		if (count($res) == 0) {
			$e_msg = View::forge('shop/login');
			$e_msg->set('msg', 'ログイン失敗');
			return $e_msg;
		}else{
			Session::set('session',1);
			Response::redirect('shop/show_top');
		}
	}
/////////////////////////////////////////////////////////
}
?>