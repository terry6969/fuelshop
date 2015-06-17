<?php

namespace Model;

class Zaiko extends \Model{

	public static function category_regist($c){
		$data = array('name' => $c);
		\DB::insert('zaiko_tb')->set($data)->execute();
	}

	public static function get_category(){
		return \DB::select()->from('zaiko_tb')->execute();
	}

	public static function delete_category($id){
		\DB::delete('zaiko_tb')->where('id','=',$id)->execute();
	}


}