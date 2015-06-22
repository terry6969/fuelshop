<?php

namespace Model;

class Hinan extends \Model{

	public static function zaiko_delete_stock($id,$res_stock){
		$xx = array('count'=>$res_stock);
		\DB::update('zaiko_tb')->set($xx)->where('id','=',$id)->execute();
	}

	public static function zaiko_target_zaiko($id){
		return \DB::select()->from('zaiko_tb')->where('product_tb_id','=',$id)->execute();
	}

	public static function buylog_user_buy($id,$count,$user_id){
		$yy =array('user_tb_id'=>$user_id,'product_id'=>$id,'count'=>$count);
		\DB::insert('buy_log_tb')->set($yy)->execute();
	}


}