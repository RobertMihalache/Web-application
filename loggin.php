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
</head>
<body>



   
			<div class="modal-header" style="padding:100px 35px;">
			</div>
			<div class="modal-body" style="padding:90px 600px;">
			<form role="form" method="post" action="loggin.php">
					<h4><span class="glyphicon glyphicon-grain"></span> Login</h4>
					<div class="form-group">
						<label for="numeserver"> User</label>
						<input type="text" class="form-control" name="user" placeholder="Enter username">
					</div>
					<div class="form-group">
						<label for="ip"> Parola</label>
						<input type="password" class="form-control" name="parola" placeholder="parola">
					
					</div>
					<input type="submit" class="btn btn-success"  name="Submit" value="Login" >
					<input type="submit" class="btn btn-success "  name="SignUp" value="Sign Up" >
					</form>
				
			</div>
		
     
 


<?php


require('connection.php');
require('login-checkup.php');


$sql = "SELECT user, parola FROM user WHERE user='$user' AND parola='$parola'";
$result = mysqli_query($conn, $sql);

if ( isset( $_POST['Submit'] ) ) {
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "user: " . $row["user"]. " - parola: " . $row["parola"]. "<br>";
		session_start();
		$_SESSION['user']=$_REQUEST['user'];
		$_SESSION['parola']=$_REQUEST['parola'];
		header("location:index.php");
		
    }
} else {
    echo "User incorect sau parola incorecta";
}
   
    exit; // added to stop execution if more code is below it
}
if ( isset( $_POST['SignUp'] ) )
	header("Location:signup.php", false);

 

?>

</body>
</html>