@extends('frontend.layouts.app')
@section('content')
<div class="mad-breadcrumb with-bg-img with-overlay" data-bg-image-src="{{ asset('frontend') }}/images/_dsc9962.jpg" style="background-image: url({{ asset('frontend') }}/images/1792x512_bg1.jpg;);">
    <div class="container wide">
      <h1 class="mad-page-title">About Us</h1>
      <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('about') }}" class="mad-link">Home</a></span> / <span>About Us</span>
      </nav>
    </div>
  </div>
  <div class="mad-content">
    <div class="mad-section no-pb no-pd mad-section--stretched- mad-colorizer--scheme-color-9"><div class="mad-colorizer-bg-color"></div>
      <div class="mad-entities type-4">
        <article class="mad-entity">
          <div class="mad-entity-media">
            <a href="#" class="mad-video-fancybox" data-fancybox="video"><img src="{{ asset('frontend') }}/images/image-bangladesh-blog-puppet-show-girl-waving-1030x686.jpg" alt=""></a>
          </div>
          <div class="mad-entity-content">
            <div class="content-element-6">
              <div class="mad-pre-title">who we are</div>
              <h2 class="mad-title">About us</h2>
            </div>
            <div class="content-element-6">
              <p style="text-align: justify">
                Bashundhara Foundation, the charitable arm of the Bashundhara Group, symbolizes our dedication to improving lives and promoting national development under the motto 'For the People, For the Country'. Our foundation, which is focused on more than just business gains, leads programs in education, healthcare, disaster relief, and sustainable growth to empower the needy and inspire optimism.
                Aligned with the Bashundhara Group's ambition, we seek to lead and contribute to Bangladesh's socioeconomic prosperity, with community welfare serving as a cornerstone of our collective advancement. We aim to achieve long-term positive transformations via empowerment and assistance, guided by our basic principles of patriotism, honesty, fairness, and national service.
                Bashundhara Foundation is more than just philanthropy; it is our commitment to helping Bangladesh achieve a brighter, equitable future. 
              </p>
            </div>
            
          </div>
        </article>
      </div>
    </div>
    <article class="mad-section mad-colorizer--scheme-color-6 m-5">
      <div class="container-fluid">
        <!--================ Counters ================-->
        <div class="mad-counters align-center style-2 vr-type type-2 item-col-4">
          <div class="mad-col">
            <div class="mad-counter">
              <div class="mad-counter-inner">
                <div class="mad-counter-content">
                  <div class="mad-counter-count">26,951</div>
                  <div class="mad-counter-title"> Interest free loan </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mad-col">
            <div class="mad-counter">
              <div class="mad-counter-inner">
                <div class="mad-counter-content">
                  <div class="mad-counter-count">2 Crore</div>
                  <div class="mad-counter-title">Meals Served</div>
                </div>
              </div>
            </div>
          </div>
          <div class="mad-col">
            <div class="mad-counter">
              <div class="mad-counter-inner">
                <div class="mad-counter-content">
                  <div class="mad-counter-count">1Lakhs</div>
                  <div class="mad-counter-title">Medical Support Provided</div>
                </div>
              </div>
            </div>
          </div>
          <div class="mad-col">
            <div class="mad-counter">
              <div class="mad-counter-inner">
                <div class="mad-counter-content">
                  <div class="mad-counter-count">1000++</div>
                  <div class="mad-counter-title"> Student Support Provided</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--================ End of Counters ================-->
      </div>
    </article>
    <div class="mad-section no-pb">
      <div class="mad-texture-holder">
        <span class="mad-img-texture6 bg-move" style="transform: translate(20px, -9.99997px) scale(1);"></span>
      </div>
      <div class="container">
        <div class="mad-title-wrap align-center">
          <div class="mad-pre-title">Find out more</div>
          <h2 class="mad-title">Our Organisation</h2>          
        </div>
        <div class="mad-entities bg-color-2 align-center type-2 item-col-3">
          <div class="mad-col">
            <!--================ Entity ================-->
            <article class="mad-entity">
              <div class="mad-entity-media">
                <a href="portfolio_single_img.html"><img src="{{ asset('frontend') }}/images/Tanguar Hawor, .jpeg" alt=""></a>
              </div>
              <div class="mad-entity-content">
                <div class="mad-entity-header">
                  <h5 class="mad-entity-title">
                    <a href="portfolio_single_img.html">Our Mission &amp; Story</a>
                  </h5>
                  
                  <a href="pages_what_we_do" class="mad-text-link"><span>Learn More</span> <span class="icon material-icons"> arrow_forward_ios </span></a>
                </div>
              </div>
            </article>
            <!--================ End of Entity ================-->
          </div>
          <div class="mad-col">
            <!--================ Entity ================-->
            <article class="mad-entity">
              <div class="mad-entity-media">
                <a href="portfolio_single_img.html"><img src="{{ asset('frontend') }}/images/SAVE_20240316_180255.jpg" alt=""></a>
              </div>
              <div class="mad-entity-content">
                <div class="mad-entity-header">
                  <h5 class="mad-entity-title">
                    <a href="portfolio_single_img.html">Our Strategy &amp; Impact</a>
                  </h5>
                 
                  <a href="pages_what_we_do" class="mad-text-link"><span>Learn More</span> <span class="icon material-icons"> arrow_forward_ios </span></a>
                </div>
              </div>
            </article>
            <!--================ End of Entity ================-->
          </div>
          <div class="mad-col">
            <!--================ Entity ================-->
            <article class="mad-entity">
              <div class="mad-entity-media">
                <a href="portfolio_single_img.html"><img src="{{ asset('frontend') }}/images/WhatsApp Image 2024-03-18 at 14.34.10_a7425d09.jpg" alt=""></a>
              </div>
              <div class="mad-entity-content">
                <div class="mad-entity-header">
                  <h5 class="mad-entity-title">
                    <a href="portfolio_single_img.html">Our Annual Report</a>
                  </h5>
                  
                  <a href="pages_what_we_do" class="mad-text-link"><span>Learn More</span> <span class="icon material-icons"> arrow_forward_ios </span></a>
                </div>
              </div>
            </article>
            <!--================ End of Entity ================-->
          </div>
        </div>
      </div>
    </div>
   
  
 
  </div>
@endsection