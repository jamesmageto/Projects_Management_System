<!DOCTYPE html>
<html>
<head>
  <title>Upload Contract</title>
  

<script type="text/javascript">

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
              <td id="menu_col1"><a href="../change_password.html" id="signout">Change Password</a></td>
          </table>
      </div>
    </div>
  </div>
<?php
include('../config/dbConnect.php');
// Get all the data from the form in the previous page
$cnumber=$_POST['cnumber'];
$pname=$_POST['pname'];
$cname=$_POST['cname'];
$o_date=$_POST['date'];
$date = date('Y-m-d',strtotime($o_date));
$tmpFilePath=$_FILES['attachdocument']['tmp_name'];
//$status = isset($_POST['check']) && $_POST['check']  ? "1" : "0";

// Establish connection to the database projects with 'root' as username and ''(nothing) as password 	
//$con=mysqli_connect("localhost","root","","projects");

// Defensive technique : To check whether the connection to the database is actually established, before we
// access the contents of the database
if($_FILES['attachdocument']=='')
{
$attachdocumentUrl ='';
}
else
{
$attachdocumentUrl = "uploads/" .$date.'_'. $_FILES['attachdocument']['name'];
$uploadUrl = "../uploads/" .$date.'_'. $_FILES['attachdocument']['name'];
}
move_uploaded_file($tmpFilePath, $uploadUrl);
// Basic sql query to to insert data into project table of the database
$sql="INSERT INTO project (contractNo, projectName, contractorName, dateSigned, contractsFile) VALUES('$cnumber', '$pname', '$cname', '$date', '$attachdocumentUrl')";

//echo $sql;
mysqli_query($con,$sql);

echo "<script>";
echo "alert('Data Successfully Uploaded');";
echo "window.location='contract_projects.php'";
echo "</script>";

?>

<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>

</div>
  </div>';

</body>
</html>
