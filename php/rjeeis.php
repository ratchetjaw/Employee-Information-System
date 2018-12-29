<!DOCTYPE html>
<html>
<head><title>Ratchetjaw Enterprizes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>

body {
   border: 20px solid;
   border-color: #000080; 
   border-left-width: 25%;
   border-right-width:25%;
   background-color: red;
}
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}
html {
    font-family: "Lucida Sans", sans-serif;
}
.header {
    background-color: #99ccff;
    color: #000080;
    padding: 15px;
}
.subhead {
    background-color: #000080;
    color: #99ccff;
    padding: 10px;
}

.column {
    float: left;
    padding: 15px;
}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.content {
    background-color: #33b5e5;
    padding: 15px;
    color: red; 
    width: 50%;
    
}
.aside {
    padding: 15px;
    color: red; 
    width: 50%;
    float: right;
}
.footer {
    background-color: #000080;
    color: #ffffff;
    text-align: center;
    font-size: 12px;
    padding: 15px;
}
/* For mobile phones: */
[class*="col-"] {
    width: 100%;
}
@media only screen and (min-width: 600px) {
    /* For tablets: */
    .col-s-1 {width: 8.33%;}
    .col-s-2 {width: 16.66%;}
    .col-s-3 {width: 25%;}
    .col-s-4 {width: 33.33%;}
    .col-s-5 {width: 41.66%;}
    .col-s-6 {width: 50%;}
    .col-s-7 {width: 58.33%;}
    .col-s-8 {width: 66.66%;}
    .col-s-9 {width: 75%;}
    .col-s-10 {width: 83.33%;}
    .col-s-11 {width: 91.66%;}
    .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
}

.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
 
    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 1;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
    visibility: visible;
}

input[type=text], select {
    width: 60%;
    padding: 5px 5px;
    background-color: white;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 200px;-left: 400px;
    box-sizing: border-box;
}

input[type=textarea], select {
    width: 60%;
    padding: 5px 5px;
    background-color: white;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 200px;-left: 400px;
    box-sizing: border-box;
}
input[type=email], select {
    width: 60%;
    padding: 5px 5px;
    background-color: white;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 200px;-left: 400px;
    box-sizing: border-box;
}

input[type=tel], select {
    width: 60%;
    padding: 5px 5px;
    background-color: white;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 200px;-left: 400px;
    box-sizing: border-box;
}
input[type=date], select {
    width: 60%;
    padding: 5px 5px;
    background-color: white;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 200px;-left: 400px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 35%;
    background-color: :#99ccff;
    color: black;
    padding: 4px 5px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color:#3cb371;
}

/* Style the buttons that are used to open the tab content */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color:  #ee82ee;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>


<div class="header">
<?php 

$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select enterprize_id, enterprize_name from enterprizes where enterprize_id = 1 ");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name);
                  $id = $row['enterprize_id'];
                  $name = $row['enterprize_name']; 
	}
    echo "<center><h1>",$name,"</h1></center>";
   
?> 
<p id="head"></p>

</div>
<div class="subhead">
	
	<div class="tooltip">
	    <a href="../index.html">
	<i class="fa fa-home" style="font-size:48px;color:#3cb371";</style></i>
	  <span class="tooltiptext">Ratchetjaw Home</span></a>
	</div>

  <center><h3>Human Resources Information System</h3></center>
</div>
<div class="row">

	<div class="col-6 col-s-9">
	<div id="content" style="background-color : #ee82ee;">

		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'doc')">SEE QUICK START GUIDE</button>
		  <button class="tablinks" onclick="openCity(event, 'edit')">SELECT LISTBOX OPTIONS</button>
		  <button class="tablinks" onclick="openCity(event, 'enterprize')">COMPANY NAME TABLE MAINTANANCE</button>
		  <button class="tablinks" onclick="openCity(event, 'locations')">LOCATION TABLE MAINTANANCE</button>
		  <button class="tablinks" onclick="openCity(event, 'departments')">DEPARTMENT TABLE MAINTANANCE</button>
		  <button class="tablinks" onclick="openCity(event, 'coverage')">BENEFIT PLANS TABLE MAINTANANCE</button>
		  <button class="tablinks" onclick="openCity(event, 'jobs')">POSITION TABLE MAINTANANCE</button>
		  <button class="tablinks" onclick="openCity(event, 'emp_data')">EMPLOYEE INFO TABLE MAINTANANCE</button>
		  <button class="tablinks" onclick="openCity(event, 'report')">DATABASE REPORTING</button>
		</div>

<div id="doc" class="tabcontent">
  <h3>QUICK START GUIDE</h3>
<form id="qsgform" name="qsgform">
    <center>
<input id="showquick" onclick="showdoc()" type="button" value="QUICK START GUIDE" tabindex="1">
</form></center>
</div>
<div id="enterprize" class="tabcontent">
  <h3>Company Name Table</h3>
<form id="entform" name="entform">
    <center>
	<label for="entid">Company ID:</label><br>
    <input type="text" id="entid" name="entid" readonly>
	<br><br>
	<label for="entname">Enter Company Name:</label><br>
    <input type="text" id="entname" name="entname" placeholder="Company Name..." tabindex="1">
   <br><br></center>
	
    <label for="entadd">Add Company To Database:</label>
	<input id="entadd" name="entadd" onclick="enterprizeadd()" type="button" value="ADD COMPANY NAME" tabindex="2">
<br>
    <label for="entupd">Select Company To Update:</label>
	<select id="entupd" name="entupd" onchange="loadentform()" tabindex="3">
	   <option value="">--Select--</option>
<?php 

$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select enterprize_id, enterprize_name from enterprizes");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name);
                  $id = $row['enterprize_id'];
                  $name = $row['enterprize_name']; 
				  $string =  "<option value='";
				  $string .= $id;
				  $string .=  "' data-name='";
				  $string .= $name;
				  $string .=  "' data-id='";
				  $string .= $id;
				  $string .= "' >";
				  $string .= $name;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 
<input id="entupdbutton" onclick="enterprizeupd()" type="button" value="UPDATE COMPANY NAME" tabindex="4" disabled>

</form>
</div>

<div id="locations" class="tabcontent">
  <h3>Location Table</h3>
<form id="locform" name="locform">
    <center>
	<label for="locid">Location ID:</label><br>
    <input type="text" id="locid" name="locid" readonly>
	<br><br>
	<label for="locname">Enter Location Name:</label><br>
    <input type="text" id="locname" name="locname" placeholder="Location Name..." tabindex="1">
  <br> <br>
    <label for="locaddr1">Enter Location Address 1:</label><br>
    <input type="text" id="locaddr1" name="locaddr1" placeholder="Location Address 1..." tabindex="2">
  <br> <br>
    <label for="locaddr2">Enter Location Address 2:</label><br>
    <input type="text" id="locaddr2" name="locaddr2" placeholder="Location Address 2..." tabindex="3">
  <br> <br>
    <label for="loccity">Enter Location City:</label><br>
    <input type="text" id="loccity" name="loccity" placeholder="Location City..." tabindex="4">
  <br> <br>
    <label for="locstate">Enter Location State:</label><br>
    <input type="text" id="locstate" name="locstate" placeholder="Location State..." tabindex="5">
  <br> <br>
    <label for="loczip">Enter Location Zip:</label><br>
    <input type="text" id="loczip" name="loczip" placeholder="Location Zip..." tabindex="6">
  <br> <br></center>
    <label for="locadd">Add Location To Database:</label>
	<input id="locadd" name="locadd" onclick="locationadd()" type="button" value="ADD LOCATION INFO" tabindex="7">
