<header>
        <div class="logo-container">
            <a href="<?php echo BASE_URL . '/index.php';?>"><img src="./images/logo.png" alt="logo" id="logo" /></a>
        </div>
        <div class="login-container">
            <a href="
                <?php 
                if(isset($_SESSION['username'])){
                    echo BASE_URL . '/profile.php';
                } else {
                    echo BASE_URL . '/sighup.php';
                } ?>">
                <img src="./images/login.svg" alt="login" id="login">
            </a>
        </div>
</header>