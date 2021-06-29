<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> |Frizty House| </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- nav bar icons-->
   
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet"> <!-- font type import-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    
</head>

<body>
    <div class="header">
        <nav>
            <div class="menu_bar">
                <ul>
                    <div class="container">
                        <div class="navbar">
                            <div class="logo" class="float-left ml-0">
                                <img class="img1" src="assets/image/logo.jpg" width="150px" border-style="solid">
                            </div>
                        </div>
                    </div>
                </ul>
                <ul>
                    <li class="active"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <!class active for active the tab>
                    <li><a href="#"><i class="fa fa-product-hunt"></i> Product</a>
                        <div class="sub_menu_1">
                            <ul>
                                <li class="hover-me"><a href="#">Men's Wear</a><i class="fa fa-angle-right"></i>
                                    <div class="sub_menu_2">
                                        <ul>
                                            <li><a href="Product.php?cat=1&subcat=1&start=500&end=5000"> T-shirts </a><i class="fa fa-angle-right"></i></li>
                                            <li><a href="Product.php?cat=1&subcat=2&start=500&end=5000"> Shirts </a><i class="fa fa-angle-right"></i></li>
                                            <li><a href="Product.php?cat=1&subcat=3&start=500&end=5000"> Trousers </a><i class="fa fa-angle-right"></i></li>
                                            <li><a href="Product.php?cat=1&subcat=4&start=500&end=5000"> Shorts </a><i class="fa fa-angle-right"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me"><a href="#">Women's Wear</a><i class="fa fa-angle-right"></i>
                                    <div class="sub_menu_2">
                                        <ul>
                                            <li><a href="Product.php?cat=2&subcat=5"> Blouse </a><i class="fa fa-angle-right"></i></li>
                                            <li><a href="Product.php?cat=2&subcat=6"> Frocks </a><i class="fa fa-angle-right"></i></li>
                                            <li><a href="#"> Shirts </a><i class="fa fa-angle-right"></i></li>
                                            <li><a href="#"> Trousers </a><i class="fa fa-angle-right"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me"><a href="#"> Kids Wear</a><i class="fa fa-angle-right"></i>
                                    <div class="sub_menu_2">
                                        <ul>
                                            <li><a href="#"> Boy </a><i class="fa fa-angle-right"></i></li>
                                            <li><a href="#"> Girl </a><i class="fa fa-angle-right"></i></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="about.php"><i class="fa fa-user"></i> About</a></li>
                    <li><a href="contact.php"><i class="fa fa-phone"></i> Contact</a></li>
                    <li><a href="account.php"><i class="fa fa-clone"></i> Account</a></li>
                    <li><a href="cart.php"><i class="fa fa-cart-arrow-down"></i> Cart
                            <?php 

						if(isset($_SESSION['cart'])){
							$count=count($_SESSION['cart']);
							echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
						}else{
							echo "<span id=\"cart_count\" class=\"text-warning bg-success\">0</span>";
						}
					?>
                        </a></li>
                </ul>
            </div>
        </nav>
    </div>