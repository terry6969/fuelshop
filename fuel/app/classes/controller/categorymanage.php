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
		$view = View::forge('categorymanage/category');
		$view->set('res',$res,false);
		return $view;
	}

	public function action_test(){
		$test = array(array('id' => 18, 'name' => 'tom', 'pass' => 'ppp','count' => 2, 'price' => 100),array('id' => 888, 'name' => 'jon', 'pass' => 'sss', 'count' => 3, 'price' => 200));
		$c = count($test);
		$sum = 0;
		for ($i = 0; $i < $c; $i++){
			$goukei = $sum + ($test[$i]['count']*$test[$i]['price']);

		}
		// foreach ($test as $key => $value){
			
		// }
		echo Asset::img('uploads/'.$test['0']['id'].'.jpg');
	}
}