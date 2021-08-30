<?php

    include(ROOT_PATH . '/database/db.php');

    // variables:
    $table = 'userlogin';

    if(isset($_POST['login'])) {

        unset($_POST['login']);

        $user = selectOne($table, ['username' => $_POST['username']]);

        if(($user['username'] === $_POST['username']) && ($user['password'] === $_POST['password'])) {

            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['phone'] = $user['phone'];

            header('location:' . BASE_URL . '/profile.php');
            exit();

        }else {
            header('location:' . BASE_URL . '/login.php');
            exit();
        }  
            
    }

?>