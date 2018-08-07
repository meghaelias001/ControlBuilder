 <?php
 error_reporting(E_ALL);
session_start();
if(!isset($_SESSION['q5a']))
{
    header('location:questionnaire4.php');
    exit();
}
?> 
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="icon" href="img/fav-icon.png" type="image/png" />
        <title>Fragebogen VI</title>
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
        <link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css">
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
        <header class="row">
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
                                <a class="logo">
                                    <h3><span>Studie</span><span>Investitionsempfehlung</span></h3>
                                </a>
                            </div>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#small_nav" aria-expanded="false">
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
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                </div>
            </nav>
            <!-- Big Menu -->
            <nav class="navbar navbar-default navbar-static-top big_menu" id="main_navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="main_nav">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown main_menu ">
                                        <a href="#" class="dropdown-toggle drop_menu">Definitionen</a>
                                    </li>
                                    <li class="dropdown main_menu">
                                        <a href="#" class="dropdown-toggle drop_menu">Fragebogen I</a>
                                    </li>
                                    <li class="dropdown main_menu">
                                        <a href="#" class="dropdown-toggle drop_menu">Fragebogen II</a>
                                    </li>
                                    <li class="dropdown main_menu ">
                                        <a href="#" class="dropdown-toggle drop_menu">Fragebogen III</a>
                                    </li>
                                    <li class="dropdown main_menu">
                                        <a href="#" class="dropdown-toggle drop_menu">Fragebogen IV</a>
                                    </li>
                                    <li class="dropdown main_menu">
                                        <a href="#" class="dropdown-toggle drop_menu">Fragebogen V</a>
                                    </li>
                                    <li class="dropdown main_menu active">
                                        <a href="questionnaire5.php" class="dropdown-toggle drop_menu">Fragebogen VI</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <section class="section" id="feedbackScreen">
            <div class="container">
                <div class="col-md-12">
                    <div class="col-md-12 no-gutter">
                        <h2 class="text-center pb30">Fragebogen VI</h2>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <!-- <p class="text-center ">
                    Um Ihnen eine Empfehlung zur Verteilung Ihrer Finanzanlagen geben zu können, benötigen wir einige Angaben. Bitte beantworten Sie die folgenden sechs Fragen auf den Seiten 'Fragebogen I' bis 'Fragebogen VI'.
                </p> -->
                        <hr>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4 class="text-left pb15">Frage 6) </h4>
                    <p class="text-left pb15">
                        Um Ihre investierten Anlagen in Ihren übergreifenden Finanzplan zu integrieren, benötigen wir noch folgende Angaben zu Ihrer Person:
                    </p>
                </div>
                <div class="col-md-12">
                    <form id="submitform1" action="questionnaire5_proc.php" method="POST">
                        <div class="form-row">
                            <div class="clearfix">
                                <h5 class="pb15">a)Ihr Alter in Jahren?</h5>
                            </div>
                            <div class="col-md-12">
                            <div class="radio-bx pb15">
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6a'])) if($_SESSION[ 'q6a']=="1" ) echo "checked"; ?> name="q6a" id="q6a" value="1"> unter 30</label>
                                </div>
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6a'])) if($_SESSION[ 'q6a']=="2" ) echo "checked"; ?> name="q6a" id="q6a" value="2"> 30-60
                                    </label>
                                </div>
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6a'])) if($_SESSION[ 'q6a']=="3" ) echo "checked"; ?> name="q6a" id="q6a" value="3"> über 60</label>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="clearfix">
                                <h5 class="pb15">b) Sind Sie?</h5>
                            </div>
                            <div class="col-md-12">
                            <div class="radio-bx pb15">
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6b'])) if($_SESSION[ 'q6b']=="1" ) echo "checked"; ?> name="q6b" id="q6b" value="1"> selbstständig
                                    </label>
                                </div>
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6b'])) if($_SESSION[ 'q6b']=="2" ) echo "checked"; ?> name="q6b" id="q6b" value="2"> pensioniert
                                    </label>
                                </div>
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6b'])) if($_SESSION[ 'q6b']=="3" ) echo "checked"; ?> name="q6b" id="q6b" value="3"> Arbeiter
                                    </label>
                                </div>
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6b'])) if($_SESSION[ 'q6b']=="4" ) echo "checked"; ?> name="q6b" id="q6b" value="4"> Festangestellter
                                    </label>
                                </div>
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6b'])) if($_SESSION[ 'q6b']=="5" ) echo "checked"; ?> name="q6b" id="q6b" value="5"> Manager
                                    </label>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="clearfix">
                                <h5 class="pb15">c) Anzahl Kinder (jüngere Kinder oder Kinder in Vollzeit-Ausbildung)?</h5>
                            </div>
                            <div class="col-md-12">
                            <div class="radio-bx pb15">
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6c'])) if($_SESSION[ 'q6c']=="1" ) echo "checked"; ?> name="q6c" id="q6c" value="1"> 0
                                    </label>
                                </div>
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6c'])) if($_SESSION[ 'q6c']=="2" ) echo "checked"; ?> name="q6c" id="q6c" value="2"> 1-3
                                    </label>
                                </div>
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6c'])) if($_SESSION[ 'q6c']=="3" ) echo "checked"; ?> name="q6c" id="q6c" value="3"> mehr als 3</label>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="clearfix">
                                <h5 class="pb15">d) Besitzen Sie eine oder mehrere Liegenschaften?</h5>
                            </div>
                            <div class="col-md-12">
                            <div class="radio-bx pb15">
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6d'])) if($_SESSION[ 'q6d']=="1" ) echo "checked"; ?> name="q6d" id="q6d" value="1"> Ja
                                    </label>
                                </div>
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6d'])) if($_SESSION[ 'q6d']=="2" ) echo "checked"; ?> name="q6d" id="q6d" value="2"> Nein
                                    </label>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="clearfix">
                                <h5 class="pb15">e) Wie hoch ist der Anteil Ihrer Finanzmarkt-Investitionen (Aktien, Anleihen, etc.) an Ihrem Gesamtvermögen (inklusive Wohneigentum, Sparkonto etc.)?</h5>
                            </div>
                            <div class="col-md-12">
                            <div class="radio-bx pb15">
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6e'])) if($_SESSION[ 'q6e']=="1" ) echo "checked"; ?> name="q6e" id="q6e" value="1"> weniger als 10%</label>
                                </div>
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6e'])) if($_SESSION[ 'q6e']=="2" ) echo "checked"; ?> name="q6e" id="q6e" value="2"> weniger als 20%</label>
                                </div>
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6e'])) if($_SESSION[ 'q6e']=="3" ) echo "checked"; ?> name="q6e" id="q6e" value="3"> mehr als 20%</label>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="clearfix">
                                <h5 class="pb15">f) Wie hoch ist der Anteil Ihrer Finanzmarkt-Investitionen (Aktien, Anleihen, etc.) gemessen an Ihrem jährlichen Einkommen?</h5>
                            </div>
                            <div class="col-md-12">
                            <div class="radio-bx pb15">
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6f'])) if($_SESSION[ 'q6f']=="1" ) echo "checked"; ?> name="q6f" id="q6f" value="1"> weniger als 50%</label>
                                </div>
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6f'])) if($_SESSION[ 'q6f']=="2" ) echo "checked"; ?> name="q6f" id="q6f" value="2"> 50-80%
                                    </label>
                                </div>
                                <div class="sing-bxs sml">
                                    <label>
                                        <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" <?php if(isset($_SESSION[ 'q6f'])) if($_SESSION[ 'q6f']=="3" ) echo "checked"; ?> name="q6f" id="q6f" value="3"> mehr als 80%</label>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-12">
                                <hr>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Weiter" />
                                <hr>
                            </div>
                    </form>
                    </div>
                </div>
        </section>
        <!-- End Service 2 Area -->
        <?php include 'footer.php';?>
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
        <script>
        $(document).ready(function() {
            $("#submitform1").validationEngine();
        })
        </script>
        <script>
        history.pushState({ warnOnBack: true }, document.title, "");

        window.onpopstate = function(e) {
            if (confirm("Achtung. Hiermit werden Ihre Daten nicht weiter gespeichert und die Studie wird beendet")) {
                location.href = "prematureStudyAbortion.html"
            } else {
                history.pushState({ warnOnBack: true }, document.title, "");
            }
        };
        </script>
        <script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.validationEngine.js"></script>
    </body>

    </html>