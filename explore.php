<?php
session_start();
include 'conn.php';
if (!isset($_SESSION["user_id"])) {
    echo '
<script>
  alert("KINDLY Login first to EXPLORE");
document.location="login_page.php";
</script>';
    exit();
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Wedding Planner Wedding Category Flat Bootstrap Responsive website Template | Gallery :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Wedding Planner Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
   <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100i,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
	<!-- //online-fonts -->
    <style type="text/css">
        .flex{
            display: flex;
            flex-wrap: wrap;
        }
        .gallery-grid1{
            margin-top: 0px !important;
            margin: 10px 0px;
        }
        .img-fluid{
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- banner -->
    <div class="inner-banner">
       <!-- header -->
        <header>	
	<nav class="mnu navbar-light">
            <div class="logo" id="logo">
                <h1><a href="index.html">the ideal wedding</a></h1>
            </div>
				<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop">
                    <ul class="menu">                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="explore.php">Explore</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        
                    </ul>
    </nav>
</header>
<!-- //header -->
       
    </div>
	 <!-- //banner-text -->
	 	<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Explore</li>
    </ol>
	<!--Gallery-->
		<div class="ga-top">
	<section class="gallery py-lg-5 editContent">
	<div class="container">
	<div class="title-section pt-5 text-center">
    
			  <h2 class="heading-agileinfo text-center  mb-4">Explore</h2>
 </div>
	 </div>
	</section>
	 <div class="gal-content">
		<div class="container py-5">
            
			<div class="row agile_gallery_grids w3-agile demo">
				<div class="gal-sec flex">

                    					
                    <?php
                    $want="";
if($_SESSION["gender"]=="male"){
    $want="female";
}
if($_SESSION["gender"]=="female"){
    $want="male";
}
if($_SESSION["gender"]=="other"){
    $want="other";
}
$query="SELECT * FROM users WHERE gender='$want'";
if($result=mysqli_query($conn,$query)){
    if (mysqli_num_rows($result)>0) {
        while($row=mysqli_fetch_assoc($result)){

                    ?>

                    <div class="gallery-grid1 col-md-4">
						<a href="#gal<?php echo $row['id'];?>">
						<img src="uploads/<?php echo $row['profile_pic']; ?>" alt=" " class="img-fluid" />
						
						</a>
					</div>

                    <?php
                }
}
}
                    ?>
                </div>
				</div>
			</div>
		</div>
		</div>
	 
	
	
	 <!-- popup-->
     <?php
                    $want="";
if($_SESSION["gender"]=="male"){
    $want="female";
}
if($_SESSION["gender"]=="female"){
    $want="male";
}
if($_SESSION["gender"]=="other"){
    $want="other";
}
$query="SELECT * FROM users WHERE gender='$want'";
if($result=mysqli_query($conn,$query)){
    if (mysqli_num_rows($result)>0) {
        while($row=mysqli_fetch_assoc($result)){

                    ?>
        <div id="gal<?php echo $row['id'];?>" class="pop-overlay animate">
            <div class="popup">
                <img src="uploads/<?php echo $row['profile_pic']; ?>" alt="Popup Image" class="img-fluid" />
                <p class="mt-4 editContent">
                    Name : <?php echo $row["name"]; ?><br>
                    Cast : <?php echo $row["cast"]; ?><br>
                    Email : <?php echo $row["email"]; ?><br>
                    Mobile No : <?php echo $row["mobile_no"]; ?><br>
                    DOB : <?php echo $row["dob"]; ?><br>
                    Address : <?php echo $row["address"]; ?><br>
                </p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>

                    <?php
                }
}
}
                    ?>

        <!-- //popup -->

	<!--//Gallery-->
	</div>
<!--/newsletter-->
    <footer class="newsletter_right pymd-5 py-4" id="footer">
        <div class="container">
            <div class="inner-sec py-md-5 py-3">
                <div class="row mb-md-4 mb-md-3">
					<div class="col-lg-3 col-md-6 social-info text-left">
                       <h3 class="tittle1 foot mb-md-5 mb-4 text-white">Get in touch</h3>
						<p>D/124 SPY PLAZA,KING AVENUE, </p>
						<p class="my-2">MUMBAI,MAHARASHTRA,INDIA</p>
						<p class="phone">phone: +91 8425825664</p>
						<p class="phone my-2">Fax: +0444 555 6789</p>
						<p class="phone">Mail:
							<a href="mailto:info@example.com">theidealwedding@gmail.com</a>
						</p>

                    </div>
					<div class="col-lg-3 col-md-6 social-info text-left">
					 <h3 class="tittle1 foot mb-md-5 mb-4 text-white">About Us</h3><p>More than finding a partner,
You’ll find your missing soul.

                     </p>
                       <p>The Ideal Wedding helps you to look into the best interest of you and your heart and to put your right foot forward in order to meet your soulmate. 
It’s just a click away, find the love of your life.</p>

                    </div>
                    <
                </div>
            </div>
        </div>
    </footer>
	<div class="copyright py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-8">      
					<p class="copy-right mt-2">© 2019 Wedding Planner. All Rights Reserved | Design by
						<a href="http://w3layouts.com/"> Mr.Nikesh yadav </a>
					</p>
				</div>
				<div class="col-md-4">
					<ul class="social-icons scial justify-content-end">
						<li class="mr-1"><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li class="mx-1"><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li class="mx-1"><a href="#"><span class="fa fa-google-plus"></span></a></li>
						<li class="mx-1"><a href="#"><span class="fa fa-linkedin"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    <!--//newsletter-->

</body>
</html>