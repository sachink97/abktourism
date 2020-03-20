<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="css/bootstrap-datepicker.css" type="text/css" rel="stylesheet" />
<!-- Favicon -->
<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
<title>Welcome to A.B.K Adventure And Tourism || Gallery</title>
</head>
<body>

<!-- header Start-->
<?php include("includes/header.php") ?>
<!--header End--> 

<!--Banner innerpage -->
<div class="innerpage-banner left bg-overlay-dark-7 py-7" style="background:url(images/07.jpg) repeat; background-size:cover;">
  <div class="container">
    <div class="row all-text-white">
      <div class="col-md-12 align-self-center">
        <h1 class="innerpage-title">Contact</h1>
        <h6 class="subtitle">Fusce iaculis ex sed nulla commodo imperdiet. Proin sed rhoncus ligula.</h6>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="index-2.html"><i class="ti-home"></i> Home</a></li>
            <li class="breadcrumb-item">Contact</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!--Banner innerpage --> 

<div class="section section-padding--sm bg-black">
            <div class="container">
                <!--Funfact Wrapper Start-->
                <div class="funfact-wrap row">
                    <!--Funfact Start-->
                    <div class="funfact col-lg-4 col-6">
                        <div class="inner">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="content">
                                <h2 class="counter plus text-white">Address</h2>
                                <span class="text-white">417, (HLDG : 517/1), Purba Sinthee Bye Lane Kolkata - 700030</span>
                            </div>
                        </div>
                    </div>
                    <!--Funfact End-->

                    <!--Funfact Start-->
                    <div class="funfact col-lg-4 col-6">
                        <div class="inner">
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <div class="content">
                                <h2 class="counter plus text-white">Email</h2>
                                <span class="text-white">info@abktourism.com</span><br>
                                <span class="text-white">Mon - Fri: 09:00 - 21:00 Sat & Sun: Closed</span>
                            </div>
                        </div>
                    </div>
                    <!--Funfact End-->
                    <!--Funfact Start-->
                    <div class="funfact col-lg-4 col-6">
                        <div class="inner">
                            <div class="icon"><i class="fas fa-mobile-alt"></i></div>
                            <div class="content">
                                <h2 class="counter plus text-white">Contact Info</h2>
                                <span class="text-white">+91-9804420689,<br> +91-89020 83361</span>
                            </div>
                        </div>
                    </div>
                    <!--Funfact End-->
                </div>
                <!--Funfact Wrapper End-->
            </div>
        </div>
    
    <!-- Google Map Start -->
   
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0" allowfullscreen></iframe>
</div>

    <div class="container">

    <div class="row">

      <div class="col-lg-8 col-lg-offset-2">

        
        <form id="contact-form" method="post" action="" role="form">

        <div class="messages"></div>

        <div class="controls">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_name"><b>Firstname *</b></label><br>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_lastname"><b>Lastname *</b></label>
                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_email"><b>Email *</b></label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_phone"><b>Phone</b></label>
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="form_message"><b>Message *</b></label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required data-error="Please,leave us a message."></textarea><br>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-12">
              <input type="submit" class="btn btn-success btn-send" value="Send message">
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
    

<!--footer  -->
<?php include("includes/footer.php") ?>
<!--footer  --> 

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="js/jquery.min.js" type="text/javascript"></script> 
<script src="js/popper.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/functions.js" type="text/javascript"></script> 
<script src="js/owl.carousel.min.js" type="text/javascript"></script> 
<script src="js/slick.js" type="text/javascript"></script> 
<script src="js/swiper.min.js" type="text/javascript"></script> 
<script src="js/main.js" type="text/javascript"></script> 
<script src="js/jquery.fancybox.min.js" type="text/javascript"></script> 
<script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script> 
<script src="js/jquery-ui.min.js" type="text/javascript"></script> 
<script src="js/isotope.pkgd.min.js" type="text/javascript"></script> 
<script src="js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
</body>
</html>