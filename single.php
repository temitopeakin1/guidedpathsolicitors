<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');



if(isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title><?php echo $post['title']; ?> | Guided Path Solicitors</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
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
    <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
       <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
    
</head>
<body>
 
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
           
        <!--Begin : page Wrapper-->
                    <!--Begin: Recent post-->
                     <div class="content clearfix ptb--100">

                        <div class="main-content single">
                            <h1 class="post-title"><?php echo $post['title']; ?></h1>
                           <div class="post-content">
                              <?php echo html_entity_decode($post['body']); ?>
                            </div>
                        </div>
                        <div class="sidebar single">

                            <div class="section popular">
                                <h2 class="section-title">Top articles</h2>

                                <?php foreach($posts as $p): ?>
                                    <div class="post clearfix">
                                    <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                                    <a href="" class="title"><?php echo $p['title'] ?></a>
                                </div>
                                <?php endforeach; ?>
                               
                              
                            </div>                            
                         
                          <div class="section topics">
                                <h2 class="section-title">Categories</h2>
                                <ul>
                                    <?php foreach ($topics as $topic) : ?>
                                        <li><a href="<?php echo BASE_URL . '/articles.php?t_id=' . $topic['id'] . '&name' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                                    <?php endforeach; ?>
                                 </ul>
                            </div>
                         </div>
                </div>

<!-- Begin: Footer-->
<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
<!--End : Footer-->


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (
        function(){
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
    <script src="assets/js/cookie.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="assets/js/raindrops.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO_5h890WNShs_YLGivCBfs2U89qXR-7Y&callback=initMap"></script>
    <script src="assets/js/theme.js"></script>
</body>
</html>



