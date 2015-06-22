<?php

namespace Model;

class Buylog extends \Model{

	public static function get_log($id){
		$query = \DB::select('buy_log_tb.created','product_tb.name','buy_log_tb.count','product_tb.price','buy_log_tb.user_tb_id')->from('buy_log_tb')->where('buy_log_tb.user_tb_id','=',$id);
		$query->join('product_tb','INNER');
		$query->on('buy_log_tb.prodact_id','=','product_tb.id');
		$res = $query->execute();
		return $res;
	}

	public static function fromto_log($id,$from,$to){
		if ($to == NULL || $to == ''){
			$query = \DB::select('buy_log_tb.created','product_tb.name','buy_log_tb.count','product_tb.price','buy_log_tb.user_tb_id')->from('buy_log_tb')->where('buy_log_tb.user_tb_id','=',$id)->and_where('buy_log_tb.created','>=',$from);
		}else{
			$query = \DB::select('buy_log_tb.created','product_tb.name','buy_log_tb.count','product_tb.price','buy_log_tb.user_tb_id')->from('buy_log_tb')->where('buy_log_tb.user_tb_id','=',$id)->and_where('buy_log_tb.created','between',array($from,$to));
		}
		$query->join('product_tb','INNER');
		$query->on('buy_log_tb.prodact_id','=','product_tb.id');
		$res = $query->execute();
		return $res;
	}
/////////////////////////////////////////////////////////////////////////////////////
	public static function user_buy($id,$count,$user_id){
		$yy =array('user_tb_id'=>$user_id,'product_id'=>$id,'count'=>$count,'created'=>date("Y-m-d H:i:s"));
		\DB::insert('buy_log_tb')->set($yy)->execute();
	}
}