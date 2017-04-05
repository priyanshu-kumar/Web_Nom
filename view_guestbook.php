

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>PHP View Entrybook</h1>

<form method="POST" action="view_guestbook.php">
Email:
<input type="text" size="30" maxlength="30" name="email_input"><br><br>
<input type="submit" value="Submit Entry " name="submit">

	
</form>
<?php
$email_input;
$conn_error = 'could not connect';
$conn = mysqli_connect('localhost','root','','web_nom')or die($conn_error);
if(isset($_POST['email_input']))
{
	$email_input = mysqli_real_escape_string($conn,$_POST['email_input']);
}

if(!empty($email_input))
{
$query = "SELECT * FROM entry WHERE email='$email_input'";
$result = mysqli_query($conn,$query);
if($result = mysqli_query($conn,$query))
{
	// echo "Successful";
}
else
{
	echo "error";
}
$name;
$email;
$date_of_birth;
while ($row = @mysqli_fetch_array($result)) 
{
	$name=$row['name'];
	$email=$row['email'];
	$date_of_birth=$row['date_of_birth'];
}

if(!empty($name))
{
	echo "Name: ".$name."<br>";
echo "Email: ".$email."<br>";
echo "Date of Birth: ".$date_of_birth."<br>";
}
else
{
	echo "No Entry Found"."<br>";
	$link = '<a href="guestbook.php">ADD ENTRY</a>';
		echo $link."<br>";
}
mysqli_close($conn);
	# code...
}
else
{

}
?>

</body>
</html>
