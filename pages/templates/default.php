<?php
    include "../db/f-connect.php";
    include "../db/f-script.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- CSS -->
    <link rel="stylesheet" href="../public/css/stylesheet.css" />
    <link rel="stylesheet" href="../public/css/system.css" />
    <link rel="stylesheet" href="../public/css/photo.css" />
    <link rel="stylesheet" href="../public/css/argot.css" />


<!-- Links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="litebox-master/assets/css/litebox.css" rel="stylesheet" type="text/css" media="all" />

    <!-- MD Bootstrap 4.5.4 -->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">

<!-- Add for gallery -->
    <link href="../public/css_gallery/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../public/css_gallery/style.css" rel="stylesheet" type="text/css" media="all" />
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="../public/litebox-master/assets/css/litebox.css" rel="stylesheet" type="text/css" media="all" />
		
	<!-- The Menu -->
	<link href="../public/stylesheets_gallery/styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../public/pe-icon-7-stroke/css/pe-icon-7-stroke.css">

	<!-- Optional - Adds useful class to manipulate icon font display -->
	<link rel="stylesheet" href="../public/pe-icon-7-stroke/css/helper.css">
<!-- /Add for gallery -->

<!-- End : Links -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


    <title>Projet Bilal</title>

</head>

<body>

<!-- HEADER -->

    <div class="container" style="height: 40px"></div>

<!-- END HEADER -->

<div class="container-fluid">
    <div class="row">

