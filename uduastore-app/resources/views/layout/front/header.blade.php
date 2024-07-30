<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="{{ asset('new/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
</head>
<body>
    <div id="page" class="site page-home">
        <aside class="site-off desktop-hide">
            <div class="off-canvas">
                <div class="canvas-head flexitem">
                    <div class="logo"><a href="/"><span class="circle"></span>.Store</a></div>
                    <a href="#" class="t-close flexcenter"><i class="ri-close-line"></i></a>
                </div>
                <div class="departments"></div>
                <nav></nav>
                <div class="thetop-nav"></div>
            </div>
        </aside>
        <header>
            <div class="header-top mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <ul class="flexitem main-links">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Featured Products</a></li>
                                <li><a href="#">Wishlist</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <ul class="flexitem main-links">
                                <li><a href="/signup">Sign Up</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">USD <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                    <ul>
                                        <li class="current"><a href="#">USD</a></li>
                                        <li><a href="#">EURO</a></li>
                                        <li><a href="#">GBP</a></li>
                                        <li><a href="#">IDR</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">English <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                    <ul>
                                        <li class="current"><a href="#">English</a></li>
                                        <li><a href="#">German</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">Polish</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top -->
            <div class="header-nav">
                <div class="container">
                    <div class="wrapper flexitem">
                        <a href="#" class="trigger desktop-hide"><span class="i ri-menu-2-line"></span></a>
                        <div class="left flexitem">
                            <div class="logo"><a href="/"><span class="circle"></span>.Store</a></div>
                            <nav class="mobile-hide">
                                <ul class="flexitem second-links">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li class="has-child">
                                        <a href="page-category.html">Women
                                            <div class="icon-small"><i class="ri-arrow-down-s-line"></i></div>
                                        </a>
                                        <div class="mega">
                                            <div class="container">
                                                <div class="wrapper">
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4>Women's Clothing</h4>
                                                            <ul>
                                                                <li><a href="#">Dresses</a></li>
                                                                <li><a href="#">Tops & Tees</a></li>
                                                                <li><a href="#">Jackets & Coats</a></li>
                                                                <li><a href="#">Pants & Capris</a></li>
                                                                <li><a href="#">Sweaters</a></li>
                                                                <li><a href="#">Costumes</a></li>
                                                                <li><a href="#">Hoodies & Sweatshirts</a></li>
                                                                <li><a href="#">Pajamas & Robes</a></li>
                                                                <li><a href="#">Shorts</a></li>
                                                                <li><a href="#">Swimwear</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4>Jewelery</h4>
                                                            <ul>
                                                                <li><a href="#">Accessories</a></li>
                                                                <li><a href="#">Bags & Purses</a></li>
                                                                <li><a href="#">Necklaces</a></li>
                                                                <li><a href="#">Rings</a></li>
                                                                <li><a href="#">Earrings</a></li>
                                                                <li><a href="#">Bracelets</a></li>
                                                                <li><a href="#">Body Jewelery</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4>Beauty</h4>
                                                            <ul>
                                                                <li><a href="#">Bath Accessories</a></li>
                                                                <li><a href="#">Makeup & Cosmetics</a></li>
                                                                <li><a href="#">Skin Care</a></li>
                                                                <li><a href="#">Hair Care</a></li>
                                                                <li><a href="#">Essential Oils</a></li>
                                                                <li><a href="#">Fragrances</a></li>
                                                                <li><a href="#">Soaps & Bath Bombs</a></li>
                                                                <li><a href="#">Face Masks & Coverings</a></li>
                                                                <li><a href="#">Spa Kits & Gifts</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4>Top Brands</h4>
                                                            <ul class="women-brands">
                                                                <li><a href="#">Nike</a></li>
                                                                <li><a href="#">Louis Vuitton</a></li>
                                                                <li><a href="#">Hermes</a></li>
                                                                <li><a href="#">Gucci</a></li>
                                                                <li><a href="#">Zalando</a></li>
                                                                <li><a href="#">Tiffany & Co.</a></li>
                                                                <li><a href="#">Zara</a></li>
                                                                <li><a href="#">H&M</a></li>
                                                                <li><a href="#">Cartier</a></li>
                                                                <li><a href="#">Chanel</a></li>
                                                                <li><a href="#">Hurley</a></li>
                                                            </ul>
                                                            <a href="#" class="view-all">View all brands <i
                                                                    class="ri-arrow-right-line"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol products">
                                                        <div class="row">
                                                            <div class="media">
                                                                <div class="thumbnail object-cover">
                                                                    <a href="#">
                                                                        <img src="assets/products/apparel4.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="text-content">
                                                                <h4>Most wanted!</h4>
                                                                <a href="#" class="primary-button">Order Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">Men</a></li>
                                    <li>
                                        <a href="#">Sports
                                            <div class="fly-item"><span>New!</span></div>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="right">
                            <ul class="flexitem second-links">
                                <li class="mobile-hide"><a href="#">
                                        <div class="icon-large"><i class="ri-heart-line"></i></div>
                                        <div class="fly-item"><span class="item-number">0</span></div>
                                    </a></li>
                                <li><a href="#" class="iscart">

                                        <div class="icon-large">
                                            <i class="ri-shopping-cart-line"></i>
                                            <div class="fly-item"><span class="item-number">0</span></div>
                                        </div>

                                        <div class="icon-text">
                                            <div class="mini-text">Total</div>
                                            <div class="cart-total">$0.00</div>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-nav -->

            <div class="header-main mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <div class="dpt-cat">
                                <div class="dpt-head">
                                    <div class="main-text">All Departments</div>
                                    <div class="mini-text mobile-hide">Total 1059 Products</div>
                                    <a href="#" class="dpt-trigger mobile-hide">
                                        <i class="ri-menu-3-line ri-xl"></i>
                                    </a>
                                </div>
                                <div class="dpt-menu">
                                    <ul class="second-links">
                                        <li class="has-child beauty">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-bear-smile-line"></i></div>
                                                Beauty
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">Makeup</a></li>
                                                <li><a href="#">Skin Care</a></li>
                                                <li><a href="#">Hair Care</a></li>
                                                <li><a href="#">Fragrance</a></li>
                                                <li><a href="#">Foot & Hand Care</a></li>
                                                <li><a href="#">Tools & Accessories</a></li>
                                                <li><a href="#">Shave & Hair Removal</a></li>
                                                <li><a href="#">Personal Care</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child electronic">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-bluetooth-connect-line"></i></div>
                                                Electronic
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">Camera</a></li>
                                                <li><a href="#">Cell Phone</a></li>
                                                <li><a href="#">Computers</a></li>
                                                <li><a href="#">GPS & Navigation</a></li>
                                                <li><a href="#">Headphones</a></li>
                                                <li><a href="#">Home Audio</a></li>
                                                <li><a href="#">Television</a></li>
                                                <li><a href="#">Video Projectors</a></li>
                                                <li><a href="#">Wearable Technology</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child fashion">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-t-shirt-air-line"></i></div>
                                                Women's Fashion
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Jewelry</a></li>
                                                <li><a href="#">Watches</a></li>
                                                <li><a href="#">Handbags</a></li>
                                                <li><a href="#">Accessories</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child fashion">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-shirt-line"></i></div>
                                                Men's Fashion
                                            </a>
                                        </li>
                                        <li class="has-child fashion">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-user-5-line"></i></div>
                                                Girl's Fashion
                                            </a>
                                        </li>
                                        <li class="has-child fashion">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-user-6-line"></i></div>
                                                Boy's Fashion
                                            </a>
                                        </li>
                                        <li class="has-child fashion">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-heart-pulse-line"></i></div>
                                                Health & Household
                                            </a>
                                        </li>

                                        <li class="has-child homekit">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-home-8-line"></i></div>
                                                Home & Kitchen
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Kitchen & Dining</a></h4>
                                                        <ul>
                                                            <li><a href="#">Kitchen</a></li>
                                                            <li><a href="#">Dining Room</a></li>
                                                            <li><a href="#">Pantry</a></li>
                                                            <li><a href="#">Great Room</a></li>
                                                            <li><a href="#">Breakfast Nook</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Living</a></h4>
                                                        <ul>
                                                            <li><a href="#">Living Room</a></li>
                                                            <li><a href="#">Family Room</a></li>
                                                            <li><a href="#">Sunroom</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Bed & Bath</a></h4>
                                                        <ul>
                                                            <li><a href="#">Bathroom</a></li>
                                                            <li><a href="#">Powder Room</a></li>
                                                            <li><a href="#">Bedroom</a></li>
                                                            <li><a href="#">Storage & Closet </a></li>
                                                            <li><a href="#">Baby & Kids</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Utility</a></h4>
                                                        <ul>
                                                            <li><a href="#">Laundry</a></li>
                                                            <li><a href="#">Garage</a></li>
                                                            <li><a href="#">Mudroom</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Outdoor</a></h4>
                                                        <ul>
                                                            <li><a href="#">Landscape</a></li>
                                                            <li><a href="#">Patio</a></li>
                                                            <li><a href="#">Deck</a></li>
                                                            <li><a href="#">Pool</a></li>
                                                            <li><a href="#">Backyard</a></li>
                                                            <li><a href="#">Porch</a></li>
                                                            <li><a href="#">Exterior</a></li>
                                                            <li><a href="#">Outdoor Kitchen</a></li>
                                                            <li><a href="#">Front Yard</a></li>
                                                            <li><a href="#">Driveway</a></li>
                                                            <li><a href="#">Poolhouse</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                        </li>
   
                                        <li class="has-child fashion">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-android-line"></i></div>
                                                Pet Supplies
                                            </a>
                                        </li>

                                        <li class="has-child fashion">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-basketball-line"></i></div>
                                                Sports
                                            </a>
                                        </li>
                                        <li class="has-child fashion">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-shield-star-line"></i></div>
                                                Best Seller
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="search-box">
                                <form action="" class="search">
                                    <span class="icon-large"><i class="ri-search-line"></i></span>
                                    <input type="search" placeholder="Search for products">
                                    <button type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-main -->

        </header>