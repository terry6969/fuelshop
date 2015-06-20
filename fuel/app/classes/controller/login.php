<?php

use \Model\User;

class Controller_Login extends Controller{


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
	 *Veiwログイン画面表示Controller
	 */
	public function action_login(){
		$view = View::forge('login/login');
		$view->set_global('islogin_page', true);
		return $view;
	}
/////////////////////////////////////////////////////////
	/**
	 *ログイン用Controller
	 */
	public function action_login_check(){
		$res = User::login_user(Input::post('id'),Input::post('pass'));
		if (count($res) == 0) {
			$view = View::forge('login/login');
			$view->set('msg', 'ログイン失敗');
			return $view;
		}else{
			//$this->action_top();
			Session::set('login',$res[0]['id']);
			Session::set('name',$res[0]['name']);
			Session::set('money',$res[0]['money']);
			Response::redirect('top/top');
		}
	}
/////////////////////////////////////////////////////////
	/**
	 *ログアウト用Controller
	 */
	public function action_logout(){
		Session::delete('login');
		Session::delete('name');
		Session::delete('money');
		Response::redirect('login/login');
	}
}
?>