<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $pageTitle ?></title>
	
<!--logout after inactive period of 1hr=3600s -->
<?php 
if(isset($_SESSION['user_id'])){
  echo '<meta http-equiv="refresh" content="3600; url=./?p=logout&reason=timeout" />';
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $pageKeyword ?>" />
<meta name="description" content="<?php echo $config['orgName']?>" />
 <!--  CSS -->
<link rel="stylesheet" href="assets/css/style-starter.css?v997">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
	  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!-- google fonts -->
<link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">

<!-- databbale cdn--
<link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
-->
	
<link href="assets/DataTables/datatables.min.css" rel="stylesheet">
<script src="assets/DataTables/datatables.min.js"></script>
	
</head>
<body class="sidebar-menu-collapsed">
	
	

