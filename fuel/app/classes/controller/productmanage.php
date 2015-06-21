<?php

use \Model\Product;
use \Model\Category;

class Controller_Productmanage extends Controller{

	public function action_index(){

		$res = Product::get_product_category();

		$view = View::forge('productmanage/productmanage_index_view');
		$view->set('product_list',$res,false);
		
		return $view;
	}

	public function action_regist_item_view(){
		$_category_list = Category::get_category();
		$view = View::forge('productmanage/productmanage_regist_view');
		$view -> set('category_list', $_category_list, false);
		return $view;
	}

	public function action_regist_item(){
		$post = Input::post();
		$last_id = Product::regist_product($post);
		Upload::process(
		   array(
		      'new_name' => $last_id[0],
		    )
		);
		if (Upload::is_valid())
		{
		    Upload::save();
		    
		}else{
			Response::redirect('productmanage/action_regist_item_view');
		}
		Response::redirect('productmanage');

	}

	public function action_update_item_view(){
		$_target = Product::get_product_by_id(Input::get('id'));
		if(count($_target) == 0){
			Response::redirect('productmanage');
		}else{

			$view = View::forge('productmanage/productmanage_regist_view');
			$view->set('target',$_target[0],false);
			$_category_list = Category::get_category();
			$view->set('category_list',$_category_list,false);
			return $view;
		}
		
	}

	public function action_update_item(){

		$post = Input::post();
		Product::update_product($post);
		
		$_img = Upload::get_files();
		

		if(count($_img) != 0){
			Upload::process(
			   array(
			      'new_name' => 'tmp'.$post['id'],
			    )
			);
			if (Upload::is_valid())
			{
			    Upload::save();
			    File::delete(DOCROOT.'assets/img/uploads/'.$post['id'].'.jpg');
			    File::rename(DOCROOT.'assets/img/uploads/'.'tmp'.$post['id'].'.jpg', DOCROOT.'assets/img/uploads/'.$post['id'].'.jpg');
			    
			}else{
				Response::redirect('productmanage/action_regist_item_view');
			}
		}
		Response::redirect('productmanage');
	}

	public function action_delete_item(){
		Product::delete_product(Input::post('id'));
		File::delete(DOCROOT.'assets/img/uploads/'.Input::post('id').'.jpg');
		Response::redirect('productmanage');
	}

	public function after($response){
		$response->set_global('title', '商品管理');
		$response->set_global('category_class', '');
		$response->set_global('product_class', 'class=active');
		$response->set_global('zaiko_class', '');
		$response->set_global('user_class', '');
		return parent::after($response);
	}
}