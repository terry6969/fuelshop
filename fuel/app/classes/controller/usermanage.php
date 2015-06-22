<?php

use \Model\User;
use \Model\buylog;

class Controller_Usermanage extends Controller{

	/**
	*トップページと一覧の表示
	*/
	public function action_index(){
		$res = User::get_user();
		$view = View::forge('usermanage/user');
		$view->set('res',$res,false);
		return $view;
	}

	/**
	*ユーザー登録画面の表示
	*/
	public function action_show_user_regist(){
		$view = View::forge('usermanage/user_regist');
		return $view;
	}

	/**
	*登録処理
	*/
	public function action_user_regist(){
		User::regist_user(Input::post());
		Response::redirect('usermanage/index');
	}

	/**
	*削除処理
	*/
	public function action_user_delete(){
		User::delete_user(Input::post('id_d'));
		Response::redirect('usermanage/index');
	}

	/**
	*ユーザー更新画面の表示
	*/
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

	/**
	*更新処理
	*/
	public function action_user_update(){
		User::update_user(Input::post());
		Response::redirect('usermanage/index');
	}

	/**
	*購入履歴の表示
	*/
	public function action_show_user_log(){
		Session::set('logid',Input::post('id_log'));
		$view = View::forge('usermanage/shop_log');
		$view->set('res',Buylog::get_log(Input::post('id_log')),false);
		return $view;
		
	}

	/**
	*購入履歴の検索と表示
	*/
	public function action_search_log(){
		$from = Input::post('date_f');
		$to = Input::post('date_t');

		if ($from == NULL || $from == '' and $to == NULL || $to == ''){
			$view = View::forge('usermanage/shop_log');
			$view->set('res',Buylog::get_log(Session::get('logid')),false);
			return $view;
		}else{
			$view = View::forge('usermanage/shop_log');
			$view->set('res',Buylog::fromto_log(Session::get('logid'),$from,$to),false);
			$view->set('from',$from);
			$view->set('to',$to);
			return $view;
		}
	}
}