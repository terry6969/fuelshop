<?php

use \Model\Category;

class Controller_Categorymanage extends Controller{

	public function action_category(){
		if(Input::post('cr')){
			Category::category_regist(Input::post('cr'));
		}
		if(Input::post('c_id')){
			Category::delete_category(Input::post('c_id'));
		}
		$res = Category::get_category();
		$view = View::forge('category_manage/category_v');
		$view->set('res',$res,false);
		return $view;
	}
}