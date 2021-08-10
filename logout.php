<?php
include("path.php");
session_start();
// unsetting to destroy the variable usimg the unset method
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['message']);
unset($_SESSION['type']);
session_destroy();

header('location: ' . BASE_URL . '/articles.php'); 

