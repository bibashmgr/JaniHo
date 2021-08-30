<?php 

include('../path.php');

session_start();

unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['username']);
unset($_SESSION['phone']);

session_destroy();

header('location:' . BASE_URL . '/login.php');


?>