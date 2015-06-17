<?php

use \Model\Product;

class Controller_Backyard extends Controller{

	// public function action_show_regist_item(){
	// 	$res = Category::get_category();
	// 	$view = View::forge('backyard/item_regist');
	// 	$view->set('res',$res,false);
	// 	return $view;
	// }

	public function action_item(){
		$view = View::forge('product_manage/item');
		return $view;
	}

	public function action_regist_item(){
		Product::regist_product(Input::post());
	}
}