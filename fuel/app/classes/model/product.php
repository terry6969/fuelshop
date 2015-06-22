<?php

namespace Model;

class Product extends \Model{

	public static function regist_product($data){
		$d = array('name'=>$data['item_n'],'category_tb_id'=>$data['item_c'],'descripion'=>$data['item_d'],'price'=>$data['item_p']);
		\DB::insert('product_tb')->set($d)->execute();
	}

	public static function get_product(){
		$query = \DB::select('product_tb.id',array('product_tb.name','product_tb_name'),'category_tb.name')->from('product_tb')->order_by('product_tb.id','ASC');
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

	public static function target_product($id){
		return \DB::select()->from('product_tb')->where('id','=',$id)->execute();
	}

	public static function update_product($data){
		$updata = array('name'=>$data['item_n'],'category_tb_id'=>$data['item_c'],'descripion'=>$data['item_d'],'price'=>$data['item_p']);
		return \DB::update('product_tb')->set($updata)->where('id','=',$data['id_h'])->execute();
	}

	public static function get_search($category, $stock){
		$query = \DB::select('product_tb.*',
			array('product_tb.name', 'product_name'),
			array('category_tb.name','category_name'),
			array('product_tb.price', 'price'))
		->from('product_tb');
		$query->join('category_tb', 'INNER');
		$query->on('product_tb.category_tb_id', '=', 'category_tb.id');
		$query->join('zaiko_tb', 'INNER');
		$query->on('product_tb.id', '=', 'zaiko_tb.product_tb_id');
		if($stock == 'some'){
			$query->where('zaiko_tb.count', '>', 0);
		}
		if($category != 'c_all'){
			$query->where('category_tb.name', '=', $category);
		}
		$res = $query->execute();
		return $res;
	}


	public static function get_item_one($id){
		$query =\DB::select('product_tb.id', 
			array('product_tb.name', 'name'),
			array('product_tb.description', 'description'), 
			array('product_tb.price', 'price'), 
			array('zaiko_tb.count', 'zaiko'), 
			array('category_tb.name', 'category'))
		->from('product_tb');
		$query ->join('category_tb', 'INNER');
		$query ->on('product_tb.category_tb_id', '=', 'category_tb.id');
		$query ->join('zaiko_tb', 'INNER');
		$query ->on('product_tb.id', '=', 'zaiko_tb.product_tb_id');
		$res = $query->where('product_tb.id', '=', $id)->execute();
		return $res;
	}

	public static function top_list(){
		$query = \DB::select('product_tb.id',array('product_tb.name','product_name'),'product_tb.price',array('category_tb.name','category_name'))->from('product_tb');
		$query->join('category_tb','INNER');
		$query->on('product_tb.category_tb_id','=','category_tb.id');
		$res = $query->execute();
		return $res;
	}
}