<br>
    <label for="locupd">Select Location To Update:</label>
	<select id="locupd" name="locupd" onchange="loadlocform()" tabindex="8">
	   <option value="">--Select--</option>
<?php 

$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select loc_id, loc_name, loc_address1, loc_address2, loc_city, loc_state, loc_zip from locations");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name, $addr1, $addr2, $city, $state, $zip);
                  $id = $row['loc_id'];
                  $name = $row['loc_name']; 
				  $addr1 = $row['loc_address1'];
				  $city = $row['loc_city'];
				  $addr2 = $row['loc_address2'];
				  $state = $row['loc_state'];
				  $zip = $row['loc_zip'];
				  $string =  "<option value=";
				  $string .= $id;
				  $string .=  " data-id='";
				  $string .= $id;
				  $string .=  "' data-name='";
				  $string .= $name;
				  $string .=  "' data-addr1='";
				  $string .= $addr1;
				  $string .=  "' data-addr2='";
				  $string .= $addr2;
				  $string .=  "' data-city='";
				  $string .= $city;
				  $string .=  "' data-state='";
				  $string .= $state;
				  $string .=  "' data-zip='";
				  $string .= $zip;
				  $string .= "' >";
				  $string .= $name;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 
<input id="locupdbutton" onclick="locationupd()" type="button" value="UPDATE LOCATION INFO" tabindex="9" disabled>


</form>
</div>


<div id="departments" class="tabcontent">
  <h3>Department Table</h3>
<form id="dptform" name="dptform">
    <center>
	<label for="dptid">Department ID:</label><br>
    <input type="text" id="dptid" name="dptid" readonly>
	<br><br>
	<label for="dptname">Enter Department Name:</label><br>
    <input type="text" id="dptname" name="dptname" placeholder="Department Name..." tabindex="1">
  <br> <br>
	<label for="lid">Location ID:</label><br>
	<select id="lid" name="lid"  onchange="loadlocid()" tabindex="2">
	   <option value="">--Select--</option>

<?php 
$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select loc_id, loc_name, loc_id from locations");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name, $lid);
                  $id = $row['loc_id'];
                  $name = $row['loc_name']; 
				  $lid = $row['loc_id'];
				  $string =  "<option value='";
				  $string .= $id;
				  $string .=  "' data-id='";
				  $string .= $id;
				  $string .=  "' data-name='";
				  $string .= $name;
				  $string .=  "' data-lid='";
				  $string .= $lid;
				  $string .= "' >";
				  $string .= $name;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 

  <br><br></center>
	
    <label for="dptadd">Add Department To Database:</label>
	<input id="dptadd" name="dptadd" onclick="departmentadd()" type="button" value="ADD DEPARTMENT INFO" tabindex="3">
<br>

    <label for="dptupd">Select Department To Update:</label>
	<select id="dptupd" name="dptupd" onchange="loaddptform()" tabindex="4">
	   <option value="">--Select--</option>
<?php 

$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select department_id, department_name, loc_id from departments");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name, $lid);
                  $id = $row['department_id'];
                  $name = $row['department_name']; 
				  $lid = $row['loc_id'];
				  $string =  "<option value='";
				  $string .= $id;
				  $string .=  "' data-name='";
				  $string .= $name;
				  $string .=  "' data-id='";
				  $string .= $id;
				  $string .=  "' data-lid='";
				  $string .= $lid;
				  $string .= "' >";
				  $string .= $name;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 
<input id="dptupdbutton" onclick="departmentupd()" type="button" value="UPDATE DEPARTMENT INFO" tabindex="5" disabled>

</form>
</div>

<div id="coverage" class="tabcontent">
  <h3>Benefit Plans Table</h3>
<form id="cvgform" name="cvgform">
    <center>
	<label for="locid">Benefit ID:</label><br>
    <input type="text" id="cvgid" name="cvgid" readonly>
	<br><br>
	<label for="cvgname">Enter Carrier Name:</label><br>
    <input type="text" id="cvgname" name="cvgname" tabindex='1' placeholder="Carrier Name...">
  <br> <br>
    <label for="cvgcov">Enter Coverage:</label><br>
    <input type="text" id="cvgcov" name="cvgcov" tabindex='2'  placeholder="Coverage. ..">
  <br> <br>
    <label for="cvglvl">Enter Coverage Level:</label><br>
    <input type="text" id="cvglvl" name="cvglvl" tabindex='3'  placeholder="Coverage Level...">
  <br> <br>
    <label for="cvgprem">Monthly Premium:</label><br>
    <input type="text" id="cvgprem" name="cvgprem" tabindex='4'  placeholder="Monthly Premium...">
  <br> <br></center>

    <label for="cvgadd">Add Plan To Database:</label>
	<input id="cvgadd" name="cvgadd" onclick="coverageadd()" tabindex='5' type="button" value="ADD PLAN INFO">
	<br>

    <label for="cvgupd">Select Plan To Update:</label>
	<select id="cvgupd" name="cvgupd" tabindex='6' onchange="loadcvgform()" >
	   <option value="">--Select--</option>
<?php 

$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select cvg_id, cvg_name, cvg_coverage, cvg_level, cvg_premium from coverage");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name, $cov, $level, $prem);
                  $id = $row['cvg_id'];
                  $name = $row['cvg_name']; 
				  $cov = $row['cvg_coverage'];
				  $level = $row['cvg_level'];
				  $prem = $row['cvg_premium'];
				  $string =  "<option value=";
				  $string .= $id;
				  $string .=  " data-name='";
				  $string .= $name;
				  $string .=  "' data-cov='";
				  $string .= $cov;
				  $string .=  "' data-level='";
				  $string .= $level;
				  $string .=  "' data-prem=";
				  $string .= $prem;
				  $fullname = $name. " ". $cov. " ". $level;
				  $string .= " >";
				  $string .= $fullname;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 
<input id="cvgupdbutton" onclick="coverageupd()" tabindex='7' type="button" disabled value="UPDATE PLAN INFO">


</form>
</div>
<div id="jobs" class="tabcontent">
  <h3>Position Table</h3>
<center><form name="posform" id="posform">
	<label for="posid">Position ID:</label><br>
    <input type="text" id="posid" name="posid" readonly>
  <br> <br>
    <label for="posname">Enter Position Name:</label><br>
    <input type="text" id="posname" name="posname" placeholder="Position Name..." tabindex="1">
  <br> <br>
  	<label for="postype">Select Position Type</label><br>
    <select id="postype" name="postype" tabindex="2">
	  <option value="">--Select--</option>
<?php 
$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select option_id, option_name from options where option_type = 'ptype'");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name);
                  $id = $row['option_id'];
                  $name = $row['option_name']; 
				  $string =  "<option value='";
				  $string .= $id;
				  $string .= "' >";
				  $string .= $name;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 
  <br> <br>
    <input type="radio" name="paytype" id="salary" value="salary" onclick="setsalary()" tabindex='3' >Salary<br>
    <input type="radio" name="paytype" id="hourly" value="hourly" onclick="sethourly()" tabindex='4' >Hourly<br><br>
<div id="minrate">
</div>
<div id="maxrate">
</div>
  <br> <br></center>
    <label for="posadd">Add Position To Database:</label>
	<input id="posadd" name="posadd" onclick="positionadd()" tabindex="5"  type="button" value="ADD POSITION INFO">
