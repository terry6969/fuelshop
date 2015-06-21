<?php

namespace Model;

class Product extends \Model{

	public static function regist_product($data){
		$data = array('name'=>$data['name'],'descripion'=>$data['descripion'],'price'=>$data['price'],'category_tb_id'=>$data['category_tb_id']);
		return \DB::insert('product_tb')->set($data)->execute();
	}

	public static function get_product_by_id($id){
		$query = \DB::select()->from('product_tb')->where('id', '=', $id);
		$res = $query->execute();
		return $res;
	}

	public static function update_product($data){
		$update_data = array('name'=>$data['name'],'descripion'=>$data['descripion'],'price'=>$data['price'],'category_tb_id'=>$data['category_tb_id']);
		return \DB::update('product_tb')->set($update_data)->where('id', '=', $data['id'])->execute();
	}

	public static function get_product_category(){
		$query = \DB::select('product_tb.*',array('category_tb.name','category_name'))->from('product_tb');
		$query->join('category_tb', 'INNER');
		$query->on('product_tb.category_tb_id', '=', 'category_tb.id');

		$res = $query->execute();
		return $res;
	}

	public static function get_product_category_zaiko($category, $zaiko){
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

	public static function delete_product($id){
		\DB::delete('product_tb')->where('id','=',$id)->execute();
	}
}
