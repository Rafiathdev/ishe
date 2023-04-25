<?php
//les variables pour récupérer les infos enoyées
$typ_offre = "";
$annee_experience = "";
$connaissance_req = "";
$langue = "";
$specialite = "";
$critere = "";
$diplome = "";
$nbr_post = "";
$desc = "";
$comp_req = "";
$act_principal = "";
$apt_req = "";
$date_exp = "";

//renseigner les paramettres de connexion à la base de donnée
$nomServeur = "localhost";
$nomBD = "ishede";
$nomUtilisateur = "ola";
$motPasse = "rafiath";


//on utilise ici une variable nommée $varCon  pour récupérer le resultats de le connection à la BD
$varCon = mysqli_connect($nomServeur, $nomUtilisateur, $motPasse, $nomBD);

//on sort si la tentative de se connecter à la BD a échoué
if (!$varCon) {
    die("Echec de connection");
    # code...
}

// je veux spécifier l'encodage des caractère
mysqli_set_charset($varCon, "utf8");

//vérifier l'existence des champs


if (isset($_POST["btnAjouter"])) {

    if (
        isset($_POST["typ_offre"]) &&
        isset($_POST["annee_experience"]) &&
        isset($_POST["connaissance_req"]) &&
        isset($_POST["langue"]) &&
        isset($_POST["specialite"]) &&
        isset($_POST["critere"]) &&
        isset($_POST["diplome"]) &&
        isset($_POST["nbr_post"]) &&
        isset($_POST["desc"]) &&
        isset($_POST["comp_req"]) &&
        isset($_POST["act_principal"]) &&
        isset($_POST["apt_req"]) &&
        isset($_POST["date_exp"])
    ) {



        $typ_offre = $_POST["typ_offre"];
        $annee_experience = $_POST["annee_experience"];
        $connaissance_req = $_POST["connaissance_req"];
        $langue = $_POST["langue"];
        $specialite = $_POST["specialite"];
        $critere = $_POST["critere"];
        $diplome = $_POST["diplome"];
        $nbr_post = $_POST["nbr_post"];
        $desc = $_POST["desc"];
        $comp_req = $_POST["comp_req"];
        $act_principal = $_POST["act_principal"];
        $apt_req = $_POST["apt_req"];
        $date_exp = $_POST["date_exp"];


        $reqAexecuter = "INSERT INTO Offre (typ_offre, annee_experience, connaissance_req, langue, specialite, critere, diplome, nbr_poste, descr, comp_req, act_principal, apt_req, date_exp) 
    VALUES ('$typ_offre', '$annee_experience', '$connaissance_req ', '$langue', '$specialite', '$critere', '$diplome', '$nbr_post', '$desc', '$comp_req', '$act_principal', '$apt_req', '$date_exp')";

        $resultat = mysqli_query($varCon, $reqAexecuter);



        echo '
    
    <script>
    alert("offre publié!");
</script>
    
    ';
    } else {
        echo '
    
    <script>
    alert("Error!");
</script>
    
    ';
    }
}


