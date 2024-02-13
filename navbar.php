<html>
<head>
	<title>NAVBAR</title>

	</head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.first{height:30px;width:100%;background:#714e87;color:white;
			font-size:14px;padding-left:50px;padding-top:4px;}
      
	.buttonL{display:inline-block;border-radius:20px 20px 20px 20px;background:white;color:#3c0b5a;text-align: center;
		font-size:17px;height:30px;width:120px;transition: all 0.5s;cursor: pointer;  font-family:latin;
	margin-left:1088px;margin-top:-28px;}
	   .buttonL span {cursor: pointer;display: inline-block;position: relative;transition: 0.5s;}
	   .buttonL span:after {content: '\00bb';position: absolute;opacity: 0;top: 0;right: -20px;transition: 0.5s;}
	   .buttonL:hover span {padding-right: 25px;}
	   .buttonL:hover span:after {opacity: 1;right: 0;}
	
		
		
		a{text-decoration:none;}
		
				
			 /* styles for the navbar */
    .navbar {
      background-color:white;
      overflow: hidden;
	  height:85px;
	  width:100%;
	
    }

    .navbar a {
      float: left;
      color: #3c0b5a;
      text-align: center;
      padding-top: 34px;
	  padding-left: 10px;
      text-decoration: none;
      font-size: 22px;
	  font-family:latin;
    margin-left:35px;
    }
    /* Styles for the dropdown menu */
    .dropdown {
      float: left;
      overflow: hidden;
	  padding-top: 20px;
	        padding-left: -50px;
			
			font-family:latin;
			z-index:3;
      margin-left:35px;}

      .dropdown .dropbtn {
    font-size: 22px;
    border: none;
    outline: none;
    color: #3c0b5a;
    padding: 14px 2px;
    background-color: inherit;
    margin: 0;
    font-family: latin;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 4;
}

.dropdown-content a {
    float: none;
    color: #3c0b5a;
    padding: 14px 16px; /* Adjusted padding */
    text-decoration: none;
    display: block;
    text-align: left;
    margin: 0; /* Remove any margin */
}

/* Add a gray background color to dropdown links on hover */
.dropdown-content a:hover {
    background-color: #714e87;
    color: white;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}


    /* Style the logo */
    .navbar .logo {
      float: left;
     padding-top:12px;
	 padding-left:50px;
    }
	
	.button1{display:inline-block;border-radius:20px 20px 20px 20px;background:#3c0b5a;color:white;text-align: center;
		font-size:17px;height:32px;width:130px;transition: all 0.5s;cursor: pointer;
	margin-left:100px;}
	   .button1 span {cursor: pointer;display: inline-block;position: relative;transition: 0.5s;}
	   .button1 span:after {content: '\00bb';position: absolute;opacity: 0;top: 0;right: -20px;transition: 0.5s;}
	   .button1:hover span {padding-right: 25px;}
	   .button1:hover span:after {opacity: 1;right: 0;}
	
			
	   
	</style>
	
	
	<?php
	
?>
	
	<body>
	<div class="first">CALL US:+91 8872500500
    <a href="loginform.php"><button class="buttonL" style="vertical-align:middle"><span>Login</span></button></a></div>
	
	
		 <div class="navbar">
    <div class="logo">
      <img src="oranelogo2.png" alt="Logo" width="150" height="65">
    </div>
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
      
     <div class="dropdown">
      <button class="dropbtn">Courses <i class="fa fa-caret-down"></i></button>
      <div class="dropdown-content">
        <a href="beauty.php">Beauty</a>
        <a href="makeup.php">Makeup</a>
		     <a href="nail.php">Nail</a>
        <a href="hair.php">Hair</a>
		   <a href="mehandi.php">Mehandi</a>
		    <a href="saloon.php">Saloon Management</a>
      </div>
    </div>
	  <a href="fashion.php">Fashion</a>
	  <a href="gallary.php">Gallary</a>
	   <a href="career.php">Career</a>
		  <div class="dropdown">
      <button class="dropbtn">Contact <i class="fa fa-caret-down"></i></button>
      <div class="dropdown-content">
        <a href="location.php">Location-india</a>
        <a href="feedback.php">Feedback</a>
		 <a href="certificate.php">Certificate Tracking</a>
      </div>
    </div>
	<a href="applynow.php"><button class="button1" style="vertical-align:middle"><span>Apply Now</span></button></a>
  </div>
  
	
	

	
	
	
	</body>
	</html>