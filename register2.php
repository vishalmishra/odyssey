<!DOCTYPE html>

<html >
  <head>
    <meta charset="UTF-8">
    <title>Registration</title>

    <link rel="stylesheet" type="text/css" href="css/schedule.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">

  </head>

  <body>
<div class="about section" style="margin-top:0%;overflow:hidden">
		<span class="cloud01">
			<img src="imgs/new/About_us/clouds/01_new.png">
		</span>
		<span class="cloud02">
			<img src="imgs/new/About_us/clouds/02_new.png">
		</span>
		<span class="cloud03">
			<img src="imgs/new/About_us/clouds/01_new.png" style="width:80%;">
		</span>
		<span class="cloud04">
			<img src="imgs/new/About_us/clouds/04_new.png" style="width: 60%;">
		</span>
		<span class="cloud05">
			<img src="imgs/new/About_us/clouds/05_new.png" style="width: 60%;">
		</span>
		<span class="cloud06">
			<img src="imgs/new/About_us/clouds/06_new.png" style="width: 60%;">
		</span>
		<span class="cloud07">
			<img src="imgs/new/About_us/clouds/07_new.png" style="width: 60%;">
		</span>
		<span class="cloud08">
			<img src="imgs/new/About_us/clouds/08_new.png" style="width: 60%;">
		</span>
		<span class="cloud09">
			<img src="imgs/new/About_us/clouds/09_new.png" style="width: 60%;">
		</span>
		<span class="cloud10">
			<img src="imgs/new/About_us/clouds/10_new.png" style="width: 60%;">
		</span>
		<span class="cloud11">
			<img src="imgs/new/About_us/clouds/11_new.png" style="width: 60%;">
		</span>
		</div>

    <!-- multistep form -->
<form id="msform" method="post" action="index.html">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Personal Details</li>
    <li>Contact Details</li>
    <li>Events Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset form="msform">
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" required>
    <input type="text" name="lname" placeholder="Last Name" required/>
    <input type="text" name="branch" placeholder="Branch(For B.Tech only)" />
    <input type="text" name="Year" placeholder="Year" />
    <textarea name="college" placeholder="College Name"></textarea>
    <h3 class="fs-subtitle">&nbsp;&nbsp;&nbsp;</h3>

    <h2 class="fs-title">Contact Information</h2>
    <h3 class="fs-subtitle">All fields are required</h3>

    <input type="email" name="email" placeholder="Email" />
    <input type="number" name="phone" placeholder="Phone"/>
    <select name="accomo">
      <option value="" default selected>Accommodation Required</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
    <input type="url" name="fblink" placeholder="Facebook Profile Link"/>
    <!input type="password" name="pass" placeholder="Password" />
    <!input type="password" name="cpass" placeholder="Confirm Password" />


    <h3 class="fs-subtitle">&nbsp;&nbsp;&nbsp;</h3>
    <h2 class="fs-title">Event Detail</h2>
    <h3 class="fs-subtitle">Name the events seperated by commas</h3>
    <h2 class="fs-title heading1">Formal Events</h2>
    <h3 class="fs-subtitle">(Also mention the group name if any)</h3>
    <input type="text" name="forsolo" placeholder="Solo Events" required/>
    <input type="text" name="forgroup" placeholder="Group Events" />
    <h2 class="fs-title heading1">Informal Events</h2>
    <h3 class="fs-subtitle">(Also mention the group name if any)</h3>
    <input type="text" name="infosolo" placeholder="Solo Events" />
    <input type="text" name="infosolo" placeholder="Group Events" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>


</form>



<!--script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<!--script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script-->

<script src='lib/jquery-1.10.1.min.js'></script>
<script src='lib/jquery.easing.min.js'></script>
        <script src="js/index.js"></script>

  </body>
  <style type="text/css">
    .hide-bullets {
      list-style:none;
      margin-left: -40px;
      margin-top:20px;
    }

    .thumbnail {
      height:100%;
      padding: 0;
    }

    .carousel-inner>.item>img, .carousel-inner>.item>a>img {
      width: 100%;
    }

    /*Scrollbar*/
    ::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }
    ::-webkit-scrollbar-button {
      width: 0px;
      height: 0px;
    }
    ::-webkit-scrollbar-thumb {
      background: #B48C2D;
      border: 100px none #ffffff;
      border-radius: 100px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #ffffff;
    }
    ::-webkit-scrollbar-thumb:active {
      background: #ffffff;
    }
    ::-webkit-scrollbar-track {
      background: #666666;
      border: 100px none #ffffff;
      border-radius: 100px;
    }
    ::-webkit-scrollbar-track:hover {
      background: #666666;
    }
    ::-webkit-scrollbar-track:active {
      background: #333333;
    }
    ::-webkit-scrollbar-corner {
      background: transparent;
    }
  </style>
</html>
<?php
require 'server_con.php';
echo('error') ;

if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['branch'])&&isset($_POST['year'])&&isset($_POST['college'])&&isset($_POST['email'])&&isset($_POST['phone']))
{
  echo('error') ;
  $student_fname=$_POST['fname'];

  $student_lname=$_POST['lname'];
  $year=$_POST['year'];

  $branch=$_POST['branch'];

  $college = $_POST['college'];
  $forsolo =  $_POST['forsolo'];
  $forgroup =  $_POST['forgroup'];
  $infosolo =  $_POST['infosolo'];
  $infogroup =  $_POST['infogroup'];
  $cont=$_POST['phone'];
  $email_id=$_POST['email'];
  $accomo =$_POST['accomo'];
  $fb = $_POST['fblink'];








  if(!empty($_POST['name'])&&!empty($branch)&&!empty($year)&&!empty($email_id)&&!empty($cont))
  {

    echo('error') ;
    $query="INSERT INTO `outsiders` VALUES('$student_fname', '$student_lname','$year','$branch', '$college','$forsolo' , '$forgroup', $infosolo , $infogroup , '$cont','$email_id' , '$accomo' , '$fb')" ;
    if($query_run=mysql_query($query))
    {
      echo 'YOU HAVE SUCESSFULLY REGISTER';
    }
    else
    {
      echo 'try later';
    }

  }

}

echo('error') ;

?>