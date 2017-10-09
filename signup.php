<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>



   
			<div class="modal-header w3-lime" style="padding:100px 35px;">
		
			</div>
			<div class="modal-body" style="padding:90px 600px;">
			<form role="form" method="post" action="signup.php">
				
					<div class="form-group">
					<h4><span class="glyphicon glyphicon-user"></span> Sign up</h4>
						<label for="numeserver"> User</label>
						<input type="text" class="form-control" name="user" placeholder="Enter username">
					</div>
					<div class="form-group">
						<label for="ip"> Parola</label>
						<input type="password" class="form-control" name="parola" placeholder="parola">
					</div>
					<input type="submit" class="btn btn-warning w3-khaki"  name="Submit" value="Register" >
					</form>
				
			</div>
		
     
 


<?php

require('connection.php');
require('login-checkup.php');


if ( $user && $parola )
{	
$sql = "INSERT INTO user (user, parola)
VALUES ('$user', '$parola')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
		header("Location:loggin.php", false);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);


 

?>

</body>
</html>

