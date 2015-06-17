<?php
namespace Model;

class User extends \Model{
	
/////////////////////////////////////////////////////////
	/**
	 *ログイン用Model
	 */
	public static function login_user($id,$pass){
		return \DB::select()->from('user_tb')->where('login_id', '=', $id)->and_where('login_pass', '=', $pass)->execute();
	}
/////////////////////////////////////////////////////////









}
?>