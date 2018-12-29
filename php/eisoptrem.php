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
		
   echo  "Options for listbox ",$_POST['desc1']," ", $_POST['desc2'], " have been deleted";
	echo "<br><br><br>"; 
	echo "<br><br><br>"; 
	echo "<a href='rjeeis.php'><H6>DATABASE UPDATED - RETURN TO EMPLOYEE INFORMATION SYSTEM</h6></a></center>";
	 echo "<br><br><br>"; 
	
 	}

$nameErr = $addrErr = $cszErr = $emailErr = "n";
 	
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["cntrol"])) {
  	  $nameErr = "y";
 	 }
       
     }
         
         if ($nameErr == "y" ){
		ramsdorfer();
	        }
         else   {
		$rjeis_cntrol = $_POST['cntrol'];
		 $dbhost = 'localhost:3036';
            $dbuser = 'gus';
            $dbpass = 'gus123';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            $sql = "DELETE FROM options ". 
  		   " WHERE	option_type = '$rjeis_cntrol'";	
            mysql_select_db('RJE');
            $retval = mysql_query( $sql, $conn );
            
       if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);        
//		stripform();
//   		insert();
		response();
	        }
     

echo "<h6>MMXVIII  ratchetjaw technologies</h6>"; 
echo "</body></html>";?>
	

