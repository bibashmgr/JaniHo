<?php

    session_start();

    include('../path.php');

    include(ROOT_PATH . '/database/db.php');

    // variables

    $table_one = 'buses';
    $table_two = 'booked';
    $id = '';
    $seats = '';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $booked = selectOne($table_one, ['id' => $id]);

        $seats = $booked['seats'];
        unset($booked['id']);
        unset($booked['seats']);
        $booked['username'] = $_SESSION['username'];
        $booked['phone'] = $_SESSION['phone'];
        
        $booked_id = create($table_two, $booked);

        // updating the seats number

        $seats = $seats - 1;
        $seats_id = update($table_one, $id, ['seats' => $seats]);

        header('location: ' . BASE_URL . '/profile.php');
        exit();
    }

?>