<?php

namespace Model;

class Product extends \Model{

	public static function regist_product($data){
		$data = array('name'=>$data['item_n'],'descripion'=>$data['item_d'],'price'=>$data['item_p']);
		\DB::insert('product_tb')->set($data)->execute();
	}

	public static function get_product($category, $zaiko){
		$query = \DB::select('product_tb.*',array('category_tb.name','category_name'))->from('product_tb');
		$query->join('category_tb', 'INNER');
		$query->on('product_tb.category_tb_id', '=', 'category_tb.id');
		$query->join('zaiko_tb', 'INNER');
		$query->on('product_tb.id', '=', 'zaiko_tb.product_tb_id');
		if($zaiko == 1){
			$query->where('zaiko_tb.count', '>', 0);
		}
		if($category != 0){
			$query->where('category_tb.id', '=', $category);
		}

		$res = $query->execute();
		return $res;
	}
}
