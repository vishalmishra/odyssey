<?php
$localhost='localhost';
$username='vishal';
$pass='';
$database='odyssey';
$error='sorry,could not connected';
if(@mysql_connect($localhost,$username,$pass))
{
if(@mysql_select_db($database))
{ 			  
}

else 
echo $error;
}
else 
echo $error;
 

	

?>