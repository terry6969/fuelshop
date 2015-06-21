<?php

use \Model\Category;

class Controller_Categorymanage extends Controller{

	public function action_index(){
		if(Input::post('category_name') !== null){
			Category::category_regist(Input::post('category_name'));
		}
		if(Input::post('delete_btn')){
			Category::delete_category(Input::post('category_id'));
		}
		$res = Category::get_category();
		$view = View::forge('categorymanage/category_index_view');
		$view->set('category_list',$res,false);
		return $view;
	}

	public function after($response){
		$response->set_global('title', 'カテゴリー管理');
		$response->set_global('category_class', 'class=active');
		$response->set_global('product_class', '');
		$response->set_global('zaiko_class', '');
		$response->set_global('user_class', '');
		return parent::after($response);
	}
}