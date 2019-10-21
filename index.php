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
<title>VERDENTUM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 1px;
  font-size: 2px;
  text-align: center;
  background: white;
}
.h3 {color: #0000A0}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.error {color: #FF0000;}
.visual {color:   #800083;}
/* Footer */
.footer {
  padding: -10px;
  text-align: center;
  background: white;
  margin-top: 20px;
  height: 70px;
}
p {font-size: 70%; line-height:80%;}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
</style>
</head>
<body>

<div class="header">
  <form action="form.php" method="POST" enctype="multipart/form-data">
  <h2></h2>
  <img src="download.png"  alt="verdentum" style="width:25%">
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2><span class="h3">ABOUT VERDENTUM</h2>
      <img src="about.png"  alt="verdentum" style="width:100%">
      
      <h5>Verdentum's technology helps some of the world's leading development-sector
         institutions launch, coordinate,and track impact on projects globally.
         With Verdentum’s technology, projects affecting Adivasis and mountain peoples with sickle-cell disease in remote villages can be tracked, allowing for faster and better action at critical times.</h5>
    </div>
    <div class="card">
      <h2><span class="h3">ABOUT MEASURE</h2>
      <img src="measure.jpg"  alt="verdentum" style="width:100%" style="height: 10%">
      <h5>Monitoring and Evaluation of Agri-Science Uptake in Research and Extension (MEASURE) is a mobile-web based platform exclusively designed to collect real-time, geo-tagged data about farmers, farmland, livestock, other on-field interventions, and other key indicators of agriculture research and extension.</h5>
      <h5>MOBILE BASED DATA COLLECTION</h5>
      <h5>* Paper, pen redundant data collection tool</h5>
      <h5>* Time-Stamped</h5>
      <h5>* Direct data collation</h5>

    </div>
  </div>
  <?php 


  $sql = "SELECT * FROM sudhakar_1 ORDER BY id DESC limit 4";  
  $result = $conn->query($sql);
  $sql1="SELECT count(*) AS id FROM sudhakar_1";
  $result1=$conn ->query($sql1);
  $sql2="SELECT  count(*) AS id FROM sudhakar_1 WHERE DATE(age) = CURRENT_DATE() ";
  $result2=$conn ->query($sql2);
  $sql3="SELECT  * FROM sudhakar_1 WHERE DATE(age) = CURRENT_DATE() limit 3";
  $result3=$conn ->query($sql3);

?>

  <div class="rightcolumn">
    <div class="card">
      <h3><span class="h3"> Create a schedule for an interview</h3>
      <marquee behavior="alternate" scrollamount="3">VERDENTUM INTERNAL WORKS</marquee>
     <form action="go.php" method="POST">
      <a href="go.php" class="button">CLICK HERE FOR SCHEDULE AN INTERVIEW</a>
<?php
if ($result1->num_rows > 0) {

    // output data of each row
    while($row1 = $result1->fetch_assoc()) { ?>  

    <h5>Total scheduled interviews::<span class="error"> <?php echo $row1['id'];?></span></h5> 
      <?php }
} else {
    echo "0 results";
} ?>
<?php
if ($result2->num_rows > 0) {

    // output data of each row
    while($row2 = $result2->fetch_assoc()) { ?>  

<h5>Today scheduled interviews::<span class="error"> <?php echo $row2['id'];?></span></h5>

<?php }
} else {
    echo "0 results";
} ?>
    </div>
    <div class="card">
      <form action="go1.php" method="POST">
      <h3>Get the details of who schedule for an interviews</h3>
      <a href="go1.php" class="button">CLICK HERE TO GET LIST</a>
      <br></br>
    </div>
    <div class="card">
       

      <h3><span class="h3">RECENT SCHEDULE LIST</h3>
<?php
if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <p>NAME             :<span class="error"> <?php echo $row['name']; ?> <?php echo $row['last_name']; ?>  </span></p>
      <p>DATE OF INTERVIEW:<span class="error">  <?php echo $row['age'];?></span></p>
      <p>TECHNOLOGY       :<span class="error"> <?php echo $row['technology'];?> </span> </p>
      <p>PHONE NUMBER     :<span class="error"> <?php echo $row['phone_number'];?> </span></p>
      <p>* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * </p>     
<?php }
} else {
    echo "0 results";
} ?>
    </div>
    <div class="card">
      <h3><span class="h3">TODAY'S INTERVIEW LIST</h3>
        <?php
if ($result3->num_rows > 0) {
    // output data of each row
    while($row3 = $result3->fetch_assoc()) { ?>  
      <p>NAME             :<span class="error"> <?php echo $row3['name']; ?> <?php echo $row3['last_name']; ?>  </span></p>
      <p>DATE OF INTERVIEW:<span class="error">  <?php echo $row3['age'];?></span></p>
      <p>TECHNOLOGY       :<span class="error"> <?php echo $row3['technology'];?> </span> </p>
      <p>PHONE NUMBER     :<span class="error"> <?php echo $row3['phone_number'];?> </span></p>
      <p>* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * </p>
<?php }
} else {
    echo "0 results";
} ?>
<a href="update.php" class="click here for new employee">CLICK HERE FOR RESHEDULE AN INTERVIEWS</a>
  </div>
</div>
<div class="card">
<footer class="footer footer-static footer-light navbar-border navbar-shadow" style="margin-left: 0px;position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   margin-bottom: -20px;">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block"><img style="height: 35px; width:auto; padding-left: 20px; padding-right: 40px;"> <img src="download.png" style="height: 35px; width:auto;"></span>
    </p>
  </footer>
</div>
</form>

</body>
</html>
