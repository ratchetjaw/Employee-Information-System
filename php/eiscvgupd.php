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

$nameErr = $addrErr = $cszErr = $emailErr = "n";
 	
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
	if (empty($_POST["name"])) {
  	  $nameErr = "y";
 	 }
	if (empty($_POST["coverage"])) {
  	  $addrErr = "y";
 	 }
	if (empty($_POST["level"])) {
  	  $cszErr = "y";
 	 }
	 if (empty($_POST["premium"])) {
  	  $cszErr = "y";
 	 }
       
}
         
         if ($nameErr == "y" or $addrErr == "y" or $cszErr == "y" ){
		ramsdorfer();
	        }
         else   {
        $rjeis_id = $_POST['id'];
		$rjeis_name = $_POST['name'];
        $rjeis_coverage = $_POST['coverage'];
        $rjeis_level = $_POST['level'];
 		$rjeis_premium = $_POST['premium'];
            $sql = "UPDATE coverage SET ". 
			"cvg_name = '$rjeis_name',
			cvg_coverage = '$rjeis_coverage',
			cvg_level = '$rjeis_level',
			cvg_premium = $rjeis_premium".
  		   " WHERE cvg_id = $rjeis_id";

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