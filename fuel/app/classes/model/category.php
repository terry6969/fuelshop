<?php

namespace Model;

class Category extends \Model{

	public static function category_regist($c){
		$data = array('name' => $c);
		\DB::insert('category_tb')->set($data)->execute();
	}

	public static function get_category(){
		return \DB::select()->from('category_tb')->execute();
	}

	public static function delete_category($id){
		\DB::delete('category_tb')->where('id','=',$id)->execute();
	}
	public static function search_category($id){

	}

}