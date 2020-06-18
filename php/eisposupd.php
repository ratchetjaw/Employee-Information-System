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
	 echo  "ID ",$_POST['id'], " updated";
	echo "<br><br><br>"; 
	echo "<a href='rjeeis.php'><H6>DATABASE UPDATED - RETURN TO EMPLOYEE INFORMATION SYSTEM</h6></a></center>";
	 echo "<br><br><br>"; 
	
 	}

include 'cpfile.php';
include 'snfile.php';
include 'unfileg.php';
include 'pwfileg.php';
include 'dbfile.php';

$nameErr = $addrErr = $cszErr = $emailErr = "n";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["name"])) {
  	  $nameErr = "y";
 	 }
	 if (empty($_POST["type"])) {
  	  $nameErr = "y";
 	 }
	 if (empty($_POST["flag"])) {
  	  $nameErr = "y";
 	 }
	if (empty($_POST["min"])) {
  	  $addrErr = "y";
 	 }
	if (empty($_POST["max"])) {
  	  $cszErr = "y";
 	 }
  }
         
         if ($nameErr == "y" or $addrErr == "y" or $cszErr == "y" or $emailErr == "y" ){
//	echo '<h4>$nameErr'1'$addrErr'2'$cszErr'3'$emailErr'4'</h4>';
		ramsdorfer();
	        }
         else   {
        $pos_id = $_POST['id'];
		$pos_name = $_POST['name'];
		$pos_type = $_POST['type'];
		$pos_flag = $_POST['flag'];
        $pos_min = $_POST['min'];
	    $pos_max = $_POST['max'];
            $sql = "UPDATE jobs ".
					"SET job_title = '$pos_name', job_type = '$pos_type', rate_flag = '$pos_flag', min_salary = $pos_min, max_salary = $pos_max".
					" WHERE job_id = $pos_id";

			
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