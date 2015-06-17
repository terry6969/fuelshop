<?php

use \Model\Zaiko;

class Controller_Zaikomanage extends Controller{

	/**
	 * 在庫管理
	 */
	public function action_index(){
		$view = View::forge('zaikomanage/zaiko_index_view');
		$view->set('zaiko_data', Zaiko::getZaiko());
		return $view;
	}


}


?>