<br>
    <label for="posupd">Select Position To Update:</label>
	<select id="posupd" name="posupd" onchange="loadposform()" tabindex="6" >
	   <option value="">--Select--</option>

<?php 

$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select job_id, job_title, job_type, min_salary, max_salary, rate_flag from jobs");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name, $flag, $type, $min, $max);
                  $id = $row['job_id'];
                  $name = $row['job_title']; 
				  $type = $row['job_type']; 
				  $flag = $row['rate_flag']; 
				  $min = $row['min_salary'];
				  $max = $row['max_salary'];
				  $string =  "<option value='";
				  $string .= $id;
				  $string .=  "' data-id='";
				  $string .= $id;
				  $string .=  "' data-flag='";
				  $string .= $flag;
				  $string .=  "' data-min='";
				  $string .= $min;
				  $string .=  "' data-max='";
				  $string .= $max;
				  $string .=  "' data-type='";
				  $string .= $type;
				  $string .=  "' data-title='";
				  $string .= $name;
				  $string .= "' >";
				  $string .= $name;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
	
   
?> 

<input id="posupdbutton" onclick="positionupd()" type="button" tabindex="7" value="UPDATE POSITION INFO"  disabled>
</form>
</div>
<div id="emp_data" class="tabcontent">
  <h3>Employee Information</h3>
<center><form id="empform" name="empform">
	<label for="empid">Employee ID:</label><br>
    <input type="text" id="empid" name="empid" readonly>
  <br> <br>
    <label for="fname">Enter Employee First Name:</label><br>
    <input type="text" id="fname" name="fname" placeholder="Employee First Name..." tabindex="1">
  <br> <br>
   <label for="lname">Enter Employee Last Name:</label><br>
    <input type="text" id="lname" name="lname" placeholder="Employee Last Name..." tabindex="2">
  <br> <br>
	<label for="pname">Enter Employee Preferred Name:</label><br>
	<input type="text" id="pname" name="pname" placeholder="Employee Preferred Name..." tabindex="3">
  <br> <br>
    <label for="jobhire">Enter Hire Date:</label><br>
    <input type="date" id="jobhire" name="jobhire" placeholder="Hire Date..." tabindex="4">
	<br> <br>
	<label for="dob">Employee Date Of Birth:</label><br>
    <input type="date" id="dob" name="dob" placeholder="Employee DOB..." tabindex="5">
    <br> <br>
	<label for="ssno">Employee SS No:</label><br>
	<input type="text" id="ssno" name="ssno" placeholder="555-55-5555" pattern="\d{3}-?\d{2}-?\d{4}" tabindex="6">
  <br> <br>
    <label for="email">Employee Email:</label><br>
    <input type="email" id="email" name="email" placeholder="Employee Email..." tabindex="7">
  <br> <br>
    <label for="phone">Employee Phone No:</label><br>
	<input type="tel" id="phone" name="phone" placeholder="(555) 555-1212" tabindex="8">
  <br> <br>
    <label for="mstat">Employee Marital Status:</label><br>
	 <select id="mstat" name="mstat" tabindex="9">
      <option value="">--Select--</option>

<?php 
$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select option_id, option_name from options where option_type = 'mstat'");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name);
                  $id = $row['option_id'];
                  $name = $row['option_name']; 
				  $string =  "<option value='";
				  $string .= $id;
				  $string .= "' >";
				  $string .= $name;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 
  <br> <br>
    <label for="addr1">Enter Employee Address 1:</label><br>
    <input type="text" id="addr1" name="addr1" placeholder="Employee Address 1..." tabindex="10">
  <br> <br>
    <label for="addr2">Enter Employee Address 2:</label><br>
    <input type="text" id="addr2" name="addr2" placeholder="Employee Address 2..." tabindex="11">
  <br> <br>
    <label for="city">Enter Employee City:</label><br>
    <input type="text" id="city" name="city" placeholder="City..." tabindex="12">
  <br> <br>
    <label for="state">Enter Employee State:</label><br>
    <input type="text" id="state" name="state" placeholder="State..." tabindex="13">
  <br> <br>
    <label for="zip">Enter Employee Zip:</label><br>
    <input type="text" id="zip" name="zip" placeholder="Zip..." tabindex="14">
  <br> <br></center>
<div id="addemployee" >
	<label for="empadd">Add Employee To Database:</label>
	<input id="empadd" name="empadd" onclick="employeeadd()" tabindex="15" type="button" value="ADD EMPLOYEE INFO">
<br>
</div>
    <label for="empupd">Select Employee:</label>
	<select id="empupd" name="empupd" onchange="loadempform()" tabindex="16" >
	   <option value="">--Select--</option>

<?php 

$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select employee_id, first_name, last_name, preferred_name, hire_date, emp_dob, emp_soc_sec, ".
			"email, phone_number, marital_status, address1, address2, res_city, res_state, zip_code from emp_data");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $fname, $lname, $pname, $hire, $dob, $ssn, $email, $phone, $mstat, $addr1, $addr2, $city, $state, $zip);
                  $id = $row['employee_id'];
                  $fname = $row['first_name']; 
				  $lname = $row['last_name']; 
				  $pname = $row['preferred_name']; 
				  $hire = $row['hire_date']; 
				  $dob = $row['emp_dob']; 
				  $ssn = $row['emp_soc_sec'];
				  $email = $row['email'];
				  $phone = $row['phone_number'];
				  $mstat = $row['marital_status'];
				  $addr1 = $row['address1'];
				  $city = $row['res_city'];
				  $addr2 = $row['address2'];
				  $state = $row['res_state'];
				  $zip = $row['zip_code'];
				  $fullname = $fname." ".$lname;
				  $string =  "<option value=";
				  $string .= $id;
				  $string .=  " data-id='";
				  $string .= $id;
				  $string .=  "' data-fname='";
				  $string .= $fname;
				  $string .=  "' data-lname='";
				  $string .= $lname;
				  $string .=  "' data-pname='";
				  $string .= $pname;
				  $string .=  "' data-hire='";
				  $string .= $hire;
				  $string .=  "' data-dob='";
				  $string .= $dob;
				  $string .=  "' data-ssn='";
				  $string .= $ssn;
				  $string .=  "' data-email='";
				  $string .= $email;
				  $string .=  "' data-phone='";
				  $string .= $phone;
				  $string .=  "' data-mstat='";
				  $string .= $mstat;
				  $string .=  "' data-addr1='";
				  $string .= $addr1;
				  $string .=  "' data-addr2='";
				  $string .= $addr2;
				  $string .=  "' data-city='";
				  $string .= $city;
				  $string .=  "' data-state='";
				  $string .= $state;
				  $string .=  "' data-zip='";
				  $string .= $zip;
				  $string .= "' >";
				  $string .= $fullname;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 
<div id="updateemployee" >
<input id="empupdbutton" onclick="employeeupd()" type="button" tabindex="17" value="UPDATE EMPLOYEE INFO" disabled>

<br>
<button type="button"   onclick="showbenform()" tabindex="18" id="showben" disabled >Add Benefits Info</button>
<button type="button"   onclick="showdepform()" tabindex="19" id="showdep" disabled >Add Dependents</button>
<button type="button"   onclick="showjobform()" tabindex="20" id="showjob" disabled >Add Job Info</button>

</div>
</form>
 
</div>

<div id="job_data" class="tabcontent">
  <h3>Job Table</h3>
