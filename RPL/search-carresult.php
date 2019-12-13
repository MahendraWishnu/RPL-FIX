<?php 
session_start();
include('includes/config.php');
include('includes/format_rupiah.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>JOGTRIP</title>
<link rel="stylesheet" href="css/animasi.css">
<link rel="stylesheet" href="css/bootstrap.css">
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="css/style2.css" Type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>

<!-- Start Switcher -->

<!-- /Switcher -->  

<!--Header--> 
<header id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="header-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="header-top-left">
                                    <div class="top-email">
                                        <i class="fa fa-envelope"></i>
                                        <span>nifanif10@gmail.com</span>
                                    </div>
                                    <div class="top-phone">
                                        <i class="fa fa-phone"></i>
                                        <span>087883816678</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="header-top-right">
                                    <nav>
                                        <ul class="top-social-nav">
                                            <li><a href="https://www.w3schools.com" target="_blank"><span
                                                        class="fab fa-facebook"></span></a></li>
                                            <li><a href="https://www.instagram.com/nifanif/" target="_blank"><span
                                                        class="fab fa-instagram"></span></a></li>
                                            <li><a href="https://twitter.com/AmikomJogja?lang=en" target="_blank"><span
                                                        class="fab fa-twitter"></span></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCl-HaWwpTbJyN-5EfFfor8A/featured?view_as=subscriber"
                                                    target="_blank"><span class="fab fa-youtube"></span></a></li>
                                                    <li><a class="nav-link" href="contact-us.php"
                                                    ><span class="fas fa-address-book"></span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- finish header  -->
    <!-- start navbar -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light "
            style="background-image: linear-gradient(to right, #e600e6 , #330033); " class="nav-menu">
            <a class="navbar-brand" href="index.html" style=" color:white ; font-family:Segoe Script">
                <img src="img/logo.png" style="margin-left: 75%;" width="40" height="35"
                    class="d-inline-block align-top" alt="kuy.com">
                    JOGTRIP
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 10%;">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"> <span class="fas fa-home"></span>
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html"> <span class="far fa-address-card"></span>
                            About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ticketreservation.php"> <span class="fas fa-clipboard-list"></span>
                            Ticket
                            Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="xperience.html" id="menu"> <span class="fas fa-box"></span>
                            Xperience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="car-listing.php" id="menu" style="color:white"> <span
                                class="fas fa-car"></span> Rent Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html" id="menu"> <span class="fas fa-book"></span> Gallery</a>
                    </li>
                </ul>
              
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['ulogin'];
$sql ="SELECT nama_user FROM users WHERE email='$email'";
$query = mysqli_query($koneksidb,$sql);
if(mysqli_num_rows($query)>0)
{
while($results = mysqli_fetch_array($query))
	{
	 echo htmlentities($results['nama_user']); }}?>
	 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <ul class="dropdown-menu">
           <?php if($_SESSION['ulogin']){?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="riwayatsewa.php">Riwayat Sewa</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Update Password</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Riwayat Sewa</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Sign Out</a></li>
            <?php } ?>
            
          </ul>
        </div>
      </div>
    </section>
    <!-- finish navbar -->
<!-- /Header --> 
<!-- /Header --> 

<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Daftar Mobil</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Daftar Mobil</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
			<?php 
			//Query for Listing count
			$brand=$_POST['brand'];
			$fueltype=$_POST['fueltype'];
			$sql = "SELECT * from mobil WHERE id_merek='$brand' AND bb='$fueltype'";
			$query = mysqli_query($koneksidb,$sql);
			$cnt = mysqli_num_rows($query);
			?>
			<p><span><?php echo htmlentities($cnt);?> Mobil Ditemukan</span></p>
			</div>
		</div>

<?php 
$sql1 = "SELECT mobil.*,merek.* FROM mobil,merek WHERE merek.id_merek=mobil.id_merek and mobil.id_merek='$brand' and mobil.bb='$fueltype'";
$query1 = mysqli_query($koneksidb,$sql1);
if(mysqli_num_rows($query1)>0)
{
while($result = mysqli_fetch_array($query1))
{ 
?>
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><img src="adminsm/img/vehicleimages/<?php echo htmlentities($result['image1']);?>" class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
            <h5><a href="vehical-details.php?vhid=<?php echo htmlentities($result['id_mobil']);?>"><?php echo htmlentities($result['nama_merek']);?> , <?php echo htmlentities($result['nama_mobil']);?></a></h5>
            <p class="list-price"><?php echo htmlentities(format_rupiah($result['harga']));?> / Hari</p>
            <ul>
              <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result['seating']);?> Seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result['tahun']);?> </li>
              <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result['bb']);?></li>
            </ul>
            <a href="vehical-details.php?vhid=<?php echo htmlentities($result['id_mobil']);?>" class="btn">Lihat Detail <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div>
        </div>
      <?php }} ?>
         </div>
      
      <!--Side-Bar-->
     <aside class="col-md-3 col-md-pull-9">
		<div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i>Cari Mobil</h5>
          </div>
          <div class="sidebar_filter">
            <form action="search-carresult.php" method="post">
              <div class="form-group select">
                <select class="form-control" name="brand" required>
                  <option value="" selected>Pilih Merek</option>
                  <?php 
					$sql3 = "SELECT * from  merek";
					$query3 = mysqli_query($koneksidb,$sql3);
					if(mysqli_num_rows($query3)>0)
					{
						while($result = mysqli_fetch_array($query3))
						{ ?>
						<option value="<?php echo htmlentities($result['id_merek']);?>"><?php echo htmlentities($result['nama_merek']);?></option>
				  <?php }} ?>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control" name="fueltype" required>
                  <option value="" selected>Jenis Bahan Bakar</option>
				  <option value="Bensin">Bensin</option>
				  <option value="Diesel">Diesel</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i>Cari</button>
              </div>
            </form>
          </div>
        </div>
	 
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i>Mobil Terbaru</h5>
          </div>
          <div class="recent_addedcars">
            <ul>
			<?php
				$sql2 = "SELECT mobil.*,merek.* FROM mobil,merek 
						WHERE merek.id_merek=mobil.id_merek order by merek.id_merek desc limit 4";
				$query2 = mysqli_query($koneksidb,$sql2);
				if(mysqli_num_rows($query2)>0)
				{
					while($result = mysqli_fetch_array($query2))
					{ ?>
					<li class="gray-bg">
						<div class="recent_post_img"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result['id_mobil']);?>"><img src="adminsm/img/vehicleimages/<?php echo htmlentities($result['image1']);?>" alt="image"></a> </div>
						<div class="recent_post_title"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result['id_mobil']);?>"><?php echo htmlentities($result['nama_merek']);?> , <?php echo htmlentities($result['nama_mobil']);?></a>
						<p class="widget_price"><?php echo htmlentities(format_rupiah($result['harga']));?> / Hari</p>
						</div>
					</li>
              <?php }} ?>
            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar-->
  </div>
  </div>
