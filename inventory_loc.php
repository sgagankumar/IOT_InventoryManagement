
<?php

  
  $location = $_GET['location'];
  $rfid = $_GET['rfid'];
  define('HOST','localhost');
  define('USER','root');
  define('PASS','');
  define('DB','inventory_management');
  $con = mysqli_connect(HOST,USER,PASS,DB);
  $sql = "INSERT into inventory_location(inventory_no,location) values('$rfid','$location')";
  if(mysqli_query($con,$sql)){
    echo 'successfully added';


  }
  else{
    echo 'failure';
  }
  mysqli_close($con);
?>






