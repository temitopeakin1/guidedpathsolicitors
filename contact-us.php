<?php include('path.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact | Guided Path Solicitors</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel = "stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
    </head>
<body>

    <?php include("app/includes/header.php"); ?>

 <!--Begin :About Image-->
    
        <section class="hero" id="about__hero">
            <div class="container">
                <h1 class="about__headline">Contact Us</h1>
                <a href="contact-us.php" class="btn btn-primary">Start a Free Evaluation Today <i class="fas fa-balance-scale"></i></a>
            </div>
        </section> 
    <!--End: About Image-->

   <!-- contact area start -->
   <div class="contact-area ptb--100">
        <div class="container">
            <section class="contact-inner" id="contact">
                <div class="section-title text-black">
                    <h2>Contact</h2>
                </div>
                <div class="contact-flex-container">
                    <div class="contact-address">
                        <h4 class="contact-title">Location</h4>
                        <p>Ibadan,Nigeria </p>
                        <ul>
                            <li class="h-addres"><i class="fa fa-home"></i> 27, David's Place, Ago-Taylor, Off <br> Ring Road Ibadan, Oyo-State</li>
                            <li><i class="fa fa-phone"></i> 07063403853 | 08156773953</li>
                            <li><i class="fa fa-envelope"></i>enquiries@guidedpathsolicitors.com</li>
                        </ul>
                    </div>
                    <div class="contact-form">
                        <h4 class="contact-title">Fill out the form below to recieve a free and confidential intial consultation.</h4>
                        <form method="post" action="contact.php">
                            <input type="text" class="input" name="name"  placeholder="Your Name *">
                            <input type="email" class="input" name="email"  placeholder="Your Email address*">
                            <input type="phone" class="input" name="phone"  placeholder="Phone number*">
                            <input type="text" class="input" name="subject"  placeholder="Your Subject*">
                            <textarea name="msg" class="input" id="msg" placeholder="Case Description*"></textarea>
                            <input type="submit" id="send" value="Submit">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- contact area end -->
 
<!-- Begin: Footer-->
<?php include("app/includes/footer.php"); ?>  
<!--End : Footer-->


<button id="btnScrollToTop">
    <i class="material-icons">arrow_upward</i>
</button>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6083c0e762662a09efc1a59f/1f41ajms7';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
<!--End of Tawk.to Script-->

<!-- Scripts -->

    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="assets/js/app.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scroll.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO_5h890WNShs_YLGivCBfs2U89qXR-7Y&callback=initMap"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>