</section>
<!-- /Listing--> 

<!--Footer -->
<footer id="footer">
        <!-- start footer top -->
        <div class="footer-top">
            <div class="container">
                <div class="footer-top-area">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="footer-widget">
                                <h4 style="margin-left: 13px;">Information</h4>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Ticket Reservation</a></li>
                                    <li><a href="">Xperience</a></li>
                                    <li><a href="">Rent Car</a></li>
                                    <li><a href="">Gallery</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="footer-widget">
                                <h4 style="margin-left: 13px;">Products</h4>
                                <ul>
                                    <li><a href="">Destination</a></li>
                                    
                                    <li><a href="">Car Rental</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="footer-widget">
                                <h4>News letter</h4>
                                <p>Get latest update, news & travel offers</p>
                                <form class="subscribe-form">
                                    <input type="email" placeholder="Type your Email">
                                    <button class="btn btn-primary" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="footer-widget">
                                <h4>Contact</h4>
                                <address>
                                    <p>Kampus Terpadu : Jl. Ring Road Utara, Condong Catur, Sleman, Yogyakarta</p>
                                    <p>Phone : 087883816678</p>
                                    <p>Website: amikom.ac.id</p>
                                    <p>Email : nifanif10@gmail.com</p>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer top -->
        <!-- start footer bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-area">
                    <p>&copy; All Right Reserved. Designed by <a href="index.html" rel="nofollow">nifanif10</a></p>
                </div>
            </div>
        </div>
        <!-- end footer bottom -->
    </footer>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script>
 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
