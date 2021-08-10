<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
adminOnly();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Admin section | Manage Users</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/jquery-ui.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel = "stylesheet" href="../../assets/css/animate.css">
    <link rel="stylesheet" href="../../assets/css/slicknav.min.css">
    <link rel="stylesheet" href="../../assets/css/jquery.mb.YTPlayer.min.css">
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
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="articles.php" class="btn btn-big">Manage Users</a>
            </div>
             <div class="content">
                <h2 class="page-title">Manage Users</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                <table>
                    <thead>
                        <th>S/N</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($admin_users as $key => $user): ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $user['username']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">Edit</a></td>
                            <td><a href="articles.php?delete_id=<?php echo $user['id']; ?>" class="delete">Delete</a></td>
                        </tr>
                        <?php endforeach; ?>
                     </tbody>
                </table>
            </div>
        </div>
  </section>
     
 <!--Admin content-->
      
 <script src="../../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../../assets/js/jquery-ui.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/jquery.slicknav.min.js"></script>
    <script src="../../assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="../../assets/js/raindrops.js"></script>
    <script src="../../assets/js/theme.js"></script>
</body>
</html>



