<?php
function ramsdorfer(){
   echo "<html><head><title>Ramsdorfer Process</title></head>";
	echo "<body bgcolor=red align=center style=margin-top: 10; margin-bottom: 0><i>";
	echo "<font face=Cambria size=5 color=black><center>";
	echo "*********************************************<br>";
	echo "*********************************************<br>";
	echo "****   RAMSDORER    TRANSFER    FAILURE   ***<br>";
	echo "*********************************************<br>";
	echo "*********************************************<br>\r\n\r\n\r\n\r\n";
	echo "<h4>RAMSDORFER TRANSFER REQUIRES ALL FIELDS</h4><br><br><br>";
	echo "<a href='rjeeis.php'><H6>DATABASE NOT UPDATED - RETURN TO RETRY</h6></a></center>";
}
function response(){
    echo "<html><head><title>User Authentication</title></head>\n";
	echo "<body bgcolor=#99CCFF align=center style=margin-top: 10; margin-bottom: 0><i>";
   echo "<font face=Cambria size=5 color=#000080><center>";
	echo "<br><br><br>"; 
   echo  " ",$_POST['entname'], " added to database";
	echo "<br><br><br>"; 
	echo "<br><br><br>"; 
	echo "<a href='rjeeis.php'><H6>DATABASE UPDATED - RETURN TO EMPLOYEE INFORMATION SYSTEM</h6></a></center>";
	 echo "<br><br><br>"; 
	
}

	$nameErr = $addrErr = $cszErr = $emailErr = "n";
 	
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
		if (empty($_POST["entname"])) {
			$nameErr = "y";
 	    }
       
	}
         
         if ($nameErr == "y" ){
			ramsdorfer();
	     }
         else   {
			$rjeis_entname = $_POST['entname'];
            $sql = "INSERT INTO enterprizes ". 
			"(enterprize_name )".
  		   "VALUES			
		       ('$rjeis_entname')";
               

		include 'cpfile.php';
		include 'snfile.php';
		include 'unfileg.php';
		include 'pwfileg.php';
		include 'dbfile.php';

			$conn = new mysqli($servername, $username, $password, $dbname);

			
			if ($conn->connect_errno) {
				echo "Sorry, this website is experiencing problems.";
				echo "Error: Failed to make a MySQL connection, here is why: \n";
				echo "Errno: " . $conn->connect_errno . "\n";
				echo "Error: " . $conn->connect_error . "\n";
				exit;
			}
			
            if (mysqli_query($conn, $sql)) {
				
				response();
            } 
			else {
				echo "Error: " . $sql . "" . mysqli_error($conn);
            }
			
            $conn->close();
		 }

echo $cpfooter; 
echo "</body></html>";?>
	
