<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.head')
<body>

    <!-- header style two -->
    <!-- rts header three start -->
    @include('frontend.layouts.header')
    <!-- rts header three end -->
    <div id="side-bar" class="side-bar header-three">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="{{ asset('frontend') }}/assets/images/banner/04.jpg" alt="elevate">
            </div>
            <div class="inner-content">
                <h4 class="title">We Build Building and Great Constructive Homes.</h4>
                <p class="disc">
                    We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
                </p>
                <div class="footer">
                    <h4 class="title">Got a project in mind?</h4>
                    <a href="contact.html" class="rts-btn btn-seconday">Let's talk</a>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="#" class="main">Home</a>
                        <ul class="submenu">
                            <a href="#" class="tag">Multipage</a>
                            <li><a class="mobile-menu-link" href="index.html">Main Construction</a></li>
                            <li><a class="mobile-menu-link" href="index-two.html">Construction Home</a></li>
                            <li><a class="mobile-menu-link" href="index-three.html">Renovation Home</a></li>
                            <li><a class="mobile-menu-link" href="index-four.html">Construction Home</a></li>
                            <li><a class="mobile-menu-link" href="index-five.html">Construction Home</a></li>
                            <li><a class="mobile-menu-link" href="index-six.html">Renovation Home</a></li>
                            <li><a class="mobile-menu-link" href="index-seven.html">Engineering Home</a></li>
                            <li><a class="mobile-menu-link" href="index-eight.html">Handyman Home</a></li>
                            <li><a class="mobile-menu-link" href="index-nine.html">Industrial Home</a></li>
                            <li><a class="mobile-menu-link" href="index-ten.html">Solar Home</a></li>
                            <li><a class="mobile-menu-link" href="index-Eleven-2.html">Intorior Design</a></li>
                        </ul>
                        <ul class="submenu">
                            <a href="#" class="tag">Onepage</a>
                            <li><a class="mobile-menu-link" href="onepage-one.html">Main Construction Onepage</a></li>
                            <li><a class="mobile-menu-link" href="onepage-two.html">Construction Onepage</a></li>
                            <li><a class="mobile-menu-link" href="onepage-three.html">Renovation Onepage</a></li>
                            <li><a class="mobile-menu-link" href="onepage-four.html">Construction Onepage</a></li>
                            <li><a class="mobile-menu-link" href="onepage-five.html">Construction Onepage</a></li>
                            <li><a class="mobile-menu-link" href="onepage-six.html">Renovation Onepage</a></li>
                            <li><a class="mobile-menu-link" href="onepage-eight.html">Handyman Onepage</a></li>
                            <li><a class="mobile-menu-link" href="onepage-seven.html">Engineering Onepage</a></li>
                            <li><a class="mobile-menu-link" href="onepage-nine.html">Industrial Onepage</a></li>
                            <li><a class="mobile-menu-link" href="onepage-ten.html">Solar Home</a></li>
                            <li><a class="mobile-menu-link" href="onepage-eleven.html">Intorior Design</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Pages</a>
                        <ul class="submenu">
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Who We Are</a>
                                <ul class="submenu-third-lvl">
                                    <li><a href="about.html"></a>About Us</li>
                                    <li><a href="vision.html"></a>Vision</li>
                                    <li><a href="careers.html"></a>Careers</li>
                                    <li><a href="safety.html"></a>Safety</li>
                                    <li><a href="sustainability.html"></a>Sustainability</li>
                                </ul>
                            </li>
                            <li><a class="mobile-menu-link" href="company-story.html">Our History</a></li>
                            <li><a class="mobile-menu-link" href="team.html">Team</a></li>
                            <li><a class="mobile-menu-link" href="team-details.html">Team Details</a></li>
                            <li><a class="mobile-menu-link" href="appoinment.html">Appoinment</a></li>
                            <li><a class="mobile-menu-link" href="404.html">Error 404</a></li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Shop</a>
                                <ul class="submenu-third-lvl">
                                    <li><a href="shop.html"></a>Shop</li>
                                    <li><a href="single-product.html"></a>Single Product</li>
                                    <li><a href="cart.html"></a>Cart</li>
                                    <li><a href="checkout.html"></a>Checkout</li>
                                    <li><a href="account.html"></a>Account</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Services</a>
                        <ul class="submenu">
                            <li><a class="mobile-menu-link" href="service.html">Service</a></li>
                            <li><a class="mobile-menu-link" href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Portfolio</a>
                        <ul class="submenu">
                            <li><a class="mobile-menu-link" href="project.html">Project</a></li>
                            <li><a class="mobile-menu-link" href="project-details.html">Project Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Blog</a>
                        <ul class="submenu">
                            <li><a class="mobile-menu-link" href="blog-list.html">Blog List</a></li>
                            <li><a class="mobile-menu-link" href="blog-grid.html">Blog Grid</a></li>
                            <li><a class="mobile-menu-link" href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contactus.html" class="main">Contact Us</a>
                    </li>
                </ul>
            </nav>
      
            <div class="social-wrapper-one">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
      </div>
      <!-- header style two End -->
    @yield('content')

    <!-- footer style three start -->
    @include('frontend.layouts.footer')
    <!-- footer style three end -->


    <!-- header style two -->
    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- progress area end -->

    <!-- cart area start -->
    <div class="cart-bar">
        <div class="cart-header">
            <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
            <div class="close-cart"><i class="fal fa-times"></i></div>
        </div>
        <div class="product-area">
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/slider/image1.jpg" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Construct Map</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                            <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">3 ×</span>
                            <span class="product-price">$198.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="3">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/slider/image2.jpg" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name"> Bridge product</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                            <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">2 ×</span>
                            <span class="product-price">$88.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item last-child">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/slider/image5.jpg" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Labour helmet</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                            <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">1 ×</span>
                            <span class="product-price">$289.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bottom-area">
            <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
            FOR FREE SHIPPING</span>
            <span class="total-price">TOTAL: <span class="price">$556</span></span>
            <a href="checkout.html" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
            <a href="cart.html" class="view-btn cart-btn">VIEW CART</a>
        </div>
    </div>
    <!-- cart area edn -->

    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>


    <div id="anywhere-home" class=""></div>

    <!-- pre loader start -->
    <div id="elevate-load">
        <div class="loader-wrapper">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- pre loader end -->
    @include('frontend.layouts.script')

</body>


</html>