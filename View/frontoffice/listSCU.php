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









      <?php


include "../../Controller/coachC.php";


$scc = new SCC();
$coachingSessions = $scc->listCoachingSessions();
$c = new CoachC();
$r = new roomC();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Coaching Sessions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center mt-4">
            <h1>Liste des Séances de coaching</h1>
        </div>

        <?php foreach ($coachingSessions as $session): ?>
            <div class="box">
                <p><strong>Id SC: </strong><?= $session['idSC']; ?></p>
                <p><strong>Durée: </strong><?= $session['duree']; ?></p>
                <p><strong>Accès: </strong><?= $session['acces']; ?></p>
                <p><strong>Sujet: </strong><?= $session['sujet']; ?></p>
                <p><strong>Code: </strong><?= $session['code']; ?></p>


                <?php
                // Retrieve coach information based on the session id
                $coach = $c->getCoachById($session['idSC']);
                if ($coach) {
                    ?>
                    <div class="coach-info">
                        <h4>Coach Information</h4>
                        <p><strong>Nom: </strong><?= $coach['nom']; ?></p>
                        <p><strong>Prénom: </strong><?= $coach['prenom']; ?></p>
                        <p><strong>Sexe: </strong><?= $coach['sexe']; ?></p>
                        <p><strong>Spécialité: </strong><?= $coach['specialite']; ?></p>
                        <p><strong>Diplôme: </strong><?= $coach['diplome']; ?></p>
                    </div>
                    <?php
                }
                ?>
                         <?php
                // Retrieve coach information based on the session id
                $room = $r->getRoomById($session['idSC']);
                if ($room) {
                    ?>

                        <a href="interface/index.php?APP_ID=<?= rawurlencode($room['APP_ID']); ?>&amp;TOKEN=<?= rawurlencode($room['TOKEN']); ?>&amp;CHANNEL=<?= rawurlencode($room['CHANNEL']); ?>">TEST</a>
                        <h4>join session</h4>
                        
                    <?php
                }
                ?>
  
        <?php endforeach; ?>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>




















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
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>

      <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/isotope.min.js"></script>
  <script src="js/owl-carousel.js"></script>
  <script src="js/counter.js"></script>
  <script src="js/custom.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>