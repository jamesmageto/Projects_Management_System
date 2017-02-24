<!DOCTYPE html>
<html>
<head>

	<title>Portal</title>
	<!-- Include all the necessary css files -->
	<link href="../css/admin_search.css" rel="stylesheet" type="text/css">
	<link href="../css/student.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
	
<script type="text/javascript">

// javascript function for asynchronus call, to fetch data dynamically from database using ajax
function showUser(str)
{

if (str=="")
  {
  	document.getElementById("sl").innerHTML="";
  	
  }
  else
  	{
  //document.getElementById("sl").innerHTML="got it";
	
if (window.XMLHttpRequest)
  {
  	// code for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
  }
else
  {
  	// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
	xmlhttp.onreadystatechange=function()
  	{
  
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		{	
  
    		document.getElementById("sl").innerHTML=xmlhttp.responseText;
    	}
  	}
  	var select=document.getElementById("options");
  	var typ=select.options[select.selectedIndex].value;
  
  	var url = "search_result.php?options="+typ+"&queryString="+str;
  	escape(url);
  
  	
	xmlhttp.open("GET",url,true);
	xmlhttp.send();  
  }

}


</script>


</head>
<body >
	<div id="header">
		<div id="navbar">
			<div id="project_title">Project Portal</div>
			<div id="menu_table_container">
					<table border="0">
						<tr>
							<td id="menu_col1"><a href="" id="aboutus">About Us</a></td>
							<td id="menu_col1"><a href="../logout.php" id="signout">Sign Out</a></td>
					</table>
			</div>
		</div>
	</div>

	<div id="container">
		<div id="links_table_container">
			<table id="links_table" border="1" cellspacing="0.6" cellpadding="5">
				<tr>
					<td id="notifications_col"><a href="admin_notifications.php" id="notifications">Notifications</a></td>
				<tr>
				
				<tr>
					<td id="project_col"><a href="admin_projects.php" id="projects">Projects</a></td>
				<tr>
				<tr>
					<td id="search_col"><a href="admin_search.php" id="search">Search</a></td>
				<tr>
				<tr>
					<td id="manage_users_col"><a href="admin_manage_users.php" id="manage_users">Manage Users</a></td>
				<tr>
				<tr>
					<td id="source_request_col"><a href="admin_source_request.php" id="source_requests">Source Code Requests</a></td>
				<tr>
			</table>
		</div>
		
		<!-- Text box and dropdown for basic searching -->
		<div id="space_container">
			<div id="searching">
					<!--<form action="search.php" method="post">--> 
					<input type="text" id="search_name" onkeyup="showUser(this.value)" value="" name="search"/>
					<select id="options" name="options">
						<!--<option disabled="disabled" selected="selected">Select</option>-->
						<option value="Name">Name</option>
						<option value="Domain">Domain</option>
						<option value="Year">Year</option>
						<option value="PL">Languages</option>
					</select>
					<!--<input type="button" onclick="search()" value="Search" id="search_button"/>-->
			</div>

<div id="sl"></div>

</div>
		</div>
	</div>
</body>
</html>
