<?php

namespace Model;

class Product extends \Model{

	public static function regist_product($data){
		$d = array('name'=>$data['item_n'],'category_tb_id'=>$data['item_c'],'descripion'=>$data['item_d'],'price'=>$data['item_p']);
		\DB::insert('product_tb')->set($d)->execute();
	}

	public static function get_product(){
		$query = \DB::select('product_tb.id',array('product_tb.name','product_tb_name'),'category_tb.name')->from('product_tb');
		$query->join('category_tb','INNER');
		$query->on('product_tb.category_tb_id','=','category_tb.id');
		$res = $query->execute();
		return $res;
	}

	public static function delete_product($id){
		\DB::delete('product_tb')->where('id','=',$id)->execute();
	}

	public static function get_product_maxid(){
		return \DB::select(\DB::expr('MAX(`id`)'))->from('product_tb')->execute();
	}
}
