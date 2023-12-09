<?php
include '../../Controller/SCC.php';
include '../../Model/SC.php';

// Create an instance of the controller

$SCC = new SCC();

if (
    isset($_GET["id"]) &&
    isset($_POST["duree"]) &&
    isset($_POST["acces"]) &&
    isset($_POST["sujet"]) &&
    isset($_POST["code"])
) {
    if (
        !empty($_GET['id']) &&
        !empty($_POST['duree']) &&
        !empty($_POST['acces']) &&
        !empty($_POST['sujet'])
    ) {
        $idSC = $_GET['id']; // Retrieve the coach's ID from the URL

        $duree = $_POST['duree'];
        $acces = $_POST['acces'];
        $sujet = $_POST['sujet'];

        // Check if the session is private and set the code if it is
        $code = null;
        if ($acces === 'prive' && !empty($_POST['code'])) {
            $code = $_POST['code'];
        }

        $SC = new SC(
            $idSC,
            $duree,
            $acces,
            $sujet,
            $code
        );

        $SCC->addCoachingSession($SC, $idSC);

        // Redirect to the index.php file in the seance folder with the idSC parameter
        header("Location: client/crud.php?idSC=" . $idSC);
        exit(); // Make sure to include an exit statement to prevent further execution
    }
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>NutriNet</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/nutrinet.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">



<link rel="stylesheet" href="css/product.css">
   </head>
   <body>
      <!-- ***** Preloader Start ***** 
      <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
          <span class="dot"></span>
          <div class="dots">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
       ***** Preloader End ***** -->
      <!-- banner bg main start -->
   <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Best Sellers</a></li>
                           <li><a href="#">Gift Ideas</a></li>
                           <li><a href="#">New Releases</a></li>
                           <li><a href="#">Today's Deals</a></li>
                           <li><a href="#">Customer Service</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
     <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo" ><a href="index.html"><img src="images/nnn.png" width="250px"></a></div>
                  </div>
               </div>
            </div>
         </div>
	   
         <!-- logo section end -->
         <div class="page-heading header-text">
            <div class="container">
              <div class="row">
                <div class="col-lg-12  " align="center">
                  <span class="buy_bt"><a href="index.html">Home</a>  >  <a href="#">Shop</a>  >prot1</span>
                </div>
              </div>
            </div>
          </div>
          <div>&nbsp;</div>
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.html">Home</a>
                     <a href="fashion.html">Fashion</a>
                     <a href="electronic.html">Electronic</a>
                     <a href="jewellery.html">Jewellery</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #CEE452; border-color:#ffffff ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="images/flag-france.png" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                           <li><a href="#">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Account</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
     </div>
         <!-- header section end -->
         <!-- banner section start -->
         <!-- banner section end -->
	   <div>&nbsp;</div>
   </div>
      <!-- banner bg main end -->
      <div>&nbsp;</div>
      <div>&nbsp;</div>


      <head>
         <title>Inscription (Nouveau coach)</title>
         <!-- Inclusion des fichiers CSS de Bootstrap -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
         <head>
    <title>Inscription (Nouveau coach)</title>
    <!-- Inclusion des fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
    <a href="listCoachingSessions.php">Back to list</a>
    <hr>

    <form id="coachingSessionForm" action="" method="POST">
        <table>
            <tr>


                <td><label for="duree">Durée (en minutes):</label></td>
                <td>
                    <input type="text" id="duree" name="duree" />
                </td>
            </tr>
            <tr>
                <td><label for="acces">Accès:</label></td>
                <td>
                    <select id="acces" name="acces">
                        <option value="prive">Privé</option>
                        <option value="public">Public</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="sujet">Sujet:</label></td>
                <td>
                    <textarea id="sujet" name="sujet"></textarea>
                </td>
            </tr>
            <tr id="codeRow">
                <td><label for="code">Code:</label></td>
                <td>
                    <input type="password" id="code" name="code" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Save"onclick="">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>






        // Hide or show the code field based on the selected access option
        function toggleCodeField() {
            var accessSelect = document.getElementById('acces');
            var codeRow = document.getElementById('codeRow');

            if (accessSelect.value === 'prive') {
                codeRow.style.display = 'table-row';
            } else {
                codeRow.style.display = 'none';
            }
        }


    </script>

</body>

























    </script>
     <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="images/nnn.png" width="250px"></a></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Best Sellers</a></li>
                  <li><a href="#">Gift Ideas</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Today's Deals</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number Najm Eddin : <a href="#">+216 94054064</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2023 All Rights Reserved. Design by <a href="https://html.design">TechTitans</a></p>
         </div>
      </div>
      <!-- copyright section end -->
    <!-- Inclusion des fichiers JS de Bootstrap -->

</body>

</html>