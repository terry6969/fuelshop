<?php

namespace Model;

class Zaiko extends \Model{

	public static function getZaiko(){
		return \DB::select()->from('zaiko_tb')->execute();
	}



}