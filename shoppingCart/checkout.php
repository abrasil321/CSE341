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
            <form action="conf.php" method="POST">
                <div>
                    Enter First Name <input name="fName" required><br>
                    Enter Last Name <input name="lName" required><br>
                    <br>
                    Street Address <input name="address" style="width: 430px;" required><br>
                    City <input name="city" required><br>
                    State <input name="state" required><br>
                    Zip Code <input type="number" name="zip" required><br>
                </div>
                <button type="submit">Confirm Purchase</button>
            </form>
        </div>
        
        
    </body>
</html>