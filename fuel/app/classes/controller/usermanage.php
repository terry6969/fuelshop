<?php

use \Model\User;
use \Model\Buylog;

class Controller_Usermanage extends Controller{

	public function action_index(){

		$res = User::get_user();

		$view = View::forge('usermanage/usermanage_index_view');
		$view->set('user_list',$res,false);
		
		return $view;
	}

	public function action_regist_user_view(){
		return View::forge('usermanage/usermanage_regist_view');
	}

	public function action_regist_user(){
		$post = Input::post();
		User::regist_user($post);
		Response::redirect('usermanage');

	}

	public function action_update_user_view(){
		$_target = User::get_user_by_id(Input::get('id'));
		if(count($_target) == 0){
			Response::redirect('usermanage');
		}else{

			$view = View::forge('usermanage/usermanage_regist_view');
			$view->set('target',$_target[0],false);
			return $view;
		}
		
	}

	public function action_update_user(){

		$post = Input::post();
		User::update_user($post);
		Response::redirect('usermanage');
	}

	public function action_delete_user(){
		User::delete_user(Input::post('id'));
		Response::redirect('usermanage');
	}

	public function action_user_log(){
		$res = Buylog::get_buy_log_by_user_id(Input::get('user_id'));

		$view = View::forge('usermanage/usermanage_log_view');
		$view->set('log_list',$res,false);
		
		return $view;
	}

	public function after($response){
		$response->set_global('title', 'ユーザー管理');
		$response->set_global('category_class', '');
		$response->set_global('product_class', '');
		$response->set_global('zaiko_class', '');
		$response->set_global('user_class', 'class=active');
		return parent::after($response);
	}
}