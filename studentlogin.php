<?php
error_reporting(0);

	session_start();
	$rollno=$_POST["uname"];
	$pwd=$_POST["password"];

$conn = new mysqli('localhost','root','root','jntuacep');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM register where rollno='$rollno' and pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    
        $_SESSION["rollno"] = "$rollno";
		header("Location:studentpage.php");
   
} else {
    echo "<script>window.alert('Invalid logins,Please Try agaain');
			window.location.href='home.php';
			</script>";
}

mysqli_close($conn);
?>