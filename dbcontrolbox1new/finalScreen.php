    <?php

    session_start();

	if(!isset($_SESSION['ab4']))

{

    header('location:index.html');

    exit();

}

    include_once "admin/dbconfig.php";

    	if (!empty($_SERVER['HTTP_CLIENT_IP'])) 

    				{

    					$ip = $_SERVER['HTTP_CLIENT_IP'];

    				}

    				elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))

    				{

    					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

    				} else

    				{

    					$ip = $_SERVER['REMOTE_ADDR'];

    				}

    				$dataArray = array('ip' => $ip);

     

    	$db->insert('ip', $dataArray);

		$cookie_name = "user";

        $cookie_value = "John Doe";

        setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/");

    ?>

    <!DOCTYPE html>

    <html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        

        <!-- Favicon -->

        <link rel="icon" href="img/fav-icon.png" type="image/png" />

        

        <title>Sie haben das Ende des Experimentes erreicht!</title>

        

        <!-- Bootstrap CSS -->

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Animate CSS -->

        <link href="vendors/animate/animate.css" rel="stylesheet">

        <!-- Icon CSS-->

    	<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css"> 

    	<link rel="stylesheet" href="vendors/et-line-icon/et-line.min.css"> 

        <!-- Flexslider CSS-->

    	<link rel="stylesheet" type="text/css" href="vendors/flexslider/flexslider.css" media="all"> 

    	<!-- Pop Up-->

    	<link rel="stylesheet" type="text/css" href="vendors/popup/lightbox.css" media="all"> 

        <!-- Owlcarousel CSS-->

    	<link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

        

        

        <!--Theme Styles CSS-->

    	<link rel="stylesheet" type="text/css" href="css/style.css" media="all"> 

    	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all"> 



        <!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 

        <!--[if lt IE 9]>

        <script src="js/html5shiv.min.js"></script>

        <script src="js/respond.min.js"></script>

        <![endif]-->

    </head>

    <body> 

        <div class="loading">

            <div class="preloader">

                <span>L</span><span>o</span><span>a</span><span>d</span><span>i</span><span>n</span><span>g</span>

            </div>

        </div>



        <!-- Header Area -->

        <header>

            <div class="container">

                <div class="row header_top">

                    <div class="col-md-7 col-sm-5 col-xs-7">

                        <div class="m0">

                            <div class="logo_part">

                                <a class="logo">

                                    <h3><span>Studie</span><span>Investitionsempfehlung</span></h3>

                                </a>

                            </div>

                        </div>

                    </div>

                    <div class="contact_info col-md-5 col-sm-7 col-xs-12">

                        <div class="clearfix">

                            <div class="uni-logo-holder inner-page">

                                <img src="img/logo.PNG">

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- Small Menu -->

            <nav class="navbar navbar-default navbar-static-top small_menu" id="small_navbar">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12">

                    <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="logo_part">

                        <a href="index.html" class="logo">

                            <h3>Studie<span>Investitionsempfehlung</span></h3>

                        </a>

                    </div>

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#small_nav"

                            aria-expanded="false">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>



                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse" id="small_nav">

                        <ul class="nav navbar-nav">

                            <li class="dropdown main_menu active">

                                <a href="index.html" class="drop_menu">Home</a>

                            </li>

                            <li>

                                <a href="about.html">Definitions</a>

                            </li>

                            <li>

                                <a href="instructions.html">Instructions</a>

                            </li>

                        </ul>

                        

                    </div><!-- /.navbar-collapse -->

                </div>

            </div>

                </div><!-- /.container-fluid -->

            </nav>



            <!-- Big Menu -->

            <nav class="navbar navbar-default navbar-static-top big_menu" id="main_navbar">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12">

                    <!-- Brand and toggle get grouped for better mobile display -->

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav"

                            aria-expanded="false">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>



                    <!-- Collect the nav links, forms, and other content for toggling 

                    <div class="collapse navbar-collapse" id="main_nav">

                        <ul class="nav navbar-nav">

                            <li class="dropdown main_menu active">

                                <a href="index.html" class="dropdown-toggle drop_menu">Empfehlung</a>

                            </li>

                        </ul>

                    </div><!-- /.navbar-collapse -->

                </div><!-- /.container-fluid -->

            </div>

        </div>

            </nav>

        </header>

        <!-- End Header Area -->

        



        

        <!-- Service 2 Area -->

        <section class="service_2">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                    <div class="form-row">

            <p class="alert alert-success">Sie haben das Ende des Experimentes erreicht!</p>

                <p>Bitte beachten Sie, dass Ihre Anlageempfehlung auf bestimmten Annahmen bezüglich des Kapitalmarktes und Ihrer Lebensplanung beruht. Das Instrument zur Erstellung Ihrer Aktienempfehlung befindet sich noch in der Testphase. Andere Annahmen können zu abweichenden Empfehlungen führen. Bevor Sie Ihre Anlagestrategie anpassen, sollten Sie einen professionellen Finanzberater konsultieren.<br><br>

     Vielen Dank für Ihre Teilnahme.Sie können dieses Fenster nun schliessen.<br> Dies ist Ihr Code: 9783161480C </p>

     <br><p>Bei Fragen und Anmerkungen schreiben Sie eine E-Mail an sebastian.olschewski@unibas.ch.</p>

                </div>

                 </div>   

                </div>

            </div>

        </section>  

        <!-- Footer Area -->

        <footer>

            <div class=" m0 footer_top">

                <div class="container">

                    <div class="row footer_sidebar">

                        <div class="widget widget1 col-md-4">

                            <div class="logo_part">

                                <a class="logo">

                                    <h3><span>Studie</span><span>Investitionsempfehlung</span></h3>

                                </a>

                            </div>

                        </div>

                        <div class="widget_inner row m0">

                            <div class="img_box">

                            </div>

                            <div class="img_box">

                            </div>

                            <div class="img_box">

                            </div>

                            <div class="img_box">

                            </div>

                            <div class="img_box">

                            </div>

                        </div>

                    </div>

                    <div class="m0 footer_bottom">

                        <div class="row footer_bottom_area">

                            <div class="col-sm-8 footer_bottom_left">

                                Copyright &copy; <a>Universität Basel</a> 2017.

                                <br class="visible-xs">Verantwortlicher: Sebastian Olschewski, sebastian.olschewski@unibas.ch

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </footer>



        <!-- End Footer Area -->

        

        

        <!-- jQuery JS -->

        <script src="js/jquery-1.12.0.min.js"></script>

        <!-- Bootstrap JS -->

        <script src="js/bootstrap.min.js"></script>

        <!-- Pop Up -->

        <script src="vendors/popup/lightbox.min.js"></script>

        <!-- Animate JS --> 

        <script src="vendors/animate/wow.min.js"></script>

        <!-- Isotope -->

        <script src="vendors/isotop/isotope-docs.min.js"></script>

        <!-- Counterup JS -->

        <script src="vendors/counter/waypoints.min.js"></script>

        <script src="vendors/counter/jquery.counterup.min.js"></script>

        <!-- Theme JS -->

        <script src="js/theme.js"></script>

    </body>

    </html> 