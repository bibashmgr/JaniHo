<?php

    session_start();    

    include ('./path.php');

    include(ROOT_PATH . '/controllers/resultpanel.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta-tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Search Result | Jani Ho?</title>

    <!-- Custom Styling -->
    <link rel="stylesheet" href="./styles/header.css?v=<?php echo time();?>" />
    <link rel="stylesheet" href="./styles/result.css?v=<?php echo time();?>" />

</head>

<body>

    <!-- header & nav-bar -->
    <?php include(ROOT_PATH . '/includes/header.php') ?>

    <!-- section: result-container -->
    <section class="result-container">
        <div class="result-box">
            <div class="table-heading">
                <h1>Search Results:</h1>
            </div>
            <table class="result-table">
                <tr>
                    <th>S.N</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Plate Number</th>
                    <th>Seats</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <?php foreach($results as $key => $result): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $result['location']; ?></td>
                        <td><?php echo $result['destination']; ?></td>
                        <td><?php echo $result['date']; ?></td>
                        <td><?php echo substr($result['time'], 0, strpos($result['time'], ".")); ?></td>
                        <td><?php echo $result['plate']; ?></td>
                        <td><?php echo $result['seats']; ?></td>
                        <td><?php echo $result['price']; ?></td>
                        <td class="btn-buy"><a href="./controllers/buy.php?id=<?php echo $result['id']; ?>">Buy Tickets</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
    
    <!-- Custom Scripting -->
    <script src="">
    </script>
    
</body>

</html>