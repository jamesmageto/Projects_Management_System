<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <!-- Include all the required style sheets -->
  <link href="../css/contract.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>

<script type="text/javascript">

</script>
</head>

<body >
  <div id="header" >    
    <div id="navbar">
      <div id="project_title" style="text-align:left;"><img src="../images/logo.png" width="50",height="50" style="align:center;">
      <div id="menu_table_container">
	  
          </div>
    </div>
  </div>

  <div id="container">
    <div id="links_table_container">
      <table id="links_table" border="1" cellspacing="0.6" cellpadding="5">
        <tr>
          <td id="projects_col"><a href="contract_projects.php" id="projects">About Us</a></td>
        <tr>
        <tr>
		<!--student_search.php-->
          <td id="search_col"><a href="#" id="search">Contact Us</a></td>
        <tr>
        <tr>
          <td id="search_col"><a href="index.php" id="search">Login</a></td>
        <tr>
      </table>
    </div>

	
    <div id="space_container">
<?php
//include("dbConnect.php");
//session_start();
//$username = $_SESSION["username"];

//$objQuery = mysql_query("SELECT * FROM users WHERE username = '".$username."'") or die (mysql_query());
//$objResult = mysql_fetch_array($objQuery);
//$fullname = $objResult['fullname'];
$conn 	= mysql_connect("localhost","root","") or die(mysql_error()); 
$dbName = 'projects';

$db_connect = mysql_select_db($dbName, $conn);
$req = mysql_query("SELECT * FROM project where contractNo!=''") or die (mysql_query());

//<link href="css/bootstrap.css" rel="stylesheet">
?>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#">Home</a></div>-->
    <!-- Collect the nav links, forms, and other content for toggling -->
    
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <h1 class="text-center"><strong>NCCG Project Management</strong></h1>
    </div>
  </div>
  <hr>
</div>
<div class="container">
  <div class="row text-center">
    <div class="col-md-6 col-md-offset-3"></div>
  </div>
  <div class="row">
    <div class="text-justify col-sm-4"></div>
    <div class="col-sm-4 text-justify"></div>
  </div>
  
  <div class="row"></div>
  <div class="row">
    
    <div class="text-center col-sm-12" style="text-align:left;">
      
    
    
  </div>
  <hr>
  <div class="row">
    <div class="text-center col-md-6 col-md-offset-3">
      <h4> </h4>
      <p>Copyright &copy; 2017 &middot;NCCG Projects System. All Rights Reserved &middot; </p>
    </div>
  </div>
  <hr>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>

</div>
  </div>

</body>
</html>
