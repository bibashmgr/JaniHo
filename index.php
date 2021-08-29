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

    <title>Home | Jani Ho?</title>

    <!-- Custom Styling -->
    <link rel="stylesheet" href="./styles/index.css?v=<?php echo time();?>" />

</head>

<body>

    <!-- header & nav-bar -->
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
            <a href="<?php echo BASE_URL . '/sighup.php';?>"><img src="./images/login.svg" alt="login" id="login"></a>
        </div>
    </header>

    <!-- section: search-container -->
    <section class="search-container">
        <form action="" id="form-search" method="POST">
            <table class="search-box">
                <tr>
                    <td class="input-from">
                        <label for="from">From:</label>
                        <select name="from" id="select-from" onchange="checkValueFirst()" required>
                            <option hidden></option>
                            <option value="Pokhara" id="opt-a-one">Pokhara</option>
                            <option value="Kathmandu" id="opt-a-two">Kathmandu</option>
                            <option value="Chitwan" id="opt-a-three">Chitwan</option>
                            <option value="Mustang" id="opt-a-four">Mustang</option>
                        </select>
                    </td>
                    <td class="input-to">
                        <label for="from">To:</label>
                        <select name="to" id="select-to" onchange="checkValueSecond()" required>
                            <option hidden></option>
                            <option value="Pokhara" id="opt-b-one">Pokhara</option>
                            <option value="Kathmandu" id="opt-b-two">Kathmandu</option>
                            <option value="Chitwan" id="opt-b-three">Chitwan</option>
                            <option value="Mustang" id="opt-b-four">Mustang</option>
                        </select>
                    </td>
                    <td class="input-date">
                        <label for="from">Date:</label>
                        <input type="date" name="date" id="type-date" required />
                    </td>
                </tr>
            </table>
            <div>
                <input type="submit" name="search" id="btn-search" value="SEARCH BUSES" />
            </div>
        </form>
    </section>

    <!-- linear-gradient-container -->
    <div class="gradient-container">
    </div>
    
    <!-- Custom Scripting -->
    <script src="./scripts/index.js">
    </script>
    
</body>

</html>