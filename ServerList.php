<?php
if(isset($_POST['delete']))
{
	header('Location:ServerList.php');
}
if(isset($_POST['Submit']))
{
	header('Location:ServerList.php');
}
?>

<!DOCTYPE HTML> 
<html>
<head>
<!DOCTYPE HTML> 
<html>
<head>
<style>
div.table, th, td {
	width: 1000px;
	margin-left: 20%;
	margin-top: 10%;
	
}
th, td {
	width: 1000px;
    padding: 5px;
}
</style>
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
<?php require('index.php');
require('connection.php');
require('servercheck.php');?>
<div class="table">
<table class="table table-hover">
<thead>
  <tr class="w3-amber">
    <td>ID</td>
    <td>Nume Server</td>
    <td>IP</td>
    <td>Locatie</td>
	<td>Asignat</td>
	<td>Delete</td>
	<td>Edit</td>
  </tr>
  </thead>
  <tbody>
<?php
$sql="SELECT * FROM servere WHERE 1 ORDER BY id";
$result = mysqli_query($conn, $sql);
$i=0;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
		$id[$i]=$row["id"];
		if(isset($_POST['delete']))
		{
			$id=$_POST['id'];
			$sql="DELETE FROM servere WHERE id='$id'";
			$delete=mysqli_query($conn, $sql);
			break;
		}
		elseif(isset($_POST['Submit']))
		{
			$id=$_POST['id'];
			$sql="UPDATE servere SET numeserver='$numeserver',ip='$ip',locatie='$locatie',asignat='$asignat' WHERE id='$id'";
			$edit=mysqli_query($conn, $sql);
			break;
		}
		else{
			?>
					<tr><td> 
				<?php echo $row["id"];?> 
				</td><td>
				<?php echo $row["numeserver"];?> 
				</td><td>
				<?php echo $row["ip"];?>
				</td><td>
				<?php echo $row["locatie"];?>
				</td><td>
				<?php echo $row["asignat"];?> 
				</td><td>
				<form method="post" ><input type="hidden" name="id" value="<?php echo $id[$i];?>"><input type="submit" class="btn btn-default btn-block w3-green" value="Delete" name="delete">
				</form>
				</td><td>
				<button class="btn btn-default btn-block w3-cyan" data-toggle="modal" data-target="#myModal<?php echo $id[$i];?>">Edit</button>
				<div id="myModal<?php echo $id[$i];?>" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header w3-cyan" style="padding:35px 50px;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4><span class="glyphicon glyphicon-pencil"></span> Edit</h4>
						</div>
						<div class="modal-body" style="padding:40px 50px;">
							<form role="form" method="post">
								<div class="form-group">
									<label for="name"> Server Name</label>
									<input type="text" class="form-control" name="numeserver" placeholder="Enter server name" value="<?php echo $row['numeserver']?>">
								</div>
								<div class="form-group">
									<label for="IP"> IP</label>
									<input type="text" class="form-control" name="ip" placeholder="Enter IP" value="<?php echo $row['ip'];?>">
								</div>
								<div class="form-group">
									<label for="locatie"> Locatie</label>
									<input type="text" class="form-control" name="locatie" placeholder="Enter location" value="<?php echo $row['locatie'];?>">
								</div>
								<div class="form-group">
									<label for="asignat"> Asignat</label>
									<input type="text" class="form-control" name="asignat" placeholder="Enter asigned user" value="<?php echo $row['asignat'];?>">
								</div>
								<div>
									<span class="icon-input-btn"><input type="hidden" name="id" value="<?php echo $id[$i];?>"><input type="submit" class="btn btn-default btn-success btn-block " name="Submit" value="Submit"></span> 
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
						</div>
					</div>
		
				</div>
				</div>
			</td></tr>
			
			<?php
		}
		$i++;

	}
}



mysqli_close($conn);
?>
</tbody>
</table>
</div>
</body>
</html>