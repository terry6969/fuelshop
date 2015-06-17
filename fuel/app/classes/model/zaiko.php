<?php

namespace Model;

class Zaiko extends \Model{

	public static function getZaiko(){
		$query = \DB::select('zaiko_tb.id','zaiko_tb.count','product_tb.name')->from('zaiko_tb');
		$query->join('product_tb', 'INNER');
		$query->on('zaiko_tb.product_tb_id', '=', 'product_tb.id');
		$res = $query->execute();
		return $res;
	}

	public static function updateZaiko($id, $count){
		$data = array("count"=>$count);
		\DB::update('zaiko_tb')->set($data)->where('id', '=', $id)->execute();
	}


}