<?php 
	// Load Config
	require_once 'config/config.php';


	//Load Librairies
	// require_once("librairies/Core.php");
	// require_once("librairies/Controller.php");
	// require_once("librairies/Database.php");

	// Autoload core librairies
	spl_autoload_register(function($className){
		require_once 'librairies/' . $className . '.php';
	});

?>
