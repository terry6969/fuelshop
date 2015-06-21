<?php
namespace Model;

class User extends \Model{
	
	/**
	 *ログイン用Model
	 */
	public static function login_user($id,$pass){
		return \DB::select()->from('user_tb')->where('login_id', '=', $id)->and_where('login_pass', '=', $pass)->execute();
	}


	

	public static function get_user(){
		$query = \DB::select()->from('user_tb');
		$res = $query->execute();
		return $res;
	}

	public static function get_user_by_id($id){
		$query = \DB::select()->from('user_tb')->where('id', '=', $id);
		$res = $query->execute();
		return $res;
	}

	public static function regist_user($data){
		$data = array('name'=>$data['name'],'login_id'=>$data['login_id'],'login_pass'=>$data['login_pass'],'money'=>$data['money']);
		return \DB::insert('user_tb')->set($data)->execute();
	}

	public static function update_user($data){
		$update_data = array('name'=>$data['name'],'login_id'=>$data['login_id'],'login_pass'=>$data['login_pass'],'money'=>$data['money']);
		return \DB::update('user_tb')->set($update_data)->where('id', '=', $data['id'])->execute();
	}


	public static function delete_user($id){
		\DB::delete('user_tb')->where('id','=',$id)->execute();
	}






}
?>