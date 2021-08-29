<?php 
    include './path.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta-tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fill in | Jani Ho?</title>

    <!-- Custom styling -->
    <link rel="stylesheet" href="./styles/user.css?v=<?php echo time();?>">

</head>

<body>

    <!-- header & nav-bar -->
    <header>
        <div class="logo-container">
            <a href="<?php echo BASE_URL . '/index.php';?>"><img src="./images/logo.png" alt="logo" id="logo" /></a>
        </div>
        <div class="login-container">
            <a href="<?php echo BASE_URL . '/sighup.php';?>"><img src="./images/login.svg" alt="login" id="login"></a>
        </div>
    </header>

    <!-- section: login-container -->
    <section class="login-section">
        <div class="login-box">
            <div class="login-logo">
                <img src="./images/login.svg" alt="">
            </div>

            <form action="" method="post" id="login-form">
                <div>
                    <label for="firstname">First Name:</label><br/>
                    <input type="text" name="firstname" id="input-firstname" required />
                </div>
                <div>
                    <label for="lastname">Last Name:</label><br/>
                    <input type="text" name="lastname" id="input-lastname" required />
                </div>
                <div>
                    <label for="username">User Name:</label><br/>
                    <input type="text" name="username" id="input-username" required />
                </div>
                <div>
                    <label for="password">Password:</label><br/>
                    <input type="password" name="password" id="input-password-one" required />
                </div>
                <div>
                    <label for="confirm-password">Confirm Password:</label><br/>
                    <input type="password" name="confirm-password" id="input-password-two" required />
                </div>
                <div>
                    <input type="submit" name="create-account" id="btn-create" value="Create Account" />
                </div>
            </form>
        </div>
    </section>

    <!-- Custom Scripting -->
    <script src="./scripts/login.js">
    </script>

</body>

</html>