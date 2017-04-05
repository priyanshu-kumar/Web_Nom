
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
  $( function() {
    $( "#date" ).datepicker();
  } );
  </script>
</head>
<body>

	

	<h1>PHP Register Entrybook</h1>
	<a href="guestbook.php" >Home</a>
	<a href="view_guestbook.php">View Entrybook</a><br><br>
	<form method="post" action="update_guestbook.php">
	    <!-- # server:localhost
		# username:root
		# password:NUL
		# Database:web_nom
		# table:entry -->

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
	    	<td><input type="text" id='date' name="date_of_birth" /></td>
	    </tr>
	    <tr>
	    	<td></td>
	    <td><input type="submit" value="Submit Entry " name="submit"></td>
	    </tr>
<script type="text/javascript" src="jquery.js"></script>
	</table>
		
	</form>







</body>
</html>
