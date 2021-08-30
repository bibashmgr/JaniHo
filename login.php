<?php

    session_start();

    include ('./path.php');
    
    include ('./controllers/loginpanel.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta-tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Jani Ho?</title>

    <!-- Custom styling -->
    <link rel="stylesheet" href="./styles/header-sh.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="./styles/login.css?v=<?php echo time();?>">

</head>

<body>

    <!-- header & nav-bar -->
    <?php include(ROOT_PATH . '/includes/header-sh.php') ?>

    <!-- section: login-container -->
    <section class="login-section">
        <div class="login-box">
            <div class="login-logo">
                <img src="./images/login.svg" alt="">
            </div>

            <form action="" method="post" id="login-form">
                <div>
                    <label for="username">User Name:</label><br/>
                    <input type="text" name="username" id="input-username" required />
                </div>
                <div>
                    <label for="password">Password:</label><br/>
                    <input type="password" name="password" id="input-password" required />
                </div>
                <div>
                    <input type="submit" name="login" id="btn-login" value="LOGIN" />
                </div>
            </form>

            <div class="sighup-link">
                <a href="<?php echo BASE_URL . '/sighup.php';?>">Create an account</a>
            </div>

            <div class="admin-link">
                <a href="<?php echo BASE_URL . '/admin.php';?>">Go to admin panel</a>
            </div>
        </div>
    </section>

    <!-- Custom Scripting -->
    <script src="./scripts/login.js">
    </script>

</body>

</html>