@include('layout.front.header')



@yield('content')

<main>
            <div class="slider">
                <div class="container">
                    <div class="wrapper">
                        <div class="myslider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="assets/slider/slider0.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Shoes Fashion</h4>
                                            <h2><span>Come and Get it!</span><br><span>Brand New Shoes</span></h2>
                                            <a href="#" class="primary-button">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="assets/slider/slider1.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Quick Fashion</h4>
                                            <h2><span>Fit Your Wardrobe</span><br><span>With Luxury Items</span></h2>
                                            <a href="#" class="primary-button">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="assets/slider/slider2.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Quick Offer</h4>
                                            <h2><span>Wooden Minimal Sofa</span><br><span>Extra 50% off</span></h2>
                                            <a href="#" class="primary-button">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="assets/slider/slider3.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Best Deals</h4>
                                            <h2><span>Home Workout Accessories</span><br><span>Push The Limit</span></h2>
                                            <a href="#" class="primary-button">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider -->

            <div class="brands">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="item">
                            <a href="#">
                                <img src="assets/brands/zara.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="assets/brands/samsung.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="assets/brands/oppo.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="assets/brands/asus.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="assets/brands/hurley.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="assets/brands/dng.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Brands -->

            <div class="trending">
                <div class="container">
                    <div class="wrapper">
                        <div class="sectop flexitem">
                            <h2><span class="circle"></span><span>Trending Products</span></h2>
                        </div>
                        <div class="column">
                            <div class="flexwrap">
                                <div class="row products big">
                                    <div class="item">
                                        <div class="offer">
                                            <p>Offer ends at</p>
                                            <ul class="flexcenter" id="demo">
                                                <li id="days"></li>
                                                <li id="hours"></li>
                                                <li id="minutes"></li>
                                                <li id="seconds"></li>
                                            </ul>
                                        </div>
                                        <div class="media">
                                            <div class="image">
                                                <a href="page-offer.html">
                                                    <img src="assets/products/apparel4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>31%</span></div>
                                        </div>
                                        <div class="content">
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(2,548)</span>
                                            </div>
                                            <h3 class="main-links"><a href="#">Happy Sailed Womens Summer Boho Floral</a></h3>
                                            <div class="price">
                                                <span class="current">$129.99</span>
                                                <span class="normal mini-text">$189.98</span>
                                            </div>
                                            <div class="stock mini-text">
                                                <div class="qty">
                                                    <span>Stock: <strong class="qty-available">107</strong></span>
                                                    <span>Sold: <strong class="qty-sold">3,459</strong></span>
                                                </div>
                                                <div class="bar">
                                                    <div class="available"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row products mini">
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="#">
                                                    <img src="assets/products/apparel3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>32%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="#">Black Women's Coat Dress</a></h3>
                                            
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(2,548)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$129.99</span>
                                                <span class="normal mini-text">$189.98</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>2975 sold</p>
                                                <p>Free Shipping</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="#">
                                                    <img src="assets/products/apparel1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>25%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="#">Under Armour Men's Tech</a></h3>
                                            
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(1,955)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$56.50</span>
                                                <span class="normal mini-text">$75.50</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>2584 sold</p>
                                                <p>Free Shipping</p>
                                                <p class="stock-danger">Stock: 7 left!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="#">
                                                    <img src="assets/products/home1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>37%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="#">Vonanda Velvet Sofa Couch, Mid Century Modern Craftsmanship</a></h3>
                                            
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(1,559)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$469.99</span>
                                                <span class="normal mini-text">$755.99</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>2151 sold</p>
                                                <p>Free Shipping</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="#">
                                                    <img src="assets/products/electronic3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>20%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="#">Wireless Headphones Over Ear, Bluetooth Headphones with Microphone</a></h3>
                                            
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(1,411)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$99.98</span>
                                                <span class="normal mini-text">$125.98</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>1843 sold</p>
                                                <p>Free Shipping</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row products mini">
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="#">
                                                    <img src="assets/products/shoe1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>32%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="#">Men Slip On Shoes Casual with Arch Support Insoles</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(2,548)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$129.99</span>
                                                <span class="normal mini-text">$189.98</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>2975 sold</p>
                                                <p>Free Shipping</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="#">
                                                    <img src="assets/products/apparel2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>47%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="#">Womens Lightweight Something</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(994)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$37.50</span>
                                                <span class="normal mini-text">$45.50</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>1257 sold</p>
                                                <p>Free Shipping</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="#">
                                                    <img src="assets/products/home2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>44%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="#">Dimmable Ceiling Light Modern</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(543)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$279.99</span>
                                                <span class="normal mini-text">$499.99</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>995 sold</p>
                                                <p>Free Shipping</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="#">
                                                    <img src="assets/products/home3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>18%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="#">Modern Storage Cabinet with Doors or something</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(335)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$129.99</span>
                                                <span class="normal mini-text">$189.98</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>758 sold</p>
                                                <p>Free Shipping</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- trending -->

            <div class="features">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="sectop flexitem">
                                <h2><span class="circle"></span><span>Featured Products</span></h2>
                                <div class="second-links">
                                    <a href="#" class="view-all">View all<i class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
                            <div class="products main flexwrap">
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="#">
                                                <img src="assets/products/apparel1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>25%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(1,955)</span>
                                        </div>
                                        <h3><a href="#">Under Armour Men's Tech</a></h3>
                                        <div class="price">
                                            <span class="current">$56.50</span>
                                            <span class="normal mini-text">$75.50</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="#">
                                                <img src="assets/products/apparel2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>17%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(994)</span>
                                        </div>
                                        <h3><a href="#">Women's Lightweight Knit Hoodie Sweater Pullover</a></h3>
                                        <div class="price">
                                            <span class="current">$37.50</span>
                                            <span class="normal mini-text">$45.50</span>
                                        </div>
                                        <div class="footer">
                                            <ul class="mini-text">
                                                <li>Polyester, Cotton</li>
                                                <li>Pull On closure</li>
                                                <li>Fashion Personality</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="#">
                                                <img src="assets/products/apparel3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>31%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(3,459)</span>
                                        </div>
                                        <h3><a href="#">Happy Sailed Womens Summer Boho Floral</a></h3>
                                        <div class="price">
                                            <span class="current">$129.99</span>
                                            <span class="normal mini-text">$189.98</span>
                                        </div>
                                        <div class="footer">
                                            <ul class="mini-text">
                                                <li>65% Polyester, 35% Cotton</li>
                                                <li>Imported</li>
                                                <li>Machine Wash</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="#">
                                                <img src="assets/products/apparel4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>35%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(10)</span>
                                        </div>
                                        <h3><a href="#">Womens Summer Boho Floral</a></h3>
                                        <div class="price">
                                            <span class="current">$118.90</span>
                                            <span class="normal mini-text">$189.90</span>
                                        </div>
                                        <div class="footer">
                                            <ul class="mini-text">
                                                <li>Polyester, Cotton</li>
                                                <li>Pull On closure</li>
                                                <li>Fashion Personality</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="#">
                                                <img src="assets/products/shoe1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>32%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(2,551)</span>
                                        </div>
                                        <h3><a href="#">Men Slip On Shoes Casual with Arch Support Insoles</a></h3>
                                        <div class="price">
                                            <span class="current">$80.90</span>
                                            <span class="normal mini-text">$119.90</span>
                                        </div>
                                        <div class="footer">
                                            <ul class="mini-text">
                                                <li>Polyester, Cotton</li>
                                                <li>Pull On closure</li>
                                                <li>Fashion Personality</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="#">
                                                <img src="assets/products/shoe2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>30%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(1,237)</span>
                                        </div>
                                        <h3><a href="#">Skechers Women's Go Joy Walking Shoe Sneaker</a></h3>
                                        <div class="price">
                                            <span class="current">$45.95</span>
                                            <span class="normal mini-text">$64.95</span>
                                        </div>
                                        <div class="footer">
                                            <ul class="mini-text">
                                                <li>Polyester, Cotton</li>
                                                <li>Pull On closure</li>
                                                <li>Fashion Personality</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="#">
                                                <img src="assets/products/shoe3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>25%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(106)</span>
                                        </div>
                                        <h3><a href="#">Walking Shoe Sneaker Womens</a></h3>
                                        <div class="price">
                                            <span class="current">$139.99</span>
                                            <span class="normal mini-text">$189.98</span>
                                        </div>
                                        <div class="footer">
                                            <ul class="mini-text">
                                                <li>Polyester, Cotton</li>
                                                <li>Pull On closure</li>
                                                <li>Fashion Personality</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="#">
                                                <img src="assets/products/shoe4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>24%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(25)</span>
                                        </div>
                                        <h3><a href="#">Womens Summer Tosca Shoe</a></h3>
                                        <div class="price">
                                            <span class="current">$104.90</span>
                                            <span class="normal mini-text">$189.98</span>
                                        </div>
                                        <div class="footer">
                                            <ul class="mini-text">
                                                <li>Polyester, Cotton</li>
                                                <li>Pull On closure</li>
                                                <li>Fashion Personality</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- featured products -->

            <div class="banners">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="banner flexwrap">
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img src="assets/banner/banner1.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h3>Brutal Sale!</h3>
                                            <h4><span>Get the deal in here</span><br>Living Room Chair</h4>
                                            <a href="#" class="primary-button">Shop Now</a>
                                        </div>
                                        <a href="#" class="over-link"></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item get-gray">
                                        <div class="image">
                                            <img src="assets/banner/banner2.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h3>Brutal Sale!</h3>
                                            <h4><span>Discount everyday</span><br>Office Outfit</h4>
                                            <a href="#" class="primary-button">Shop Now</a>
                                        </div>
                                        <a href="#" class="over-link"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- banners -->

                            <div class="product-categories flexwrap">
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img src="assets/banner/procat1.jpg" alt="">
                                        </div>
                                        <div class="content mini-links">
                                            <h4>Beauty</h4>
                                            <ul class="flexcol">
                                                <li><a href="#">Makeup</a></li>
                                                <li><a href="#">Skin Care</a></li>
                                                <li><a href="#">Hair Care</a></li>
                                                <li><a href="#">Fragrance</a></li>
                                                <li><a href="#">Foot & Hand Care</a></li>
                                            </ul>
                                            <div class="second-links">
                                                <a href="#" class="view-all">View all<i class="ri-arrow-right-line"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <a href="#">
                                                <img src="assets/banner/procat2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content mini-links">
                                            <h4><a href="#">Gatdets</a></h4>
                                            <ul class="flexcol">
                                                <li><a href="#">Camera</a></li>
                                                <li><a href="#">Cell Phones</a></li>
                                                <li><a href="#">Computers</a></li>
                                                <li><a href="#">GPS & Navigation</a></li>
                                                <li><a href="#">Headphones</a></li>
                                            </ul>
                                            <div class="second-links">
                                                <a href="#" class="view-all">View all<i class="ri-arrow-right-line"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <a href="#">
                                                <img src="assets/banner/procat3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content mini-links">
                                            <h4><a href="#">Home Decor</a></h4>
                                            <ul class="flexcol">
                                                <li><a href="#">Kitchen</a></li>
                                                <li><a href="#">Dining Room</a></li>
                                                <li><a href="#">Pantry</a></li>
                                                <li><a href="#">Great Room</a></li>
                                                <li><a href="#">Breakfast Nook</a></li>
                                            </ul>
                                            <div class="second-links">
                                                <a href="#" class="view-all">View all<i class="ri-arrow-right-line"></i></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

@include('layout.front.footer')