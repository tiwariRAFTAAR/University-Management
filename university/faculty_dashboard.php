<?php

include_once('connection.php');
error_reporting(0);

$faculty = $_SESSION['faculty_id1'];

$sql = "select * FROM faculty_detail where faculty_id = '$faculty' ";
$result = mysqli_query($conn ,$sql);
$row = mysqli_fetch_assoc($result);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="stylesheet" href="css/faculty_dashboard.css">
</head>
<body>
    <img class="background" src="image/fac.jpg" alt="">
    <div id="mySidenav" class="sidenav">
        <a href="Home_page.html" id="home">Home <img class="logo" src="image/home_logo.jpg" alt=""></a>
        <a href="facultymarksupdate.html" id="update">Update<img class="logo" src="image/result_logo.jpg" alt=""></a>
        
        <a href="logout.php" id="logout">Logout <img class="logo3" src="image/logout_logo.jpg" alt=""> </a>
      </div>
   <div class="welcome">Faculty Dashboard</div>
   <div class="faculty_id">Faculty ID [<?php echo $row['faculty_id'] ?>]</div>
    <div id="name" class="faculty_name" >Name :<?php echo $row['name'] ?> </div>
   
     <div id="department" class="faculty_Department">Department :<?php echo $row['department'] ?></div>

     <div id="email"  class="faculty_Email" >Email :<?php echo $row['email'] ?></div>
    
  
    </div>
      
  
    <div id="position"  class="faculty_name">Designation :<?php echo $row['position'] ?></div>
     <div id="mobile"  class="faculty_Mobile">Mobile :<?php echo $row['mobile'] ?></div>
     <div id="gender"  class="faculty_Gender">Gender :<?php echo $row['gender'] ?></div>
     <div id="address"  class="faculty_Address">Address :<?php echo $row['address'] ?></div>
</body>
</html>



