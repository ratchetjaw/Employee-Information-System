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

function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
$nameErr = $addrErr = $cszErr = $emailErr = "n";
 	
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["fname"])) {
  	  $nameErr = "y";
 	 }
	 if (empty($_POST["lname"])) {
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
	if (empty($_POST["email"])) {
               $emailErr = "y";
         }else {
               $email = test_input($_POST["email"]);
             if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "y"; 
               }
         }
       
     }
         
         if ($nameErr == "y" or $addrErr == "y" or $cszErr == "y" or $emailErr == "y" ){
//	echo '<h4>$nameErr'1'$addrErr'2'$cszErr'3'$emailErr'4'</h4>';
		ramsdorfer();
	        }
         else   {
        $rjeis_fname = $_POST['fname'];
		$rjeis_lname = $_POST['lname'];
        $rjeis_pname = $_POST['pname'];
		$rjeis_hire = $_POST['hire'];
		$rjeis_dob = $_POST['dob'];
		$rjeis_ssno = $_POST['ssno'];
        $rjeis_email = $_POST['email'];
		$rjeis_phone = $_POST['phone'];
		$rjeis_mstat = $_POST['mstat'];
        $rjeis_addr1 = $_POST['addr1'];
        $rjeis_addr2 = $_POST['addr2'];
 		$rjeis_city = $_POST['city'];
		$rjeis_state = $_POST['state'];   
  		$rjeis_zip = $_POST['zip'];
        $rjeis_id = $_POST['id'];   

			$sql = "UPDATE emp_data ".
				"SET first_name = '$rjeis_fname', last_name = '$rjeis_lname', preferred_name = '$rjeis_pname', hire_date = '$rjeis_hire', ".
				"emp_dob = '$rjeis_dob', emp_soc_sec = '$rjeis_ssno', email = '$rjeis_email', phone_number = '$rjeis_phone', marital_status = '$rjeis_mstat', ".
				"address1 = '$rjeis_addr1', address2 = '$rjeis_addr2', res_city = '$rjeis_city', res_state = '$rjeis_state', zip_code = '$rjeis_zip' ".
				"WHERE employee_id = $rjeis_id";

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