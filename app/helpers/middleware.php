<?php

// function provides functionality for cocmmenting and other things users can do
function usersOnly($redirect = '/articles.php') {
    if(empty($_SESSION['id'])){
        $_SESSION['message'] = 'You have to Log in first';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function adminOnly($redirect = '/articles.php') {
    if(empty($_SESSION['admin']) || empty($_SESSION['admin'])){
        $_SESSION['message'] = 'You are not authorised';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function guestsOnly($redirect = '/articles.php') {
    if(isset($_SESSION['id'])){
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}