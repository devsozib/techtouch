@extends('frontend.layouts.app')
@section('content')
   <!-- Bread-Crumb style two -->
    <!-- rts breadcrumba area start -->
    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">Shop</h1>
                        <div class="meta">
                            <a href="#" class="prev">Home /</a>
                            <a href="#" class="next">Shop</a>
                        </div>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->
    <!-- Bread-Crumb style two End -->


    <div class="rts-blog-grid-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="row align-items-center rs-vertical-middle shorting mb-50 md-mb-30">
                        <div class="col-lg-6 col-12">
                            <p class="woocommerce-result-count">Showing 1-9 of 12 results</p>
                        </div>
                        <div class="col-lg-6 col-12 sm-mt-20">
                            <select class="from-control">
                                <option>Default sorting</option>
                                <option>Sort by popularity</option>
                                <option>Sort by average rating</option>
                                <option>Sort by lates</option>
                                <option>Sort by price: low to high</option>
                                <option>Sort by price: high to low</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-24">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <!-- single blog two -->
                            <div class="blog-single-two-wrapper shop">
                                <div class="image-area">
                                    <a href="{{route('productDetails',1)}}" class="thumbnail">
                                        <img src="{{ asset('frontend') }}/assets/images/shop/shop-01.jpg" alt="blog-image">
                                    </a>
                                </div>
                                <div class="inner">
                                    <span class="pre-tag">
                                        $21.00
                                    </span>
                                    <a href="{{route('productDetails',1)}}">
                                        <h5 class="title"> Modernize Shovel</h5>
                                    </a>
                                    <a href="cart.html" class="btn-read-more-blog">Add To Cart <i class="fa-regular fa-cart-shopping"></i></a>
                                </div>
                            </div>
                            <!-- single blog two end -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <!-- single blog two -->
                            <div class="blog-single-two-wrapper shop">
                                <div class="image-area">
                                    <a href="{{route('productDetails',1)}}" class="thumbnail">
                                        <img src="{{ asset('frontend') }}/assets/images/shop/shop-02.jpg" alt="blog-image">
                                    </a>
                                </div>
                                <div class="inner">
                                    <span class="pre-tag">
                                        $25.00
                                    </span>
                                    <a href="{{route('productDetails',1)}}">
                                        <h5 class="title">Framming Hammer & Axe</h5>
                                    </a>
                                    <a href="cart.html" class="btn-read-more-blog">Add To Cart <i class="fa-regular fa-cart-shopping"></i></a>
                                </div>
                            </div>
                            <!-- single blog two end -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <!-- single blog two -->
                            <div class="blog-single-two-wrapper shop">
                                <div class="image-area">
                                    <a href="{{route('productDetails',1)}}" class="thumbnail">
                                        <img src="{{ asset('frontend') }}/assets/images/shop/shop-03.jpg" alt="blog-image">
                                    </a>
                                </div>
                                <div class="inner">
                                    <span class="pre-tag">
                                        $29.00
                                    </span>
                                    <a href="{{route('productDetails',1)}}">
                                        <h5 class="title"> Safety Helmet</h5>
                                    </a>
                                    <a href="cart.html" class="btn-read-more-blog">Add To Cart <i class="fa-regular fa-cart-shopping"></i></a>
                                </div>
                            </div>
                            <!-- single blog two end -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <!-- single blog two -->
                            <div class="blog-single-two-wrapper shop">
                                <div class="image-area">
                                    <a href="{{route('productDetails',1)}}" class="thumbnail">
                                        <img src="{{ asset('frontend') }}/assets/images/shop/shop-04.jpg" alt="blog-image">
                                    </a>
                                </div>
                                <div class="inner">
                                    <span class="pre-tag">
                                        $40.00
                                    </span>
                                    <a href="{{route('productDetails',1)}}">
                                        <h5 class="title">Core Cutter Machine</h5>
                                    </a>
                                    <a href="cart.html" class="btn-read-more-blog">Add To Cart <i class="fa-regular fa-cart-shopping"></i></a>
                                </div>
                            </div>
                            <!-- single blog two end -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <!-- single blog two -->
                            <div class="blog-single-two-wrapper shop">
                                <div class="image-area">
                                    <a href="{{route('productDetails',1)}}" class="thumbnail">
                                        <img src="{{ asset('frontend') }}/assets/images/shop/shop-05.jpg" alt="blog-image">
                                    </a>
                                </div>
                                <div class="inner">
                                    <span class="pre-tag">
                                        $27.00
                                    </span>
                                    <a href="{{route('productDetails',1)}}">
                                        <h5 class="title">Trowel</h5>
                                    </a>
                                    <a href="cart.html" class="btn-read-more-blog">Add To Cart <i class="fa-regular fa-cart-shopping"></i></a>
                                </div>
                            </div>
                            <!-- single blog two end -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <!-- single blog two -->
                            <div class="blog-single-two-wrapper shop">
                                <div class="image-area">
                                    <a href="{{route('productDetails',1)}}" class="thumbnail">
                                        <img src="{{ asset('frontend') }}/assets/images/shop/shop-06.jpg" alt="blog-image">
                                    </a>
                                </div>
                                <div class="inner">
                                    <span class="pre-tag">
                                        $9.00
                                    </span>
                                    <a href="{{route('productDetails',1)}}">
                                        <h5 class="title">Sledge Hammer</h5>
                                    </a>
                                    <a href="cart.html" class="btn-read-more-blog">Add To Cart <i class="fa-regular fa-cart-shopping"></i></a>
                                </div>
                            </div>
                            <!-- single blog two end -->
                        </div>
                    </div>
                </div>                
            </div>
            <div class="row mt--30">
                <div class="col-lg-12">
                    <div class="rts-elevate-pagination">
                        <ul>
                            <li><button class="active">01</button></li>
                            <li><button>02</button></li>
                            <li><button>03</button></li>
                            <li><button>04</button></li>
                            <li><button><i class="fa-solid fa-chevrons-right"></i></button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
@endsection