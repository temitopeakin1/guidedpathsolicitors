<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();

?>

<!DOCTYPE html>
<html lang="en"> 

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Admin section | Edit Topic</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/jquery-ui.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel = "stylesheet" href="../../assets/css/animate.css">
    <link rel="stylesheet" href="../../assets/css/slicknav.min.css">
    <link rel="stylesheet" href="../../assets/css/typography.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
</head>
<body>
 <!-- header area start -->
 <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <!---Header area ends-->
      <!-- Admin page start-->
 
      <section class="admin wrapper"  id="admin__wrapper">
 
       <!---Begin: left Sidebar---->
       <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!--End: left sidebar---->
        <div class="admin__content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="articles.php" class="btn btn-big">Manage Topics</a>
            </div>
            
            <div class="content">
             <h2 class="page-title">Edit Topic</h2>

             <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                    <div> 
                        <label>Name</label >
                        <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
                    </div>
                    <div> 
                        <label>Description</label>
                        <textarea name="description"  id="body"><?php echo $description; ?></textarea>
                    </div>
                     <div>
                        <button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>
                    </div>
                </form>
            </div>
        </div>
  </section>
     
 <!-- Scripts -->
    <script src="../../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../../assets/js/jquery-ui.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/jquery.slicknav.min.js"></script>
    <script src="../../assets/js/raindrops.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script src="../../assets/js/admin.js"></script>
    <script src="../../assets/js/theme.js"></script>
   
    </body>
</html>



