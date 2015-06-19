<?php

use \Model\User;
use \Model\buylog;

class Controller_Usermanage extends Controller{

	public function action_index(){
		$res = User::get_user();
		$view = View::forge('usermanage/user');
		$view->set('res',$res,false);
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

	public function action_user_delete(){
		User::delete_user(Input::post('id_d'));
		Response::redirect('usermanage/index');
	}

	public function action_show_user_update(){
		$id = Input::get('id');
		if ($id == NULL || $id == ''){
			Response::redirect('usermanage/index');
		}else{
			$target = User::target_user($id);
			if (count($target) == 0){
				Response::redirect('usermanage/index');
			}else{
				$view = View::forge('usermanage/user_regist');
				$view->set('target',$target['0'],false);
				return $view;
			}
		}
	}

	public function action_user_update(){
		User::update_user(Input::post());
		Response::redirect('usermanage/index');
	}

	public function action_show_user_log(){
		$view = View::forge('usermanage/shop_log');
		$view->set('res',Buylog::get_log(Input::post('id_log')),false);
		return $view;
	}
}