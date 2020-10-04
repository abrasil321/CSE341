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
                <div id="menu2"><a href="">Shopping Cart</a></div>
            </div>
            <div>Shopping Cart</div>
            <div class="flexContainer2">
                <form action="checkout.php" method="POST">
            <?php
                $rdfile = fopen("newfile.txt", "r") or die("Unable to open file!");
                while(!feof($rdfile)) {
                echo fgets($rdfile) . "<br>";
                }
                fclose($rdfile);
            ?></div>
            <button type="submit">Checkout</button>
        </form>
        </div>
    </body>
</html>