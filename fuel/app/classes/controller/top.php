<?php

use \Model\Category;
use \Model\Product;

class Controller_Top extends Controller{
/////////////////////////////////////////////////////////
	/**
	 *セッションチェックbefore
	 */	
	public function before(){
		$login = Session::get('login');
		$seg =Uri::segment(2);
		if($login == NULL && strpos($seg, "login") === FALSE){
			Response::redirect('login/login');
		}elseif($login !== NULL && $seg == 'login'){
			Response::redirect('top/top');
		}
		
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiw商品一覧画面表示Controller
	 */
	public function action_top(){
		$category_list = Category::get_category();
		$view = View::forge('top/top');
		$view->set('category_list', $category_list,false);

		if (Input::post('stock') == 'some'){
			$res_product = Product::get_search(Input::post('category'), Input::post('stock'));
			$view -> set('item_list', $res_product, false);
		}else if(Input::post('stock') == 'all' && Input::post('category') !== 'c_all'){
			$view -> set('item_list', Product::category_search_list(Input::post('category')), false);
		}else{
			$view -> set('item_list', Product::top_list(), false);
		}
		
		return $view;
	}
/////////////////////////////////////////////////////////
	/**
	 *Veiw商品詳細画面表示Controller
	 */
	public function action_item(){
		$id = Input::get('id');
		$target = Product::get_item_one($id);
		$view = View::forge('top/item');
		$view->set('target', $target, false);
		return $view;

	}
/////////////////////////////////////////////////////////
	/**
	 *カートに入れる処理Controller
	 */
	public function action_in_cart(){
		$id =Input::post('id');
		$name =Input::post('name');
		$price =Input::post('price');
		$stock =Input::post('stock');
		$total =$price * $stock;
			$_cart =Session::get('cart');
			if(!is_array($_cart)){
			 $_cart = array();
			}
			$_cart[] = array(
			 'i_id' => $id,
			 'i_name' => $name,
			 'i_price' => $price,
			 'i_stock' => $stock,
			 'total' => $total
			 );
			Session::set('cart',$_cart);

		
		// Session::set('i_id',$id);
		// Session::set('i_name',$name);
		// Session::set('i_price',$price);
		// Session::set('i_stock',$stock);
		Response::redirect('cart/cart');
			
	}
/////////////////////////////////////////////////////////

}
