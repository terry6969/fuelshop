<?php
namespace Model;

class User extends \Model{
	
/////////////////////////////////////////////////////////
	/**
	 *ログイン用Model
	 */
	public static function login_user($id,$pass){
		return \DB::select()->from('user_tb')->where('id', '=', $id)->and_where('pass', '=', $pass)->execute();
	}
/////////////////////////////////////////////////////////
}
?>