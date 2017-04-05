
<!doctype html>
<head>
	
</head>
<body>
<?php
	
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['date_of_birth']))
{
	
}
?>
	<h1>PHP Register Entrybook</h1>
	<a href="guestbook.php" >Home</a>
	<a href="view_guestbook.php">View Entrybook</a><br><br>
	<form method="post" action="update_guestbook.php">
	<table>
		<tr>
		<td>Name: </td>
		<td> <input type="text" size="30" maxlength="30" name="name"></td>
	    </tr>
	    <tr>
	    	<td>Email: </td>
	    	<td><input type="text" size="30" maxlength="30" name="email"></td>
	    </tr>
	    <tr>
	    	<td>Date of birth: </td>
	    	<td><input type="Date"  name="date_of_birth" /></td>
	    </tr>
	    <tr>
	    	<td></td>
	    <td><input type="submit" value="Submit Entry " name="submit"></td>
	    </tr>

	</table>
		
	</form>







</body>
</html>
