<?php
namespace Model;

class User extends \Model{
	
	/**
	 *ログイン用Model
	 */
	public static function login_user($id,$pass){
		return \DB::select()->from('user_tb')->where('login_id', '=', $id)->and_where('login_pass', '=', $pass)->execute();
	}

	public static function regist_user($data){
		$d = array('login_id'=>$data['user_i'],'login_pass'=>$data['user_p'],'name'=>$data['user_n'],'money'=>$data['user_z']);
		\DB::insert('user_tb')->set($d)->execute();
	}
}