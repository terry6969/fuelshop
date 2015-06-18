<?php

namespace Model;

class Product extends \Model{

	public static function regist_product($data){
		$data = array('name'=>$data['item_n'],'descripion'=>$data['item_d'],'price'=>$data['item_p']);
		\DB::insert('product_tb')->set($data)->execute();
	}


	public static function join_cate_pro(){
		$query =\DB::select('product_tb.id', array('product_tb.name', 'product_name'), array('category_tb.name', 'category_name'))->from('product_tb');
		$query ->join('category_tb', 'INNER');
		$query ->on('product_tb.category_tb_id', '=', 'category_tb.id');
		$res = $query->execute();
		return $res;
	}

	
}