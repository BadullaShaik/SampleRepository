<?php
session_start();

if($_SESSION['rollno'])
{

		echo '<!DOCTYPE html>
			<html lang="en">
			<head>
			  <title>JNTUACEP Student</title>
			  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
			  <style type="text/css">
			  	
			  	a:hover { 
			    			background-color: blue;
			    			border-radius: 100px;
						}
			  </style>
			  <script type="text/javascript">
			  	$(document).ready(function(){
			  		$("#sp").click(function(){
			  			$("#content").load("studentprofile.php");
			  		});
			  	});
			  	$(document).ready(function(){
			  		$("#res").click(function(){
			  			$("#content").load("resultpage.php");
			  		});
			  	});
			  </script>
			</head>
			<body>
					  	<div class="container" style="padding-top: 10px">
						        <div class="card">
						            <div class="card-header">
						                <center>
						                  <img src="gallery/title_head.jpg">
						                </center>
						            </div> 
						        </div>
						  	<nav class="navbar navbar-expand-md bg-success navbar-dark">
						  <!-- Brand -->
						  <a class="navbar-brand" href="#">';echo $_SESSION['rollno'];echo'</a>

						  <!-- Toggler/collapsibe Button -->
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <!-- Navbar links -->
						  <div class="collapse navbar-collapse" id="collapsibleNavbar">
						    <ul class="navbar-nav">
						      <li class="nav-item">
						        <a class="nav-link" href="http://jntuacep.ac.in" id="#">Home</a>

						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#" id="#">About</a>

						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#" id="sp">Profile</a>

						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#" id="res">Results</a>

						      </li>
						      <li class="nav-item"  style="position: absolute;right: 10px;">
						        <a class="nav-link" href="studentlogout.php">Logout</a>
						        
						      </li>
						    </ul>
						  </div> 
						</nav>
						<center>
							<div id="content" style="padding-top: 20px;">
							
							</div>
							<div id="content1" style="padding-top: 20px;">
							
							</div>
						</center>
						
				 </div>
			 </body>
			</html>';

}else{
	echo '<center><img src="gallery/error.png"><br><h3><a href="home.php">Click here Login</a></h3></center>';
}
?>