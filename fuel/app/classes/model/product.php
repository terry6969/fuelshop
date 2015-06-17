<?php

namespace Model;

class Product extends \Model{

	public static function regist_product($data){
		$data = array('name'=>$data['item_n'],'descripion'=>$data['item_d'],'price'=>$data['item_p']);
		\DB::insert('product_tb')->set($data)->execute();
	}
}
