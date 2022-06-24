<?php 
    session_start();
    include('config/db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MobStore</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar" style="position: sticky;">
                <div class="logo">
                    <img src="img/logo.png" alt="" height="90px" width="130px" style="border-radius: 90px;">
                </div>
                <nav>
                    <ul>
                        <li> <a href="/">Home</a></li>
                        <li> <a href="about.html">About</a></li>
                        <li> <a href="products.html">Products</a></li>
                        <li> <a href="contact.html">Contact</a></li>

                    </ul>
                   
                </nav>
                <a href="#cart"><img src="img/cart2.jpg" alt="" height="33px" width="34px"> My Cart</a>

            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Digital World <br>with our mobiles</h1>
                    <p>Hot Deals Available Now</p>
                    <a href="cart.html" class="btn">Explore More &#10132</a>
                </div>
                <div class="col-2">
                    <img src="img/header.jpg" alt="">
                </div>
            </div>
            
        </div>
    </div>
   
    <!-- onsale section  -->
    <!-- <div class="categories">
        <div class="small-container">
            <h2 class="titlehotselling">On Sale</h2>
            <div class="row">
                <div class="col-3">
                    <img src="img/m5.webp" alt="">
                    <h4>Apple Iphone 6E</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>RS: 32000/-</p>
                </div>
                <div class="col-3">
                    <img src="img/m2.webp" alt="">
                    <h4>OnePlus 9r</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <p>RS: 56000/-</p>
                </div>
                <div class="col-3">
                    <img src="img/m3.webp" alt="">
                    <h4>Realme Narzo 30</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>RS: 20000/-</p>
                </div>
                <div class="col-3"></div>
            </div>
        </div>

    </div> -->

    <!-- featured products -->
    <div class="small-container">
        <h2 class="titlehotselling">Hot Selling Products</h2>
        <div class="row">
            <div class="col-4">
                <div class="shop-item">
                    <span class="shop-item-title">Realme Narzo</span>
                    <img class="shop-item-image" src="img/m3.webp">
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="shop-item">
                    <span class="shop-item-title">Oneplus 8</span>
                    <img class="shop-item-image" src="img/m2.webp">
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$10.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="shop-item">
                    <span class="shop-item-title">Samsung m12</span>
                    <img class="shop-item-image" src="img/m1.webp">
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$25.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

            </div>

            <div class="col-4">
                <div class="shop-item">
                    <span class="shop-item-title">Apple Iphone</span>
                    <img class="shop-item-image" src="img/m4.webp">
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$30.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

            </div>
        </div>

        <h2 class="titlehotselling">Newly Launced</h2>
        <div class="row">
            <div class="col-4">
                <div class="shop-item">
                    <span class="shop-item-title">Samsung F12</span>
                    <img class="shop-item-image" src="img/m6.webp">
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$5.25</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

            </div>

            <div class="col-4">
                <div class="shop-item">
                    <span class="shop-item-title">Redmi Note 8 pro</span>
                    <img class="shop-item-image" src="img/m7.webp">
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$7.29</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="shop-item">
                    <span class="shop-item-title">Redmi Note 11T 5G</span>
                    <img class="shop-item-image" src="img/m8.webp">
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$10.58</span>
                        <button class="btn btn-primary shop-item-button"  type="button">ADD TO CART</button>
                    </div>
                </div>

            </div>

            <div class="col-4">
                <div class="shop-item">
                    <span class="shop-item-title">Redmo note 10s</span>
                    <img class="shop-item-image" src="img/m9.webp">
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="shop-item">
                    <span class="shop-item-title">Redmi 11 </span>
                    <img class="shop-item-image" src="img/m10.webp">
                    <div class="rating">
                        <span>ratings</span>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="shop-item-details">
                        <span class="shop-item-price"> $9.25</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="shop-item">
                    <span class="shop-item-title">Redmi 11i</span>
                    <img class="shop-item-image" src="img/m11.webp">
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
    <hr>
    <div class="exclusive">
        <div class="small-container">
            <h2 class="titlehotselling">Exclusive In Our Store</h2>
            <div class="row">
                <div class="col-2">
                    <img src="img/m12.webp" alt="">
                </div>
                <div class="col-2">
                    <p>Now Available In Our Store </p>
                    <h1>Redmi Note 7S </h1>
                    <small>4 GB RAM | 64 GB ROM | Expandable Upto 256 GB
                        16.0 cm (6.3 inch) Full HD+ Display
                        48MP + 5MP | 13MP Front Camera
                        4000 mAh Battery
                        Qualcomm Snapdragon 660 AIE Processor
                        Splash Proof - Protected by P2i
                        Quick Charge 4.0 Support</small>
                    <br>
                    <a href="" class="btn">Buy Now &#10132</a>
                </div>
            </div>
        </div>
    </div>

    <!-- another section  -->
    <div class="brands">
        <div class="small-container">
            <h2 class="titlehotselling">Our Sponsors</h2>
            <div class="row">

                <div class="col-5">
                    <img src="img/s3.webp" alt="">

                </div>
                <div class="col-5">
                    <img src="img/s2.webp" alt="">

                </div>
                <div class="col-5">
                    <img src="img/s1.jfif" alt="">

                </div>
                <div class="col-5">
                    <img src="img/s4.webp" alt="">
                </div>
                <div class="col-5">
                    <img src="img/s5.jpg" alt="">

                </div>
                <div class="col-5">
                    <img src="img/s8.png" alt="">

                </div>
            </div>
        </div>
    </div>

    <section class="container content-section" id="cart">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <form action="purchase.php" method="post">
            <input type="hidden" id="phones" name="phones" value="">
            <input type="hidden" id="price" name="price" value="">
            <input type="hidden" id="quantity" name="quantity" value="">
            <!-- <input type="hidden" id="total" name="total" value=""> -->
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price" id="span-total">$0</span>
                <input type="hidden" id="total" name="total" value="">
            </div>
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="textbox" name="address" placeholder="Enter your Address" required>
            <input type="Number" name="phoneNumber" placeholder="Enter your Phone number" required>
            <button class="btn btn-primary btn-purchase" type="submit" id="purchase">PURCHASE</button>
        </form>
    </section>

    <!-- //\\footer section  -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-column-1">
                    <h3>Get Our App</h3>
                    <br>
                    <p>Available for both Android & IOS</p>
                    <br>
                    <img src="img/playapplelogo.jpg" alt="" width="120px" height="100px">
                </div>

                <div class="footer-column-2">
                    <img src="img/logoapp2.jpg" alt="" width="90px" height="100px">
                    <br>
                    <p>Our Mission: To Provide our customers with best price and service </p>
                </div>

                <div class="footer-column-3">
                    <h3>Links </h3>

                    <ul>
                        <li>Coupons</li>
                        <li>Services Outside Inside</li>
                        <li>Policies</li>
                    </ul>
                </div>

                <div class="footer-column-4">
                    <h3>Follow Us on </h3>

                    <ul>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Facebook</li>
                    </ul>
                </div>

            </div>
        </div>
        <hr>
        <p class="text-footer">
            Copyright &copy; 2022 www.A & A Mobiles.com- All Rights Reserved
        </p>
    </div>

    <script src="js/scart.js"></script>


</body>

</html>