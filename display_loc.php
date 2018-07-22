<html>
<head><title>Inventory Management System</title>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
 <meta http-equiv="refresh" content="3">
</head>
<body bgcolor="#D1F2EB  ">
<br>
<p><center><h1><font size="55" >Inventory location</font></h1></center></p>
<br>

<br>
</body>
</html>
<?php

$link = mysqli_connect("localhost", "root", "", "inventory_management");
 

if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "SELECT * FROM inventory_location";
if($result = mysqli_query($link, $sql))
{
    if(mysqli_num_rows($result) > 0)
	{     
	        
                          echo"<br><br><br><br><br><br>";
    	      echo "<table  border='2' align='center' bgcolor=#FADBD8  >";
      	      echo "<tr>";
        	      echo "<th> <h1>Inventory_No  </h1></th>";
                       echo "<th> <h1>Location   </h1></th>";
            	      
                       echo "</tr>";
           
     	   while($row = mysqli_fetch_array($result))
     	  {
               
      	         
      	          echo "<td><h1><center>" . $row['inventory_no'] . "</center></h1></td>";
                  echo "<td><h1><center>" . $row['location'] . "</center></h1></td>";     
               	       
                     
?> 
     	   <?php 
                       echo"</tr>";   
     	  }
     	    echo "</table>";
     	   
     	   mysqli_free_result($result);
   	 }}
	 
	mysqli_close($link);
      ?>