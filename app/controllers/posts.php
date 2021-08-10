<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");

$table = 'posts';


$topics = selectAll('topics');
$posts = selectAll($table);

// initialize variables
$id = "";
$errors = array();
$title = "";
$body = "";
$topic_id = "";
$published = "";


// get parameters from the URL
if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);
    // setting the values on the global variables
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $topic_id = $post['topic_id'];
    $published = $post['published'];
}


// get parameters from the URL
if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Post deleted succesfully";
    $_SESSION['type'] = "success";
    header("location:" . BASE_URL . "/admin/posts/articles.php");
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    // update published field in the post
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Post published state changed";
    $_SESSION['type'] = "success";
    header("location:" . BASE_URL . "/admin/posts/articles.php");
    exit();
}


if(isset($_POST['add-post'])) {
    adminOnly();
    $errors = validatePost($_POST); // the validate posts (superglobal) function 

if (!empty($_FILES['image']['name'])) {
$image_name = time() . '_' . $_FILES['image']['name'];
$destination = ROOT_PATH . "/assets/images/" . $image_name;

$result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

//To  check if the image upload upload is successful

if ($result) {
 $_POST['image'] = $image_name;
} else {
    array_push($errors, "Image upload failed");
}

} else {
    array_push($errors, "Post image required");
}

    if (count($errors) == 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;// use of the ternary operator
        $_POST['body'] = htmlentities($_POST['body']);
      
     
        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Post created succesfully";
        $_SESSION['type'] = "success";
        header("location:" . BASE_URL . "/admin/posts/articles.php");
    } else {
        // data in the form remains
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}   

if (isset($_POST['update-post'])) {
    adminOnly();
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;
        
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        
        //To  check if the image upload upload is successful
        
        if ($result) {
         $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Image upload failed");
        }
        
        } else {
            array_push($errors, "Post image required");
        }

        if (count($errors) == 0) {
            $id = $_POST['id'];
            unset($_POST['update-post'], $_POST['id']); //removing from the post variable
            $_POST['user_id'] = $_SESSION['id'];
            $_POST['published'] = isset($_POST['published']) ? 1 : 0;// use of the ternary operator
            $_POST['body'] = htmlentities($_POST['body']);
          
          
            $post_id = update($table, $id, $_POST);
            $_SESSION['message'] = "Post updated succesfully";
            $_SESSION['type'] = "success";
            header("location:" . BASE_URL . "/admin/posts/articles.php");
            exit();
        } else {
            // data in the form remains
            $title = $_POST['title'];
            $body = $_POST['body'];
            $topic_id = $_POST['topic_id'];
            $published = isset($_POST['published']) ? 1 : 0;
        }

}
