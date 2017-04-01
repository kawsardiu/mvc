
<?php 

	include_once "system/libs/Main.php";
	include_once "system/libs/ParentController.php";
	include_once "system/libs/ParentModel.php";
	include_once "system/libs/Database.php";
	include_once "system/libs/Load.php";

	//$main = new Main();

	$url = isset($_GET['url']) ? $_GET['url'] : NULL;
	$url = rtrim($url, '/');
	$url = explode('/', filter_var($url, FILTER_SANITIZE_URL));

	// echo '<pre>';
	// print_r($url);
	// echo '</pre>';

	// echo $controller = $url[0] . '</br>';
	// echo $method = $url[1] . '</br>';
	// echo $param = $url[2] . '</br>';



	if ($url[0]) {

		include "app/controllers/" . $url[0] . ".php";

		$ctrl = new $url[0]();

		if (isset($url[2])) {

			$method = $url[1];

			$ctrl->$method($url[2]);
		}else{

			if (isset($url[1])){
				$method = $url[1];

				$ctrl->$method();
			}else{

			}
		}

	}else{
		include "app/controllers/Index.php";

		$ctrl = new Index();

		$ctrl->home();

	}
 ?>










