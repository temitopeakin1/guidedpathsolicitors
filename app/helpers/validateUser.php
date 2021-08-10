<?php

function validateUser($user)
{

    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username required');
    }

    if (empty($user['email'])) {
        array_push($errors, 'Email required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }

    if ($user['passwordConf'] !== $_POST['password']) {
        array_push($errors, 'Non-matching Password');
    }

  /*   $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        array_push($errors, 'Email already exists');
    } */

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        if (isset($user['update-user']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Email already exists');
        }

        if (isset($post['create-admin'])) {
            array_push($errors, 'Email already exists');
        }
        
    }

    return $errors;

}

function validateLogin($user)
{

    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username required');
    }

   if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }

    return $errors;

}