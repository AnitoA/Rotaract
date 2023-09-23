<?php

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Изисква се потребителско име');
    }

    if (empty($user['email'])) {
        array_push($errors, 'Изисква се имейл');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Изисква се парола');
    }

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Паролата не съвпада');
    }

    // $existingUser = selectOne('users', ['email' => $user['email']]);
    // if ($existingUser) {
    //     array_push($errors, 'Имейлът вече съществува');
    // }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Имейлът вече съществува');
        }

        if (isset($user['create-admin'])) {
            array_push($errors, 'Имейлът вече съществува');
        }
    }

    return $errors;
}


function validateLogin($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Изисква се потребителско име');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Изисква се потребителско име');
    }

    return $errors;
}