<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
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
 
$file_info = pathinfo($_FILES['fileupload']['name']);
                        $file_directory = "uploads/";
                        $new_file_name = uniqid().".".$file_info["extension"];

                        move_uploaded_file($_FILES['fileupload']["tmp_name"], $file_directory . $new_file_name);

 $sql = "INSERT INTO sudhakar_1 (name,last_name,sex,age,technology,exp,edu,pan_number,date_of_birth,village_name,e_mail,phone_number,file_upload)VALUES('".$_POST['name1']."', '".$_POST['Lastname1']."','".$_POST['sex']."','".$_POST['age1']."','".$_POST['tech1']."','".$_POST['exp']."','".$_POST['edu']."','".$_POST['pan1']."','".$_POST['dateofbirth1']."','".$_POST['village']."','".$_POST['email']."','".$_POST['phone']."','".$new_file_name."')";

if ($conn->query($sql) === TRUE) {
      include 'test.html';
     // include 'go1.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

/*
$sql = "SELECT * FROM sudhakar_1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "NAME :{".$row['name']."}  <br> ".
         "LAST NAME :{".$row['last_name']."}  <br>  ".
         "GENDER :{".$row['sex']."}  <br>  ".
         "AGE :{".$row['age']."}  <br>  ".
         "TECHNOLOGY :{".$row['technology']."}  <br>  ".
         "PAN :{".$row['pan_number']."}  <br>  ".
         "DATE OF BIRTH :{".$row['date_of_birth']."}  <br>  ".
         "VILLAGE :{".$row['village_name']."}  <br>  ".
         "EMAIL :{".$row['e_mail']."}  <br>  ".
         "PHONE NUMBER :{".$row['phone_number']."}  <br>  ".
         "DOWNLOAD File :{".$row['file_upload']."}  <br>  ".

         
         "--------------------------------<br>";
    }
} else {
    echo "0 results";
}*/

$conn->close();
?>
