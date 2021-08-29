<?php 

include(ROOT_PATH . '/database/db.php');

function dd($users) // to be deleted
{
    echo '<pre>', print_r($users,true), '</pre>';
    exit();
}

// variables

$table = 'buses';

if(isset($_POST['search'])){

    unset($_POST['search']);
    $_POST['date'] = strtotime($_POST["date"]);
    $_POST['date'] = date('Y-m-d', $_POST['date']);
    
    $results = selectAll($table, $_POST);

}

?>