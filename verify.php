<?php

    include ('./path.php');
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta-tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Verify | Jani Ho?</title>

    <!-- Custom styling -->
    <link rel="stylesheet" href="./styles/header-sh.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="./styles/verify.css?v=<?php echo time();?>">

</head>

<body>

    <!-- header & nav-bar -->
    <?php include(ROOT_PATH . '/includes/header-sh.php') ?>

    <!-- section: sighup-container -->
    <section class="sighup-section">
        <div class="sighup-box">
            <div class="sighup-logo">
                <img src="./images/login.svg" alt="">
            </div>

            <form action="./user.php" method="post" id="sighup-form">
                <div>
                    <label for="logincode">Login Code:</label><br/>
                    <input type="tel" name="logincode" id="input-code" pattern="[0-9]{6}" required />
                </div>
                <div>
                    <input type="submit" name="enter" id="btn-enter" value="Enter" />
                </div>
            </form>
        </div>
    </section>

    <!-- Custom Scripting -->
    <script src="">
    </script>

</body>

</html>