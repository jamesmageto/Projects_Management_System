<!DOCTYPE html>
<html>
<head>
	<title>Upload Contract</title>
	<!-- Include all the required style sheets -->
	<link href="../css/upload.css" rel="stylesheet" type="text/css">
	<link href="css/admin_search.css" rel="stylesheet" type="text/css">
	<link href="css/contract.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>
	<link href="css/boots/bootstrap.css" rel="stylesheet">
	
<script type="text/javascript">
<script src="../js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../js/bootstrap.js"></script>
<script src="../js/scw.js"></script>

// javascript function to display/hide some data
function selected(cb){

	if(cb.checked == true)
		document.getElementById("tobe_hidden").style.visibility = "visible";
	else
		document.getElementById("tobe_hidden").style.visibility = "hidden";
}

</script>


</head>
<body >
	<div id="test">
		<div id="title">Project Portal</div>
		<table id="menu_table" border="0">
			<tr>
				<td id="c1"><a href="contract_projects.php" id="home">Home</a></td>
				<td id="c4"><a href="../logout.php" id="signout">Sign Out</a></td>
				<td id="c4"><a href="../change_password.html" id="signout">Change Password</a></td>
			</tr>
		</table>	
	</div>

	
		<div id="signup_text">Contract Details</div>
		<form action="upload_file.php" method="post" enctype="multipart/form-data">
		<table id="table" border="0">
			<tr>
					<td id="col1">Contract Number<sup id="required">*</td>
					<td id="col2"><input type="text" id="contract_number" name="cnumber" required/></td>
				</tr>
				<tr>
					<td id="col1">Project Name<sup id="required">*</td>
					<td id="col2"><input type="text" id="project_name" name="pname" required/></td>
				</tr>
				<tr>
					<td id="col1">Contractor Name<sup id="required">*</td>
					<td id="col2"><input type="text" id="contractor_name" name="cname" required/></td>
				</tr>
				<tr>
					<td id="col1">Date Signed<sup id="required">*</td>
					<td id="col2">
					<input class="form-control"  type="text" required name="date" placeholder="Enter date Signed" onclick='scwShow(this,event);'>
					</td>
				</tr>
				<!--<tr>
					<td id="col1" >Contract File<sup id="required">*</td>
					<td id="col2"><input type="text" id="file" name="file" /></td>
				</tr>
				<tr>
					<td id="col1">Domain<sup id="required">*</td>
					<td id="col2"><input type="text" id="domain" name="domain"/></td>
				</tr>
				</tr>
				<tr>
					<td id="col1">Upload Info File<sup id="required">*</td>
					<td id="col2"><input type="file" id="info" required name="info" style="text-align: center"></td>
				</tr>
				<!--<tr>
					<td id="col1">Email-Id<sup id="required">*</td>
					<td id="col2"><input type="text" id="email" placeholder="some@example.com"/></td>
				</tr>

				<tr>
					<td id="col1">Completed?</td>
					<td id="col2"><input type="checkbox" id="check" onchange="selected(this)" name="check" value="1"/></td>
				</tr>-->
				<tr id="col1">
					<td id="col1">Select File<sup id="required">*</td>
					<td id="col2"><input type="file" name="attachdocument" placeholder="select file" id="attachdocument" required />
</td>
				</tr>
				<tr>
					<td id="col1"></td>
					<td id="col2"><input type="submit" onClick="upload()" value="Upload" style="font-size:1em; width: 50%; position: relative; left: 40%;" id="upload_button"/></td>
				</tr>
		</table>
	</form>
		<div id="required_text">* Marked Details Required</div>
	
</body>


</html>