<center><form id="jobform" name="jobform">
	<label for="empid">Employee ID:</label><br>
    <input type="text" id="empid" name="empid" readonly>
  <br> <br>
    <label for="effdate" >Enter Effective Date:</label><br>
    <input type="date" id="effdate" name="effdate" placeholder="Job Effective Date..." tabindex="1">
	<br> <br>
    <label for="jstat">Employee Status:</label><br>
	 <select id="jstat" name="jstat" tabindex="2">
	  <option value="">--Select--</option>

<?php 
$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select option_id, option_name from options where option_type = 'estat'");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name);
                  $id = $row['option_id'];
                  $name = $row['option_name']; 
				  $string =  "<option value='";
				  $string .= $id;
				  $string .= "' >";
				  $string .= $name;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 
   <br> <br>
    <label for="jperf">Performance Rating:</label><br>
	 <select id="jperf" name="jperf" tabindex="3">
	  <option value="">--Select--</optio>

<?php 
$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select option_id, option_name from options where option_type = 'jperf'");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name);
                  $id = $row['option_id'];
                  $name = $row['option_name']; 
				  $string =  "<option value='";
				  $string .= $id;
				  $string .= "' >";
				  $string .= $name;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 
	<br> <br>
	<label for="jpid" >Position ID:</label><br>
	 <select id="jpid" name="jpid" onchange="getpositionid()" tabindex="4">
	   <option value="">--Select--</option>
<?php 

$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select job_id, job_title, rate_flag, min_salary, max_salary from jobs");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name, $flag, $min, $max);
                  $id = $row['job_id'];
                  $name = $row['job_title']; 
			      $flag = $row['rate_flag']; 
				  $min = $row['min_salary'];
				  $max = $row['max_salary'];
				  $string =  "<option value=";
				  $string .= $id;
				  $string .=  " data-id='";
				  $string .= $id;
				  $string .=  "' data-flag='";
				  $string .= $flag;
				  $string .=  "' data-min=";
				  $string .= $min;
				  $string .=  " data-max=";
				  $string .= $max;
				  $string .=  " data-title='";
				  $string .= $name;
				  $string .= "' >";
				  $string .= $name;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 

	<br> <br>
<div id="jobrate">
</div>
	<label for="manid">Manager ID:</label><br>
	 <select id="manid" name="manid" onchange="getmanagerid()">
	   <option value="">--Select--</option>
<?php 

$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select employee_id, first_name, last_name from emp_data");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $fname, $lname);
                  $id = $row['employee_id'];
                  $fname = $row['first_name']; 
				  $lname = $row['last_name']; 
				  $fullname = $fname." ".$lname;
				  $string =  "<option value=";
				  $string .= $id;
				  $string .=  " data-id='";
				  $string .= $id;
				  $string .=  "' data-fname='";
				  $string .= $fname;
				  $string .=  "' data-lname='";
				  $string .= $lname;
				  $string .= "' >";
				  $string .= $fullname;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 
	<br> <br>
	<label for="jdptid">Department ID:</label><br>
	 <select id="jdptid" name="jdptid" onchange="getdepartmentid()" tabindex="6">
	   <option value="">--Select--</option>
<?php 

$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select department_id, department_name from departments");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name);
                  $id = $row['department_id'];
                  $name = $row['department_name']; 
				  $string =  "<option value=";
				  $string .= $id;
				  $string .=  " data-name='";
				  $string .= $name;
				  $string .=  "' data-id='";
				  $string .= $id;
				  $string .= "' >";
				  $string .= $name;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 
	<br> <br>
	</center>
	<label for="jobadd">Add Employee Job Record</label>
	<input id="jobadd" name="jobadd" onclick="jobrecordadd()" type="button" value="ADD EMPLOYEE JOB INFO" tabindex="7">
	<br><br>
	<button type="button"   onclick="showjobform()" >Return To Employee Form</button>
</form>
</div>

<div id="dependents" class="tabcontent">
  <h3>Dependent Table</h3>
<center><form id="depform" name="depform">
  	<label for="empid">Employee ID:</label><br>
    <input type="text" id="empid" name="empid" readonly>
  <br> <br>
    <label for="dfname">Dependent First Name:</label><br>
    <input type="text" id="dfname" name="dfname" placeholder="Dependent First Name..." tabindex="1">
  <br> <br>
    <label for="dlname">Dependent Last Name:</label><br>
    <input type="text" id="dlname" name="dlname" placeholder="Dependent Last Name..." tabindex="2">
  <br> <br>
    <label for="ddob">Dependent Date Of Birth:</label><br>
    <input type="date" id="ddob" name="ddob" placeholder="Dependent DOB..." tabindex="3">
    <br> <br>
	<label for="dssno">Dependent SS No:</label><br>
	<input type="text" id="dssno" name="dssno" placeholder="555-55-5555" pattern="\d{3}-?\d{2}-?\d{4}" tabindex="4">
  <br> <br>
    <label for="drel">Relationship:</label><br>
   	 <select id="drel" name="drel" tabindex="5">
      <option value="">--Select--</option>
<?php 
$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select option_id, option_name from options where option_type = 'drel'");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name);
                  $id = $row['option_id'];
                  $name = $row['option_name']; 
				  $string =  "<option value='";
				  $string .= $id;
				  $string .= "' >";
				  $string .= $name;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 
    <br> <br>
	</center>
 	<label for="depadd">Add Dependent</label>
	<input id="depadd" name="depadd" onclick="deprecordadd()" type="button" value="ADD DEPENDENT INFO" tabindex="6">

  <br> <br>
	<button type="button"   onclick="showdepform()" tabindex="7" >Return To Employee Form</button>
</form>
</div>

<div id="benefits" class="tabcontent">
  <h3>Employee Benefits Table</h3>
<center><form id="benform" name="benform">
  	<label for="empid">Employee ID:</label><br>
    <input type="text" id="empid" name="empid" readonly>
  <br> <br>
    <label for="bencov">Coverage ID:</label><br>
	<select id="bencov" name="bencov" onchange="getbenefitid()" tabindex="1">
      <option value="">--Select--</option
<?php 

$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select cvg_id, cvg_name, cvg_coverage, cvg_level, cvg_premium from coverage");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($id, $name, $cov, $level, $prem);
                  $id = $row['cvg_id'];
                  $name = $row['cvg_name']; 
				  $cov = $row['cvg_coverage'];
				  $level = $row['cvg_level'];
				  $prem = $row['cvg_premium'];
				  $string =  "<option value=";
				  $string .= $id;
				  $string .=  " data-id='";
				  $string .= $id;
				  $string .=  "' data-name='";
				  $string .= $name;
				  $string .=  "' data-cov='";
				  $string .= $cov;
				  $string .=  "' data-level='";
				  $string .= $level;
				  $string .=  "' data-prem=";
				  $string .= $prem;
				  $fullname = $name. " ". $cov. " ". $level;
				  $string .= " >";
				  $string .= $fullname;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 

  <br> <br>
    <label for="bendesc">Coverage Description:</label><br>
	<input type="text" id="bendesc" name="bendesc" tabindex="2">
	</center>
	<br> <br>
 	<label for="benadd">Add Employee Benefit</label>
	<input id="benadd" name="benadd" onclick="benrecordadd()" type="button" value="ADD BENEFITS INFO" tabindex="4">
  <br> <br>
	<button type="button"   onclick="showbenform()" tabindex="5" >Return To Employee Form</button>

</form>
</div>
<div id="edit" class="tabcontent">

  <h3>Add/Remove Listbox Options</h3>
