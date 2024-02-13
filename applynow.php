<html>
	<head>
		<title>registration form</title>
	</head>
	<style>
	
		.backwave img{height:600px;width:100%;margin-top:5px;}
		.formback img{height:490px;width:310;margin-left:500px;margin-top:-550px;box-shadow:4px 4px 5px gray}
		.opacity{background:white;height:490px;width:310;margin-left:500px;margin-top:-550px;
		position:relative;z-index:3;opacity:0.6;}	
		.heading{font-family:Palace Script MT;font-size:50px;margin-left:530px;margin-top:-480px;color:#3c0b5a;
		position:relative;z-index:3;letter-spacing:3px;}
	
		.form{margin-left:530px;margin-top:-19px;padding-left:1px;
		padding-top:30px;}
		
		input[type=text]{background:white;color:black;height:32px;width:250px;border:2px solid #7e57a9;
		transition:0.2s;position:relative;z-index:3;}
		input[type=text]:hover{transform:scale(1.1)}
		
		
		input[type=number]{background:white;color:black;height:32px;width:250px;border:2px solid #7e57a9;
		transition:0.2s;position:relative;z-index:3;}
		input[type=text]:hover{transform:scale(1.1)}
		
		
		#course{background:white;color:black;height:32px;width:250px;position:relative;z-index:3;
		border:2px solid #7e57a9;transition:0.2s;}
		#course:hover{transform:scale(1.1)}
		
		#state{background:white;color:black;height:32px;width:250px;position:relative;z-index:3;
		border:2px solid #7e57a9;transition:0.2s;}
		#state:hover{transform:scale(1.1)}
		
			#city{background:white;color:black;height:32px;width:250px;position:relative;z-index:3;
		border:2px solid #7e57a9;transition:0.2s;}
		#city:hover{transform:scale(1.1)}
		
		 input[type=submit]{  background-image: linear-gradient(to right, #64199b, #ff00a2);
		 color:white;height:32px;width:250px;position:relative;z-index:3;font-size:18px;
		border:2px solid #7e57a9;transition:0.2s;}
		input[type=submit]:hover{transform:scale(1.1)}
		
		
		
			.footer{background:white;height:180px;width:100%;margin-top:80px;}
			.logo2{height:70px;width:140px;margin-left:100px;margin-top:45px;}
			.foottext1{margin-left:100px;margin-top:5px;}
			.footnav1{margin-left:390px;margin-top:-142px;}
			.h1{font-size:18px;}
			.footnav2{margin-left:600px;margin-top:-190px;}
			.h2{font-size:18px;}
			.follow{font-size:20px;color:#15063a;margin-left:1030px;margin-top:-148px;}
			.icon1 img{height:43px;width:43px;margin-left:1022px;}
			.icon2 img{height:35px;width:35px;margin-left:1073px;margin-top:-40px;}
			.icon3 img{height:41px;width:33px;margin-left:1118px;margin-top:-42px;}
		    .icon4 img{height:28px;width:37px;margin-left:1157px;margin-top:-36px;}
				a{text-decoration:none;}
	
		
	</style>


<?php
// Include your PHP configuration file
include "navbar.php";

// Establish database connection
$conn = mysqli_connect($servername="localhost", $username="root", $password="", $dbname="orane");

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $state = $_POST['state'];
    $city = $_POST['city'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format')</script>";
    }
    // Validate phone number
    else if (!preg_match("/^[0-9]{10}$/", $phone)) {
        echo "<script>alert('Invalid phone number')</script>";
    } else {
        // Insert data into database
        $sql = "INSERT INTO `apply`(`name`,`email`,`phone`,`course`,`state`,`city`)
                VALUES ('$name','$email','$phone','$course','$state','$city')";
        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('Registration Successful')</script>";
        } else {
            echo "<script>alert('Data not Registered')</script>";
        }
    }
}
?>




	<body>
	
		

	<div class="backwave"><img src="bg1.avif"></div>
	<div class="formback"><img src="b3.jpg" ></div>
	<div class="opacity"></div>
		<div class="heading"><b>Registration form</b></div>
	
	
	<div class="form">
	<form action="applynow.php" method="post">
		<input type="text" placeholder="Name" name="name" required pattern="[A-Za-z\s]*"><br><br>
		<input type="text" placeholder="Email" name="email" required><br><br>
		<input type="number" placeholder="Mobile No." name="phone" required  maxlength="10"
				pattern="\d{10}" title="please enter exactly 10 digits" /><br><br>
		
		
	<select id="course" name="course" required>
		<option>Select Course Interested in</option>
		<option value="Short Term Courses"checked>Short Term Courses</option>
		<option value="Makeup">Makeup</option>
		<option value="Nail Art">Nail Art</option>
		<option value="Hair">Hair</option>
		<option value="International Courses">International Courses</option>
		<option value="Salon Management">Salon Management</option>
		<option value="Beauty">Beauty</option>
	</select><br><br>
		
		
	<select id="State" name="state" required>
	  <option>Select State</option>
      <option value="Punjab">Punjab</option>
      <option value="Delhi NCR">Delhi NCR</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
	  <option value="Rajasthan">Rajasthan</option>
	  <option value="Madhya Pradesh">Madhya Pradesh</option>
	  <option value="Uttar Pradesh">Uttar Pradesh</option>
    </select><br><br>
	
    <select id="city" name="city" required>
	  <option>Select City/Locality</option>
	  <option value="Nawanshar">Nawanshar</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Jalandhar">Jalandhar</option>
      <option value="Amritsar">Amritsar</option>
	  <option value="Ludhiana">Ludhiana</option>
    </select><br><br>
	<input type="submit" name="submit">
		
		</form>
	</div>
	<div class="footer">
	<img src="oranelogo2.png" class="logo2">
	<div class="foottext1"><b>@oraneinstitute.com<br>+91 9914655557<br>+23347-56779</b></div>
	<div class="footnav1">
		<div class="h1"><b>Quick Links</div>
			<div class="p1"> Home <br>Courses in India<br>Courses in Canada
				<br>Blog<br>About Us<br>Contact<br>Privacy Policy</b></div>
	</div>
	<div class="footnav2">
		<div class="h2"><b>Office India</div>
			<div class="p2">SCO 88-92 Sector 82,<br>JLPL Industrial Area,<br>Airport Road, Sahibzada
			<br>Ajit Singh Nagar Punjab<br>140308<br>+91 8872500500</b></div>
	</div>
	<div class="follow"><b>Follow us on:</b></div>
	<a href="https://www.instagram.com/oraneinternational/?hl=en">
		<div class="icon1">
			<img src="instagram.png" title="Orane on Instagram"></div></a>
	<a href="https://api.whatsapp.com/send?phone=919876006340&text=Hi">
		<div class="icon2">
			<img src="wtapp.png" title="Orane on Whatsapp"></div></a>
	<a href="https://twitter.com/">
		<div class="icon3">
			<img src="twit.png" title="Orane on Twitter"></div></a>
	<a href="location.html">
		<div class="icon4">
			<img src="loc.png" title="Our Location in India"></a></div>
	</div>

	</body>
</html>