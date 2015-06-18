<?php

use \Model\User;

class Controller_Login extends Controller{



	/**
	 *Veiwログイン画面表示Controller
	 */
	public function action_index(){
		$view = View::forge('login/login');
		$view->set_global('islogin_page', true);
		return $view;
	}

	/**
	 *ログイン用Controller
	 */
	public function action_login(){
		$res = User::login_user(Input::post('id'),Input::post('pass'));
		if (count($res) == 0) {
			echo 'ng';

			$view = View::forge('login/login');
			$view->set('msg', 'ログイン失敗です');
			return $view;
		}else{
			echo 'ok';
			$this->action_index();
			Session::set('islogin',true);
			Session::set('user_name',$res[0]['name']);
			Session::set('user_money',$res[0]['money']);
			Response::redirect('top');
		}
	}

	/**
	 *ログアウト用Controller
	 */
	public function action_logout(){
		Session::delete('islogin');
		Session::delete('user_name');
		Session::delete('user_money');
		Response::redirect('login');
	}
}
?>