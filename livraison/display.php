<?php
include "../core/livraisonCrud.php";
$club = new livraisonCrud();
$listeclubs=$club->afficherlivraison();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>leopet || about</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--::header part start::-->
    <header class="header_area" style="margin-top: -52px">
        <div class="sub_header">
            <div class="container">
                <div class="row align-items-center">
                  <div class="col-4 col-md-4 col-xl-6">
                      <div id="logo">
                          <a href="index.html"></a>
                      </div>
                  </div>
                 
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="ti-menu"></i>
                            </button>

                            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link active">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services.html" class="nav-link">services</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Pages
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="elements.html">promotions</a>
                                          <a class="dropdown-item" href="ajout.html">no produits</a>
                                      </div>
                                  </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->


  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Delivery Address</h2>
        </div>
        <div class="col-lg-8">
            <table border="2">
                <tr>
                    <td>Id</td>
                    <td>adresse</td>
                    <td>ville</td>
                    <td>telephone</td>
                    <td>email</td>
                    <td>status</td>

                </tr>

                <?PHP
                foreach($listeclubs as $row){
                    ?>
                    <tr>
                        <td><?PHP echo $row['id']; ?></td>
                        <td><?PHP echo $row['adresse']; ?></td>
                        <td><?PHP echo $row['ville']; ?></td>
                        <td><?PHP echo $row['telephone']; ?></td>
                        <td><?PHP echo $row['email']; ?></td>
                        <td><?PHP echo $row['status']; ?></td>

                    </tr>
                    <?PHP
                }
                ?>
            </table>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-shopping-cart"></i></span>
            <div class="media-body">
              <h3>Order Number: #6525622</h3>
              <p>28/11/2019</p>
            </div>
          </div>
          <div class="media contact-info">
            <div class="media-body">
              <h3>Products</h3>
              <ul>
                <li>- Baume coussinets <span style="margin-left:25%">27$</span></li>
                <li>- Dentifrice naturel <span style="margin-left:27%">15$</span></li>
                <li>- Pate Laxatine <span style="margin-left:33%">40$</span></li>
              </ul>
            </div>
          </div>
          <hr>
          <div class="media contact-info">
            <div class="media-body">
              <h3>Total ............. 82$</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

<!-- footer part start-->
<footer class="footer_area padding_top">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8 col-xl-6">
                    <div class="subscribe_part_text text-center">
                        <h2>Subscribe Newsletter</h2>
                        <p>We strictly follow the State Board’s sanitary and disinfection guidelines.</p>
                        <div class="subscribe_form">
                            <form action="#" name="#">
                                <div class="input-group align-items-center">
                                    <input type="email" class="form-control" placeholder="enter your email">
                                    <div class="subscribe_btn input-group-append">
                                        <div class="btn_1">free trail</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between section_padding">
                <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="#">about</a></li>
                        <li><a href="#">shop</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                    <h4>contact</h4>
                    <ul>
                        <li><a href="#">10 983 456 3669</a></li>
                        <li><a href="#">reserve@manicure.com</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Address</h4>
                    <ul>
                        <li><a href="#">700, Green lane, New
                                York, USA</a></li>
                        <li><a href="#">Get Direction</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Opening Hour</h4>
                    <ul>
                        <li><a href="#">Mon-Fri (9.00-6.00)</a></li>
                        <li><a href="#">Sat-Sun (Closed)</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <img src="img/footer_logo.png" alt="#">
                        <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- counterup js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- waypoints js -->
    <script src="js/waypoints.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>