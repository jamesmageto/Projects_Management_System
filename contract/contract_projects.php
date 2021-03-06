<!DOCTYPE html>
<html>
<head>
  <title>Contract Documents</title>
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
      <div id="project_title" style="text-align:left;"><img src="../images/logo.png" width="50",height="50" style="align:center;"></div>
      <div id="menu_table_container">
          <table border="0">
            <tr>
              <!--<td id="menu_col1"><a href="" id="aboutus">About Us</a></td>-->
              <td id="menu_col1"><a href="logout.php" id="signout">Sign Out</a></td>
              <!--<td id="menu_col1"><a href="../change_password.html" id="signout">Change Password</a></td>-->
          </table>
      </div>
    </div>
  </div>

  <div id="container">
    <div id="links_table_container">
      <table id="links_table" border="1" cellspacing="0.6" cellpadding="5">
        <tr>
          <td id="projects_col"><a href="contract_projects.php" id="projects">Contract Documents</a></td>
        <tr>
        <tr>
		<!--student_search.php-->
          <td id="search_col"><a href="#" id="search">Search</a></td>
        <tr>
        <tr>
          <td id="upload_col"><a href="contract_upload.php" id="upload">Upload</a></td>
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
      <h1 class="text-center" style:"text-align=Center"><strong>NCCG Contracts</strong></h1>
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
      
    <table width="100%" class="table" bgcolor="#FFFFFF"  >
  <tr align="center"  >
         <td align="center" colspan="10" style="color:#00F" ><strong>Contract Documents</strong></td>
       </tr>
  <tr>
    <th align="left" class="heading">Contract Number</th>
    <th align="left" class="heading">Project Name</th>
    <th align="left" class="heading">Contractor Name</th>
    <th align="left" class="heading">Date Signed</th>
    <th align="left" class="heading">Uploaded Contracts</th>
  
  </tr>
  <?php
  $count=0;
  while($res = mysql_fetch_array($req, MYSQL_BOTH))
  {
	if($count%2 == 0){ $bg = '#E1E1FF'; }else{ $bg = '#EAEAEA'; }
  ?>
  <tr  bgColor='<?php  echo $bg; ?>' onMouseOver="this.bgColor='#FFFFFF'" onMouseOut="this.bgColor='<?php  echo $bg; ?>'">
  <?php
  
  ?>
  <td><?php echo $res['contractNo']; ?></td>
  <td><?php echo $res['projectName']; ?></td>
  <td><?php echo $res['contractorName']; ?></td>
  <td><?php echo $res['dateSigned']; ?></td>
  <td><a target="_blank" href="<?php echo '../'.$res['contractsFile']; ?>">Uploaded Document</a></td>
  </tr>
  <?php
  }
  ?>
  </table>
    
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
