<?php

/********
Source Code Written By Edward Eborgu K
GNU LICENCE
email : edward@sedulushost.com
Mobile: 07060547552

************/
   //ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED); //disable all type of error reporting
    //error_reporting(E_ERROR);
	/***************************************************************************
	include all classes here 
	****************************************************************************/
	include('class/class-app.php');
    include('class/class-mvc.php');
    include('class/class-AccessRole.php');
	include('class/class-user.php');
	include('class/class-client.php');
	include('class/class-uar.php');
    include('class/class-filemanager.php');
    include('class/class-match-engine.php');
    include('class/class-managerActivity.php');
	include('class/class-report.php');
 

	
	$mvc = new mvc();//initiate mvc object here

	
	//$config = $objectApp->configurationSettings(); 

	//logout action
	if(isset($_GET['p']) && $_GET['p']=='logout'){	
		$app = new app();
		$app->logout();
	}
	
    $mvc->views();
	
	 ?>
