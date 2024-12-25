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
                    <li>
                        <a href="{{ route('index') }}" class="main">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('index') }}" class="main">Shop</a>
                    </li>
                    <li>
                        <a href="{{ route('index') }}" class="main">About Us</a>
                    </li>
                    @php
                    $elevatorCat = getElevatorCat();
                    @endphp
                    @if($elevatorCat)
                    <li class="has-droupdown">
                        <a href="#" class="main">{{ $elevatorCat['category']->name }}</a>
                        <ul class="submenu">
                            @foreach($elevatorCat['subcategories'] as $subcategory)
                                <li class="third-lvl">
                                    <a class="main" href="{{ route('categoryWiseProduct', $subcategory->slug) }}">{{ $subcategory->name }}</a>                                   
                                </li>
                          @endforeach
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('projects') }}" class="main">Projects</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="main">Contact</a>
                    </li>
                </ul>
            </nav>
      
            <div class="social-wrapper-one">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/TTAENGR/?locale=zh_CN">
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
            <h3 class="cart-heading">MY CART ({{cartCount()}} ITEMS)</h3>
            <div class="close-cart"><i class="fal fa-times"></i></div>
        </div>
        <div class="product-area">

            @foreach (cartItems() as $key => $item)
                <div id="item{{$key}}" class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="{{asset('frontend/product_images/'.$item['product']->image)}}" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">{{$item['product']->name}}</span>
                            <div class="item-wrapper d-none">
                                <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">{{$item['qty']}} ×</span>
                                <span class="product-price">{{$item['product']->price}}৳</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button onclick="qtyMinus({{$key}})" class=""><i class="fal fa-minus minusm"></i></button>
                            <input id="qty{{$key}}" onchange="qtyUpdate({{$key}})" type="text" class="input" value="{{$item['qty']}}">
                            <button onclick="qtyPlus({{$key}})" class=""><i class="fal fa-plus plusp"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="javascript:void()" onclick="removeItem({{$key}})" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="product-item last-child d-none">
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
            {{-- <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
            FOR FREE SHIPPING</span> --}}
            <span class="total-price">TOTAL: <span class="price" id="cartTotal">{{getTotalcartValue()}}৳</span></span>
            <a href="{{route('checkout')}}" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
            <a href="{{route('cart')}}" class="view-btn cart-btn d-none">VIEW CART</a>
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

    <script>
        function qtyMinus(id){
            var val = document.getElementById('qty'+id).value;
            document.getElementById('qty'+id).value = parseInt(val)-1;
            qtyUpdate(id)
        }
        function qtyUpdate(id){
            var val = document.getElementById('qty'+id).value;
            if(val<1)val = 1;
            document.getElementById('qty'+id).value = val;
            var token =  '{{ csrf_token() }}';
            $.post('{{route('update_cart_qty')}}', {_token:token,id:id,qty:val}, function(data){
                document.getElementById('cartTotal').innerHTML = `${data}৳`;
                console.log(data);
            })
        }
        function qtyPlus(id){
            var val = document.getElementById('qty'+id).value;
            document.getElementById('qty'+id).value = parseInt(val)+1;
            qtyUpdate(id)
        }

        function removeItem(id){
            var token =  '{{ csrf_token() }}';
            $.post('{{route('remove_cart_item')}}', {_token:token,id:id}, function(data){
                document.getElementById('cartTotal').innerHTML = `${data}৳`;
                document.getElementById('item'+id).remove();
            })
        }
    </script>

</body>


</html>