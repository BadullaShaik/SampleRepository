
<!DOCTYPE html>
<html>
	<body>

		<?php
		session_start();
		unset($_SESSION['rollno']);
		// destroy the session 
			session_destroy(); 
			//header("location:home.php");
			echo "<script>window.location.href='home.php';</script>";
			exit;
		?>

	</body>
</html>
