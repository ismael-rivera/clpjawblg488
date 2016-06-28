<?php

class MyConfig {
	
private $sqlinfo_dev = array('awesomeblogger_wp_db', 'root', '5es6rx6no8322zs', 'localhost');
//private $sqlinfo_test = array('bestprp0_moacy_barros_wp_db', 'bestprp0_isma153', '5es6rx6no8322zs', 'localhost');

public function get_settings($x){
	if($x == 'dev'){
		$o = $this->sqlinfo_dev;
		return $o;
		}
	if($x == 'tes'){
		$o = $this->sqlinfo_test;
		return $o;
		}	
	}
}
?>