<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flex Shoes</title>
        <link href="flexShoes.css" rel="stylesheet">
        <script src="prove.js"></script>
    </head>

    <body>
        <header>
            Flex Shoes
        </header>
        <hr>
        <div>
            <div id="topMenu">
                <div id="menu1"><a href="flexShoes.html">Browse Items</a></div><br>
                <div id="menu2"><a href="cart2.php">Shopping Cart</a></div>
            </div>
            <div>Checkout</div>
            <?php
                
                $rdfile = fopen("newfile.txt", "r") or die("Unable to open file!");
                while(!feof($rdfile)) {
                echo fgets($rdfile) . "<br>";
                }
                fclose($rdfile);

                $firstn = htmlspecialchars($_POST['fName']);
                $lastn = htmlspecialchars($_POST['lName']);
                $add = htmlspecialchars($_POST['address']);
                $city = htmlspecialchars($_POST['city']);
                $state = htmlspecialchars($_POST['state']);
                $zip = htmlspecialchars($_POST['zip']);

                echo 'Name: '. $firstn.' '.$lastn.'<br>';
                echo 'Shipping Address: '.$add.', '.$city.', '.$state.' - '.$zip;
            ?>
            <br>
            <button type="button" onclick="theClick();">Confirm</button>
    </body>
</html>