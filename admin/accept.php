<!DOCTYPE html>
<html>
<head>
  <title>Portal</title>
  <!-- Include all the required style sheets -->
  <link href="css/student.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>

<script type="text/javascript">

</script>
</head>

<body >
<?php
// Session is started and it is checked whether the user is admin or not
session_start();
if ($_SESSION['is_logged_in'] == 0 || !strcmp ( $_SESSION['type'], 'user' )  )
{
    die();
}
$name = $_GET['name'];
$id = $_GET['id'];

// Establish connection to the database projects with 'root' as username and ''(nothing) as password
$con=mysqli_connect("localhost","root","","projects");

// Defensive technique : To check whether the connection to the database is actually established, before we
// access the contents of the database
if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Basic sql query to update a field in the database based on id
$result = mysqli_query($con,"UPDATE project SET review='1' WHERE id='$id'");
if (mysqli_error($con))
{
   die(mysqli_error($con));
}
else
{
  header("location:admin_notifications.php");
}

// Close the DB connection
mysqli_close($con);
?>

</body>
</html>