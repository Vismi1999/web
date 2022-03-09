<?php
$con=mysqli_connect("localhost","root","","student");
if($con===false)
{
	die("ERROR:connection sucessfully..".mysqli_connect_error());
}
else
	
    echo"succesfully connected"

?>
 