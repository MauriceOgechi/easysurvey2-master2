
<?php
$servername= "localhost";
$username =$_POST['username'];
$password = $_POST['password'];

// Create connection
$con = new mysqli("eu-cdbr-azure-west-d.cloudapp.net","bb93115d4dccec","fda3d5f1", "easysurvey");

// Check connection
if ($con->connect_error) {
    die("Connection failed: ". $con->connect_error);
}
echo "Connected successfully";

?>

<!DOCTYPE html>
<!--[if IE 9]>
<html class="lt-ie10" lang="en" >
<![endif]-->
<html class="no-js" lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>easysurvey Login</title>

    <!-- normalize.css and modernizr.js help with browser compatibility -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/foundation.css">
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<nav class="top-bar" data-topbar role="navigation">

    <!-- Logo -->
    <ul class="title-area">
        <li class="name">
            <h1><a href="#">Easy Survey</a></h1>
        </li>
        <li class="toggle-topbar menu-icon">
            <a href="#"><span></span></a>
        </li>
    </ul>

    <!-- Buttons -->
    <section class="top-bar-section">

        <!-- Left buttons -->
        <ul class="left">
            <li><a href="index.php">Home</a></li>
            <li><a href="About%20us.php">About us</a></li>
            <li><a href="Features.php">Features</a></li>
            <li><a href="Examples.php">Examples Survey</a></li>
        </ul>


        <!-- Right buttons -->
        <ul class="right">

            <li><a href="Sign%20up.php">Sign up</a></li>
        </ul>

    </section>



</nav>


<h1>

    Login into your account

</h1>

<div id="formDiv">

    <form method="post" action="welcome.php">

        <label for="username">Enter your username:</label>
        <input type="text" id="username" name="username"  />
        <span></span>

        <label for="password" >Enter your password:</label>
        <input type="password" id="password" name="password"/>
        <span></span>

        <input type="submit" name="submit">

    </form>
</div>
<span></span>
<div class="right">

    <div class="sign-up-message">
        <p>Don't have an account? </p>
        <a href="Sign%20up.php">Sign Up</a>
    </div>
</div>
</body>
<!-- responsive include before </body> tag -->
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</html>