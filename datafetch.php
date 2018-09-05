<?php
	$conn = new mysqli('localhost','root','root','jntuacep');
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT sname,rollno,course,year,branch,email FROM register";
	$result = $conn->query($sql);
	echo "<table class='table table-bordered'><tr>
			<th>Name</th>
			<th>Roll No</th>
			<th>Email</th>
			<th>Course</th>
			<th>Year</th>
			<th>Branch</th></tr>
			";
	if ($result->num_rows > 0) {
	    // output data of each filepro_rowcount()			
	    
	    while($row = $result->fetch_assoc()) {
	    	echo "<tr>";
	        echo "<td>" . $row['sname']. "</td>";
	        echo "<td>" . $row['rollno']. "</td>";
	        echo "<td>" . $row['email']. "</td>";
	        echo "<td>" . $row['course']. "</td>";
	        echo "<td>" . $row['year']. "</td>";
	        echo "<td>" . $row['branch']. "</td>";
	        echo "</tr>";
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}
	$conn->close();
?>