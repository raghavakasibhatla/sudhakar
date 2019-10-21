<?php
$servername = "3.82.17.250";
$username = "raghava";
$password = "raghava1,";
$dbname = "sudhakar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 $query2 = "SELECT name FROM sudhakar_1";
        $result = mysqli_query($conn,$query2); ?>  

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
<div class="card">
 <form name="name1" action="update.php"  method="post">
 	<label>Select the Name for edit :</label>
    <select name="name1" required>
        <option value="">Select Name </option> 
        <?php while( $row = mysqli_fetch_array($result) ){
          	echo "<option value='".$row['name']."'>".$row['name']."</option>";
        } ?> <br></br>
       <center> <input name="stdsearch" type="submit" value="Search" /> </center>
        <br></br>
    </select>   
</form>
<?php if ( isset($_POST['stdsearch']) ){
            $searchUsername = $_POST['name1'];
            $query = "SELECT * FROM sudhakar_1 WHERE name ='".$searchUsername."'";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_array($result); 
} ?>
 <form name="frmedit" action="update.php" method="post">
	<label>NAME :</label>
      <input type="hidden" name="id" value="<?php if(!empty($data)){echo $data['id'];} ?>">
      <input name="up_name" required="required" type="text" value= "<?php if(!empty($data)){ echo $data['name'];}?>"><br /><br />
  <label>DATE OF INTERVIEW:</label>
  		<input name="up_date" required="required" type="text" value= "<?php if(!empty($data)){echo $data['age']; } ?>"><br /><br />  
  <label>REMARKS:</label>      
      <input name="remarks" required="required" type="text" value= "<?php if(!empty($data)){echo $data['remarks']; } ?>"><br /><br />
      <br></br>
  		<input name="stdupdate" type="submit" value="Update" />  
 </form>
     <?php if ( isset($_POST['stdupdate'])){		 	
  		 	$user_id=$_POST['id'];
  		 	$up_name=$_POST['up_name'];
  		 	$up_date=$_POST['up_date'];
        $remarks=$_POST['remarks'];
        // echo $remarks;die();
        //$sql = "INSERT INTO sudhakar_1 (remarks)VALUES('".$_POST['remarks']."')";
  		 	$query = "UPDATE sudhakar_1 SET age='$up_date', name='$up_name', remarks='$remarks' WHERE id ='".$user_id."'";
        // echo $query;die();
  		 	$res = mysqli_query($conn, $query);
  		 	if($res){
  		 		echo "data updated";
  		 	}      
        }?>
<?php  mysqli_close($conn); ?>

</div>
</head>
</body>
</html> 






         
            
