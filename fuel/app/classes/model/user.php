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

	public static function get_user(){
		return \DB::select()->from('user_tb')->execute();
	}

	public static function delete_user($id){
		\DB::delete('user_tb')->where('id','=',$id)->execute();
	}

	public static function target_user($id){
		return \DB::select()->from('user_tb')->where('id','=',$id)->execute();
	}

	public static function update_user($data){
		$updata = array('login_id'=>$data['user_i'],'login_pass'=>$data['user_p'],'name'=>$data['user_n'],'money'=>$data['user_z']);
		\DB::update('user_tb')->set($updata)->where('id','=',$data['id_h'])->execute();
	}
	public static function after_buy($money,$id){
		$up =array('money'=>$money);
		\DB::update('user_tb')->set($up)->where('id','=',$id)->execute();
	}
}