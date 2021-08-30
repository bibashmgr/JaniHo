<?php

    session_start();

    include ('./path.php');

    include(ROOT_PATH . '/database/db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta-tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile | Jani Ho?</title>

    <!-- Custom styling -->
    <link rel="stylesheet" href="./styles/header-sh.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="./styles/profile.css?v=<?php echo time();?>">

</head>

<body>

    <!-- header & nav-bar -->
    <?php include(ROOT_PATH . '/includes/header-sh.php') ?>

    <!-- section: profile-container -->
    <section class="profile-container">
        <div class="profile-box">
            <h2 class="heading-one">
                WELCOME,
            </h2>
            <h3 class="heading-two">
                <?php echo $_SESSION['firstname'] . ' '. $_SESSION['lastname']; ?>
            </h3>
            <div class="btn-logout">
                <a href="./controllers/logout.php">LOGOUT</a>
            </div>
        </div>
    </section>

    <section class="booked-container">
        <table class="booked-table">
            <tr>
                <th>S.N</th>
                <th>From</th>
                <th>To</th>
                <th>Date</th>
                <th>Time</th>
                <th>Plate Number</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php $books = selectAll('booked', ['username' => $_SESSION['username']]) ?>
            <?php foreach($books as $key => $book): ?>
                <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo $book['location']; ?></td>
                    <td><?php echo $book['destination']; ?></td>
                    <td><?php echo $book['date']; ?></td>
                    <td><?php echo substr($book['time'], 0, strpos($book['time'], ".")); ?></td>
                    <td><?php echo $book['plate']; ?></td>
                    <td><?php echo $book['price']; ?></td>
                    <td class="btn-cancel"><a href="">Cancel Tickets</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <!-- Custom Scripting -->
    <script src="./scripts/login.js">
    </script>

</body>

</html>