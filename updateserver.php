  <?php
   require('connection.php');
   require('servercheck.php');
$sql="SELECT numeserver,ip FROM servere WHERE ip='$ip' OR numeserver='$numeserver'";
$result = mysqli_query($conn, $sql);
$i=0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$id[$i]=$row["id"];
 if ( isset( $_POST['Submit'] ) ) {
   $sql = "UPDATE servere SET numeserver='$numeserver',ip='$ip',locatie='$locatie',asignat='$asignat' WHERE id='$id[i]'";
	   $delete=mysqli_query($conn, $sql);
		break;
		}
		else
		{
			echo "Please enter your server's data";
		}
	}
}
mysqli_close($conn);
  
  ?>
  
  