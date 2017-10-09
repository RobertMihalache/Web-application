<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <button class="btn btn-danger navbar-btn"><span class="glyphicon glyphicon-home"></span> Home</button>
	  
	    
  <!-- Trigger the modal with a button -->
	<button class="btn btn-danger navbar-btn"  data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-plus"> </span> Add new server</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Add new server</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
           <form role="form" method="post" action="servercheck.php">
            <div class="form-group">
              <label for="numeserver"><span class="glyphicon glyphicon-eye-open"></span> Nume server</label>
              <input type="text" class="form-control" id="numeserver" placeholder="Nume">
            </div>
			<div class="form-group">
              <label for="ip"><span class="glyphicon glyphicon-user"></span> Ip</label>
              <input type="text" class="form-control" id="ip" placeholder="Ip address">
            </div>
			<div class="form-group">
              <label for="locatie"><span class="glyphicon glyphicon-user"></span> Locatie</label>
              <input type="text" class="form-control" id="locatie" placeholder="Introduce locatie">
            </div>
			<div class="form-group">
              <label for="asignat"><span class="glyphicon glyphicon-user"></span> Asignat </label>
              <input type="text" class="form-control" id="asignat" placeholder="Numele tau">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Register</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 

	  
	  
	  <button class="btn btn-danger navbar-btn">List servers</button>
	   <button class="btn btn-danger navbar-btn">Login</button>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
	<form class="navbar-form navbar-right">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
	  
	  
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
	  
	  
  </div>
</nav>
  <?php
   require('connection.php');
  require('servercheck.php');
  

if ( $numeserver && $ip && $locatie && $asignat )
{	
	if ( !$numeserverErr && !$ipErr && !$locatieErr && !$asignatErr)
	{
$sql = "INSERT INTO servere (numeserver, ip, locatie, asignat)
VALUES ('$numeserver', '$ip', '$locatie', '$asignat')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}
mysqli_close($conn);
  
  ?>
 <div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" >.  <div class="well">Normal Well</div>
	</div>
    <div class="col-sm-4" >.  <div class="well">Normal Well</div>
	</div>
    <div class="col-sm-4" >.  <div class="well">Normal Well</div>
  </div>
</div>
<div class="row">
    <div class="col-sm-4" >.  <div class="well">Normal Well</div>
	</div>
    <div class="col-sm-4" >.  <div class="well">Normal Well</div>
	</div>
    <div class="col-sm-4" >.  <div class="well">Normal Well</div>
  </div>
</div>

<hr style="position: fixed; bottom: 2%; width:100%; text-align: center">
      <footer>
        <p style="position: fixed; bottom: 0; width:100%; text-align: center">roby_hd96@yahoo.ro</p>
      </footer>

</body>
</html>