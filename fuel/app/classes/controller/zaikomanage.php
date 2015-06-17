<?php

use \Model\Zaiko;

class Controller_Zaikomanage extends Controller{

	/**
	 * 在庫表示
	 */
	public function action_index(){
		$view = View::forge('zaikomanage/zaiko_index_view');
		$view->set('zaiko_data', Zaiko::getZaiko(), false);

		if(Input::get('msg') !== null && Input::get('msg') == 1){
			$view->set('msg', '更新しました');
		}


		return $view;
	}

	/**
	 * 在庫登録
	 */
	public function action_zaiko_regist(){
		$_input_zaiko = Input::post('zaiko');
		foreach ($_input_zaiko as $key => $value) {
			Zaiko::updateZaiko($key, $value);
		}
		Response::redirect('/zaikomanage?msg=1');
	}


}


?>