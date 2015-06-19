<?php

namespace Model;

class buylog extends \Model{

	public static function get_log($id){
		$query = \DB::select('buy_log_tb.created','product_tb.name','buy_log_tb.count','product_tb.price')->from('buy_log_tb')->where('buy_log_tb.user_tb_id','=',$id);
		$query->join('product_tb','INNER');
		$query->on('buy_log_tb.prodact_id','=','product_tb.id');
		$res = $query->execute();
		return $res;
	}
}