<header>
        <div class="logo-container">
            <a href="<?php echo BASE_URL . '/index.php';?>"><img src="./images/logo.png" alt="logo" id="logo" /></a>
        </div>
        <nav class="nav-links-container">
            <ul class="nav-links">
                <li><a href="<?php echo BASE_URL . '/index.php';?>" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">About</a></li>
                <li><a href="" class="nav-link">Contact</a></li>
                <li><a href="" class="nav-link">Gallery</a></li>
                <li><a href="" class="nav-link">More</a></li>
            </ul>
        </nav>
        <div class="login-container">
            <a href="<?php 
                if(isset($_SESSION['username'])){
                    echo BASE_URL . '/profile.php';
                } else {
                    echo BASE_URL . '/sighup.php';
                } ?>">
                <img src="./images/login.svg" alt="login" id="login">
            </a>
        </div>
</header>