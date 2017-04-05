<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>PHP Entrybook</h1>
<?php
$conn_error = 'could not connect'; 
ini_set('display_errors', 1);
error_reporting(E_ALL);
// $name = "";
// $email ="";
// $date_of_birth = "";

$conn = @mysqli_connect('localhost','root','','web_nom')or die($conn_error);
// @mysqli_select_db($conn,'web_nom')or die($conn_error) ;
if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['date_of_birth']))
	{$name = $_POST['name'];
     $email = $_POST['email'];
     $date_of_birth = $_POST['date_of_birth'];
    
   }
   else
   {
   	echo "something fishy";
   }
   // working till here
   if (!empty($name) && !empty($email) &&!empty($date_of_birth)) {
     # code...
   
$query="INSERT INTO entry (ID, name, email, date_of_birth) VALUES (NULL, '$name', '$email', '1997-03-09')";
$result = mysqli_query($conn,$query);


echo "Enrty successfully added."."<br>";
$link='<a href="guestbook.php">Add Entry</a>';  
echo $link."<br>";
}
else
{
  echo "All fields required"."<br>";
$link='<a href="guestbook.php">Add Entry Again</a>';  
echo $link."<br>";
}
?>

<a href="view_guestbook.php">View EntryBook</a><br>



</body>
</html>