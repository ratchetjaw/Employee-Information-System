<?php

function dupee(){
   echo "<html><head><title>Ramsdorfer Process</title></head>";
	echo "<body bgcolor=red align=center style=margin-top: 10; margin-bottom: 0><i>";
	echo "<font face=Cambria size=5 color=black><center>";
	echo "*********************************************<br>";
	echo "*********************************************<br>";
	echo "*******   EFFECTIVE DATE EXCEPTION   ********<br>";
	echo "****", $_POST['fname'], " ",$_POST['lname'] , " HAS A JOB SEGMENT EFFECTIVE ", $_POST['effdate'], " ****<br>";
	echo "*********************************************<br>";
	echo "*********************************************<br>\r\n\r\n\r\n\r\n";
	echo "<a href='rjeeis.php'><H6>DATABASE NOT UPDATED - RETURN TO RETRY</h6></a></center>";
	}

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

function salaryerror(){
   echo "<html><head><title>Ramsdorfer Process</title></head>";
	echo "<body bgcolor=red align=center style=margin-top: 10; margin-bottom: 0><i>";
	echo "<font face=Cambria size=5 color=black><center>";
	echo "*********************************************<br>";
	echo "*********************************************<br>";
	echo "****   SALARY OUT OF RANGE EXCEPTION   *****<br>";
	echo "****   MUST BE BETWEEN ", $_POST['min'], " AND ",$_POST['max'] , "****<br>";
	echo "*********************************************<br>";
	echo "*********************************************<br>\r\n\r\n\r\n\r\n";
	echo "<a href='rjeeis.php'><H6>DATABASE NOT UPDATED - RETURN TO RETRY</h6></a></center>";
	}
	
function hourlyerror(){
   echo "<html><head><title>Ramsdorfer Process</title></head>";
	echo "<body bgcolor=red align=center style=margin-top: 10; margin-bottom: 0><i>";
	echo "<font face=Cambria size=5 color=black><center>";
	echo "*********************************************<br>";
	echo "*********************************************<br>";
	echo "****   HOURLY RATE OUT OF RANGE EXCEPTION   *****<br>";
	echo "****   MUST BE BETWEEN ", $_POST['min'], " AND ",$_POST['max'] , "****<br>";
	echo "*********************************************<br>";
	echo "*********************************************<br>\r\n\r\n\r\n\r\n";
	echo "<a href='rjeeis.php'><H6>DATABASE NOT UPDATED - RETURN TO RETRY</h6></a></center>";
	}
function response(){
    echo "<html><head><title>User Authentication</title></head>\n";
	echo "<body bgcolor=#99CCFF align=center style=margin-top: 10; margin-bottom: 0><i>";
   echo "<font face=Cambria size=5 color=#000080><center>";
	echo "<br><br><br>"; 
	
   echo  "Job recod dated ", $_POST['effdate'], " added for ",$_POST['fname'], " ",$_POST['lname'];	
	echo "<br><br><br>";
	echo "<a href='rjeeis.php'><H6>DATABASE UPDATED - RETURN TO EMPLOYEE INFORMATION SYSTEM</h6></a></center>";
	 echo "<br><br><br>"; 
	
 	}

        
$nameErr = $addrErr = $cszErr = $emailErr = "n";
 	
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["effdate"])) {
  	  $nameErr = "y";
 	 }
	 if (empty($_POST["jstat"])) {
  	  $nameErr = "y";
 	 }
	if (empty($_POST["jperf"])) {
  	  $addrErr = "y";
 	 }
	if (empty($_POST["posid"])) {
  	  $cszErr = "y";
 	 }
	 if (empty($_POST["salary"])) {
  	  $cszErr = "y";
 	 }
	 if (empty($_POST["manid"])) {
  	  $cszErr = "y";
 	 }
  }
         if ($nameErr == "y" or $addrErr == "y" or $cszErr == "y" ){
		ramsdorfer();
	    }
		elseif ( $_POST['salary'] < $_POST['min'] or $_POST['salary'] > $_POST['max'] ) {
			if ($_POST['flag'] == 'hourly') {
				hourlyerror();
			}
				else {
				salaryerror();
			}
		}
         else   {
        $job_empid = $_POST['empid'];
		$job_effdate = $_POST['effdate'];
		$job_status = $_POST['jstat'];
		$job_performance = $_POST['jperf'];
		$job_posid = $_POST['posid'];
		$job_salary = $_POST['salary'];
		$job_manid = $_POST['manid'];
		$job_dptid = $_POST['dptid'];
        $job_min = $_POST['min'];
	    $job_max = $_POST['max'];
            $sql = "INSERT INTO job_data ". 
			"(employee_id,
			eff_date,
			status,
			performance,
			job_id,
			salary,
			manager_id,
			department_id)".
  		   "VALUES			
		       ('$job_empid',
			  '$job_effdate',
			  '$job_status',
			  '$job_performance',
			  '$job_posid',
			  $job_salary,
			  '$job_manid',
			  '$job_dptid')";       

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
	

