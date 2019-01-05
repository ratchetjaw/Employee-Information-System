<?php
function ramsdorfer(){
   echo "<html><head><title>Ramsdorfer Process</title>";
	echo "<link rel='icon' href='../img/favicon.ico' type='image/x-icon'></head>";
	echo "<body bgcolor=red align=center style=margin-top: 10; margin-bottom: 0><i>";
	echo "<font face=Cambria size=5 color=black><center>";
	echo "*********************************************<br>";
	echo "*********************************************<br>";
	echo "****   RAMSDORER    TRANSFER    FAILURE   ***<br>";
	echo "*********************************************<br>";
	echo "*********************************************<br>\r\n\r\n\r\n\r\n";

	echo "<h4>RAMSDORFER TRANSFER REQUIRES QUERY</h4><br><br><br></center>";
}

$nameErr = $addrErr = $cszErr = $emailErr = "n";
 	
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["rptsql"])) {
  	  $nameErr = "y";
 	 }
}
         
         if ($nameErr == "y" or $addrErr == "y" or $cszErr == "y" ){
		ramsdorfer();
	        }
         else   {
		
		echo "<html><head><title>Query Result</title>";
		
	echo "<link rel='icon' href='../img/favicon.ico' type='image/x-icon'></head>";
	echo "<body bgcolor=#99CCFF align=center style=margin-top: 10; margin-bottom: 0><i>";
        $rjeis_sql = $_POST['rptsql'];     
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
					
		   echo "<html><head><title>Invalid Query</title>";
		   	echo "<link rel='icon' href='../img/favicon.ico' type='image/x-icon'></head>";
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
	
