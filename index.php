<?php

    session_start();    

    include ('./path.php');

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
    <link rel="stylesheet" href="./styles/header.css?v=<?php echo time();?>" />
    <link rel="stylesheet" href="./styles/index.css?v=<?php echo time();?>" />

</head>

<body>

    <!-- header & nav-bar -->
    <?php include(ROOT_PATH . '/includes/header.php') ?>

    <!-- section: search-container -->
    <section class="search-container">
        <form action="./result.php" id="form-search" method="POST">
            <table class="search-box">
                <tr>
                    <td class="input-from">
                        <label for="location">From:</label>
                        <select name="location" id="select-from" onchange="checkValueFirst()" required>
                            <option hidden></option>
                            <option value="Pokhara" id="opt-a-one">Pokhara</option>
                            <option value="Kathmandu" id="opt-a-two">Kathmandu</option>
                            <option value="Chitwan" id="opt-a-three">Chitwan</option>
                            <option value="Mustang" id="opt-a-four">Mustang</option>
                        </select>
                    </td>
                    <td class="input-to">
                        <label for="destination">To:</label>
                        <select name="destination" id="select-to" onchange="checkValueSecond()" required>
                            <option hidden></option>
                            <option value="Pokhara" id="opt-b-one">Pokhara</option>
                            <option value="Kathmandu" id="opt-b-two">Kathmandu</option>
                            <option value="Chitwan" id="opt-b-three">Chitwan</option>
                            <option value="Mustang" id="opt-b-four">Mustang</option>
                        </select>
                    </td>
                    <td class="input-date">
                        <label for="date">Date:</label>
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