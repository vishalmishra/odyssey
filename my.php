
<?php
  require 'server_con.php';
  require 'header.php';

  if(isset($_GET['fname'])&&isset($_GET['lname'])&&isset($_GET['branch'])&&isset($_GET['Year'])&&isset($_GET['college'])&&isset($_GET['email'])&&isset($_GET['phone']))
	{
		
		 $student_fname=$_GET['fname'];
		 
		 $student_lname=$_GET['lname'];
		   $year=$_GET['Year'];
		 
		  $branch=$_GET['branch'];
		
		$college = $_GET['college'];
		$forsolo =  $_GET['forsolo'];
		$forgroup =  $_GET['forgroup'];
		$infosolo =  $_GET['infosolo'];
		$infogroup =  $_GET['infogroup'];
		$cont= $_GET['phone'];
		$email_id=$_GET['email'];
		
		$fb = $_GET['fblink'];
			
		  if(!empty($branch)&&!empty($year)&&!empty($email_id)&&!empty($cont))
		  {
			  
			  		
			$query="INSERT INTO `outsiders` VALUES('$student_fname', '$student_lname','$year','$branch', '$college','$forsolo' , '$forgroup', '$infosolo' , '$infogroup' , '$cont','$email_id' , '$accomo' , '$fb')" ;
			if($query_run=mysql_query($query))
				{
					
				echo 'YOU HAVE SUCESSFULLY REGISTER';
				header('Location:register2.html');
				}
			else 
				{
					echo 'try later';
				}
				
		  }

	}
	

?>
