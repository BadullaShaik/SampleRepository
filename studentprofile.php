<?php
	error_reporting(0);
	session_start();
	$rollno=$_SESSION['rollno'];
	$conn = new mysqli('localhost','root','root','jntuacep');
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM register where rollno='$rollno'";
	$result = $conn->query($sql);
	echo "<center><table class='table table-bordered'>";			
	
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	echo "<tr><th>Name</th><td>" . $row['sname']. "</td></tr>";
	        echo "<tr><th>Roll No</th><td>" . $row['rollno']. "</td></tr>";
	        echo "<tr><th>Email</th><td>" . $row['email']. "</td></tr>";
	        echo "<tr><th>Course</th><td>" . $row['course']. "</td></tr>";
	        echo "<tr><th>Year</th><td>" . $row['year']. "</td></tr>";
	        echo "<tr><th>Branch</th><td>" . $row['branch']. "</td></tr>";
	    }
	    echo "</table></center>";
	} else {
	    echo "0 results";
	}
		$conn->close();
?>