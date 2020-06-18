<?php
            $sql =  $_POST['sql']; 
			
            $con =  $_POST['con']; 
			
			$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE');
			
			if ($conn->connect_errno) {
				echo "Sorry, this website is experiencing problems.";
				echo "Error: Failed to make a MySQL connection, here is why: \n";
				echo "Errno: " . $conn->connect_errno . "\n";
				echo "Error: " . $conn->connect_error . "\n";
				exit;
			}
			
            if (mysqli_query($conn, $sql)) {
               echo $con;
            } 
			else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
			
            $conn->close();
?>