<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Information</title>
    <link type="text/css" rel="stylesheet" href="style1.css"
</head>
<body>
    <header id="header">Petite Treats</header>
    <ul id="navbar">
        <li><a href="index.html">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="specials.html">Specials</a></li>
    </ul>
    <div id="content">
        <h1>Thank you for signing up to Petite Treats Weekly Newsletter!</h1>
        <p>We have added the following information to our files regarding your interests:</p>
        <p><strong>Name: </strong><?php echo $_POST["name"];?></p>
        <p><strong>Email: </strong><?php echo $_POST["email"];?></p>
        <p><strong>Birthday: </strong><?php echo $_POST["birthday"];?></p>
        <p><strong>Product Interests: </strong>
            <?php /* Source: https://www.geeksforgeeks.org/how-to-get-_post-from-multiple-check-boxes/  */
                $productinterests = (isset($_POST["productinterests"])) ? $_POST["productinterests"] : array();
                if (count($productinterests) > 0) {
                    foreach ($productinterests as $productinterest) {
                        echo "<p>".$productinterest."</p>";
                    }
                } else {
                    echo "None selected";
                }
            ?>
        </p>
    </div>
    <div id="footer">
        <ul id="navbar">
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="specials.html">Specials</a></li>
        </ul>
        <p>Contact: 0455 5555 555</p>
        <p>Catering: 0433 3333 333</p>
        <p>Address: 123 Prize Lane, Kirwan, QLD</p>
    </div>
</body>
</html>