<!-- LEFT NAV -->

        <div class="col-1 col-sm-1 col-md-2 col-lg-3 col-xl-3">
            <!-- SIDEBAR BOOTSTRAP -->
            <?php if($p === 'system') { ?>
                <!-- SideNav slide-out button -->
                <a href="#" data-activates="slide-out" id="burger_slide_menu" class="btn btn-primary p-3 button-collapse btn-sm"><i class="fa fa-bars"></i></a>
                
                <!-- Sidebar navigation -->
                <div id="slide-out" class="side-nav sn-bg-4 fixed">
                    <ul class="custom-scrollbar">
                        <!-- Logo -->
                        <li>
                            <div class="logo-wrapper waves-light waves-effect waves-light">
                                <a href="index.php"><img src="../img/logo_bilal.jpg" class="img-fluid flex-center"></a>
                            </div>
                        </li>
                        <!--/. Logo -->
                        <hr>
                        <!--Social-->
                        <li>
                            <ul class="social">
                                <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
                                <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
                                <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus"> </i></a></li>
                                <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
                            </ul>
                        </li>
                        <!--/Social-->
                        <hr>
                        <!--Search Form-->
                        <li>
                            <form class="search-form" role="search">
                                <div class="form-group md-form mt-0 pt-1 waves-light">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </li>
                        <!--/.Search Form-->
                        <!-- Side navigation links -->
                        <li>
                            <ul class="collapsible collapsible-accordion">
                                <li class="menu_logo active active_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=system">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        System -->
                                        <img src="../img/system_sidemenu.jpg" alt="system_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=photo">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Photo -->
                                        <img src="../img/toph_sidemenu.jpg" alt="photo_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=argot">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Argot -->
                                        <img src="../img/argot_sidemenu.jpg" alt="argot_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=tarba">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Tarba -->
                                        <img src="../img/tarba_sidemenu.jpg" alt="tarba_logo">
                                    </a>
                                </li>
                                <hr>
                                <li>
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=about">
                                        <!-- <i class="fa fa-eye"></i> -->
                                        À propos
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="#" class="waves-effect">Introduction</a>
                                            </li>
                                            <li><a href="#" class="waves-effect">Monthly meetings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <hr>
                                <li>
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=contact">
                                        <!-- <i class="far fa-comment-alt"></i> -->
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/. Side navigation links -->
                    </ul>
                <div class="sidenav-bg rgba-black-strong"></div>
                <a href="#" id="exit_slide_menu"  class="btn btn-primary button-collapse btn-sm"><i class="fas fa-sign-out-alt"></i></a>
                </div>
                <!--/. Sidebar navigation -->
            <?php } ?>

            <?php if($p === 'photo') { ?>
                <!-- SideNav slide-out button -->
                <a href="#" data-activates="slide-out" id="burger_slide_menu" class="btn btn-primary p-3 button-collapse btn-sm"><i class="fa fa-bars"></i></a>
                
                <!-- Sidebar navigation -->
                <div id="slide-out" class="side-nav sn-bg-4 fixed">
                    <ul class="custom-scrollbar">
                        <!-- Logo -->
                        <li>
                            <div class="logo-wrapper waves-light waves-effect waves-light">
                                <a href="index.php"><img src="../img/logo_bilal.jpg" class="img-fluid flex-center"></a>
                            </div>
                        </li>
                        <!--/. Logo -->
                        <hr>
                        <!--Social-->
                        <li>
                            <ul class="social">
                                <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
                                <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
                                <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus"> </i></a></li>
                                <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
                            </ul>
                        </li>
                        <!--/Social-->
                        <hr>
                        <!--Search Form-->
                        <li>
                            <form class="search-form" role="search">
                                <div class="form-group md-form mt-0 pt-1 waves-light">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </li>
                        <!--/.Search Form-->
                        <!-- Side navigation links -->
                        <li>
                            <ul class="collapsible collapsible-accordion">
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=system">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        System -->
                                        <img src="../img/system_sidemenu.jpg" alt="system_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo active active_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=photo">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Photo -->
                                        <img src="../img/toph_sidemenu.jpg" alt="photo_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=argot">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Argot -->
                                        <img src="../img/argot_sidemenu.jpg" alt="argot_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=tarba">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Tarba -->
                                        <img src="../img/tarba_sidemenu.jpg" alt="tarba_logo">
                                    </a>
                                </li>
                                <hr>
                                <li>
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=about">
                                        <!-- <i class="fa fa-eye"></i> -->
                                        À propos
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="#" class="waves-effect">Introduction</a>
                                            </li>
                                            <li><a href="#" class="waves-effect">Monthly meetings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <hr>
                                <li>
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=contact">
                                        <!-- <i class="far fa-comment-alt"></i> -->
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/. Side navigation links -->
                    </ul>
                <div class="sidenav-bg rgba-black-strong"></div>
                <a href="#" id="exit_slide_menu"  class="btn btn-primary button-collapse btn-sm"><i class="fas fa-sign-out-alt"></i></a>
                </div>
                <!--/. Sidebar navigation -->
            <?php } ?>

            <?php if($p === 'argot') { ?>
                <!-- SideNav slide-out button -->
                <a href="#" data-activates="slide-out" id="burger_slide_menu" class="btn btn-primary p-3 button-collapse btn-sm"><i class="fa fa-bars"></i></a>
                
                <!-- Sidebar navigation -->
                <div id="slide-out" class="side-nav sn-bg-4 fixed">
                    <ul class="custom-scrollbar">
                        <!-- Logo -->
                        <li>
                            <div class="logo-wrapper waves-light waves-effect waves-light">
                                <a href="index.php"><img src="../img/logo_bilal.jpg" class="img-fluid flex-center"></a>
                            </div>
                        </li>
                        <!--/. Logo -->
                        <hr>
                        <!--Social-->
                        <li>
                            <ul class="social">
                                <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
                                <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
                                <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus"> </i></a></li>
                                <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
                            </ul>
                        </li>
                        <!--/Social-->
                        <hr>
                        <!--Search Form-->
                        <li>
                            <form class="search-form" role="search">
                                <div class="form-group md-form mt-0 pt-1 waves-light">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </li>
                        <!--/.Search Form-->
                        <!-- Side navigation links -->
                        <li>
                            <ul class="collapsible collapsible-accordion">
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=system">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        System -->
                                        <img src="../img/system_sidemenu.jpg" alt="system_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=photo">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Photo -->
                                        <img src="../img/toph_sidemenu.jpg" alt="toph_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo active active_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=argot">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Argot -->
                                        <img src="../img/argot_sidemenu.jpg" alt="argot_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=tarba">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Tarba -->
                                        <img src="../img/tarba_sidemenu.jpg" alt="tarba_logo">
                                    </a>
                                </li>
                                <hr>
                                <li>
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=about">
                                        <!-- <i class="fa fa-eye"></i> -->
                                        À propos
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="#" class="waves-effect">Introduction</a>
                                            </li>
                                            <li><a href="#" class="waves-effect">Monthly meetings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <hr>
                                <li>
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=contact">
                                        <!-- <i class="far fa-comment-alt"></i> -->
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/. Side navigation links -->
                    </ul>
                <div class="sidenav-bg rgba-black-strong"></div>
                <a href="#" id="exit_slide_menu"  class="btn btn-primary button-collapse btn-sm"><i class="fas fa-sign-out-alt"></i></a>
                </div>
                <!--/. Sidebar navigation -->
            <?php } ?>

            <?php if($p === 'tarba') { ?>
                <!-- SideNav slide-out button -->
                <a href="#" data-activates="slide-out" id="burger_slide_menu" class="btn btn-primary p-3 button-collapse btn-sm"><i class="fa fa-bars"></i></a>
                
                <!-- Sidebar navigation -->
                <div id="slide-out" class="side-nav sn-bg-4 fixed">
                    <ul class="custom-scrollbar">
                        <!-- Logo -->
                        <li>
                            <div class="logo-wrapper waves-light waves-effect waves-light">
                                <a href="index.php"><img src="../img/logo_bilal.jpg" class="img-fluid flex-center"></a>
                            </div>
                        </li>
                        <!--/. Logo -->
                        <hr>
                        <!--Social-->
                        <li>
                            <ul class="social">
                                <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
                                <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
                                <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus"> </i></a></li>
                                <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
                            </ul>
                        </li>
                        <!--/Social-->
                        <hr>
                        <!--Search Form-->
                        <li>
                            <form class="search-form" role="search">
                                <div class="form-group md-form mt-0 pt-1 waves-light">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </li>
                        <!--/.Search Form-->
                        <!-- Side navigation links -->
                        <li>
                            <ul class="collapsible collapsible-accordion">
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=system">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        System -->
                                        <img src="../img/system_sidemenu.jpg" alt="system_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=photo">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Photo -->
                                        <img src="../img/toph_sidemenu.jpg" alt="toph_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=argot">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Argot -->
                                        <img src="../img/argot_sidemenu.jpg" alt="argot_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo active active_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=tarba">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Tarba -->
                                        <img src="../img/tarba_sidemenu.jpg" alt="tarba_logo">
                                    </a>
                                </li>
                                <hr>
                                <li>
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=about">
                                        À propos
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="#" class="waves-effect">Introduction</a>
                                            </li>
                                            <li><a href="#" class="waves-effect">Monthly meetings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <hr>
                                <li>
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=contact">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/. Side navigation links -->
                    </ul>
                <div class="sidenav-bg rgba-black-strong"></div>
                <a href="#" id="exit_slide_menu"  class="btn btn-primary button-collapse btn-sm"><i class="fas fa-sign-out-alt"></i></a>
                </div>
                <!--/. Sidebar navigation -->
            <?php } ?>

            <?php if($p === 'about') { ?>
                <!-- SideNav slide-out button -->
                <a href="#" data-activates="slide-out" id="burger_slide_menu" class="btn btn-primary p-3 button-collapse btn-sm"><i class="fa fa-bars"></i></a>
                
                <!-- Sidebar navigation -->
                <div id="slide-out" class="side-nav sn-bg-4 fixed">
                    <ul class="custom-scrollbar">
                        <!-- Logo -->
                        <li>
                            <div class="logo-wrapper waves-light waves-effect waves-light">
                                <a href="index.php"><img src="../img/logo_bilal.jpg" class="img-fluid flex-center"></a>
                            </div>
                        </li>
                        <!--/. Logo -->
                        <hr>
                        <!--Social-->
                        <li>
                            <ul class="social">
                                <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
                                <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
                                <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus"> </i></a></li>
                                <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
                            </ul>
                        </li>
                        <!--/Social-->
                        <hr>
                        <!--Search Form-->
                        <li>
                            <form class="search-form" role="search">
                                <div class="form-group md-form mt-0 pt-1 waves-light">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </li>
                        <!--/.Search Form-->
                        <!-- Side navigation links -->
                        <li>
                            <ul class="collapsible collapsible-accordion">
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=system">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        System -->
                                        <img src="../img/system_sidemenu.jpg" alt="system_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=photo">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Photo -->
                                        <img src="../img/toph_sidemenu.jpg" alt="toph_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=argot">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Argot -->
                                        <img src="../img/argot_sidemenu.jpg" alt="argot_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=tarba">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Tarba -->
                                        <img src="../img/tarba_sidemenu.jpg" alt="tarba_logo">
                                    </a>
                                </li>
                                <hr>
                                <li>
                                    <a class="collapsible-header waves-effect arrow-r active" href="index.php?p=about">
                                        À propos
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="#" class="waves-effect">Introduction</a>
                                            </li>
                                            <li><a href="#" class="waves-effect">Monthly meetings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <hr>
                                <li>
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=contact">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/. Side navigation links -->
                    </ul>
                <div class="sidenav-bg rgba-black-strong"></div>
                <a href="#" id="exit_slide_menu"  class="btn btn-primary button-collapse btn-sm"><i class="fas fa-sign-out-alt"></i></a>
                </div>
                <!--/. Sidebar navigation -->
            <?php } ?>

            <?php if($p === 'contact') { ?>
                <!-- SideNav slide-out button -->
                <a href="#" data-activates="slide-out" id="burger_slide_menu" class="btn btn-primary p-3 button-collapse btn-sm"><i class="fa fa-bars"></i></a>
                
                <!-- Sidebar navigation -->
                <div id="slide-out" class="side-nav sn-bg-4 fixed">
                    <ul class="custom-scrollbar">
                        <!-- Logo -->
                        <li>
                            <div class="logo-wrapper waves-light waves-effect waves-light">
                                <a href="index.php"><img src="../img/logo_bilal.jpg" class="img-fluid flex-center"></a>
                            </div>
                        </li>
                        <!--/. Logo -->
                        <hr>
                        <!--Social-->
                        <li>
                            <ul class="social">
                                <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
                                <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
                                <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus"> </i></a></li>
                                <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
                            </ul>
                        </li>
                        <!--/Social-->
                        <hr>
                        <!--Search Form-->
                        <li>
                            <form class="search-form" role="search">
                                <div class="form-group md-form mt-0 pt-1 waves-light">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </li>
                        <!--/.Search Form-->
                        <!-- Side navigation links -->
                        <li>
                            <ul class="collapsible collapsible-accordion">
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=system">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        System -->
                                        <img src="../img/system_sidemenu.jpg" alt="system_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=photo">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Photo -->
                                        <img src="../img/toph_sidemenu.jpg" alt="toph_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=argot">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Argot -->
                                        <img src="../img/argot_sidemenu.jpg" alt="argot_logo">
                                    </a>
                                </li>
                                <!-- <hr> -->
                                <li class="menu_logo">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=tarba">
                                        <!-- <i class="fas fa-star-of-life"></i>
                                        Tarba -->
                                        <img src="../img/tarba_sidemenu.jpg" alt="tarba_logo">
                                    </a>
                                </li>
                                <hr>
                                <li id="about_side_menu">
                                    <a class="collapsible-header waves-effect arrow-r" href="index.php?p=about">
                                        À propos
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="#" class="waves-effect">Introduction</a>
                                            </li>
                                            <li><a href="#" class="waves-effect">Monthly meetings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <hr>
                                <li>
                                    <a id="contact_side_menu" class="collapsible-header waves-effect arrow-r active" href="index.php?p=contact">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/. Side navigation links -->
                    </ul>
                <div class="sidenav-bg rgba-black-strong"></div>
                <a href="#" id="exit_slide_menu"  class="btn btn-primary button-collapse btn-sm"><i class="fas fa-sign-out-alt"></i></a>
                </div>
                <!--/. Sidebar navigation -->
            <?php } ?>
            
        </div>

