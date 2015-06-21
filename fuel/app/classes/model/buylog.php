<?php

namespace Model;

class Buylog extends \Model{


	public static function get_buy_log(){
		return \DB::select()->from('buy_log_tb')->execute();
	}


	public static function get_buy_log_by_user_id($id){

		$query = \DB::select('buy_log_tb.*',array('product_tb.name','product_name'),array('product_tb.price','product_price'))->from('buy_log_tb');
		$query->join('product_tb', 'INNER');
		$query->on('buy_log_tb.prodact_id', '=', 'product_tb.id');
		$query->where('buy_log_tb.user_tb_id', '=', $id)->order_by('created','desc');
		return $query->execute();
	}

	public static function get_buy_log_by_from_to($id, $from, $to){
		return \DB::select()->from('buy_log_tb')->where('id', '=', $id)->and_where('created', '>=', $from)->and_where('created', '<=', $to)->order_by('created','desc')->execute();
	}


}