<?php
	session_start();
	$email=$_POST["uname"];
	$pwd=$_POST["password"];
	$users=array(
	"admin@gmail.com"=>"jntuacep",
	"jntuacep@gmail.com"=>"csedept");

	if(isset($email))
	{
		if($users[$email]==$pwd)
		{
			$_SESSION['user']=$email;
			header("Location:adminpage.php");
		}
		else{
			echo "<script>window.alert('Invalid logins,Please Try agaain');
			window.location.href='home.php';
			</script>";
		}
	}