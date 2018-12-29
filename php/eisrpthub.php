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
	
   echo  " ",$_POST['name'], " ", $POST['coverage'], " ", $POST['level'], " added to database";
	echo "<br><br><br>"; 
	echo "<a href='rjeeis.php'><H6>DATABASE UPDATED - RETURN TO EMPLOYEE INFORMATION SYSTEM</h6></a></center>";
	 echo "<br><br><br>"; 
	
 	}

$nameErr = $addrErr = $cszErr = $emailErr = "n";
 	
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["sql"])) {
  	  $nameErr = "y";
 	 }
}
         
         if ($nameErr == "y" or $addrErr == "y" or $cszErr == "y" ){
		ramsdorfer();
	        }
         else   {
		
		echo "<html><head><title>User Authentication</title></head>\n";
		echo "<body bgcolor=#99CCFF align=center style=margin-top: 10; margin-bottom: 0><i>";
        $rjeis_sql = $_POST['sql'];     
		$conn = new mysqli('localhost', 'rpt', 'rpt123', 'RJE');
			
		if ($conn->connect_errno) {
			echo "Sorry, this website is experiencing problems.";
			echo "Error: Failed to make a MySQL connection, here is why: \n";
			echo "Errno: " . $conn->connect_errno . "\n";
			echo "Error: " . $conn->connect_error . "\n";
			exit;
		}
		if ($result = $conn->query($rjeis_sql)) {
			$fields_num = $result->field_count;
		}
		else {
					
		   echo "<html><head><title>Ramsdorfer Process</title></head>";
			echo "<body bgcolor=red align=center style=margin-top: 10; margin-bottom: 0><i>";
			echo "<font face=Cambria size=5 color=black><center>";
			echo "*********************************************<br>";
			echo "*********************************************<br>";
			echo "********  INVALID QUERY SUBMITTED   *********<br>";
			echo "*********************************************<br>";
			echo "*********************************************<br>\r\n\r\n\r\n\r\n";
			echo "<h4>PLEASE ENTER A VALID **SELECT** QUERY</h4></center><br><br><br>";
			exit;
		}
		
		if ($fields_num > 10) {
			echo "<font face=Cambria size=1 color=#000080><center>";
		}
		elseif ($fields_num > 7){
			echo "<font face=Cambria size=3 color=#000080><center>";
		}
		elseif ($fields_num > 3){
			echo "<font face=Cambria size=5 color=#000080><center>";
		}
		else{
			echo "<font face=Cambria size=6 color=#000080><center>";
		}
		echo "<table border='1'><tr>";
		for($i=0; $i<$fields_num; $i++){
			$field = $result->fetch_field();
			echo "<td>{$field->name}</td>";
		}
		echo "</tr>\n";
		while($row =  $result->fetch_assoc()){
			echo "<tr>";
			foreach($row as $cell)
				echo "<td>$cell</td>";
				echo "</tr>\n";
		} 
		$result->free();
		$conn->close();
		echo "<h6>MMXIX  ratchetjaw technologies</h6>"; 
		echo "</body></html>";
}
?>
	
