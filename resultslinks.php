<!DOCTYPE html>
			<html lang="en">
			<head>
			  <title>JNTUACEP Results</title>
			  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		</head>
		<body>
			<div class="container" style="padding-top: 10px">
        <div class="card">
            <div class="card-header">
                <center>
                  <img src="gallery/title_head.jpg">
                  
                </center>
            </div> 
            <div class="card-body text-center">
                <div id="content">
					<?php
						error_reporting(0);
						session_start();
						$btn=$_POST['get'];

						if ($btn=='Get') {
							
						$year=$_POST['year'];
						$sem=$_POST['sem'];
						$rollno=$_SESSION['rollno'];
						$conn = new mysqli('localhost','root','root','jntuacep');
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							}
							$sql = "SELECT * FROM results where  HTNO='$rollno' and Year='$year' and Semister='$sem'";
							$result = $conn->query($sql);
							echo "<table class='table table-bordered'><tr>
									<th>SUBCODE</th>
									<th>SUB NAME</th>
									<th>IM</th>
									<th>EM</th>
									<th>Total</th>
									<th>Grade</th>
									<th>Results</th>
									<th>Credits</th>

									</tr>
									";
							if ($result->num_rows > 0) {
							    // output data of each filepro_rowcount()			
							    
							    while($row = $result->fetch_assoc()) {
							    	echo "<tr>";
							        echo "<td>" . $row['SUBCODE']. "</td>";
							        echo "<td>" . $row['SUBNAME']. "</td>";
							        echo "<td>" . $row['IM']. "</td>";
							        echo "<td>" . $row['EM']. "</td>";
							        echo "<td>" . $row['TOTAL']. "</td>";
							        echo "<td>" . $row['GRADE']. "</td>";
							        echo "<td>" . $row['RESULT']. "</td>";
							         echo "<td>" . $row['CREDITS']. "</td>";
							        echo "</tr>";
							    }
							    echo "</table>";
							} else {
							    echo "0 results";
							}
							$conn->close();

						}
						?>
                </div>   
             </div>
            
            <div class="card-footer text-center"><i style="color: blue">Copy right@ All rights reserved by Jntuacep </i></div>
          </div>
        </div>
</body>
</html>