<center><form name="editform" id="editform">
 
  <label >Edit Position Type Options</label><br>
	<button type="button"   onclick="addpositiontype()" tabindex='1' >Add Position Type</button>
	<input type="text" id="postypeadd" name="postypeadd" placeholder="Position Type To Add...." tabindex='2'>
	<button type="button"   onclick="rempositiontype()" tabindex='3' >Remove All Position Types</button>
  <br> <br>
  <label >Edit Marital Status Options</label><br>
	<button type="button"   onclick="addmaritalstatus()" tabindex='4' >Add Marital Status</button>
	<input type="text" id="mstatadd" name="mstatadd" tabindex='5' placeholder="Marital Status To Add....">
	<button type="button"   onclick="remmaritalstatus()" tabindex='6' >Remove Marital Status Options</button>
	<br> <br>
	<label >Edit Employee Status Options</label><br>
	<button type="button"   onclick="addempstatus()" tabindex='7' >Add Employee Status Type</button>
	<input type="text" id="empstatadd" name="empstatadd" tabindex='8' placeholder="Status Type To Add....">
	<button type="button"   onclick="remempstatus()" tabindex='9' >Remove All Status Types</button>
  <br> <br>
  <label >Edit Performance Options</label><br>
	<button type="button"   onclick="addperformance()"tabindex='10' >Add Performance Rating...</button>
	<input type="text" id="performadd" name="performadd" tabindex='11' placeholder="Performance Rating To Add....">
	<button type="button"   onclick="remperformance()" tabindex='12' >Remove Performance Options</button>
	<br> <br>
  <label >Edit Dependent Relationship Options</label><br>
	<button type="button"   onclick="addrelationship()" tabindex='13' >Add Dependent Relationship Options...</button>
	<input type="text" id="relationadd" name="relationadd" tabindex='14' placeholder="Dependent Relationship To Add....">
	<button type="button"   onclick="remrelationship()" tabindex='15' >Remove Dependent Relationship Options</button>
	<br> <br>
</form></center>
</div>

<div id="report" class="tabcontent">
  <h3>Electronic Rolodex</h3>
<button type="button"   onclick="openrolodex()" tabindex="1" id="rptbtn0" >Show Rolodex</button><br>

<button type="button"   onclick="closerolodex()" tabindex="2" disabled id="rptbtn00" >Close Rolodex</button><br>
<div id="custom">
  <h3>Custom Reports</h3>
<form id="rptform" name="rptform">

<button type="button"   onclick="rpthourly()" tabindex="18" id="rptbtn1" >Show Hourly Positions</button><br>
<button type="button"   onclick="erhourly()" tabindex="19" id="rptbtn2" >Employee Roster-Hourly Positions</button><br>
  <br> 
  
    <label for="dbtable">Select Table To View Columns:</label><br>
	<select id="dbtable" name="dbtable" onchange="getcolumns()" tabindex="1">
      <option value="">--Select--</option
<?php 

$conn = new mysqli('localhost', 'gus', 'gus123', 'RJE') 
or die ('Cannot connect to db');

    $result = $conn->query("select table_name from information_schema.columns where table_schema = 'RJE' GROUP BY table_name");

    while ($row = mysqli_fetch_assoc($result)) {

                  unset($name);
				  $name = $row['table_name']; 
				  $string =  "<option value=";
				  $string .= 1;
				  $string .=  " data-table=";
				  $string .= $name;
				  $string .= " >";
				  $string .= $name;
				  $string .= "</option>";
				  echo $string;
	}

    echo "</select>";
   
?> 
<br><br>
    <label for="rptsql">Enter Your SQL SELECT Statement Below:</label><br>
         <textarea style="width:60%" rows="10" name = "rptsql" id='rptsql' placeholder="" >
         </textarea>
	<br>
<button type="button"   onclick="submitquery()" tabindex="20" id="rptrun"  >Submit Query</button>
  <br> <br></center></form>
</div>
</div>
<script type="text/javascript">

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
function enterprizeadd() {
	var name = document.getElementById("entname").value;
	var dataString = 'entname=' + name;
	var program = 'eisentadd.php';
	phpajax(dataString, program);
}

function loadentform() {
	var cntrol = $("#entupd");
	var name = cntrol.find(':selected').data('name');
	var id = cntrol.find(':selected').data('id');
	document.forms["entform"]["entname"].value = name;	
	document.forms["entform"]["entid"].value = id;
	var updbtn = document.getElementById("entupdbutton");
	var addbtn = document.getElementById("entadd");
	updbtn.disabled = false;
	addbtn.disabled = true;
	//document.getElementById("head").innerHTML = ' <center><h1>' + name + '</h1></center>';
}	

function enterprizeupd() {
	var id = document.getElementById("entid").value;
	var name = document.getElementById("entname").value;
	var dataString = 'id=' + id + '&entname=' + name
	var program = 'eisentupd.php';
	phpajax(dataString, program);
}
function locationadd() {
	var name = document.getElementById("locname").value;
	var address1 = document.getElementById("locaddr1").value;
	var address2 = document.getElementById("locaddr2").value;
	var city = document.getElementById("loccity").value;
	var state = document.getElementById("locstate").value;
	var zip = document.getElementById("loczip").value;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'name=' + name + '&addr1=' + address1 + '&addr2=' + address2 + '&city=' + city + '&state=' + state + '&zip=' + zip;
	var program = 'eislocadd.php';
	phpajax(dataString, program);
}
function loadlocform() {
	var cntrol = $("#locupd");
	var name = cntrol.find(':selected').data('name');
	var addr1 = cntrol.find(':selected').data('addr1');
	var addr2 = cntrol.find(':selected').data('addr2');
	var city = cntrol.find(':selected').data('city');
	var state = cntrol.find(':selected').data('state');
	var zip = cntrol.find(':selected').data('zip');
	var id = cntrol.find(':selected').data('id');
	var updbtn = document.getElementById("locupdbutton");
	var addbtn = document.getElementById("locadd");
	updbtn.disabled = false;
	addbtn.disabled = true;
	document.forms["locform"]["locname"].value = name;	
	document.forms["locform"]["locaddr1"].value = addr1;	
	document.forms["locform"]["locaddr2"].value = addr2;
	document.forms["locform"]["loccity"].value = city;	
	document.forms["locform"]["locstate"].value = state;	
	document.forms["locform"]["loczip"].value = zip;	
	document.forms["locform"]["locid"].value = id;
}	

function locationupd() {
	var id = document.getElementById("locid").value;
	var name = document.getElementById("locname").value;
	var address1 = document.getElementById("locaddr1").value;
	var address2 = document.getElementById("locaddr2").value;
	var city = document.getElementById("loccity").value;
	var state = document.getElementById("locstate").value;
	var zip = document.getElementById("loczip").value;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'id=' + id + '&name=' + name + '&addr1=' + address1 + '&addr2=' + address2 + '&city=' + city + '&state=' + state + '&zip=' + zip;
	var program = 'eislocupd.php';
	phpajax(dataString, program);
}
function departmentadd() {
	var name = document.getElementById("dptname").value;
	var item = document.getElementById("lid");
	var location = item.options[item.selectedIndex].text;
	var dataString = 'dptname=' + name + '&locid=' + location;
	var program = 'eisdptadd.php';
	phpajax(dataString, program);
}

function loadlocid() {
	var cntrol = $("#lid");
	var lid = cntrol.find(':selected').data('lid');
	var item = document.getElementById("lid");
	item.options[item.selectedIndex].text = lid;
}	

