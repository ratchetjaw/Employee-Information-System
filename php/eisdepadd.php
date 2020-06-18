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
	
   echo  $_POST['dfname'], " ",$_POST['dlname'], " added as ", $_POST['rel'], " of ", $_POST['fname'], " ", $_POST['lname'];	
	echo "<br><br><br>"; 
	echo "<a href='rjeeis.php'><H6>DATABASE UPDATED - RETURN TO EMPLOYEE INFORMATION SYSTEM</h6></a></center>";
	 echo "<br><br><br>"; 
	
 	}

function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
$nameErr = $addrErr = $cszErr = $emailErr = "n";
 	
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["dfname"])) {
  	  $nameErr = "y";
 	 }
	 if (empty($_POST["dlname"])) {
  	  $nameErr = "y";
 	 }
	if (empty($_POST["ssno"])) {
  	  $addrErr = "y";
 	 }
	if (empty($_POST["dob"])) {
  	  $cszErr = "y";
 	 }
	 if (empty($_POST["rel"])) {
  	  $cszErr = "y";
 	 }
	 if (empty($_POST["empid"])) {
  	  $cszErr = "y";
 	 }
  }
         if ($nameErr == "y" or $addrErr == "y" or $cszErr == "y" ){
		ramsdorfer();
	        }
         else   {
        $rjeis_fname = $_POST['dfname'];
		$rjeis_lname = $_POST['dlname'];
       	$rjeis_dob = $_POST['dob'];
		$rjeis_ssno = $_POST['ssno'];
		$rjeis_rel = $_POST['rel'];
        $rjeis_empid = $_POST['empid'];
            $sql = "INSERT INTO dependents ". 
			"(first_name,
			last_name,
			dep_dob,
			dep_soc_sec,
			relationship,
			employee_id)".
  		   " VALUES			
		       ('$rjeis_fname',
			  '$rjeis_lname',
			  '$rjeis_dob',
			  '$rjeis_ssno',
			  '$rjeis_rel',
			  '$rjeis_empid')";


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