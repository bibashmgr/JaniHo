<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jani Ho?</title>

    <!-- Custom Styling -->
    <link rel="stylesheet" href="./styles/index.css" />
</head>

<body>
    <header>
        <div class="logo-container">
            <a href="./index.php"><img src="./images/logo.png" alt="logo" id="logo" /></a>
        </div>
        <nav class="nav-links-container">
            <ul class="nav-links">
                <li><a href="./index.php" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">About</a></li>
                <li><a href="" class="nav-link">Contact</a></li>
                <li><a href="" class="nav-link">More</a></li>
            </ul>
        </nav>
        <div class="login-container">
            <a href="./login.php"><img src="./images/login.svg" alt="login" id="login"></a>
        </div>
    </header>

    <section class="search-container">
        <form action="" id="form-search">
            <table class="search-box">
                <tr>
                    <td class="input-from">
                        <label for="from">From:</label>
                        <select name="from" id="select-from" required>
                            <option hidden></option>
                            <option value="Pokhara">Pokhara</option>
                            <option value="Kathmandu">Kathmandu</option>
                            <option value="Chitwan">Chitwan</option>
                            <option value="Mustang">Mustang</option>
                        </select>
                    </td>
                    <td class="input-to">
                        <label for="from">To:</label>
                        <select name="to" id="select-to" required>
                            <option hidden></option>
                            <option value="Pokhara">Pokhara</option>
                            <option value="Kathmandu">Kathmandu</option>
                            <option value="Chitwan">Chitwan</option>
                            <option value="Mustang">Mustang</option>
                        </select>
                    </td>
                    <td class="input-date">
                        <label for="from">Date:</label>
                        <input type="date" name="date" id="type-date" required />
                    </td>
                </tr>
            </table>
            <div>
                <input type="submit" id="btn-search" value="SEARCH BUSES" />
            </div>
        </form>
    </section>

    <div class="gradient-container">
    </div>
    
    <script src="./scripts/index.js"></script>
</body>

</html>