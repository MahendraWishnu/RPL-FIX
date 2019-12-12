<?php
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="RPL/css/bootstrap.css">
    <!-- Animasi slider CSS -->
    <link rel="stylesheet" href="RPL/css/animasi.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="RPL/css/style.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>KUY.com</title>

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
                                            <li><a href="https://www.facebook.com/anif.cuwakeps" target="_blank"><span
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
            <a class="navbar-brand" href="index.php" style=" color:white ; font-family:Segoe Script">
                <img src="RPL/img/logo.png" style="margin-left: 75%;" width="40" height="35"
                    class="d-inline-block align-top" alt="kuy.com">
                KUY.com
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 10%;">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="color:white"> <span class="fas fa-home"></span>
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"> <span class="far fa-address-card"></span>
                            About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tiket.php"> <span class="fas fa-clipboard-list"></span>
                            Ticket
                            Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="xperience.html" id="menu"> <span class="fas fa-box"></span>
                            Xperience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rentcar.html" id="menu"> <span class="fas fa-car"></span> Rent Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html" id="menu"> <span class="fas fa-book"></span> Gallery</a>
                    </li>
                </ul>
                <div class="login" style="margin-right: 0,5%">
                    <ul class="nav navbar-nav navbar-right" id="menu-login">
                        <li style="padding-top:5px;"><a onclick="document.getElementById('id02').style.display='block' "href="#" style="padding: 10px ; font-size: 14px;"><span
                                    class="fas fa-user" class="glyphicon glyphicon-user"></span>
                                Sign Up</a>
                        </li>

 <!-- start form sign up -->
                        <div id="id02" class="modalsign">
                            <form class="modal-contentsign animatesign" action="/action_page.php">
                                <div class="imgcontainersign">
                                    <span onclick="document.getElementById('id02').style.display='none'"
                                        class="closesign" title="Close Modal">&times;</span>
                                </div>
                                <div class="containersign">
                                    <label for="uname"><b>Username</b></label>
                                    <input type="text" placeholder="Enter Username" name="uname" required>
                                    <label for="uname"><b>Email</b></label>
                                    <input type="text" placeholder="Enter Email" name="uname" required>
                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" required>
                                    <label for="psw"><b>Repeat Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" required>
                                    <input type="checkbox" name="remember"> Laki-laki
                                    </label>
                                    <input type="checkbox" name="remember"> Perempuan
                                    </label>
                                    <p style="padding-top:30px;">
                                        <button type="submit">Create</button>
                                        <span class="checkmark"></span>
                                    </p>
                                </div>
                                <div class="containersign" style="background-color:#f1f1f1">
                                    <button type="button" onclick="document.getElementById('id02').style.display='none'"
                                        class="cancelbtnsign">Cancel</button>
                                </div>
                            </form>
                        </div>
                        <script>
                            // Get the modal
                            var modal = document.getElementById('id02');
                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function (event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>
                        <!-- finish form sign up -->

                        <li style="padding-top:5px;"><a onclick="document.getElementById('id01').style.display='block' "href="#"
                                style="font-size: 14px ; padding-right: 20px; border-left: 1px solid rgb(255, 255, 255);"><span
                                    class="fas fa-sign-in-alt" class="glyphicon glyphicon-log-in"
                                    style="padding:5px; margin-left: 8px;"></span>
                                Login</a>
                        </li>

<!-- start form login -->
                        <div id="id01" class="modallogin">
                            <form class="modal-contentlogin animatelogin" action="/action_page.php">
                                <div class="imgcontainerlogin">
                                    <span onclick="document.getElementById('id01').style.display='none'"
                                        class="closelogin" title="Close Modal">&times;</span>
                                    <img src="RPL/img/login/user.png" alt="Avatar" class="avatarlogin">
                                </div>
                                <div class="containerlogin">
                                    <label for="uname"><b>Username</b></label>
                                    <input type="text" placeholder="Enter Username" name="uname" required>
                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" required>
                                    <button type="submit">Login</button>
                                    <label>
                                        <input type="checkbox" checked="checked" name="remember"> Remember me
                                    </label>
                                </div>
                                <div class="containerlogin" style="background-color:#f1f1f1">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                        class="cancelbtnlogin">Cancel</button>
                                    <span class="pswlogin">Forgot <a href="#">password?</a></span>
                                </div>
                            </form>
                        </div>
                        <script>
                            // Get the modal
                            var modal = document.getElementById('id01');
                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function (event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>
                        <!-- finish form login -->

                        <li>
                            <a href="contact.html">
                                <button type="button" class="btn btn-outline-primary">Contact Us</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- finish navbar -->

    <!-- start bootstrap slider -->
    <script>
        var elem = document.getElementById("myvideo");

        function openFullscreen() {
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.mozRequestFullScreen) {
                /* Firefox */
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) {
                /* Chrome, Safari & Opera */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) {
                /* IE/Edge */
                elem.msRequestFullscreen();
            }
        }
    </script>

    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 500px; width: 100%;">
                    <video autoplay loop id="myVideo" class="d-block w-100" alt="...">
                        <source src="RPL/video/Explore.m4v" type="video/mp4">
                    </video>
                    <div class="carousel-caption d-none d-md-block animated flip delay-0    s" style="margin-bottom:11%">
                        <h5>Enjoy Your</h5>
                        <h1 style="font-size:70PX; font-family:Lucida Handwriting">HOLIDAY</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="RPL/img/slider/2.jpg" class="d-block w-100" alt="..." style="height:500px">
                    <div class="carousel-caption d-none d-md-block animated bounceInDown delay-0s"
                        style="margin-bottom:11%">
                        <h5>My Trip My Adventure</h5>
                        <p>My Trip My Adventure adalah sebuah acara televisi bergenre dokumenter wisata yang ditayangkan
                            stasiun televisi Trans TV sejak bulan September 2013. Dalam acara ini, My Trip My Adventure
                            menggambarkan petualangan dan eksplorasi keindahan alam Indonesia.[1] Acara ini lazimnya
                            dipandu oleh dua pembawa acara, atau dapat dipandu lebih banyak. Kini Acara MTMA ditayangkan
                            setiap Sabtu-Minggu pkl 08.30 WIB</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="RPL/img/slider/3.jpg" class="d-block w-100" alt="..." style="height:500px">
                    <div class="carousel-caption d-none d-md-block animated lightSpeedIn delay-1s"
                        style="margin-bottom:11%">
                        <h5>My Trip My Adventure</h5>
                        <p>My Trip My Adventure adalah sebuah acara televisi bergenre dokumenter wisata yang ditayangkan
                            stasiun televisi Trans TV sejak bulan September 2013. Dalam acara ini, My Trip My Adventure
                            menggambarkan petualangan dan eksplorasi keindahan alam Indonesia.[1] Acara ini lazimnya
                            dipandu oleh dua pembawa acara, atau dapat dipandu lebih banyak. Kini Acara MTMA ditayangkan
                            setiap Sabtu-Minggu pkl 08.30 WIB</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- finish bootstrap slider -->

    <!-- start most popular destination -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center" id="popular">Most Popular Destination</h1>
            <hr class="new2">
            <div class="card-deck" id="row-up">
                <div class="card" id="row-up-shadow">
                    <img src="RPL/img/popular/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Universal Studio</h5>
                        <p class="card-text">Selain Merlion dengan air mancurnya, salah satu tempat yang paling populer di Singapura dan dikunjungi oleh banyak wisatawan Indonesia adalah Universal Studio Singapore atau yang biasa disingkat USS. Apa sih yang menjadi keistimewaan USS ini?</p>
                        <a href="https://www.universalstudioshollywood.com/promotions/general-admission-ticket-30/?channel=sem&source=gog&campaign=ush&media=paid&category=directresponse:intl_intl:en_all_lang:ga_nooff:b:na&gclid=EAIaIQobChMIg5irysCj4wIVUCQrCh15uAgGEAAYASAAEgIivPD_BwE#" class="btn btn-primary stretched-link">View Detail</a>
                    </div>
                </div>
                <div class="card" id="row-up-shadow">
                    <img src="RPL/img/popular/2.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Menara Eiffel</h5>
                        <p class="card-text">Menara Eiffel (Tour Eiffel) merupakan sebuah menara besi yang dibangun di Champ de Mars di tepi Sungai Seine di Paris. Menara ini telah menjadi ikonglobal Perancis dan salah satu struktur terkenal di dunia. Menara Eiffel adalah bangunan tertinggi di Paris.</p>
                        <a href="https://www.obonparis.com/id/magazine/eiffel-tower" class="btn btn-primary stretched-link">View Detail</a>
                    </div>
                </div>
                <div class="card" id="row-up-shadow">
                    <img src="RPL/img/popular/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sydney Opera House</h5>
                        <p class="card-text">Kisah Dibalik Gedung Opera Sydney 
Sydney Opera House (Gedung Opera Sydney) merupakan sebuah pencapaian arsitektur yang diabdikan sebagai ekspresi terhadap estetika dan seni. Bagaimana kisah pendirian Sydney Opera House? Pada akhir tahun 1940an.</p>
                        <a href="https://www.sydneyoperahouse.com/" class="btn btn-primary stretched-link">View Detail</a>
                    </div>
                </div>
                <div class="card" id="row-up-shadow">
                    <img src="RPL/img/popular/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">City of Light</h5>
                        <p class="card-text">Menurut sejarah, diperkirakan tradisi memasang lampion sudah ada di daratan Cina sejak era Dinasti Xi Han, sekitar abad ke-3 masehi. Munculnya lampion hampir bersamaan dengan dikenalnya tehnik pembuatan kertas. Lampion pada masa-masa awal memang diduga.</p>
                        <a href="#" class="btn btn-primary stretched-link">View Detail</a>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card" id="row-up-shadow">
                    <img src="RPL/img/popular/5.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="text-align:center;">
                        <h5 class="card-title">Raja Ampat</h5>
                        <p class="card-text">Deskripsi tempat indah di atas bukanlah mimpi, semuanya nyata dan benar-benar ada. Kepulauan Raja Ampat, Papua Barat, Indonesia-lah tempatnya. Kepulauan yang berada di ujung barat laut pulau Papua ini memang sudah dikenal luas sebagai ‘tambang emas’.</p>
                        <a href="https://www.indonesiakaya.com/jelajah-indonesia/detail/raja-ampat-surga-petualangan-dunia-di-ujung-papua" class="btn btn-primary stretched-link">View Detail</a>
                    </div>
                </div>
                <div class="card" id="row-up-shadow">
                    <img src="RPL/img/popular/6.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="text-align:center;">
                        <h5 class="card-title">Great Wall</h5>
                        <p class="card-text">Tembok Besar Tiongkok disebut-sebut sebagai salah satu bangunan buatan manusia yang terlihat dari ruang angkasa dengan mata telanjang. Namun, setelah dilakukan investigasi, persepsi tersebut tidak benar. Dari orbit yang rendah memang dapat terlihat.</p>
                        <a href="#" class="btn btn-primary stretched-link">View Detail</a>
                    </div>
                </div>
                <div class="card" id="row-up-shadow">
                    <img src="RPL/img/popular/7.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="text-align:center;">
                        <h5 class="card-title">Colosseum</h5>
                        <p class="card-text">Kolosseum adalah sebuah peninggalan bersejarah berupa arena gladiator, dibangun oleh Vespasian. Tempat pertunjukan yang besar berbentuk elips yang disebut amfiteater atau dengan nama aslinya Flavian Amphitheatre, termasuk salah satu Keajaiban Dunia.</p>
                        <a href="https://www.colosseum-rome-tickets.com/?gclid=EAIaIQobChMIuemgycWj4wIVlzUrCh0UrQVNEAAYASAAEgJvy_D_BwE&utm_expid=74432767-11.dbgox9KWRkq-5dThk06AUw.0&utm_referrer=https%3A%2F%2Fwww.google.com%2F" class="btn btn-primary stretched-link">View Detail</a>
                    </div>
                </div>
                <div class="card" id="row-up-shadow">
                    <img src="RPL/img/popular/8.png" class="card-img-top" alt="...">
                    <div class=" card-body" style="text-align:center;">
                        <h5 class="card-title">Tian Tan Temple</h5>
                        <p class="card-text">Tian Tan (天坛) atau dalam Bahasa Indonesia, Kuil Surga adalah tempat pemujaan agama Khonghucu & Tao yang terletak di Beijing Dibagun pada abad 15 M tepatnya dimulai tahun 1420 M (Dinasti Ming) dan dibuat di atas lahan seluas 2.700 KM².</p>
                        <a href="http://www.discoverhongkong.com/id/see-do/culture-heritage/chinese-temples/big-buddha-and-po-lin-monastery.jsp" class="btn btn-primary stretched-link">View Detail</a>
                    </div>
                </div>
            </div>
            <div class="row" style="text-align:center; padding-top: 4%;">
                <div class="col-md-12">
                    <a href="xperience.html"><button type="button" class="btn btn-outline-primary"
                            style="text-align:center;">View More
                            Destination</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- finish most popular destination -->

 <!-- Start weather -->
 
<!-- Finish weather -->


    <!-- Start Popular Group Packages -->
    <div class="container">
        <h1 class="display-4 text-center" id="popular">Popular Group Packages</h1>
        <hr class="new2">
        <div class="row-indo" style="padding-top:3%;padding-bottom: 3%;">
            <div class="column-indo-index">
                <div class="card-indo-group">
                    <img src="RPL/img/xperience/city/13.jpg" alt="Jane">
                    <div class="container-indo-group">
                        <h5>Archery Battle Warrior</h5>
                        <p><span class="fas fa-map-marker-alt" style="padding-right:1%;"></span>Jakarta,
                            Indonesia</p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <div class="row">
                            <div class="col">
                                <p><button class="button-indo-group">Find Tickets</button></p>
                            </div>
                            <div class="col">
                                <p id="rp">Rp 45.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-indo-index">
                <div class="card-indo-group">
                    <img src="RPL/img/xperience/city/14.jpg" alt="Jane">
                    <div class="container-indo-group">
                        <h5>Pandora Experience Kelapa Gading</h5>
                        <p><span class="fas fa-map-marker-alt" style="padding-right:1%;"></span>Jakarta,
                            Indonesia</p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <div class="row">
                            <div class="col">
                                <p><button class="button-indo-group">Find Tickets</button></p>
                            </div>
                            <div class="col">
                                <p id="rp">Rp 150.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-indo-index">
                <div class="card-indo-group">
                    <img src="RPL/img/xperience/city/15.jpg" alt="Jane">
                    <div class="container-indo-group">
                        <h5>Pandora Experience Puri Escape</h5>
                        <p><span class="fas fa-map-marker-alt" style="padding-right:1%;"></span>Jakarta,
                            Indonesia</p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <div class="row">
                            <div class="col">
                                <p><button class="button-indo-group">Find Tickets</button></p>
                            </div>
                            <div class="col">
                                <p id="rp">Rp 148.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="text-align:center; padding-bottom: 4%;">
                <a href="xperience.html"><button type="button" class="btn btn-outline-primary"
                        style="text-align:center;">View More
                        Packages</button></a>
            </div>
        </div>
    </div>
    <!-- Finish Popular Group Packages -->

    <!-- Start Popular Water Parks -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center" id="popular">Popular Water Parks</h1>
            <hr class="new2">
            <div class="row-indo" style="padding-top:3%;padding-bottom: 3%;">
                <div class="column-indo-index">
                    <div class="card-indo-group">
                        <img src="RPL/img/xperience/city/16.jpg" alt="Jane">
                        <div class="container-indo-group">
                            <h5>Waterbom Bali</h5>
                            <p><span class="fas fa-map-marker-alt" style="padding-right:1%;"></span>Bali,
                                Indonesia</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <div class="row">
                                <div class="col">
                                    <p><button class="button-indo-group">Find Tickets</button></p>
                                </div>
                                <div class="col">
                                    <p id="rp">Rp 320.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-indo-index">
                    <div class="card-indo-group">
                        <img src="RPL/img/xperience/city/17.jpg" alt="Jane">
                        <div class="container-indo-group">
                            <h5>Jungle Waterpark</h5>
                            <p><span class="fas fa-map-marker-alt" style="padding-right:1%;"></span>Jawa Barat,
                                Indonesia</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <div class="row">
                                <div class="col">
                                    <p><button class="button-indo-group">Find Tickets</button></p>
                                </div>
                                <div class="col">
                                    <p id="rp">Rp 55.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-indo-index">
                    <div class="card-indo-group">
                        <img src="RPL/img/xperience/city/18.jpg" alt="Jane">
                        <div class="container-indo-group">
                            <h5>Waterboom Lippo Cikarang</h5>
                            <p><span class="fas fa-map-marker-alt" style="padding-right:1%;"></span>Jawa Barat,
                                Indonesia</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <div class="row">
                                <div class="col">
                                    <p><button class="button-indo-group">Find Tickets</button></p>
                                </div>
                                <div class="col">
                                    <p id="rp">Rp 45.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align:center;">
                    <a href="xperience.html"><button type="button" class="btn btn-outline-primary"
                            style="text-align:center;">View More
                            Water Parks</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Finish Popular Water Parks -->

    <!-- start hotel-partner -->
    <div class="jumbotron jumbotron-fluid" id="hotel-partner">
        <div class="container">
            <h1 class="display-4 text-center" id="popular">Hotel Partner
            </h1>
            <hr class="new2">
            <div class="row" id="row-up">
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/1.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/2.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/3.jpg" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/4.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/5.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/6.jpg" width="100" height="100">
                    </a>
                </div>
            </div>
            <div class="row" style="text-align: center; padding-bottom: 25px;">
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/7.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/8.jpg" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/9.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/10.jpg" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/11.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/12.png" width="100" height="100">
                    </a>
                </div>
            </div>
            <div class="row" style="text-align: center; padding-bottom: 25px;">
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/13.jpg" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/14.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/15.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/16.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/17.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/18.png" width="100" height="100">
                    </a>
                </div>
            </div>
            <div class="row" style="text-align: center;">
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/19.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/20.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/21.jpg" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/22.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/23.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <img href="" src="RPL/img/hotel/24.jpg" width="100" height="100">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- finish hotel-partner -->

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
    <!-- Finish footer -->

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