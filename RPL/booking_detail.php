<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/format_rupiah.php');
include('includes/library.php');
if(strlen($_SESSION['ulogin'])==0){ 
	header('location:car-listing.php');
}else{
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

<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->  
</head>
<body>

<!-- Start Switcher -->

<!-- /Switcher -->  
        
<!--Header-->
<!--Page Header-->
    <!-- Start header  -->
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
            </li>                                                                          
          </ul>
        </div>
      </div>
    </section>
    <!-- finish navbar -->

<?php 
$kode=$_GET['kode'];
$sql1 	= "SELECT booking.*,mobil.*, merek.* FROM booking,mobil,merek WHERE booking.id_mobil=mobil.id_mobil AND merek.id_merek=mobil.id_merek and booking.kode_booking='$kode'";
$query1 = mysqli_query($koneksidb,$sql1);
$result = mysqli_fetch_array($query1);
$harga	= $result['harga'];
$durasi = $result['durasi'];
$totalmobil = $durasi*$harga;
$drivercharges = $result['driver'];
$totalsewa = $totalmobil+$drivercharges;
$tglmulai = strtotime($result['tgl_mulai']);
$jmlhari  = 86400*1;
$tgl	  = $tglmulai-$jmlhari;
$tglhasil = date("Y-m-d",$tgl);
?>
<section class="user_profile inner_pages">
			<center><h3>Detail Sewa</h3></center>
	<div class="container">
	<div class="user_profile_info">	
		<div class="col-md-12 col-sm-10">
        <form method="post" name="sewa" onSubmit="return valid();"> 
			<input type="hidden" class="form-control" name="vid"  value="<?php echo $vid;?>"required>
            <div class="form-group">
			<label>Kode Sewa</label>
				<input type="text" class="form-control" name="mobil" value="<?php echo $result['kode_booking'];?>"readonly>
            </div>
			<input type="hidden" class="form-control" name="vid"  value="<?php echo $vid;?>"required>
            <div class="form-group">
			<label>Mobil</label>
				<input type="text" class="form-control" name="mobil" value="<?php echo $result['nama_merek']; echo ", "; echo $result['nama_mobil'];?>"readonly>
            </div>
            <div class="form-group">
			<label>Tanggal Mulai</label>
				<input type="date" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" value="<?php echo $result['tgl_mulai'];?>"readonly>
            </div>
            <div class="form-group">
			<label>Tanggal Selesai</label>
				<input type="date" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" value="<?php echo $result['tgl_selesai'];?>"readonly>
            </div>
            <div class="form-group">
			<label>Durasi</label>
				<input type="text" class="form-control" name="durasi" value="<?php echo $durasi;?> Hari"readonly>
            </div>
            <div class="form-group">
			<label>Biaya Mobil (<?php echo $durasi;?> Hari)</label><br/>
				<input type="text" class="form-control" name="biayamobil" value="<?php echo format_rupiah($totalmobil);?>"readonly>
            </div>
            <div class="form-group">
			<label>Biaya Driver (<?php echo $durasi;?> Hari)</label><br/>
				<input type="hidden" class="form-control" name="biayadriver" value="<?php echo $drivercharges;?>"readonly>
				<input type="text" class="form-control" name="driver" value="<?php echo format_rupiah($drivercharges);?>"readonly>
            </div>
            <div class="form-group">
			<label>Total Biaya Sewa (<?php echo $durasi;?> Hari)</label><br/>
				<input type="text" class="form-control" name="total" value="<?php echo format_rupiah($totalsewa);?>"readonly>
            </div>
			<?php if($result['status']=="Menunggu Pembayaran"){
				$sqlrek 	= "SELECT * FROM tblpages WHERE id='5'";
				$queryrek = mysqli_query($koneksidb,$sqlrek);
				$resultrek = mysqli_fetch_array($queryrek);
				?>
			<b>*Silahkan transfer total biaya sewa ke <?php echo $resultrek['detail'];?> maksimal tanggal <?php echo IndonesiaTgl($tglhasil);?>.
			<?php
			}else{
				
			}?>
			</b>
			<br/><br/>			
			<div class="form-group">
				<a href="detail_cetak.php?kode=<?php echo $kode;?>" target="_blank" class="btn btn-primary btn-xs">Cetak</a>
			</div>
        </form>
		</div>
		</div>
      </div>
</section>
<!--/my-vehicles--> 
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
<?php } ?>