function loaddptform() {
	var cntrol = $("#dptupd");
	var name = cntrol.find(':selected').data('name');
	var lid = cntrol.find(':selected').data('lid');
	var id = cntrol.find(':selected').data('id');
	var item = document.getElementById("lid");
	item.options[item.selectedIndex].text = lid;
	document.forms["dptform"]["dptname"].value = name;	
	document.forms["dptform"]["dptid"].value = id;
	var updbtn = document.getElementById("dptupdbutton");
	var addbtn = document.getElementById("dptadd");
	updbtn.disabled = false;
	addbtn.disabled = true;
}	

function departmentupd() {
	var id = document.getElementById("dptid").value;
	var name = document.getElementById("dptname").value;
	var item = document.getElementById("lid");
	var location = item.options[item.selectedIndex].text;
	var dataString = 'id=' + id + '&dptname=' + name + '&locid=' + location;
	var program = 'eisdptupd.php';
	phpajax(dataString, program);
}

function coverageadd() {
	var name = document.getElementById("cvgname").value;
	var coverage = document.getElementById("cvgcov").value;
	var level = document.getElementById("cvglvl").value;
	var premium = document.getElementById("cvgprem").value;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'name=' + name + '&coverage=' + coverage + '&level=' + level + '&premium=' + premium;
	var program = 'eiscvgadd.php';
	phpajax(dataString, program);
}
function loadcvgform() {
	var cntrol = $("#cvgupd");
	var name = cntrol.find(':selected').data('name');
	var coverage = cntrol.find(':selected').data('cov');
	var level = cntrol.find(':selected').data('level');
	var premium = cntrol.find(':selected').data('prem');
	document.forms["cvgform"]["cvgcov"].value = coverage;	
	var id = cntrol.val();  
	document.forms["cvgform"]["cvgname"].value = name;	
	document.forms["cvgform"]["cvglvl"].value = level;
	document.forms["cvgform"]["cvgprem"].value = premium;	
	document.forms["cvgform"]["cvgid"].value = id;
	var updbtn = document.getElementById("cvgupdbutton");
	var addbtn = document.getElementById("cvgadd");
	updbtn.disabled = false;
	addbtn.disabled = true;
}	

function coverageupd() {
	var id = document.getElementById("cvgid").value;
	var name = document.getElementById("cvgname").value;
	var coverage = document.getElementById("cvgcov").value;
	var level = document.getElementById("cvglvl").value;
	var premium = document.getElementById("cvgprem").value;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'id=' + id + '&name='  + name + '&coverage=' + coverage + '&level=' + level + '&premium=' + premium;
	var program = 'eiscvgupd.php';
	phpajax(dataString, program);
}
function positionadd() {
	var name = document.getElementById("posname").value;
	var item = document.getElementById("postype");
	var type = item.options[item.selectedIndex].text;
	var max = document.getElementById("posmax").value;
	var min = document.getElementById("posmin").value;
	var flag = 'salary';
	if (document.getElementById('hourly').checked) {
		flag = 'hourly';
	}
	var dataString = 'name=' + name + '&type=' + type + '&flag=' + flag + '&min=' + min + '&max=' + max;
	var program = 'eisposadd.php';
	phpajax(dataString, program);
}
function sethourly(){
	var x = "<label for='posmin'>Enter Minimum Hourly Rate:</label><br><input type='text' id='posmin' name='posmin' placeholder='Minimum Hourly Rate...' tabindex='5'><br><br>";
	var y = "<label for='posmax'>Enter Maximum Hourly Rate:</label><br><input type='text' id='posmax' name='posmax' placeholder='Maximum Hourly Rate...' tabindex='6'>";
	document.getElementById("minrate").innerHTML = x;
	document.getElementById("maxrate").innerHTML = y;
}

function setsalary(){
	var x = "<label for='posmin'>Enter Minimum Salary:</label><br><input type='text' id='posmin' name='posmin' placeholder='Minimum Salary...' tabindex='5'><br><br>";
	var y = "<label for='posmax'>Enter Maximum Salary:</label><br><input type='text' id='posmax' name='posmax' placeholder='Maximum Salary...' tabindex='6'>";
	document.getElementById("minrate").innerHTML = x;
	document.getElementById("maxrate").innerHTML = y;
}
function loadposform() {
	var cntrol = $("#posupd");
	var name = cntrol.find(':selected').data('title');
	var type = cntrol.find(':selected').data('type');
	var id = cntrol.find(':selected').data('id');
	var min = cntrol.find(':selected').data('min');
	var max = cntrol.find(':selected').data('max');
	var flag = cntrol.find(':selected').data('flag');
	if  (flag == 'hourly') {
		 document.getElementById("hourly").checked = true;
		 sethourly();
	}
	else {
		 document.getElementById("salary").checked = true;
		 setsalary();
	}
	document.forms["posform"]["posname"].value = name;	
	var item = document.getElementById("postype");
	item.options[item.selectedIndex].text = type;
	document.forms["posform"]["posid"].value = id;
	document.forms["posform"]["posmin"].value = min;	
	document.forms["posform"]["posmax"].value = max;	
	var updbtn = document.getElementById("posupdbutton");
	var addbtn = document.getElementById("posadd");
	updbtn.disabled = false;
	addbtn.disabled = true;
}	

function positionupd() {
	var id = document.getElementById("posid").value;
	var name = document.getElementById("posname").value;
	var item = document.getElementById("postype");
	var type = item.options[item.selectedIndex].text;
	var min = document.getElementById("posmin").value;
	var max = document.getElementById("posmax").value;
	var flag = 'salary';
	if (document.getElementById('hourly').checked) {
		flag = 'hourly';
	}
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'id=' + id + '&name=' + name + '&type=' + type + '&flag=' + flag + '&min=' + min + '&max=' + max;
	var program = 'eisposupd.php';
	phpajax(dataString, program);
}

function employeeadd() {
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var pname = document.getElementById("pname").value;
	var hire = document.getElementById("jobhire").value;
	var dob = document.getElementById("dob").value;
	var ssn = document.getElementById("ssno").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var item = document.getElementById("mstat");
	var mstat = item.options[item.selectedIndex].text;
	var address1 = document.getElementById("addr1").value;
	var address2 = document.getElementById("addr2").value;
	var city = document.getElementById("city").value;
	var state = document.getElementById("state").value;
	var zip = document.getElementById("zip").value;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'fname=' + fname + '&lname=' + lname +'&pname=' + pname + '&hire=' + hire +
		'&dob=' + dob + '&ssno=' + ssn + '&email=' + email + '&phone=' + phone + '&mstat=' + mstat +
		'&addr1=' + address1 + '&addr2=' + address2 + '&city=' + city + '&state=' + state + '&zip=' + zip;
	var program = 'eisempadd.php';
	phpajax(dataString, program);
}
function loadempform() {
	var cntrol = $("#empupd");
	var fname = cntrol.find(':selected').data('fname');
	var lname = cntrol.find(':selected').data('lname');
	var pname = cntrol.find(':selected').data('pname');
	var hire = cntrol.find(':selected').data('hire');
	var dob = cntrol.find(':selected').data('dob');
	var ssn = cntrol.find(':selected').data('ssn');
	var email = cntrol.find(':selected').data('email');
	var phone = cntrol.find(':selected').data('phone');
	var mstat = cntrol.find(':selected').data('mstat');
	var addr1 = cntrol.find(':selected').data('addr1');
	var addr2 = cntrol.find(':selected').data('addr2');
	var city = cntrol.find(':selected').data('city');
	var state = cntrol.find(':selected').data('state');
	var zip = cntrol.find(':selected').data('zip');
	var id = cntrol.find(':selected').data('id');
	document.forms["empform"]["fname"].value = fname;	
	document.forms["empform"]["lname"].value = lname;	
	document.forms["empform"]["pname"].value = pname;	
	document.forms["empform"]["jobhire"].value = hire;	
	document.forms["empform"]["dob"].value = dob;	
	document.forms["empform"]["ssno"].value = ssn;	
	document.forms["empform"]["email"].value = email;	
	document.forms["empform"]["phone"].value = phone;	
	var item = document.getElementById("mstat");
	item.options[item.selectedIndex].text = mstat;
	document.forms["empform"]["addr1"].value = addr1;	
	document.forms["empform"]["addr2"].value = addr2;
	document.forms["empform"]["city"].value = city;	
	document.forms["empform"]["state"].value = state;	
	document.forms["empform"]["zip"].value = zip;	
	document.forms["empform"]["empid"].value = id;
	var updbtn = document.getElementById("empupdbutton");
	var addbtn = document.getElementById("empadd");
	updbtn.disabled = false;
	addbtn.disabled = true;
	document.getElementById("showdep").disabled = false;
	document.getElementById("showjob").disabled = false;
	document.getElementById("showben").disabled = false;
}	

