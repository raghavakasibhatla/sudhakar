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

</style>
</head>
<body>




<div class="card">
  <form action="index.php" method="POST">
  <a href="index.php" class="button">BACK TO HOME PAGE</a>
    <br></br>
  </form>
  <?php 


  $sql = "SELECT * FROM sudhakar_1 ORDER BY id DESC";  
$result = $conn->query($sql);
?>

    <h2>Saved data in Verdentum</h2>
<p>List of available data</p>

<table style="width:100%">
  <tr span class="visual">
    <th>NAME</th>
    <th>LAST NAME</th>
    <th>GENDER</th>
    <th>DATE OF SCHEDULE INTERVIEW</th>
    <th>TECHNOLOGY</th>
    <th>EXPERIENCE IN YEARS</th>
    <th>QUALIFICATION</th>
    <th>PAN NUMBER</th>
    <th>DATE OF BIRTH</th>
    <th>CURRENT CITY</th>
    <th>E-MAIL ID</th>
    <th>PHONE NUMBER</th>
    <th>EDIT</th>
    <th>REMARKS</th>
    
  </tr>
<?php

if ($result->num_rows > 0) {
    // output data of each row


    while($row = $result->fetch_assoc()) { ?>

  
  <tr>
    
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['last_name']; ?></td>
    <td><?php echo $row['sex']; ?></td>
    <td><?php echo $row['age'];?></td>
    <td><?php echo $row['technology'];?></td>
    <td><?php echo $row['exp'];?></td>
    <td><?php echo $row['edu'];?></td>
    <td><?php echo $row['pan_number'];?></td>
    <td><?php echo $row['date_of_birth'];?></td>
    <td><?php echo $row['village_name'];?></td>
    <td><?php echo $row['e_mail'];?></td>
    <td><?php echo $row['phone_number'];?></td>
    <!-- <td><?php echo $row['file_name'];?></td> -->
    <td>  <a href="update.php" class="butt">EDIT</a> </td>
    <td><?php echo $row['remarks'];?></td>
  </tr>

  <?php }
} else {
    echo "0 results";
} ?>
</table>
</div>

</body>
</html> 
