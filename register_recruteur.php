<?php
//les variables pour récupérer les infos enoyées
$nom_U = "";
$nom_E = "";
$nºifu = "";
$rccm = "";
$telephone = "";
$adresse = "";
$site_web = "";
$email = "";
$password = "";

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
if (isset($_POST["nom_U"])&& isset($_POST["nom_E"])&& isset($_POST["nºifu"])&& isset($_POST["rccm"])&& isset($_POST["telephone"])&& isset($_POST["adresse"])&& isset($_POST["site_web"])&& isset($_POST["email"])&& isset($_POST["password"])){
    $nom_U = $_POST["nom_U"];
    $nom_E = $_POST["nom_E"];
    $nºifu = $_POST["nºifu"];
    $rccm = $_POST["rccm"];
    $telephone = $_POST["telephone"];
    $adresse = $_POST["adresse"];
    $site_web = $_POST["site_web"];
    $email = $_POST["email"];
    $password = $_POST["password"];

}

              if(isset($_POST["btnAjouter"])){

                //verification de l'existance ou non d'un utilisateur
   $reqAexecuter = "Select * From Employeur Where nºifu = '$nºifu'";
   $resultat = mysqli_query($varCon, $reqAexecuter);

   //on compte le nombre d'enrégistrements dont l'email est identique au mail envoyé
   //si le nombre est supérieur à 1 ce n'est pas bon

   if (mysqli_num_rows($resultat)>=1) {
    //y a probleme
    ?>
            <script>
                alert("entreprise existant");
            </script>
    <?php
   }else {
                        
        //c'est bon on peut ajouter
        $reqAexecuter = "INSERT INTO Employeur (nom_U, nom_E, nºifu, rccm, telephone, adresse, site_web, email, password) 
        VALUES ('$nom_U', '$nom_E', '$nºifu', '$rccm', '$telephone', '$adresse', '$site_web', '$email', '$password')";

        $resultat = mysqli_query($varCon, $reqAexecuter);

    ?>

    <script>
     alert("Compte créer avec succès !");
     </script>

    <?php                          }

                   

   }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
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

    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
    <div class="jp_top_header_main_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_left_wrapper">
                        <div class="jp_top_header_left_cont">
                            <p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+123456789</p>
                            <p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;<a
                                    href="#"><span class="__cf_email__" data-cfemail="8bcee6eae2e7cbeef3eae6fbe7eea5e8e4e6">[email&#160;protected]</span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_right_wrapper">
                        <div class="jp_top_header_right_cont">
                            <ul>
                                <li><a href="register.html"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-in"></i>&nbsp; LOGIN</a></li>
                            </ul>
                        </div>
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
                                <a href="index.html"><img src="images/header/logo2.png" alt="Logo" title="Job Pro"
                                        class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 full_width">
                        <div class="header-area hidden-menu-bar stick" id="sticker">
                            <!-- mainmenu start -->
                            <div class="mainmenu">
                                <div class="gc_right_menu">
                                    <ul>
                                        <li id="search_button">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3"
                                                x="0px" y="0px" viewBox="0 0 451 451"
                                                style="enable-background:new 0 0 451 451;" xml:space="preserve">
                                                <g>
                                                    <path id="search"
                                                        d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z"
                                                        fill="#23c0e9" />
                                                </g>
                                            </svg>
                                        </li>
                                        <li>
                                            <div id="search_open" class="gc_search_box">
                                                <input type="text" placeholder="Search here">
                                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="float_left">
                                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">
                                            Home&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <!-- mega menu start -->
                                        <ul>
                                            <li class="parent"><a href="index.html">Home1</a></li>
                                            
                                            <li class="parent"><a href="index_vi.html">Home6</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">
                                            Job&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <!-- mega menu start -->
                                        <ul>
                                            
                                            <li class="parent"><a href="listing_single.html">Listing-Single</a></li>

                                        </ul>
                                    </li>
                                    <li class="parent gc_main_navigation"><a href="#"
                                            class="gc_main_navigation">candidates &nbsp;<i
                                                class="fa fa-angle-down"></i></a>
                                        <!-- sub menu start -->
                                        <ul>

                                            <li class="parent"><a href="company_listing.html">Company-Listing</a></li>
                                            <li class="parent"><a href="company_listing_single.html">Company-Single</a>
                                            </li>
                                            <li class="parent"><a href="candidate_listing.html">candidate-Listing</a>
                                            </li>
                                            <li class="parent"><a href="candidate_profile.html">candidate-Profile</a>
                                            </li>


                                        </ul>
                                        <!-- sub menu end -->
                                    </li>
                                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">
                                            Pages&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <!-- mega menu start -->
                                        <ul>
                                            <li class="parent"><a href="about.html">About-Us</a></li>
                                            
                                            <li class="parent"><a href="add_postin.html">Add-Posting</a></li>
                                            <li class="parent"><a href="login.html">Login</a></li>
                                            <li class="parent"><a href="register.html">Register</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">
                                            Blog&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <!-- mega menu start -->
                                        <ul>
                                            <li class="parent"><a href="blog_left.html">Blog-Left</a></li>
                                            <li class="parent"><a href="blog_right.html">Blog-Right</a></li>
                                         
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="gc_main_navigation parent"><a href="contact.html"
                                            class="gc_main_navigation">Contact</a></li>
                                </ul>
                            </div>
                            <!-- mainmenu end -->
                            <!-- mobile menu area start -->
                            <header class="mobail_menu">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="gc_logo">
                                                <a href="index.html"><img src="images/header/logo2.png" alt="Logo"
                                                        title="Grace Church"></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="cd-dropdown-wrapper">
                                                <a class="house_toggle" href="#0">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                        id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177"
                                                        style="enable-background:new 0 0 31.177 31.177;"
                                                        xml:space="preserve" width="25px" height="25px">
                                                        <g>
                                                            <g>
                                                                <path class="menubar"
                                                                    d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z"
                                                                    fill="#000000" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar"
                                                                    d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z"
                                                                    fill="#000000" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar"
                                                                    d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z"
                                                                    fill="#000000" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar"
                                                                    d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z"
                                                                    fill="#000000" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar"
                                                                    d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z"
                                                                    fill="#000000" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <nav class="cd-dropdown">
                                                    <h2><a href="#">Job<span>Pro</span></a></h2>
                                                    <a href="#0" class="cd-close">Close</a>
                                                    <ul class="cd-dropdown-content">
                                                        <li>
                                                            <form class="cd-search">
                                                                <input type="search" placeholder="Search...">
                                                            </form>
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="#">Home</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#">Menu</a></li>
                                                                <li><a href="index.html">Home1</a></li>
                                                                
                                                                <li><a href="index_vi.html">Home6</a></li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
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
                                                            <a href="#">candidates</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li><a href="company_listing.html">Company-Listing</a>
                                                                </li>
                                                                <li><a
                                                                        href="company_listing_single.html">Company-Single</a>
                                                                </li>
                                                                <li><a
                                                                        href="candidate_listing.html">candidate-Listing</a>
                                                                </li>
                                                                <li><a
                                                                        href="candidate_profile.html">candidate-Profile</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="#">Pages</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li><a href="about.html">About-Us</a></li>
                                                               
                                                                <li><a href="add_postin.html">Add-Posting</a></li>
                                                                <li><a href="login.html">Login</a></li>
                                                                <li><a href="register.html">Register</a></li>
                                                               
                                                                <!-- .has-children -->

                                                            </ul>
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
                                                        <li>
                                                            <a href="register.html">Sign Up</a>
                                                        </li>
                                                        <li>
                                                            <a href="login.html">Login</a>
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
                            <h2>Register</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Register</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->

    <!-- jp register wrapper start -->
    <div class="register_section">
        <!-- register_form_wrapper -->
        <div class="register_tab_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div role="tabpanel">

                            <!-- Nav tabs-->
                            <ul id="tabOne" class="nav register-tabs">
                                <li class="active"><a href="#contentOne-1" data-toggle="tab">Entreprise <br>
                                        <span>Recherche un employé</span></a>
                                </li>
                               
                                
                            </ul>


                            

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active register_left_form" id="contentOne-1">
                                    <div class="jp_regiter_top_heading">
                                        <h1><center><p>Créer votre compte </p></center></h1>
                                    </div>
                                    <div class="row ">
                                        <form action="register_recruteur.php" data-toggle="validator"  methode="POST">
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label> Nom utilisateur </label>
                                            <input type="text" name="nom_U" id="nom_U" placeholder="entrez le nom utilisateur"
                                                    required>
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Nom Entreprise</label>
                                            <input type="text" name="nom_E" id="nom_E" placeholder="nom de l'entreprise"
                                                    required>
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>NºIFU</label>
                                            <input type="text" name="nºifu" id="nºifu"  placeholder="entrez l'IFU"
                                                    required>

                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label> RCCM</label>
                                            <input type="text" name="rccm" id="rccm" 
                                                    placeholder="entrez rccm">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Télephone</label>
                                            <input type="text" name="telephone" id="telephone" 
                                                    placeholder="entrez votre numéro">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Adresse</label>
                                            <input type="text" name="adresse" id="adresse" 
                                                    placeholder="entrez votre adresse">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Site Web</label>
                                            <input type="text" name="site_web" id="site_web" 
                                                    placeholder="entrez votre site">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Email</label>
                                            <input type="text" name="email" id="email" 
                                                    placeholder="entrez votre mail">
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label> Password :</label>
                                                <input type="password" name="password" id="password" placeholder="password*"
                                                    onChange="onChange()" required>
                                            </div>
                                           <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label> Confirme Password :</label>
                                                <input type="password" name="confirm" id="password" onChange="onChange()"
                                                    placeholder="Confirmez mot de pass" required>
                                            </div>
                                            
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="check-box text-center">
                                                    <input type="checkbox" name="shipping-option" id="account-option_2">
                                                    &ensp;
                                                    <label for="account-option_2">J'accepte les <a href="#"
                                                            class="check_box_anchr">Terms et Conditions</a> d'utilisation de ISHEDE
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                                <button type="submit" name="btnAjouter" class="btn btn-primary login_btn">S'inscrire</button>
                                                <!-- <a type="submit" href="javascript:;" class="btn btn-primary login_btn"> register </a> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="login_message">
                                        <p>Avez vous deja un compte? <a href="#"> connexion </a> </p>
                                    </div>

                            <div class="tab-content">
                                
                                <div class="tab-pane fade register_left_form" id="contentOne">
                                                                    </div>
                            </div>
                            <p class="btm_txt_register_form">In case you are using a public/shared computer we recommend
                                that you logout to prevent any un-authorized access to your account</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp register wrapper end -->

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
                            <i class="fa fa-envelope-o"></i>
                            <input type="text" placeholder="Enter Your Email">
                            <button type="submit">Submit</button>
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
                                <a href="#"><img src="images/content/resume_logo.png" alt="footer_logo" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="jp_footer_three_sec_main_wrapper">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_first_cont_wrapper">
                                <div class="jp_footer_first_cont">
                                    <h2>Who We Are</h2>
                                    <p>This is Photoshop's version of Lom Ipsum. Proin gravida nibh vel velit auctor
                                        aliquet. Aenean sollicitudin, lorem quis bibendum.
                                        <br>
                                        <br> Proin akshay handge vel velit auctor aliquet. Aenean sollicitudin,
                                    </p>
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
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Add a
                                                Resume</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> candidate
                                                Dashboard</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Past
                                                Applications</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Job
                                                Alerts</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Bookmarks</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> My
                                                Account</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Your
                                                Jobs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper3">
                                <div class="jp_footer_candidate">
                                    <h2>For Employers</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Browse
                                                candidates</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Employer
                                                Dashboard</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Add Job</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Job
                                                Page</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Job
                                                Packages</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Work
                                                Process</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> My
                                                Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper4">
                                <div class="jp_footer_candidate">
                                    <h2>Information</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> About
                                                Us</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Terms &
                                                Conditions</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Privacy
                                                Policy</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Careers
                                                with Us</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Sitemap</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Contact
                                                Us</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a>
                                        </li>
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
                                        <p>© 2022-23 Job Pro. All Rights Reserved.</p>
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

    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/custom_II.js"></script>
   

</body>
</html>