function employeeupd() {
	var id = document.getElementById("empid").value;
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var pname = document.getElementById("pname").value;
	var hire = document.getElementById("jobhire").value;
	var dob = document.getElementById("dob").value;
	var ssn = document.getElementById("ssno").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var item = document.getElementById("mstat");
	var mstat = item.options[item.selectedIndex].text;
	var address1 = document.getElementById("addr1").value;
	var address2 = document.getElementById("addr2").value;
	var city = document.getElementById("city").value;
	var state = document.getElementById("state").value;
	var zip = document.getElementById("zip").value;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'id=' + id + '&fname=' + fname + '&lname=' + lname +'&pname=' + pname + '&hire=' + hire +
		'&dob=' + dob + '&ssno=' + ssn + '&email=' + email + '&phone=' + phone + '&mstat=' + mstat +
		'&addr1=' + address1 + '&addr2=' + address2 + '&city=' + city + '&state=' + state + '&zip=' + zip;
	var program = 'eisempupd.php';
	phpajax(dataString, program);
}

function showjobform() {
    var x = document.getElementById("emp_data");
	var y = document.getElementById("job_data");
	if (y.style.display === "none") {
        y.style.display = "block";
		x.style.display = "none";
    } else {
        y.style.display = "none";
		x.style.display = "block";
    }
}

function showdepform() {
    var x = document.getElementById("dependents");
	var y = document.getElementById("emp_data");
    if (x.style.display === "none") {
		y.style.display = "none";
        x.style.display = "block";
    } else {
        x.style.display = "none";
		y.style.display = "block";
    }
}

function showbenform() {
    var x = document.getElementById("benefits");
	var y = document.getElementById("emp_data");
    if (x.style.display === "none") {
		y.style.display = "none";
        x.style.display = "block";
    } else {
        x.style.display = "none";
		y.style.display = "block";
    }
}
function showsalary() {
	var cntrol = $("#jpid");
  var flag = cntrol.find(':selected').data("flag");
  var title = 'Position ID : ' + cntrol.val() + '--' + cntrol.find(':selected').data('title');
  var min = cntrol.find(':selected').data("min");
  var max = cntrol.find(':selected').data("max");
  if ( flag == 'hourly' ) {
	var txtmin = 'Minimum Hourly Rate : ';
	var txtmax = 'Maximum Hourly Rate : ';
	var y = "<label for='posrate'>Enter Hourly Rate:</label><br><input type='text' id='posrate' name='posmax' placeholder='Hourly Rate...' tabindex='5'><br><br>";
	}
  else {
	var txtmin = 'Minimum Salary : ';
	var txtmax = 'Maximum Salary : ';
	var y = "<label for='posrate'>Enter Salary:</label><br><input type='text' id='posrate' name='posmax' placeholder='Salary...' tabindex='5'><br><br>";
  }
  var value = ', Value : ' + cntrol.val();     
  var finalvalue = title + "\n" + txtmin + min + "\n" + txtmax + max;
  document.getElementById("phpout").innerHTML = finalvalue;
  window.alert(finalvalue);
  document.getElementById("jobrate").innerHTML = y;
}
function getpositionid() {
	var cntrol = $("#jpid");
	var posid = cntrol.find(':selected').data('id');
	var item = document.getElementById("jpid");
	item.options[item.selectedIndex].text = posid;
	showsalary();
}	

function getmanagerid() {
	var cntrol = $("#manid");
	var manid = cntrol.find(':selected').data('id');
	var item = document.getElementById("manid");
	item.options[item.selectedIndex].text = manid;
}	
function getdepartmentid() {
	var cntrol = $("#jdptid");
	var dptid = cntrol.find(':selected').data('id');
	var item = document.getElementById("jdptid");
	item.options[item.selectedIndex].text = dptid;
}	

function jobrecordadd() {
	var empid = document.getElementById("empid").value;
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var effdate = document.getElementById("effdate").value;
	var item = document.getElementById("jstat");
	var jstat = item.options[item.selectedIndex].text;
	var item = document.getElementById("jperf");
	var jperf = item.options[item.selectedIndex].text;
	var item = document.getElementById("jpid");
	var posid = item.options[item.selectedIndex].text;
	var salary = document.getElementById("posrate").value;
	var item = document.getElementById("manid");
	var manid = item.options[item.selectedIndex].text;
	var item = document.getElementById("jdptid");
	var dptid = item.options[item.selectedIndex].text;
	var cntrol = $("#jpid");
    var min =  cntrol.find(':selected').data("min");
    var max =  cntrol.find(':selected').data("max");
	var flag =  cntrol.find(':selected').data("flag");
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'empid=' + empid + '&effdate=' + effdate + '&jstat=' + jstat + '&jperf=' + jperf + '&posid=' + posid + '&salary=' + salary + 
		'&manid=' + manid + '&dptid=' + dptid + '&fname=' + fname + '&lname=' + lname + '&flag=' + flag + '&min=' + min + '&max=' + max;
	var program = 'eisjobadd.php';
	phpajax(dataString, program);
}
function deprecordadd() {
	var empid = document.getElementById("empid").value;
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var dfname = document.getElementById("dfname").value;
	var dlname = document.getElementById("dlname").value;
	var dob = document.getElementById("ddob").value;
	var ssn = document.getElementById("dssno").value
	var item = document.getElementById("drel");
	var rel = item.options[item.selectedIndex].text;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'depid=' + depid + '&empid=' + empid + '&dfname=' + dfname + '&dlname=' + dlname + '&dob=' + dob + '&ssno=' + ssn + 
		'&rel=' + rel + '&fname=' + fname + '&lname=' + lname;
	var program = 'eisdepadd.php';
	phpajax(dataString, program);
}
function getbenefitid() {
	var cntrol = $("#bencov");
	var benid = cntrol.find(':selected').data('id');
	var item = document.getElementById("bencov");
	item.options[item.selectedIndex].text = benid;
	var desc = cntrol.find(':selected').data('name') + ' ' + cntrol.find(':selected').data('cov') + ' ' + cntrol.find(':selected').data('level');
	document.getElementById("bendesc").value = desc;
}	

