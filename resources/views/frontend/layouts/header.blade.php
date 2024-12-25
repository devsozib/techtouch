@if (request()->path() == '/')
    <!-- header area start -->
<header class="heder-two header-four header--sticky">
    <div class="header-two-container">
        <div class="row">
            <div class="col-12">
                <div class="header-main-wrapper">
                    <div class="logo-area">
                        <a href="{{ route('index') }}" class="logo">
                            <img width="100px"  src="{{ asset('frontend') }}/assets/images/logo/techtouchlogo.png" alt="image-logo">
                        </a>
                    </div>
                    <!-- header right start -->
                    <div class="rts-header-right">
                        <div class="menu-area" id="menu-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                <rect width="18" height="2" fill="#0C0A0A" />
                                <rect y="7" width="18" height="2" fill="#0C0A0A" />
                                <rect y="14" width="18" height="2" fill="#0C0A0A" />
                            </svg>
                        </div>
                        <!-- top header -->
                        {{-- <div class="top">
                            <div class="start-top">
                                <div class="icon"><i class="fa-sharp fa-solid fa-bolt"></i></div>
                                <p>We will go through all the stages of construction</p>
                            </div>
                            <div class="end-top">
                                <div class="single-info">
                                    <div class="icon"><i class="fa-thin fa-location-dot"></i> </div>
                                    <p>203 Madison Ave, New York, USA</p>
                                </div>
                                <div class="single-info">
                                    <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                                    <a href="mailto:name@email.com">info@example.com</a>
                                </div>
                            </div>
                        </div> --}}
                        <!-- top header end -->
                        <!-- bottom header start -->
                        <div class="bottom">
                            <!-- header style two -->
                            <!-- nav area start -->
                            <div class="main-nav-desk nav-area">
                                <nav>
                                    <ul>
                                        <li class="menu-item">
                                            <a class="nav-item" href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="nav-item" href="{{ route('shop') }}">Shop</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="nav-item" style="white-space: nowrap;" href="{{ route('about') }}">About Us</a>
                                        </li>
                                        {{-- <li class="menu-item">
                                            <a class="nav-item" href="{{ route('services') }}">Services</a>
                                        </li> --}}
                                        @php
                                        $elevatorCat = getElevatorCat();
                                        @endphp
                                        
                                        @if($elevatorCat)
                                            <li class="has-droupdown pages">
                                                <a class="nav-link" href="#">{{ $elevatorCat['category']->name }}</a>
                                                <ul class="submenu inner-page">
                                                    @foreach($elevatorCat['subcategories'] as $subcategory)
                                                        <li><a href="{{ route('categoryWiseProduct', $subcategory->slug) }}">{{ $subcategory->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                        <li class="has-droupdown pages">
                                            <a class="nav-link" href="#">Portfolio</a>
                                            <ul class="submenu inner-page">                                              
                                                <li><a href="{{ route('projects') }}">Projects</a></li>                                              
                                                                                         
                                            </ul>
                                        </li>
                                      
                                        <li class="menu-item">
                                            <a class="nav-item" href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- nav-area end -->
                            <!-- header style two End -->
                            <div class="right-area">
                                <div class="icon-area">
                                    {{-- <div class="search" id="search">
                                        <i class="fa-regular fa-magnifying-glass"></i>
                                    </div> --}}
                                    @if(auth()->user())                                   
                                        <div class="">
                                    
                                            <a href="{{ route('customerDashboard') }}" style="color: #fff" class="rts-btn btn-seconday btn-transparent">My Account</a>                                           

                                        </div>
                                    @else
                                        <div class="">
                                            <a href="{{route('customerLoginPage')}}" style="color: #fff" class="rts-btn btn-seconday btn-transparent">Login</a>
                                        </div>
                                        {{-- <div class="">
                                            <a href="{{route('customersignUpPage')}}" style="color: #fff" class="rts-btn btn-seconday btn-transparent">Registratin</a>
                                        </div> --}}
                                    @endif
                                    <div class="cart cart-icon">
                                        <i class="fa-regular fa-cart-shopping"></i>
                                        <span class="cart-count" id="cart-count">{{cartCount()}}</span> <!-- Cart count displayed here -->
                                    </div>
                                   
                                </div>
                                <a href="{{ route('contact') }}" class="rts-btn btn-seconday btn-transparent">Get a Quote <i class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>
                        <!-- bottom header end -->
                    </div>
                    <!-- header right end -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
@else
<header class="heder-two header--sticky">
    <div class="header-two-container">
        <div class="row">
            <div class="col-12">
                <div class="header-main-wrapper">
                    <div class="logo-area">
                        <a href="{{ route('index') }}" class="logo">
                            <img  width="100px" src="{{ asset('frontend') }}/assets/images/logo/techtouchlogo.png" alt="image-logo">
                        </a>
                    </div>
                    <!-- header right start -->
                    <div class="rts-header-right">
                        <div class="menu-area" id="menu-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                <rect width="18" height="2" fill="#0C0A0A" />
                                <rect y="7" width="18" height="2" fill="#0C0A0A" />
                                <rect y="14" width="18" height="2" fill="#0C0A0A" />
                            </svg>
                        </div>
                        <!-- top header -->
                        <div class="top">
                            <div class="start-top">
                                <div class="icon"><i class="fa-sharp fa-solid fa-bolt"></i></div>
                                <p>Works with commitment </p>
                            </div>
                            <div class="end-top">
                                <div class="single-info">
                                    <div class="icon"><i class="fa-thin fa-location-dot"></i> </div>
                                    <p>671/1, Kalitola, Sadar Dinajpur, Dinajpur-5200, Bangladesh.</p>
                                </div>
                                <div class="single-info">
                                    <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                                    <a href="mailto:info@techtouch-bd.com">info@techtouch-bd.com</a>
                                </div>
                            </div>
                        </div>
                        <!-- top header end -->
                        <!-- bottom header start -->
                        <div class="bottom">
                            <!-- header style two -->
                            <!-- nav area start -->
                            <div class="main-nav-desk nav-area">
                                <nav>
                                    <ul>
                                        <li class="menu-item">
                                            <a class="nav-item" href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="nav-item" href="{{ route('shop') }}">Shop</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="nav-item" href="{{ route('about') }}">About Us</a>
                                        </li>
                                        @php
                                        $elevatorCat = getElevatorCat();
                                        @endphp
                                        
                                        @if($elevatorCat)
                                            <li class="has-droupdown pages">
                                                <a class="nav-link" href="#">{{ $elevatorCat['category']->name }}</a>
                                                <ul class="submenu inner-page">
                                                    @foreach($elevatorCat['subcategories'] as $subcategory)
                                                        <li><a href="{{ route('categoryWiseProduct', $subcategory->slug) }}">{{ $subcategory->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                        <li class="menu-item">
                                            <a class="nav-item" href="{{ route('services') }}">Services</a>
                                        </li>
                                        <li class="has-droupdown pages">
                                            <a class="nav-link" href="#">Portfolio</a>
                                            <ul class="submenu inner-page">                                              
                                                <li><a href="{{ route('projects') }}">Projects</a></li>                                              
                                                                                         
                                            </ul>
                                        </li>
                                      
                                        <li class="menu-item">
                                            <a class="nav-item" href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- nav-area end -->
                            <!-- header style two End -->
                            <div class="right-area">
                                <div class="icon-area">  
                                    @if(auth()->user())                                                                      
                                        <div class="">
                                            <a href="{{ route('customerDashboard') }}" class="rts-btn btn-seconday btn-transparent">My Account</a>
                                        </div>
                                    @else
                                        <div class="cart cart-icon">
                                            <a href="" class="rts-btn btn-seconday btn-transparent">Login</a>
                                        </div>
                                        {{-- <div class="">
                                            <a href="{{route('customersignUpPage')}}" style="color: #fff" class="rts-btn btn-seconday btn-transparent">Registratin</a>
                                        </div> --}}
                                    @endif                                     
                                    <div class="cart cart-icon">
                                        <i class="fa-regular fa-cart-shopping"></i>
                                        <span class="cart-count" id="cart-count">{{cartCount()}}</span> <!-- Cart count displayed here -->
                                    </div>
                                                                       
                                </div>
                                <a href="{{ route('contact') }}" class="rts-btn btn-seconday btn-transparent">Get a Quote <i class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>
                        <!-- bottom header end -->
                    </div>
                    <!-- header right end -->
                </div>
            </div>
        </div>
    </div>
</header>
@endif
