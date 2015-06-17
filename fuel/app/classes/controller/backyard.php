<?php

use \Model\Category;
use \Model\Product;

class Controller_Backyard extends Controller{

	public function action_category(){
		if(Input::post('cr')){
			Category::category_regist(Input::post('cr'));
		}
		if(Input::post('c_id')){
			Category::delete_category(Input::post('c_id'));
		}
		$res = Category::get_category();
		$view = View::forge('backyard/category_v');
		$view->set('res',$res,false);
		return $view;
	}

	public function action_show_regist_item(){
		$res = Category::get_category();
		$view = View::forge('backyard/item_regist');
		$view->set('res',$res,false);
		return $view;
	}

	public function action_item(){
		$view = View::forge('backyard/item');
		return $view;
	}

	public function action_regist_item(){
		Product::regist_product(Input::post());
	}
}