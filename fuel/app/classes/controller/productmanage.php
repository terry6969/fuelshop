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
}