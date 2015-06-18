<?php

use \Model\User;

class Controller_Usermanage extends Controller{

	public function action_index(){
		$view = View::forge('usermanage/user');
		return $view;
	}

	public function action_show_user_regist(){
		$view = View::forge('usermanage/user_regist');
		return $view;
	}

	public function action_user_regist(){
		User::regist_user(Input::post());
		Response::redirect('usermanage/index');
	}
}