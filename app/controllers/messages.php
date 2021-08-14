<?php 

include(ROOT_PATH . "/app/database/db.php");

$table = 'messages';
//declare global variable
$name ='';
$email = '';
$phone = '';
$subject = '';
$msg = '';


function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'Message received';
    $_SESSION['type'] = 'success';
    // using an If-else statement here
  

}