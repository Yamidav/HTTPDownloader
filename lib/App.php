<?php

namespace App;

class App {
	
	public function run (){
		
	    ob_start();
        require  "/views/main.php";
        $result = ob_get_contents();
        ob_clean();
		
		echo $result;
	}

	
	public function  start(){
		$xl=new ExelParser;
		$xl->parse('../lib/files/file.xls');
	}
	
}
?>