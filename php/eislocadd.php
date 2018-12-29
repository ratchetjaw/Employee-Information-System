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
	
   echo  " ",$_POST['name'], " added to database";
	echo "<br><br><br>"; 
	echo "<a href='rjeeis.php'><H6>DATABASE UPDATED - RETURN TO EMPLOYEE INFORMATION SYSTEM</h6></a></center>";
	 echo "<br><br><br>"; 
	
 	}

$nameErr = $addrErr = $cszErr = $emailErr = "n";
 	
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["name"])) {
  	  $nameErr = "y";
 	 }
	if (empty($_POST["addr1"])) {
  	  $addrErr = "y";
 	 }
	if (empty($_POST["city"])) {
  	  $cszErr = "y";
 	 }
	 if (empty($_POST["state"])) {
  	  $cszErr = "y";
 	 }
	 if (empty($_POST["zip"])) {
  	  $cszErr = "y";
 	 }
       
     }
         
         if ($nameErr == "y" or $addrErr == "y" or $cszErr == "y" ){
		ramsdorfer();
	        }
         else   {
        $rjeis_locname = $_POST['name'];
        $rjeis_locaddr1 = $_POST['addr1'];
        $rjeis_locaddr2 = $_POST['addr2'];
 		$rjeis_loccity = $_POST['city'];
		$rjeis_locstate = $_POST['state'];   
  		$rjeis_loczip = $_POST['zip'];
            $sql = "INSERT INTO locations ". 
			"(loc_name,
			loc_address1,
			loc_address2,
			loc_city,
			loc_state,
			loc_zip)".
  		   "VALUES			
		       ('$rjeis_locname',
			  '$rjeis_locaddr1',
			  '$rjeis_locaddr2',
			  '$rjeis_loccity', 
			  '$rjeis_locstate',
			  '$rjeis_loczip')";
               
			$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE');
			
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

echo "<h6>MMXIX  ratchetjaw technologies</h6>"; 
echo "</body></html>";?>
	