<!-- END LEFT NAV -->

<!-- MAIN -->

        <div class="col-10 col-sm-10 col-md-8 col-lg-6 col-xl-6">
            <section>
                <div class="row back">
                    <img src="../img/background.jpg" id="img_back" alt="image fond">
                    
                    <!-- PAGES CONTENT -->
                    <?= $content; ?>

                </div>
            </section>
        </div>
            
<!-- EDN MAIN -->

<!-- RIGHT NAV -->

        <div class="col-1 col-sm-1 col-md-2 col-lg-3 col-xl-3">
            <?php if($p === 'system') { ?>
                <!-- Title -->
                <h1 class="section_title">
                    *<br>
                    S<br>
                    Y<br>
                    S<br>
                    T<br>
                    E<br>
                    M
                </h1>

                <!-- Historique des articles -->
                <div class="btn_appear_list">
                    <div class="btn_appear_list_bg">
                    </div>
                    <p>
                        * Afficher tous les articles *<br />
                        <span id="clic_instr">clique ici</span>
                    <p>
                </div>
                <div class="history">
                    <!-- <h3>Liste des articles</h3>
                    <hr> -->
                    <ul class="post_list">
                        <?php
                        while ($datas = $res->fetch()) { 
                        ?>
                            <a href="<?php $donnees->url ?>"><li><?= $datas['title'] . ' <br /> <span class="date_list_article">(' . $datas['date'] . ')</span>' . '<hr/>'; ?><li/></a>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <!-- End : Historique des articles -->


                <!-- user feature -> nbre d'articles par page -->
                <!-- <form method="get">
                    <label>Nombre d'articles par page :</label>
                    <select name="pp" id="">
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                    <input type="hidden" name="p" value="<?php echo $current; ?>">
                    <button class="btn btn-unique btn-sm" type="submit">Appliquer</button>
                </form> -->
                <!-- End : user feature -> nbre d'articles par page -->

                <!-- Modal (page System) -->
                    <!-- Central Modal -->
                <div class="modal fade" id="conditionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-notify modal-success" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header">
                                <!-- Titre article -->
                                <p class="heading lead">
                                    Titre article
                                </p>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="white-text">&times;</span>
                                </button>
                            </div>

                            <!--Body-->
                            <div class="modal-body">
                                <div class="text-center">
                                    <!-- <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i> -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
                                        ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga,
                                        enim, ab officiis totam.<br />
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
                                        ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga,
                                        enim, ab officiis totam.<br />
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
                                        ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga,
                                        enim, ab officiis totam.<br />
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
                                        ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga,
                                        enim, ab officiis totam.<br />
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
                                        ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga,
                                        enim, ab officiis totam.<br />
                                    </p>
                                </div>
                            </div>

                            <!-- Modal Footer -->
                            <div class="modal-footer justify-content-center">
                                <a type="button" class="btn btn-primary-modal">Get it now <i class="fa fa-diamond ml-1"></i></a>
                                <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">No, thanks</a>
                            </div>
                        </div>
                        <!-- End Modal Content -->
                    </div>
                </div>
                    <!-- End Central Modal-->
                <!-- End Modal (page System) -->
            
            <?php } elseif ($p === 'argot') { ?>
            
                <h1>
                    *<br>
                    A<br>
                    R<br>
                    G<br>
                    O<br>
                    T
                </h1>

            <?php } elseif ($p === 'photo') { ?>

                <h1>
                    *<br>
                    P<br>
                    H<br>
                    O<br>
                    T<br>
                    O
                </h1>

                 <!-- Photo des albums -->
                 <div class="btn_album_pictures">
                    <div class="btn_album_pictures_bg">
                    </div>
                    <p>
                        * Photos de l'album *<br />
                        <span id="clic_instr">clique ici</span>
                    <p>
                </div>
                <div class="bloc_vignettes">
                    <div class="vignettes">
                        <img src="../img/img_photo/bali/bali1.jpg" alt="Bali 1">
                    </div>
                    <div class="vignettes">
                        <img src="../img/img_photo/bali/bali2.jpg" alt="Bali 2">
                    </div>
                    <div class="vignettes">
                        <img src="../img/img_photo/bali/bali3.jpg" alt="Bali 3">
                    </div>
                    <div class="vignettes">
                        <img src="../img/img_photo/bali/bali4.jpg" alt="Bali 4">
                    </div>
                    <div class="vignettes">
                        <img src="../img/img_photo/bali/bali5.jpg" alt="Bali 5">
                    </div>
                </div>

            <?php } elseif ($p === 'tarba') { ?>

                <h1>
                    *<br>
                    T<br>
                    A<br>
                    R<br>
                    B<br>
                    A
                </h1>

            <?php } ?>
        </div>

<!--END RIGHT NAV -->

    </div>
</div>


<!-- FOOTER -->

<!-- END FOOTER -->


<!-- Add for gallery -->

	<!-- Primary Page Layout
	================================================== -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="../public/litebox-master/assets/js/smoothscroll.min.js" type="text/javascript"></script>
		<script src="../public/litebox-master/assets/js/images-loaded.min.js" type="text/javascript"></script>
		<script src="../public/litebox-master/assets/js/tipsy.min.js" type="text/javascript"></script>
		<script src="../public/litebox-master/assets/js/backbone.js" type="text/javascript"></script>
		<script src="../public/litebox-master/assets/js/litebox.min.js" type="text/javascript"></script>

		<script type="text/javascript">
			$('.litebox').liteBox();
		</script>
	
<!-- JavaScript
	================================================== -->
	<script src="../public/js_gallery/jquery-main.js" type="text/javascript"></script>
	<script src="../public/js_gallery/jquery-latest.min.js" type='text/javascript'></script>
	<script src='../public/js_gallery/menu_jquery.js' type='text/javascript'></script>
<!-- jQuery -->
	<script src="../public/js_gallery/car/jquery-1.7.2.min.js" type="text/javascript"></script>
<!-- jQuery easing -->    
	<script src="../public/js_gallery/car/jquery.easing.1.3.js" type="text/javascript"></script>
<!-- jQuery initialization -->	
    <script src="../public/js_gallery/car/custom.js" type="text/javascript"></script>
<!-- Others -->
	<script src="../public/js_gallery/ticker.js" type="text/javascript"></script>
	<script src='../public/js_gallery/jquery.common.min.js'type='text/javascript' ></script>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = '../../apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<!-- /Add for gallery -->

<!-- Sripts -->

    <script type="javascript" src="../public/js/script.js"></script>


    <!-- MD Bootstrap  -->
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script> -->
        <!-- <script type="text/javascript" src="../js/mdb.min.js"></script> -->

<script>

$( document ).ready(function() {


/**************
 * SIDEBAR MENU
 */

    $(function(){
        $('#burger_slide_menu').click(function(){
            $('#slide-out').css({display: 'block'});
            $('#slide-out').animate({left: '19%'});
            $('#burger_slide_menu').hide();
        });
        $('#exit_slide_menu').click(function(){
            $('#slide-out').hide();
            $('#burger_slide_menu').show();
        });
    });


/**************
 * SYSTEM
 */

/* Historique des articles */

    // Animation affichage message 
    $(function(){
        $('.btn_appear_list').mouseenter(function(){
            $('#clic_instr').show();
        });
        $('.btn_appear_list').mouseleave(function(){
            $('#clic_instr').hide();
        });
    });
    // Animation affichage historique
    $(function(){
        $('.btn_appear_list').click(function(){
            $('.history').show();
            $('#clic_instr').hide();
        });
    });
    $(function(){
        $('.history').mouseleave(function(){
            $('.history').hide();
        });
    });


/**************
 * ARGOT
 */

/* Lettres du glossaire */

    // Animation lors du choix de lettre
    $('.caseLetter').click(function() {
        $('.caseLetter').hide();
        $(this).addClass('activeLetter');
        $('.activeLetter').css({
            backgroundColor: 'none',
            display: 'block',
            border: 'solid 1px',
            position: 'absolute',
            top: '3px',
            left: '3px',
            width: '50px',
            height: '50px'
        });
        $('.activeLetter h2').css({
            fontSize: '2rem'
        });
        $('.bloc_letters').css({
            backgroundColor: 'black',
            opacity: '0.99',
            zIndex: '1'
        });
    });

    // Animation lors du choix de mot
    $('.argot_word').mouseenter(function() {
        $(this).css({
            backgroundColor: 'white'
        });
        $('.argot_word h4').css({
            color: 'black'
        });
        $('.argot_word').mouseleave(function() {
            $(this).css({
                backgroundColor: 'black'
            });
            $('.argot_word h4').css({
                color: 'white'
            });
        });
    });
    $('.argot_word').click(function() {
        $('.argot_word').hide();
        $(this).attr('id', 'activeWord');
        $('#activeWord').css({
            display: 'block'
        });
        $('#activeWord h4').addClass('animate');
        $('.argot_def').css({
            display: 'block',
            position: 'absolute',
            top: '250px',
            left: '0'
        });
        $('.activeLetter h2').click(function() {
            $('.argot_word').show();
            $('.argot_word').removeAttr('id', 'activeWord');
            $('.argot_def').hide();
            $('#activeWord h4').removeClass('animate');
            $('#activeWord h4').css({
                backgroundColor: 'black'
            });
        });
        $('.activeLetter').hover(function() {
            $('.argot_letters h2').show();
        });
    });


/**************
 * TOPH
 */

/* Info albums Animation */  
/** */
    // 1rst album / top - left
    $('#album_bali').mouseenter(function() {
        // Affichage des informations de l'album
        $(this).addClass('activeAlbum');
        $('.infoAlbums.albumBali').css({
            display: 'block',
            width: '80%',
            position: 'absolute', // attention a la position absolute par rapport à l'album en hover
            top: '110%',
            left: '280%'
        });
    });
    $('#album_bali').click(function() {
        // Gestion de l'image de couverture de l'album
        $('#album1').css({
            height: '545px',
            width: '610px',
            zIndex : '1'
        });
        $('.col-xl-6').css({
            maxWidth: '77%'
        });
        $('#album1 figure img').css({
            filter: 'none'
        });
        // Affichage du message pour afficher les vignettes de l'album
        $('.btn_album_pictures').css({
            display: 'block'
        });
    });
    $(function(){
        // Instruction pour afficher les vignettes de l'album
        $('.btn_album_pictures').mouseenter(function(){
            $('#clic_instr').show();
        });
        $('.btn_album_pictures').mouseleave(function(){
            $('#clic_instr').hide();
        });
        // Affichage du bloc de vignette de l'album
        $('.btn_album_pictures').click(function(){
            $('.bloc_vignettes').css({
                display: 'block'
            });
        });
    });
    // Animation des vignettes de l'album
    // $('.vignettes')click(function(){
    //     (this).css({
    //         height: '545px',
    //         width: '610px',
    //         zIndex : '1'
    //     });
    // });
    

    // 2nd album / top - left
    $('#album_caire').mouseenter(function() {
        $(this).addClass('activeAlbum');
        $('.infoAlbums.albumCaire').css({
            display: 'block',
            width: '80%',
            position: 'absolute', // attention a la position absolute par rapport à l'album en hover
            top: '110%',
            left: '160%'
        });
    });
    $('#album_caire').click(function() {
        // Gestion de l'image de couverture de l'album
        $('#album2').css({
            position: 'absolute',
            left: '12%',
            height: '545px',
            width: '610px',
            zIndex : '1'
        });
        $('.col-xl-6').css({
            maxWidth: '77%'
        });
        $('#album2 figure img').css({
            filter: 'none'
        });
        // Affichage du message pour afficher les vignettes de l'album
        $('.btn_album_pictures').css({
            display: 'block'
        });
    });
    $(function(){
        // Instruction pour afficher les vignettes de l'album
        $('.btn_album_pictures').mouseenter(function(){
            $('#clic_instr').show();
        });
        $('.btn_album_pictures').mouseleave(function(){
            $('#clic_instr').hide();
        });
        // Affichage du bloc de vignette de l'album
        $('.btn_album_pictures').click(function(){
            $('.bloc_vignettes').css({
                display: 'block'
            });
        });
    });

    // 3rd album / bottom - right
    $('#album_marrakech').mouseenter(function() {
        $(this).addClass('activeAlbum');
        $('.infoAlbums.albumMarrakech').css({
            display: 'block',
            width: '80%',
            position: 'absolute', // attention a la position absolute par rapport à l'album en hover
            top: '-27%',
            left: '285%'
        });
    });
    $('#album_marrakech').click(function() {
        // Gestion de l'image de couverture de l'album
        $('#album3').css({
            position: 'absolute',
            top: '10%',
            height: '545px',
            width: '610px',
            zIndex : '1'
        });
        $('.col-xl-6').css({
            maxWidth: '77%'
        });
        $('#album3 figure img').css({
            filter: 'none'
        });
        // Affichage du message pour afficher les vignettes de l'album
        $('.btn_album_pictures').css({
            display: 'block'
        });
    });
    $(function(){
        // Instruction pour afficher les vignettes de l'album
        $('.btn_album_pictures').mouseenter(function(){
            $('#clic_instr').show();
        });
        $('.btn_album_pictures').mouseleave(function(){
            $('#clic_instr').hide();
        });
        // Affichage du bloc de vignette de l'album
        $('.btn_album_pictures').click(function(){
            $('.bloc_vignettes').css({
                display: 'block'
            });
        });
    });

    // 4th album / bottom - left
    $('#album_paris').mouseenter(function() {
        $(this).addClass('activeAlbum');
        $('.infoAlbums.albumParis').css({
            display: 'block',
            width: '80%',
            position: 'absolute', // attention a la position absolute par rapport à l'album en hover
            top: '-27%',
            left: '160%'
        });
    });
    $('#album_paris').click(function() {
        // Gestion de l'image de couverture de l'album
        $('#album4').css({
            position: 'absolute',
            top: '10%',
            left: '12%',
            height: '577px',
            width: '623px',
            zIndex: '1',
            maxWidth: '87%'
        });
        $('.col-xl-6').css({
            maxWidth: '77%'
        });
        $('#album4 figure img').css({
            filter: 'none'
        });
        // Affichage du message pour afficher les vignettes de l'album
        $('.btn_album_pictures').css({
            display: 'block'
        });
    });
    $(function(){
        // Instruction pour afficher les vignettes de l'album
        $('.btn_album_pictures').mouseenter(function(){
            $('#clic_instr').show();
        });
        $('.btn_album_pictures').mouseleave(function(){
            $('#clic_instr').hide();
        });
        // Affichage du bloc de vignette de l'album
        $('.btn_album_pictures').click(function(){
            $('.bloc_vignettes').css({
                display: 'block'
            });
        });
    });
    

    $('.bloc').mouseleave(function() {
        $(this).removeClass('activeAlbum');
        $('.bloc .infoAlbums').css({
            display: 'none'
        });
    });



/**************
 * TARBA
 */


});

</script>

<!-- End Scripts -->

</body>
</html>