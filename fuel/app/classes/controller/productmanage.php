<?php

use \Model\Product;
use \Model\Category;

class Controller_Productmanage extends Controller{

	/**
	*トップ画面・表の表示
	*/
	public function action_index(){
		$view = View::forge('productmanage/item');
		$view->set('res',Product::get_product(),false);
		return $view;
	}

	/**
	*登録画面の表示・カテゴリー情報の送信
	*/
	public function action_show_regist_item(){
		$res = Category::get_category();
		$view = View::forge('productmanage/item_regist');
		$view->set('res',$res,false);
		return $view;
	}

	/**
	*登録処理
	*/
	public function action_regist_item(){
		Product::regist_product(Input::post());

		$i = Product::get_product_maxid();
		$i = implode($i['0']);
		Upload::process(
			array(
				'new_name'=>$i,
			)
		);
		if (Upload::is_valid()){
			Upload::save();
		}
		Response::redirect('productmanage/index');
	}

	/**
	*削除処理
	*/
	public function action_delete_item(){
		Product::delete_product(Input::post('i_id'));
		Response::redirect('productmanage/index');
	}

	public function action_show_update_item(){
		$id = Input::get('id');
		if ($id == NULL || $id == ''){
			Response::redirect('productmanage/index');
		}else{
			$target = Product::target_product($id);
			if (count($target) == 0){
				Response::redirect('productmanage/index');
			}else{
				$view = View::forge('productmanage/item_regist');
				$res = Category::get_category();
				$view->set('target',$target['0'],false);
				$view->set('res',$res,false);
				return $view;
			}
		}
	}

	public function action_update_item(){
		Product::update_product(Input::post());
		$id = Input::post('id_h');
		Upload::process(
			array(
				'new_name'=>$id,
			)
		);
		if (Upload::is_valid()){
			Upload::save();
		}
		Response::redirect('productmanage/index');
	}
}