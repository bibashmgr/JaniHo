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

    <title>Sigh up | Jani Ho?</title>

    <!-- Custom styling -->
    <link rel="stylesheet" href="./styles/header-sh.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="./styles/sighup.css?v=<?php echo time();?>">

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
                    <label for="phone">Phone Number:</label><br/>
                    <input type="tel" name="phone" id="input-phone" pattern="[0-9]{10}" required />
                </div>
                <div>
                    <input type="submit" name="sighup" id="btn-sighup" value="SIGH UP" />
                </div>
            </form>

            <div class="login-link">
                <a href="<?php echo BASE_URL . '/login.php';?>">Already have an account</a>
            </div>

            <div class="admin-link">
                <a href="<?php echo BASE_URL . '/admin.php';?>">Go to admin panel</a>
            </div>
        </div>
    </section>

    <!-- Custom Scripting -->
    <script src="">
    </script>

</body>

</html>