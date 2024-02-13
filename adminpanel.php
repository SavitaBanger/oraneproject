<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Sidebar Styles */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #714e87;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px;
            text-decoration: none;
            font-size: 20px;
            color: white;
            font-family:latin;
            display: block;
        }
        .sidebar a:hover {
            background-color:#765c86;
        }

        /* Main Content Styles */
        

        /* Header Styles */
        .header {
            background-color:  #714e87;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .header h1 {
            font-size: 36px;
            margin: 0;
        }

        /* Profile Styles */
          .profile-container { 
            padding-left: 520px;
            padding-top:50px;
        }

        .profile-heading {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .profile-info {
            font-size: 18px;
        }

       
      
    </style>
</head>
<body>
        <!-- Sidebar (unchanged from previous code) -->

<div class="main-content">
    <div class="header">
        <h1>Admin Panel</h1>
    </div>

    <div class="profile-container">
        <h2 class="profile-heading">Personal Information</h2>
        <div class="profile-info">

        <!-- Profile Picture -->
        <img src="logo1.png" alt="Profile Picture" class="profile-picture"  width="100" height="100">

            <p><strong>Name:</strong> Savita Banger</p>
            <p><strong>Email:</strong> savitabanger3@gmail.com</p>
            <p><strong>Phone:</strong> 8360871748</p>
            
        
<div class="sidebar">
<img src="logo1.png" width="100" height="100" alt="orane" style="margin-left:60px;"> 
    <h5 style="margin-top:10px; font-size: 25px;padding-left:40px;font-family:latin;">Hello, Admin</h5>
    <a href="adminpanel.php"><i class="fa fa-home"></i> Home</a>
    <a href="viewjob.php">Job </a>
    <a href="feedbackview.php">Feedback </a>
    <a href="applyview.php">Registration </a>
    
    <a href="jobs.php">Add Job Positions</a>
    <a href="viewjobpositions.php">Edit, Delete Job Positions</a>
    <a href="insert_data.php">Certificate</a>
    <a href="logout.php">Logout</a>
</div>



</body>
</html>
