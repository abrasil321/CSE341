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
                error_reporting(0);
                for ($fnum = 1; $fnum < 5; $fnum++){
                    for ($snum = 1; $snum < 5; $snum++){
                        $id = "ckbx".$fnum.$snum;
                        $kid = $_POST[$id];
                        if ($kid == "checked"){
                            if ($id == "ckbx11"){
                                echo 'My Shoes11<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes11<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }

                            if ($id == "ckbx12"){
                                echo 'My Shoes12<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes12<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx13"){
                                echo 'My Shoes13<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes13<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx14"){
                                echo 'My Shoes14<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes14<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx21"){
                                echo 'My Shoes21<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes21<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx22"){
                                echo 'My Shoes22<br>Price<br>';


                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes22<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx23"){
                                echo 'My Shoes23<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes23<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx24"){
                                echo 'My Shoes24<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes24<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx31"){
                                echo 'My Shoes31<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes31<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx32"){
                                echo 'My Shoes32<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes32<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx33"){
                                echo 'My Shoes33<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes33<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx34"){
                                echo 'My Shoes34<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes34<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx41"){
                                echo 'My Shoes41<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes41<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx42"){
                                echo 'My Shoes42<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes42<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx43"){
                                echo 'My Shoes43<br>Price<br>';


                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes43<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                            if ($id == "ckbx44"){
                                echo 'My Shoes44<br>Price<br>';

                                $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                $txt = "My Shoes44<br>Price<br>\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                            }
                            
                        }
                    }
                }
            ?></div>
            <button type="submit">Checkout</button>
        </form>
        </div>
    </body>
</html>