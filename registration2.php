
<?php
include("connection.php");
if(isset($_POST['submit']));
{
 $sqli="INSERT INTO'form'[registration number,name,coursecode,coursenumber,mark]VALUE('$registration number','$name','$coursecode','$coursenumber','$mark');"
 $sqli=$con->query($sqli);
 
  if(result===TRUE)
  {
   echo"new record is inserted";
   }
   else
   {
     echo"ERROR".$sqli."<br>".$con->error;

   }
 $con->close();
 }
 ?>

<html>
<head>
<style>
 body{background color:pink};
 </style>
</body>
<h1>STUDENT MARK LIST</h1>
<form action="" method="POST">
<tr>
<td>
Registration number:<input type="text" id="number" value=""></td></tr><br><br>
Name:<input type="text" id="name" value""></td></tr><br><br>
course name:<input type="text" id="name" value=""</td></tr><br><br><br>
course code:<input type="text" id="name" value""</td></tr><br><br>
mark:<input tpe="text" id="name" value""</td></tr><br><br><br>
<input type= "button" value="register">



</head>
</html>