function benrecordadd() {
	var empid = document.getElementById("empid").value;
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var item = document.getElementById("bencov");
	var covid = item.options[item.selectedIndex].text;
	var desc = document.getElementById("bendesc").value;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'empid=' + empid + '&covid=' + covid + '&covdesc=' + desc  + '&fname=' + fname + '&lname=' + lname;
	var program = 'eisbenadd.php';
	phpajax(dataString, program);
}
function addpositiontype() {
	var option = document.getElementById("postypeadd").value;
	var cntrol = 'ptype';
	var desc1 = 'position';
	var desc2 = 'type';
	var dataString = 'option=' + option + '&cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptadd.php';
	phpajax(dataString, program);
}

function rempositiontype() {
	var cntrol = 'ptype';
	var desc1 = 'position';
	var desc2 = 'type';
	var dataString = 'cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptrem.php';
	phpajax(dataString, program);
}

function addmaritalstatus() {
	var option = document.getElementById("mstatadd").value;
	var cntrol = 'mstat';
	var desc1 = 'marital';
	var desc2 = 'status';
	var dataString = 'option=' + option + '&cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptadd.php';
	phpajax(dataString, program);
}

function remmaritalstatus() {
	var cntrol = 'mstat';
	var desc1 = 'marital';
	var desc2 = 'status';
	var dataString = 'cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptrem.php';
	phpajax(dataString, program);
}

function addempstatus() {
	var option = document.getElementById("empstatadd").value;
	var cntrol = 'estat';
	var desc1 = 'employee';
	var desc2 = 'status';
	var dataString = 'option=' + option + '&cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptadd.php';
	phpajax(dataString, program);
}

function remempstatus() {
	var cntrol = 'estat';
	var desc1 = 'employee';
	var desc2 = 'status';
	var dataString = 'cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptrem.php';
	phpajax(dataString, program);
}

function addperformance() {
	var option = document.getElementById("performadd").value;
	var cntrol = 'jperf';
	var desc1 = 'performance';
	var desc2 = 'rating';
	var dataString = 'option=' + option + '&cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptadd.php';
	phpajax(dataString, program);
}

function remperformance() {
	var cntrol = 'jperf';
	var desc1 = 'performance';
	var desc2 = 'rating';
	var dataString = 'cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptrem.php';
	phpajax(dataString, program);
}

function addrelationship() {
	var option = document.getElementById("relationadd").value;
	var cntrol = 'drel';
	var desc1 = 'dependent';
	var desc2 = 'relationship';
	var dataString = 'option=' + option + '&cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptadd.php';
	phpajax(dataString, program);
}

function remrelationship() {
	var cntrol = 'drel';
	var desc1 = 'dependent';
	var desc2 = 'relationship';
	var dataString = 'cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptrem.php';
	phpajax(dataString, program);
}

function addmedcov() {
	var option = document.getElementById("medcovadd").value;
	var cntrol = 'med';
	var desc1 = 'medical';
	var desc2 = 'coverage';
	var dataString = 'option=' + option + '&cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptadd.php';
	phpajax(dataString, program);
}

function remmedcov() {
	var cntrol = 'med';
	var desc1 = 'medical';
	var desc2 = 'coverage';
	var dataString = 'cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptrem.php';
	phpajax(dataString, program);
}

function adddntcov() {
	var option = document.getElementById("dntcovadd").value;
	var cntrol = 'dnt';
	var desc1 = 'dental';
	var desc2 = 'coverage';
	var dataString = 'option=' + option + '&cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptadd.php';
	phpajax(dataString, program);
}

function remmedcov() {
	var cntrol = 'dnt';
	var desc1 = 'dental';
	var desc2 = 'coverage';
	var dataString = 'cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptrem.php';
	phpajax(dataString, program);
}


function add401k() {
	var option = document.getElementById("401kadd").value;
	var cntrol = '401k';
	var desc1 = '401k';
	var desc2 = 'contribution';
	var dataString = 'option=' + option + '&cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptadd.php';
	phpajax(dataString, program);
}

function rem401k() {
	var cntrol = '401k';
	var desc1 = '401k';
	var desc2 = 'contribution';
	var dataString = 'cntrol=' + cntrol + '&desc1=' + desc1 + '&desc2=' + desc2;
	var program = 'eisoptrem.php';
	phpajax(dataString, program);
}

function rpthourly() {
	var select = "SELECT job_title AS 'POSITION', job_type AS 'TYPE', min_salary AS 'MINIMUM HOURLY RATE', max_salary AS 'MAXIMUM HOURLY RATE' FROM jobs WHERE rate_flag = 'hourly';";
	document.getElementById("rptsql").value = select;
}

function erhourly() {
	var select = "SELECT a.first_name AS 'EMPLOYEE FIRST NAME', a.last_name AS 'EMPLOYEE LAST NAME',b.salary AS 'HOURLY RATE',d.job_title AS 'POSITION',e.department_name AS 'DEPARTMENT' " + 
	"FROM emp_data a, job_data b, jobs d, departments e " +
"WHERE a.employee_id = b.employee_id AND b.job_id = d.job_id AND b.department_id = e.department_id AND d.rate_flag = 'hourly' AND b.eff_date = (SELECT MAX(eff_date) FROM job_data c" +
            " WHERE c.employee_id = b.employee_id);";
	document.getElementById("rptsql").value = select;
}

function getcolumns() {
	var cntrol = $("#dbtable");
	var table = cntrol.find(':selected').data('table');
	var select = "SELECT column_name AS 'COLUMN NAME' FROM information_schema.columns WHERE table_name = '" + table + "';";
	document.getElementById("rptsql").value = select;
}
function submitquery() {
	var query = document.getElementById("rptsql").value;
	var dataString = 'sql=' + query;
	var program = 'eisrpthub.php';
	phpajax(dataString, program);
	
}
function phpajax(x,y) {
	$.ajax({
		type: "POST",
		url: y,
		data: x,
		cache: false,
		success: function(html) {
				document.getElementById("phpout").innerHTML = (html);
		}
	});
}

function showdoc() {
	var html = '<object width="100%" height="500px" data="../doc/eisqs.pdf"></object>';
    document.getElementById("phpout").innerHTML = ( html );
}

function openrolodex() {
    var w = document.getElementById("custom");
	var x = document.getElementById("emp_data");
	var y = document.getElementById("addemployee");
    var z = document.getElementById("updateemployee");
	var open = document.getElementById("rptbtn0");
	var close = document.getElementById("rptbtn00");
		close.disabled = false;
		open.disabled = true;
		y.style.display = "none";
		z.style.display = "none";
		w.style.display = "none";
		x.style.display = "block";
}

function closerolodex() {
    var w = document.getElementById("custom");
	var x = document.getElementById("emp_data");
	var y = document.getElementById("addemployee");
    var z = document.getElementById("updateemployee");
	var open = document.getElementById("rptbtn0");
	var close = document.getElementById("rptbtn00");
		close.disabled = true;
		open.disabled = false;
		y.style.display = "none";
		z.style.display = "none";
		x.style.display = "none";
		w.style.display = "block";
}

</script>
</div>
</div>
<div class="aside"><br>
    		<label id="phpout" >----</Label>
</div>
</div><div class="footer">
  <p><h5>MMXVIII Ratchetjaw Technologies</h5></p>
</div>

</body>
</html>