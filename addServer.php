  <?php
  if(isset($_POST['Submit']))
  {
	  header("location:ServerList.php");
  }
   require('connection.php');
   require('servercheck.php');
   require('index.php');


if(isset($_POST['Submit']))
{
	if(!empty($_POST['numeserver']) && !empty($_POST['ip']) && !empty($_POST['locatie']) && !empty($_POST['asignat']) && !$numeserverErr && !$ipErr && !$locatieErr && !$asignatErr){
		$numeserver=$_POST['numeserver'];
		$ip=$_POST['ip'];
		$locatie=$_POST['locatie'];
		$asignat=$_POST['asignat'];
		$sql = "SELECT numeserver,ip FROM servere WHERE ip='$ip' OR numeserver='$numeserver'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) == 0) {
			$sql = "INSERT INTO servere (numeserver,ip,locatie,asignat)
				VALUES ('$numeserver','$ip','$locatie','$asignat')";
			if (mysqli_query($conn, $sql)) {
				echo "New record created successfully";
			}
			else {	
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);  
			}
		}
		else {
			echo "Server name or IP is already in use";
		}
	}
	else
	{
		echo "Error:Please enter your server's data properly";
	}
}
else
{
	echo "Please enter your server's data";
}
mysqli_close($conn);
  
  ?>