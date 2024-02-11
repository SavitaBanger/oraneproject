<html lang="en">
	<head>
	<title>Home</title>

	
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>
	<style>
	
		
		.container2{height:390px;width:100%;background:#caa6e2;margin-top:-16px;}
		.content2{font-size:21px;color:black;font-family:latin;margin-top:-360px;
			width:400px;text-align:justify;margin-left:100px;}
		.img1 img{height:370px;width:330px;margin-left:770px;margin-top:-322px;}
		.border1{height:320px;width:305px;border:2px solid #3b2c60;margin-left:770px;margin-top:-320px;}
		.button2{height:41px;width:160px;margin-left:308px;margin-top:-34px;background:white;color:#3c0b5a;}
		.button2:hover{background:#3c0b5a;color:white;}
		
		
		
		a{text-decoration:none;}
		.container3{height:185%;width:100%;background:#edecec;margin-top:-7px;}
            
            .content32{text-align:center;font-size:20px;font-family:latin;color:black;padding-top:0px;}
            

           .section-h1 {text-align: center; font-size: 50px;
  font-family: latin;color: #3c0b5a;padding-top: 30px;transform: translateY(150px);opacity: 0;
}

.animate {
  animation: hero-text-animate  1s 0.5s cubic-bezier(0.04, 0.79, 0.49, 0.93) forwards;
}

@keyframes hero-text-animate {
  from {
    transform: translateY(150px);
    opacity: 0;
  }
  to {
    transform: translateY(0px);
    opacity: 1;
  }
}

     @keyframes down-btn {
    0% { bottom:20px; }    
    100% { bottom:0px; }

    0% { opacity:0; }    
    100% { opaicty:1; }
}

@-webkit-keyframes down-btn {
    0% { bottom:20px; }    
    100% { bottom:0px; }

    0% { opacity:0; }    
    100% { opaicty:1; }
}

@-moz-keyframes down-btn {
    0% { bottom:20px; }    
    100% { bottom:0px; }

    0% { opacity:0; }    
    100% { opaicty:1; }
}

@-o-keyframes down-btn {
    0% { bottom:20px; }    
    100% { bottom:0px; }

    0% { opacity:0; }    
    100% { opaicty:1; }
}

body {
    margin:0;
}

.category-name {
    font-family: sans-serif;
    width: -webkit-fill-available;
    text-align: center;
    font-size: 40px;

    
}

.card-category-2 ul, .card-category-3 ul, .card-category-4 ul, .card-category-5 ul  .card-category-6 ul {
    padding: 0;
}
    
.card-category-2 ul li, .card-category-3 ul li, .card-category-4 ul li, .card-category-5 ul li, .card-category-6 ul li {
    list-style-type: none;
    display: inline-block;
    vertical-align: top;
}

.card-category-2 ul li, .card-category-3 ul li {
    margin: 0px 30px;
}

.card-category-1, .card-category-2, .card-category-3, .card-category-4, .card-category-5, .card-category-6 {
    font-family: sans-serif;
    margin-bottom: 5px;
    text-align: center;
}
    .card-category-1 div, .card-category-2 div {
        display:inline-block;
    }

    .card-category-1 > div, .card-category-2 > div:not(:last-child) {
        margin: 0px 5px;
        text-align: left;
    }
            
    /* Image Card */
    .img-card {
        width:275px;position: relative;border-radius: 5px; text-align: left;

        -webkit-box-shadow: 0px 8px 7px 0px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 8px 7px 0px rgba(0,0,0,0.3);
        -o-box-shadow: 0px 8px 7px 0px rgba(0,0,0,0.3);
        box-shadow: 0px 8px 7px 0px rgba(0,0,0,0.3);        
    }

        .img-card .card-image {
            position: relative; margin: auto; overflow: hidden; border-radius: 5px 5px 0px 0px; height: 200px;
        }

        .img-card .card-image img {
            width:100%;
            border-radius: 5px 5px 0px 0px;
            
            -webkit-transition: all 0.8s;
            -moz-transition: all 0.8s;
            -o-transition: all 0.8s;
            transition: all 0.8s;
        }

        .img-card .card-image:hover img {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }        

        .img-card .card-text {
            padding: 0 15px 15px;
            line-height: 1.5;   
        }

        .img-card .card-link {
            padding: 20px 15px 30px;
            width: -webkit-fill-available;
        }

            .img-card .card-link a {
                text-decoration: none;
                position: relative;
                padding: 10px 0;
            }

            .img-card .card-link a:after {
                top: 30px;
                content: "";
                display: block;
                height: 2px;
                left: 50%;
                position: absolute;
                width: 0;

                -webkit-transition: width 0.3s ease 0s, left 0.3s ease 0s;
                -moz-transition: width 0.3s ease 0s, left 0.3s ease 0s;
                -o-transition: width 0.3s ease 0s, left 0.3s ease 0s;
                transition: width 0.3s ease 0s, left 0.3s ease 0s;
            }

            .img-card .card-link a:hover:after { 
                width: 100%; 
                left: 0; 
            }        
        
        .img-card.iCard-style1 .card-title {
            position: absolute; font-family: 'Open Sans', sans-serif; z-index: 1; top: 10px; left: 10px; font-size: 25px; font-weight:bold; color: #3c0b5a;
            
        }
        
        .img-card.iCard-style1 .card-text {            
            color: #795548;
            
        }

        .img-card.iCard-style1 .card-link a {
            color: #3c0b5a;                
        }

        .img-card.iCard-style1 .card-link a:after {            
            background: #3c0b5a;
        }

        .container4{background-image:url("hero5.jpg");height:700px;width:100%;background-size:cover;background-repeat:no-repeat;
		background-attachment:fixed;margin-top:0px}
              .container5{background-image:url("img23.jpg");height:500px;width:1400px;background-size:cover;background-repeat:no-repeat;
		background-attachment:fixed;}
        
   .pb-3{text-align:center;font-size:50px;font-family:latin;color:white;padding-top:30px;
        }


/* Section 4 */
.bg-dark.text-white {color: #fff;margin-top:-720px;}

.py-5 {padding-top: 3rem;padding-bottom: 3rem;}

.min-vh-100 {min-height: 100vh;}

.container {width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;}

.row {display: flex;flex-wrap: wrap;justify-content: center;align-items: center;text-align: center;}

.col-12 {flex: 0 0 100%;max-width: 100%;}

.pb-3 {
padding-bottom: 1rem;
}

.col-md-4 {
flex: 0 0 33.333333%;
max-width: 33.333333%;
}

.display-4 {
font-size: 2.5rem; /* You can adjust the font size as needed */
}

/* Optional: Add custom styles for the section title "It's A Bold Mission & We Are Already On It" */
.pb-3::after {content: "";display: block;width: 50px;height: 2px;background-color: #fff;margin: 10px auto;}

.section1{height:250px;width: 300px;background:#edecec;margin: -250px 1px;border-right:1px solid black;}
.section2{height:250px;width: 300px;background:#edecec;margin: -250px 301px;border-bottom:1px solid black;}
.section3{height:250px;width: 300px;background:#edecec;margin: 250px 0px;border-top:1px solid black;}
.section4{height:250px;width: 300px;background:#edecec;margin: -500px 300px;border-left:1px solid black;}

.container11{background-color:#caa6e2;height:390px;width: 100%;margin: 0px 0px;}
.heading11{text-align:center;font-size:50px;font-family:latin;color:white;padding-top:30px;}
.content11{text-align:center;font-size:20px;font-family:latin;}

.container11 {width: 100%;overflow: hidden;position: relative;}

.frame {
 /* Customize the frame border style */
    padding: 40px 100px; /* Adjust the padding as needed */
}

.train-slider-container {
    width: 100%;
    overflow: hidden;
}

.train-slider {
    display: flex;
    animation: trainMove 10s linear infinite; /* Adjust the timing as needed */
}

.slide {
    flex: 0 0 16%; /* Show four slides at a time */
    padding: 10px;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    
}

.slide img {
    width: 100%; /* Set the width to 100% to make all images the same width */
    height: auto; /* Automatically adjust the height to maintain the aspect ratio */
    border-radius: 25px;
}

@keyframes trainMove {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}

			
			
.footer{background:white;height:210px;width:100%;margin-top:30px;}
			.logo2{height:70px;width:140px;margin-left:100px;margin-top:15px;}
			.foottext1{margin-left:100px;margin-top:5px;}
			.footnav1{margin-left:390px;margin-top:-150px;}
			.h1{font-size:18px;}
			.footnav2{margin-left:600px;margin-top:-185px;}
			.h2{font-size:18px;}
			.follow{font-size:20px;color:#15063a;margin-left:1030px;margin-top:-150px;}
			.icon1 img{height:43px;width:43px;margin-left:1022px;}
			.icon2 img{height:35px;width:35px;margin-left:1073px;margin-top:-40px;}
			.icon3 img{height:41px;width:33px;margin-left:1118px;margin-top:-42px;}
		    .icon4 img{height:28px;width:37px;margin-left:1157px;margin-top:-36px;}
				a{text-decoration:none;}
			
			





</style>
	<body>

	<?php
include "navbar.php";
?>

	
	
	<div class="w3-content w3-section" style="max-width:1500px">
		<img class="mySlides" src="hero4.jpg" 
			style="width:100%;margin-top:-16px;height:500px;">
		<img class="mySlides" src="image12.jpg"
				style="width:100%;margin-top:-16px;height:500px;">
			<img class="mySlides" src="hero8.jpg" 
				style="width:100%;margin-top:-16px;height:500px;">
	</div>

   <script>
   var myIndex = 0;
   carousel();

  function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
   }
   </script>
   
	
	
	<div class="container2"></div>
	<div class="content2"><font color="#3c0b5a" size="40">ITS YOUR TIME TO SHINE</font><br>
							Launch your dream career as a
	beauty and wellness professional. Explore our 
	courses and Get Certified in Makeup, Hair, Nail, Aesthetics, 
	Therapy and more.<br>
	#OraneSeBharoUdaan</div>
	<a href="About.html"><button class="button2">Know us more</button></a>
	<div class="img1"><img src="img7.png"></div>
	<div class="border1"></div>
	
	
	
	
	<div class="container3">
    <div class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-center fusion-content-layout-block">
  <div class="fusion-text fusion-text-1 hero-heading" style="--awb-content-alignment:center;">
  <h1 id="section-heading" class="section-h1">There Are A Plethora Of Courses That We Offer</h1>
</div>
     <script>
// Function to handle the intersection observer callback
function handleIntersection(entries, spectator) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      // Add a class to trigger the animation
      entry.target.classList.add("animate");
      // Disconnect the observer to stop watching after animation is triggered
      spectator.unobserve(entry.target);
    }
  });
}

// Options for the intersection observer
const options = {
  root: null, // Use the viewport as the root
  rootMargin: "0px", 
  threshold: 0.5, // Trigger when at least 50% of the element is in the viewport
};

// Create the intersection observer
const spectator = new IntersectionObserver(handleIntersection, options);

// Target the heading element by its id
const heading = document.getElementById("section-heading");

// Start observing the heading element
spectator.observe(heading);

</script>

    <div class="content32">We are proud of the course personalisation options that we offer
		</div>
        
	   
         <!-- Image 1 Cards -->
         <div class="card-category-2">
            
            <span class="category-name"></span> <br/><br/>
            
            <ul>
                <li>
                <div class="img-card iCard-style1">
                        <div class="card-content">
                            <div class="card-image">
                                <span class="card-title">BEAUTY COURSES</span>
                                <img src="beauty.jpg"/>
                            </div>
                            
                            <div class="card-text">
                                <p>
                                Learn beauty care and massage therapy, giving customers a healthy appearance and relaxing moments.
                                </p>
                            </div>
                            
                        </div>
                        
                        <div class="card-link">
                            <a href="beauty.php" title="Read Full"><span>View Courses</span></a>
                        </div>
                    </div>                 
                </li>
                <!-- Image  2 Cards -->
                <li>
                <div class="img-card iCard-style1">
                        <div class="card-content">
                            <div class="card-image">
                                <span class="card-title">NAIL COURSES</span>
                                <img src="11.jpg"/>
                            </div>
                            
                            <div class="card-text">
                                <p>
                                Nail art training is specialised course that teaches individuals
					the art of creating designs on nails  .
                                </p>
                            </div>
                            
                        </div>
                        
                        <div class="card-link">
                            <a href="nail.php" title="Read Full"><span>View Courses</span></a>
                        </div>
                    </div>   

                </li>
                <!-- Image  3 Cards -->
                <li>
                <div class="img-card iCard-style1">
                        <div class="card-content">
                            <div class="card-image">
                                <span class="card-title">HAIR COURSES</span>
                                <img src="hair.jpg"/>
                            </div>
                            
                            <div class="card-text">
                                <p>
                                This Trendy Hair Styling course is perfectly designed to train you in all trendy hairstyle for men and women.
                                </p>
                            </div>
                            
                        </div>
                        
                        <div class="card-link">
                            <a href="hair.php" title="Read Full"><span>View Courses</span></a>
                        </div>
                    </div>                     
                </li>
    
                
        </div>
        
        <br/>

    <!-- Image  4 Cards -->
    <div class="card-category-2">
            
            <span class="category-name"></span> <br/><br/>
            
            <ul>
                <li>
                <div class="img-card iCard-style1">
                        <div class="card-content">
                            <div class="card-image">
                                <span class="card-title">MEHANDI</span>
                                <img src="m1.jpg"/>
                            </div>
                            
                            <div class="card-text">
                                <p>
                                Orane International offers the diploma in mehandi designing to start your career as a mehandi artist.
                                </p>
                            </div>
                            
                        </div>
                        
                        <div class="card-link">
                            <a href="mehandi.php" title="Read Full"><span>View Courses</span></a>
                        </div>
                    </div>                 
                </li>
                <!-- Image 5 Cards -->
                <li>
                <div class="img-card iCard-style1">
                        <div class="card-content">
                            <div class="card-image">
                                <span class="card-title">SALOON MANAGEMENT</span>
                                <img src="salon1.jpg"/>
                            </div>
                            
                            <div class="card-text">
                                <p>
                                The course is well enhance your communication and management skills along with staff management.
                                </p>
                            </div>
                            
                        </div>
                        
                        <div class="card-link">
                            <a href="salon.php" title="Read Full"><span>View Courses</span></a>
                        </div>
                    </div>   

                </li>
                <!-- Image  6 Cards -->
                <li>
                <div class="img-card iCard-style1">
                        <div class="card-content">
                            <div class="card-image">
                                <span class="card-title">INTERNATIONAL CIRTIFICATE</span>
                                <img src="10.jpg"/>
                            </div>
                            
                            <div class="card-text">
                                <p>
                                Orane the Award in Healthy Eating & Well being for the Complementary therapy  as a nutritionist.
                                </p>
                            </div>
                            
                        </div>
                        
                        <div class="card-link">
                            <a href="#" title="Read Full"><span>View Courses</span></a>
                        </div>
                    </div>                     
                </li>  
        </div>
        <br/>
	
    <div class="container4"></div>
     
      
<!-- section 4-->
<section class="bg-dark text-white py-5 min-vh-100" id="countdown-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <div class="pb-3">It's A Bold Mission & We Are Already On It</div>
            </div>
            <div class="col-md-4">
                <span id="count1" class="display-4" style="font-size: 50px;border-left:4px solid white;"></span>
                <div class="student">STUDENTS</div>
	
            </div>
            <div class="col-md-4">
                <span id="count2" class="display-4" style="font-size: 50px;border-left:4px solid white;"></span>
                <div class="school">SCHOOLS</div>
            </div>
            <div class="col-md-4">
                <span id="count3" class="display-4" style="font-size: 50px;border-left:4px solid white;"></span>
                <div class="state">STATES(INDIA)</div>
            </div>
        </div>
    </div>
</section>

<script>
    // Function to start the countdown
    function startCountdown() {
        function counter(id, start, end, duration) {
            let obj = document.getElementById(id),
                current = start,
                range = end - start,
                increment = end > start ? 1 : -1,
                step = Math.abs(Math.floor(duration / range)),
                timer = setInterval(() => {
                    current += increment;
                    obj.textContent = current;
                    if (current == end) {
                        clearInterval(timer);
                    }
                }, step);
        }
        counter("count1", 79900, 80000, 1100);
        counter("count2", 50, 100, 1100);
        counter("count3", 6, 18, 1100);
    }

    // Use Intersection Observer to start the countdown when the section is in the viewport
    const countdownSection = document.getElementById("countdown-section");
    const observer = new IntersectionObserver(entries => {
        if (entries[0].isIntersecting) {
            startCountdown();
            observer.unobserve(countdownSection); // Stop observing once countdown starts
        }
    });

    observer.observe(countdownSection);
</script>

    <div class="container5">
        <div class="section1">
            <img src="s1.png" style="height: 150px;width: 150px;margin:15px 80px;" >
            <div class="text1" style="font-size:20px;margin:-55px 105px;">Diamond</div>
            <div class="text2" style="margin:65px 28px;">Offering opportunities to our partners 
            and employees to become financially independent</div>
        </div>
        <div class="section2">
            <img src="s2.png" style="height: 150px;width: 150px;margin:15px 80px;">
            <div class="text1" style="font-size:20px;margin:-55px 89px;">Methodology</div>
            <div class="text2" style="margin:65px 28px;">
        Innovative & latest curriculum & training methodology</div>
        </div>
        <div class="section3">
             <img src="s3.png"style="height: 150px;width: 150px;margin:15px 80px;" >
             <div class="text1" style="font-size:20px;margin:-55px 105px;">Promises</div>
             <div class="text2" style="margin:65px 28px;">Building our brand on tenets of our Values</div>
        </div>
        <div class="section4">
            <img src="s6.png" style="height: 150px;width: 150px;margin:15px 80px;">
            <div class="text1" style="font-size:20px;margin:-55px 115px;">Mission</div>
            <div class="text2" style="margin:65px 28px;">Consistently delivering on our promises</div>
           
        </div>
    </div>


    <div class="container11">
    <div class="heading11">Our Placement Partners</div>
    <div class="content11">Our globally placed students are the testament to our success.
         There is no limit to where you can be after doing a course with Orane International</div>

<div class="frame">
<div class="train-slider-container">
    <div class="train-slider">
        <div class="slide">
            <div class="brand1"><img src="brand11.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand2"><img src="brand15.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand3"><img src="brand12.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand4"><img src="brand7.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand5"><img src="brand5.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand6"><img src="brand6.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand7"><img src="brand14.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand8"><img src="brand8.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand9"><img src="brand13.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand2"><img src="brand15.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand3"><img src="brand12.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand4"><img src="brand7.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand5"><img src="brand5.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand6"><img src="brand6.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand7"><img src="brand14.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand8"><img src="brand8.jpg"></div>
        </div>
        <div class="slide">
            <div class="brand9"><img src="brand13.jpg"></div>
        </div>
        
        <!-- Add more slides as needed -->
    </div>
</div>
</div>
    
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
	<a href="location.php">
		<div class="icon4">
			<img src="loc.png" title="Our Location in India"></a></div>
	</div>
	

	</body>
	</html>
	