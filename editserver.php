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

</ul>
<button class="btn btn"  data-toggle="modal" data-target="#Modal" > Edit</button>
  <!-- Modal -->
  <div class="modal fade" id="Modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
    <div class="modal-content">
			<div class="modal-header w3-cyan" style="padding:35px 50px;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4><font color ="white"><span class="glyphicon glyphicon-plus"></span> AddNewServer</font></h4>
			</div>
			<div class="modal-body" style="padding:40px 50px;">
				<form role="form" method="post" action="updateserver.php">
					<div class="form-group">
						<label for="numeserver"> Server Name</label>
						<input type="text" class="form-control" name="numeserver" placeholder="Enter server name">
					</div>
					<div class="form-group">
						<label for="ip"> IP</label>
						<input type="text" class="form-control" name="ip" placeholder="Enter IP">
					
					</div>
					<div class="form-group">
						<label for="locatie"> Locatie</label>
						<input type="text" class="form-control" name="locatie" placeholder="Enter location">
				
					</div>
					<div class="form-group">
						<label for="asignat"> Asignat</label>
						<input type="text" class="form-control" name="asignat" placeholder="Enter asigned user">
				
					</div>
					<input type="submit" class="btn btn-success btn-block"  name="Submit" value="Register server" >
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
			</div>
		</div>
      
    </div>
  </div> 
  </ul>
  </body>
</html>