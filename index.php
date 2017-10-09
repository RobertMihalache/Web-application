<!DOCTYPE html>
<html lang="en">
<script src="https://use.fontawesome.com/2f71195c1a.js"></script>
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
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<style>
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.facebook-icon,twitter-icon,instagram-{
  color: white;
}
.twitter-icon {
  color: white;
}
.instagram-icon {
  color: white;
}
</style>
</head>
<body>

<?php
require('session.php');
$facebookid = "https://ro-ro.facebook.com/nokia";
$facebookid1 = "https://twitter.com/Nokia";
$facebookid2 = "https://www.instagram.com/nokia/";
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <ul class="nav navbar-nav navbar-left">
	   <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Home</a>
  <a   data-toggle="modal" data-target="#myModal" href="#">AddNewServer</a>
  <a href="ServerList.php">List servers</a>
  <a href="loggin.php">Login</a>
  <a href="contact.php">Contact</a>
  <a href="logout.php">Logout</a>
</div>

<div id="main">
<font color ="white"><span style="font-size:15px;cursor:pointer" onclick="openNav()">&#9776;</span></font>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "230px";
    document.getElementById("main").style.marginLeft = "230px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
</ul>
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <button class="btn btn-danger navbar-btn"><a href="index.php"><font color ="white"><span class="glyphicon glyphicon-home"></span> Home</font></a></button>
	  
  <!-- Trigger the modal with a button -->
	<button class="btn btn-danger navbar-btn"  data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-plus"> </span> Add new server</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
    <div class="modal-content">
			<div class="modal-header w3-cyan" style="padding:35px 50px;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4><font color ="white"><span class="glyphicon glyphicon-plus"></span> AddNewServer</font></h4>
			</div>
			<div class="modal-body" style="padding:40px 50px;">
				<form role="form" method="post" action="addServer.php">
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

	     <button type="button" class="btn btn-danger"><a href="ServerList.php"><font color ="white"><span class="glyphicon glyphicon-th-list"></span> List Servers </font></a></button>
		
	   <button class="btn btn-danger navbar-btn"><a href="loggin.php"><font color ="white"><span class="glyphicon glyphicon-globe"></span> Login</font></a></button>
	   <button class="btn btn-danger navbar-btn"><a href="contact.php"><font color ="white"><span class="glyphicon glyphicon-envelope"></span> Contact</font></a></button>
	   <span class="fa-stack fa-lg">
	   <a href="<?php echo $facebookid?>" target="_blank"><i class="fa fa-facebook-official facebook-icon fa-stack-2x" aria-hidden="true" ></i></a>
	   </span>
	   <span class="fa-stack fa-lg">
	   <a href="<?php echo $facebookid1?>" target="_blank"><i class="fa fa-twitter twitter-icon fa-stack-2x" aria-hidden="true"></i></a>
	   </span>
	    <span class="fa-stack fa-lg">
	   <a href="<?php echo $facebookid2?>" target="_blank"><i class="fa fa-instagram instagram-icon fa-stack-2x" aria-hidden="true"></i></a>
	   </span>
	  
	 
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"name="logout" ></span> Logout</a></li>
    </ul>
	<form method="post" class="navbar-form navbar-right" action="search.php">
      <div class="input-group">
        <input type="text" class="form-control" name ="search" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
	  
	  
	  
	  
  </div>
</nav>


<hr style="position: fixed; bottom: 2%; width:100%; text-align: center">
      <footer>
        <p style="position: fixed; bottom: 0; width:100%; text-align: center">roby_hd96@yahoo.ro</p>
      </footer>

</body>
</html>