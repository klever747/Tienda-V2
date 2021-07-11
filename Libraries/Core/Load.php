<?php 
	//load
	$controllerFile = "Controller/".$controller.".php";
	if(file_exists($controllerFile)){

		require_once($controllerFile);
		$controller = new $controller();
		if(method_exists($controller, $method)){
			$controller->{$method}($params);
		}else{
			require_once("Controller/Error.php");
		}
	}else{
		require_once("Controller/Error.php");  
	} 
	
 ?>