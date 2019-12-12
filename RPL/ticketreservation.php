<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Animasi slider CSS -->
    <link rel="stylesheet" href="css/animasi.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style1.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>JOGTRIP</title>

</head>

<body>
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
                        <a class="nav-link" href="ticketreservation.html" style="color:white"> <span
                                class="fas fa-clipboard-list"></span> Ticket
                            Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="xperience.html" id="menu"> <span class="fas fa-box"></span>
                            Xperience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="car-listing.php" id="menu"> <span class="fas fa-car"></span> Rent Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html" id="menu"> <span class="fas fa-book"></span> Gallery</a>
                    </li>
                </ul>

                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- finish navbar -->

    <!-- start section -->

    <div class="hero-image-ticket">
        <div class="hero-text">
            <i class="carousel-caption d-none d-md-block animated slideInUp">
                <h1 style="font-size:40PX;">Ticket Reservation</h1>
                <p>Enjoy Your Holiday</p>
                <p class="fas fa-angle-double-down"></p>
            </i>
        </div>
    </div>

    <!-- finish section -->

    <!-- start menu -->


    <div class="container">
        <div class="menu-ts">
            <h1 class="display-4 text-center">Booking Your Ticket Now</h1>
            <p>Nikmati perjalanan anda bersama KUY.com </p>
        </div>
    
	<center>
		<a href="ticketreservation.php?act=tambah-tiket"><input type="submit" class="submit" value="Tambah Tiket"></a>
		<a href="ticketreservation.php?act=data-tiket"><input type="submit" class="submit" value="Data Tiket"></a>
		<a href="ticketreservation.php?act=data-transaksi"><input type="submit" class="submit" value="Data Transaksi"></a>
	</center>
	<div class="kotak">
        <?php
        include 'konek.php';
			if(isset($_GET['act'])){
				if($_GET['act'] == 'tambah-tiket')
					include 'tambah-tiket.php';
				else if($_GET['act'] == 'data-tiket')
					include 'data-tiket.php';
				else if($_GET['act'] == 'data-transaksi')
					include 'data-transaksi.php';
			}else if(isset($_GET['detail'])){
					include 'detail.php';
			} else {
				include 'data-transaksi.php';
			}
		?>
	</div>
</div>


        <!-- finish menu -->

        <!-- start timeline -->
        <section class="timeline-booking">
            <h1 class="display-4 text-center">
            </h1>
           
            <div class="timeline">
                <div class="container-timeline left">
                    <div class="content">
                        <h3>Mudahnya Pesan Tiket</h3>
                        <p>Pesan tiket sekaligus dengan mudah dan
                            cepat. Tidak perlu risau, hanya dengan satu
                            sentuhan jari, tiket dan  yang kamu
                            butuhkan bisa didapatkan dengan mudah.</p>
                    </div>
                </div>
                <div class="container-timeline right">
                    <div class="content">
                        <h3>Banyak Pilihan Produk Terbaik</h3>
                        <p>Ada banyak pilihan maskapai dengan rute
                            terlengkap ke seluruh dunia. Tersedia juga
                            banyak pilihan di Asia. Kamu juga bisa
                            cari tiket kereta ke berbagai rute, sewa mobil, mencari film favorit
                            dan pesan tiket hiburan.</p>
                    </div>
                </div>
                <div class="container-timeline left">
                    <div class="content">
                        <h3>Banyak Pilihan Cara Pembayaran</h3>
                        <p>Saat transaksi di KUY.com, kamu bisa memilih
                            cara pembayaran sesuai keinginan. Ada pilihan
                            pembayaran via bank transfer, ATM transfer,
                            Virtual Account (VA), kartu debit online,
                            maupun kartu kredit. Bisa dicicil juga, lho.
                            Prosesnya mudah dan simpel!</p>
                    </div>
                </div>
                <div class="container-timeline right">
                    <div class="content">
                        <h3>Banyak Promo Spesial</h3>
                        <p>Banyak promo untuk tiket
                            kesayanganmu. Dapatkan diskon harga terbaik
                            agar bujet liburan kamu semakin hemat. Tidak
                            ada alasan lagi untuk menunda liburan kamu.</p>
                    </div>
                </div>
                <div class="container-timeline left">
                    <div class="content">
                        <h3>Dapatkan KUY Point untuk Member</h3>
                        <p>Dengan menjadi member di KUY.com, kamu
                            bisa mendapatkan KUY Point setiap kali
                            melakukan transaksi. Setelah terkumpul, KUY
                            Point bisa kamu tukarkan untuk mendapat
                            potongan harga maupun hadiah menarik.</p>
                    </div>
                </div>
                <div class="container-timeline right">
                    <div class="content">
                        <h3>Ulasan Tamu Nyata</h3>
                        <p>2.000.000+ ulasan terverifikasi dari tamu hotel akan membantu Anda membuat keputusan yang
                            tepat.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- finish timeline -->
        
       <!-- Start footer -->
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
                                    <li><a href="">Flights</a></li>
                                    <li><a href="#">Hotels</a></li>
                                    <li><a href="">Trains</a></li>
                                    <li><a href="">Flight and Hotel</a></li>
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

        <!-- start btn to top -->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

        <!-- finish btn to top -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.js"></script>
        <script src="js/proper.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>

</html>