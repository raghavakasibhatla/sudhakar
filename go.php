<?php
$servername = "3.82.17.250";
$username = "raghava";
$password = "raghava1,";
$dbname = "sudhakar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
}


.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

.error {color: #FF0000;}
.visual {color:   #800080;}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 10px;
  text-align: left;    
}
* {
  box-sizing: border-box;
  
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  float: right;

  body {
  background: #ccc;
  font: 87.5%/1.5em 'Lato', sans-serif;
  margin: 0;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

td {
  padding: 0;
}

.container {
  left: 50%;
  position: fixed;
  top: 50%;
  transform: translate(-50%, -50%);
}

.calendar-container {
  position: relative;
  width: 450px;
}

.calendar-container header {
  border-radius: 1em 1em 0 0;
  background: #e66b6b;
  color: #fff;
  padding: 3em 2em;
}

.day {
  font-size: 8em;
  font-weight: 900;
  line-height: 1em;
}

.month {
  font-size: 4em;
  line-height: 1em;
  text-transform: lowercase;
}

.calendar {
  background: #fff;
  border-radius: 0 0 1em 1em;
  -webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, .2), 0 3px 1px #fff;
  box-shadow: 0 2px 1px rgba(0, 0, 0, .2), 0 3px 1px #fff;
  color: #555;
  display: inline-block;
  padding: 2em;
}

.calendar thead {
  color: #e66b6b;
  font-weight: 700;
  text-transform: uppercase;
}

.calendar td {
  padding: .5em 1em;
  text-align: center;
}

.calendar tbody td:hover {
  background: #cacaca;
  color: #fff;
}

.current-day {
  color: #e66b6b;
}

.prev-month,
.next-month {
  color: #cacaca;
}

.ring-left,
.ring-right {
  position: absolute;
  top: 230px;
}

.ring-left { left: 2em; }
.ring-right { right: 2em; }

.ring-left:before,
.ring-left:after,
.ring-right:before,
.ring-right:after {
  background: #fff;
  border-radius: 4px;
  -webkit-box-shadow: 0 3px 1px rgba(0, 0, 0, .3), 0 -1px 1px rgba(0, 0, 0, .2);
  box-shadow: 0 3px 1px rgba(0, 0, 0, .3), 0 -1px 1px rgba(0, 0, 0, .2);
  content: "";
  display: inline-block;
  margin: 8px;
  height: 32px;
  width: 8px;
}
label{margin-left: 20px;}
#datepicker{width:180px; margin: 0 20px 20px 20px;}
#datepicker > span:hover{cursor: pointer;}


</style>
</head>
<body>

<div class="card">
  <center><img src="download.png"  alt="verdentum" style="width:40%"></center>
  <div class="container">
    
    <h4><b>CONTACT FORM </b></h4> 
    <a href="index.php" class="button">BACK</a>
    <br></br>
 
    <form action="form.php" method="POST" enctype="multipart/form-data">
FIRST NAME <span class="error">*  </span> <br>
  <input type="text"  name="name1" required="required"><br>
LAST NAME<span class="error">*  </span> <br>
<input type="text"  name="Lastname1" required="required"><br>

GENDER<span class="error">*  </span> <br>
<input type="radio" name="sex" value="Male" required="required">Male<br>
<input type="radio" name="sex" value="Female" required="required">Female<br>

DATE OF SCHEDULE INTERVIEW<span class="error">*  </span> <br>
<div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
    <input class="form-control" type="text" name="age1" readonly />
    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
</div>

TECHNOLOGY<span class="error">*  </span> <br>
<select name="tech1" size="1" required="required">
                <option value="SELECT A VALUE">SELECT A VALUE </option>
                <option value="PHP DEVELOPER">PHP DEVELOPER </option>
                <option value="JAVA">JAVA </option>
                <option value="AWS">AWS </option>
                <option value="TESTING">TESTING </option>
                <option value="ANDRIOD">ANDRIOD </option>
                <option value="PYTHON">PYTHON </option>
                <option value="POWER BI">POWERBI </option>
                <option value="INTERN">INTERN </option>
                <option value="DATA SCIENCE">DATA SCIENCE </option>
                <option value="AI">AI</option>
                <option value="FULL STACK DEVELOPER">FULL STACK DEVELOPER </option>
                <option value="OTHERS">OTHERS</option>
                </select><br>

EXPERIENCE IN YEARS <span class="error">*  </span> <br>
<select name="exp" size="1" required="required">
                <option value="SELECT A VALUE">SELECT A VALUE </option>
                <option value="NO EXPERIENCE">NO EXPERIENCE </option>
                <option value="1">1 </option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4 </option>
                <option value="5-8">5-8</option>
                <option value="9-11">9-11</option>
                <option value="ABOVE 11">ABOVE 11</option>
                <option value="FRESHER">FRESHER</option>
                </select><br>
HIGHEST EDUCATION QUALIFICATION <span class="error">*  </span> <br>
<select name="edu" size="1" required="required">
                <option value="SELECT A VALUE">SELECT A VALUE </option>
                <option value="B.TECH">B.TECH </option>
                <option value="B E">B E </option>
                <option value="DEGREE">DEGREE</option>
                <option value="DIPLOMA">DIPLOMA</option>
                <option value="SSC">SSC </option>
                <option value="M.TECH">M.TECH</option>
                <option value="Ph.d">Ph.d</option>
                <option value="LAW">LAW</option>
                <option value="OTHERS">OTHER</option>
                </select><br>

PAN NUMBER OR AADHAR<span clas
PAN NUMBER OR AADHAR:<span class="error">*  </span><br>
<input type="text" name="pan1" required="required"><br>
DATE OF BIRTH:<span class="error">*  </span> <br>
<div id="datepicker1" class="input-group date" data-date-format="mm-dd-yyyy">
    <input class="form-control" type="text" name="dateofbirth1" readonly />
    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
</div>


CURRENT CITY<span class="error">*  </span> <br>
<input type="text" name="village" required="required"><br>

E-MAIL ID<span class="error">*  </span> <br>
<input type="text" name="email" required="required"><br>


PHONE NUMBER<span class="error">*  </span> <br>
<input type="text" name="phone" required="required"><br>
<br></br>

  
    UPLOAD RESUME<span class="error">*  </span> 
    <input type="file" name="fileupload" id="fileToUpload" required="required">
    
 <input type="hidden" name="remarks" value="null">

<br></br>
<input type="submit"  name="login" ><br>
<p><span class="error">* Required field</span></p> 
  </div>
</div>
</form>

</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
  $(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
        format : 'yyyy-mm-dd'
  }).datepicker('update', new Date());
  });
$(function () {
  $("#datepicker1").datepicker({
        autoclose: true,
        todayHighlight: true,
        format : 'yyyy-mm-dd'
  }).datepicker('update', new Date());
});
</script>
</html> 