//}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Add-Posting</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Job Pro" />
    <meta name="keywords" content="Job Pro" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive2.css" />
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
    <div class="jp_top_header_main_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_left_wrapper">
                        <div class="jp_top_header_left_cont">
                            <p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+123456789</p>
                            <p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;<a href="#"><span class="__cf_email__" data-cfemail="4b0e262a22270b2e332a263b272e65282426">[email&#160;protected]</span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_right_wrapper">

                        <div class="jp_top_header_right__social_cont">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header Wrapper End -->
    <!-- Header Wrapper Start -->
    <div class="jp_top_header_img_wrapper">
        <div class="gc_main_menu_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                        <div class="gc_header_wrapper">
                            <div class="gc_logo">
                                <a href="index.html">
                                    <img src="images/index_vi/logo.png" alt="Logo" title="Job Pro" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 center_responsive">
                        <div class="header-area hidden-menu-bar stick" id="sticker">
                            <!-- mainmenu start -->
                            <div class="mainmenu">
                                <div class="gc_right_menu">
                                    <ul>
                                        <li id="search_button">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve">
                                                <g>
                                                    <path id="search" d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z" fill="#00e2bd" />
                                                </g>
                                            </svg>
                                        </li>
                                        <li>
                                            <div id="search_open" class="gc_search_box">
                                                <input type="text" placeholder="Search here">
                                                <button><i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="float_left">

                                    <li class="has-mega gc_main_navigation"><a href="listing_single.php" class="gc_main_navigation"> Offres&nbsp;</a>
                                        <!-- mega menu start -->

                                    </li>

                                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"> A propos&nbsp;</a>
                                        <!-- mega menu start -->

                                    </li>
                                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"> Blog&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <!-- mega menu start -->
                                        <ul>
                                            <li class="parent"><a href="blog_left.php">Blog-Left</a></li>
                                            <li class="parent"><a href="blog_right.php">Blog-Right</a></li>

                                        </ul>
                                    </li>
                                    <li class="gc_main_navigation parent"><a href="contact.php" class="gc_main_navigation">Contact</a></li>
                                </ul>
                            </div>
                            <!-- mainmenu end -->
                            <!-- mobile menu area start -->
                            <header class="mobail_menu">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="gc_logo">
                                                <a href="index.html">
                                                    <img src="images/index_vi/logo.png" alt="Logo" title="Grace Church">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="cd-dropdown-wrapper">
                                                <a class="house_toggle" href="#0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                                        <g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#00e2bd" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#00e2bd" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#00e2bd" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#00e2bd" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#00e2bd" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <nav class="cd-dropdown">
                                                    <h2><a href="#">ISH<span>EDE</span></a></h2>
                                                    <a href="#0" class="cd-close">Close</a>
                                                    <ul class="cd-dropdown-content">
                                                        <li>
                                                            <form class="cd-search">
                                                                <input type="search" placeholder="Search...">
                                                            </form>
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="#">Acceuil</a>



                                                        </li>
                                                        <!-- .has-children -->


                                                        <li class="has-children">
                                                            <a href="#">Listing</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>


                                                                <li>
                                                                    <a href="listing_single.html">listing-Single</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li class="has-children">
                                                            <a href="#">Utilisateur</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li><a href="company_listing.html">Liste des entreprises</a></li>
                                                                <li><a href="company_listing_single.html">Company-Single</a></li>
                                                                <li><a href="candidate_listing.html">Liste des candidat</a></li>
                                                                <li><a href="candidate_profile.html">Profil Candidat</a></li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="about.php">A propos</a>


                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li class="has-children">
                                                            <a href="#">Blog</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li>
                                                                    <a href="blog_left.html">Blog-Left</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="blog_right.html">Blog-Right</a>
                                                                </li>
                                                                <!-- .has-children -->


                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li>
                                                            <a href="contact.html">Contact</a>
                                                        </li>


                                                    </ul>
                                                    <!-- .cd-dropdown-content -->



                                                </nav>
                                                <!-- .cd-dropdown -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .cd-dropdown-wrapper -->
                            </header>
                        </div>
                    </div>
                    <!-- mobile menu area end -->

                </div>
            </div>
        </div>
    </div>
    <!-- Header Wrapper End -->
    <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Ajout_Offre</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="Acceuil.php">Acceuil</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Ajout_Offre</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp ad post Wrapper Start -->
    <div class="jp_adp_main_section_wrapper">
        <div class="container">
            <div class="row">

                <form action="add_postin.php" method="POST">



                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="jp_adp_form_heading_wrapper">
                            <h2>Remplir le formulaire de l'offre</h2>
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <input type="text" placeholder="Type d'offre" name="typ_offre" id="typ_offre">
                        </div>
                        <div class="jp_adp_form_wrapper">offre publié
                            <input type="text" name="annee_experience" id="annee_experience" placeholder="année d'expérience requise(facultatif)">

                        </div>

                        <div class="jp_adp_form_wrapper">
                            <input type="text" name="langue" id="langue" placeholder="insérer les langues requises">
                        </div>

                        <div class="jp_adp_form_wrapper">
                            <input type="text" name="apt_req" id="apt_req" placeholder="Quel type d'attitude attendez vous de votre employé ?">
                        </div>

                        <div class="jp_adp_form_wrapper">
                            <input type="date" name="date_exp" id="date_exp">
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">

                        <div class="jp_adp_form_wrapper">
                            <input type="text" name="specialite" id="specialite" placeholder="Spécialité de l'offre">

                        </div>
                        <div class="jp_adp_form_wrapper">
                            <input type="text" name="diplome" id="diplome" placeholder="Quel sont les diplôme requise?">

                        </div>


                        <div class="jp_adp_form_wrapper">
                            <input type="text" name="nbr_post" id="nbr_post" placeholder="Combien de place disponible pour l'offre">
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <input type="text" name="act_principal" id="act_principal" placeholder="Quel est l'activité principal de l'offre">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_adp_textarea_main_wrapper">
                            <textarea rows="7" placeholder="Description" id="desc" name="desc"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_adp_textarea_main_wrapper">
                            <textarea rows="7" name="comp_req" id="comp_req" cols="30" rows="10" placeholder="Quel sont les compétences que vous rechercher?"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_adp_textarea_main_wrapper">
                            <textarea name="critere" id="critere" cols="30" rows="10" placeholder="Quel sont les critère que vous rechercher chez votre employé ?"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_adp_textarea_main_wrapper">
                            <textarea name="connaissance_req" id="connaissance_req" cols="30" rows="10" placeholder="Quels sont les connaissance requise ?"></textarea>
                        </div>
                        <input type="submit" name="btnAjouter" value="PUBLIER">
                </form>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_choose_resume">

                        <div class="custom-input">
                            <span><i class="fa fa-upload"></i> &nbsp;Mise à jour offre</span>
                            <input type="file" name="resume" id="resume" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_choose_resume_bottom_btn_post">
                        <ul>
                            <li><a href=""><i class="fa fa-plus-circle"></i>&nbsp; Publier une offre</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp ad post Wrapper End -->
    <!-- jp downlord Wrapper Start -->

    <!-- jp Newsletter Wrapper Start -->
    <div class="jp_main_footer_img_wrapper">
        <div class="jp_newsletter_img_overlay_wrapper"></div>
        <div class="jp_newsletter_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="jp_newsletter_text">
                            <img src="images/content/news_logo.png" class="img-responsive" alt="news_logo" />
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="jp_newsletter_field">
                            <i class="fa fa-envelope-o"></i><input type="text" placeholder="Enter Your Email"><button type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jp Newsletter Wrapper End -->
        <!-- jp footer Wrapper Start -->
        <div class="jp_footer_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_footer_logo_wrapper">
                            <div class="jp_footer_logo">
                                <a href="#"><img src="images/content/k.png" alt="footer_logo" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="jp_footer_three_sec_main_wrapper">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_first_cont_wrapper">
                                <div class="jp_footer_first_cont">
                                    <h2>Qui sommes-nous ?</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur praesentium temporibus optio molestias non, iure quo animi iste laudantium deleniti incidunt maiores vel aut eligendi, distinctio delectus quas. Vitae, id.</p>
                                    <ul>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">READ MORE</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper2">
                                <div class="jp_footer_candidate">
                                    <h2>For candidate</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Add a Resume</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> candidate Dashboard</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Past Applications</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Job Alerts</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Bookmarks</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> My Account</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Your Jobs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper3">
                                <div class="jp_footer_candidate">
                                    <h2>For Employers</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Browse candidates</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Employer Dashboard</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Add Job</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Job Page</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Job Packages</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Work Process</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> My Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper4">
                                <div class="jp_footer_candidate">
                                    <h2>Information</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Terms & Conditions</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Privacy Policy</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Careers with Us</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Sitemap</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Contact Us</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_bottom_footer_Wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="jp_bottom_footer_left_cont">
                                        <p>© 2022-23 ISHEDE. Projet de soutenance: Gestion de recrutement</p>
                                    </div>
                                    <div class="jp_bottom_top_scrollbar_wrapper">
                                        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="jp_bottom_footer_right_cont">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp footer Wrapper End -->
    <!--main js file start-->
    <script data-cfasync="false" src="https://www.webstrot.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery_min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/custom_II.js"></script>
    <!--main js file end-->
</body>


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/add_postin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:31:01 GMT -->

</html>