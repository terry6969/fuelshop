<?php

use \Model\Zaiko;

class Controller_Zaikomanage extends Controller{

	/**
	 * 在庫管理
	 */
	public function action_index(){
		Response::redirect('/shop/show_comp');
	}


}


?>