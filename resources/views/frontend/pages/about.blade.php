@extends('frontend.layouts.app')
@section('content')
    {{-- <!-- Bread-Crumb style two -->
    <!-- rts breadcrumba area start -->
    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <!-- bread crumb inner wrapper -->
                  <div class="breadcrumb-inner text-center">
                      <h1 class="title">About Us</h1>
                      <div class="meta">
                          <a href="#" class="prev">Home /</a>
                          <a href="#" class="next">About Us</a>
                      </div>
                  </div>
                  <!-- bread crumb inner wrapper end -->
              </div>
          </div>
      </div>
  </div>
  <!-- rts breadcrumba area end -->
  <!-- Bread-Crumb style two End --> --}}

<!-- rts about area start -->
<div class="rts-about-area rts-section-gap3" id="about">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-5">
                <div class="about-image-thumbnail-3">
                    <img class="image-2" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" src="{{ asset('frontend') }}/assets/images/about.jpeg" alt="about-image">
                    {{-- <img class="image-2" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" src="{{ asset('frontend') }}/assets/images/about.jpeg" alt="about-image"> --}}
                </div>
            </div>
            <div class="col-lg-7 pl--60 p-md-0">
                <div class="about-three-wrapper">
                    <div class="title-three-left">
                        <div class="bg-title">
                            Company
                        </div>
                        <span class="pre-title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" style="display: block;">
                          TECH TOUCH
                          AUTOMATION & ENGINEERING
                        </span>
                        <h3 class="title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800">
                          WORKS WITH COMMITMENT.
                        </h3>
                        <p>We are Tech Touch Automation & Engineering , We started our journey from 2020 by trading business in the power sector and also growing up a company in the Construction and Consultancy sector. Specialized in marketing & sales, designing, installation, commissioning, and maintenance of Sub-Station, Generator, Fire Detection, and Protection System, and Security management System with trained and experienced people both from home and aboard and what you ask within, anytime, anywhere.</p>
                    </div>
                    <div class="rts-tab-three-start" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Skills</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Experience</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Destination</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!-- ingle content tab -->
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <div class="single-tab-content-three">
                                    <p class="disc">
                                        Uniquely repurpose client-centered imperatives without distinctive products <br> leverage existing fully researched.
                                    </p>
                                    <div class="list-wrapper">
                                        <div class="single">
                                            <ul>
                                                <li>Great Quality Service</li>
                                                <li>Professional Work Skills</li>
                                            </ul>
                                        </div>
                                        <div class="single">
                                            <ul>
                                                <li>Great Quality Service</li>
                                                <li>Professional Work Skills</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="#" class="rts-btn btn-seconday">Learn More</a>
                                </div>
                            </div>
                            <!-- ingle content tab end -->
                            <!-- ingle content tab -->
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <div class="single-tab-content-three">
                                    <p class="disc">
                                        Uniquely repurpose client-centered imperatives without distinctive products <br> leverage existing fully researched.
                                    </p>
                                    <div class="list-wrapper">
                                        <div class="single">
                                            <ul>
                                                <li>Great Quality Service</li>
                                                <li>Professional Work Skills</li>
                                            </ul>
                                        </div>
                                        <div class="single">
                                            <ul>
                                                <li>Great Quality Service</li>
                                                <li>Professional Work Skills</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="#" class="rts-btn btn-seconday">Learn More</a>
                                </div>
                            </div>
                            <!-- ingle content tab end -->
                            <!-- ingle content tab -->
                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                <div class="single-tab-content-three">
                                    <p class="disc">
                                        Uniquely repurpose client-centered imperatives without distinctive products <br> leverage existing fully researched.
                                    </p>
                                    <div class="list-wrapper">
                                        <div class="single">
                                            <ul>
                                                <li>Great Quality Service</li>
                                                <li>Professional Work Skills</li>
                                            </ul>
                                        </div>
                                        <div class="single">
                                            <ul>
                                                <li>Great Quality Service</li>
                                                <li>Professional Work Skills</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="#" class="rts-btn btn-seconday">Learn More</a>
                                </div>
                            </div>
                            <!-- ingle content tab end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- rts about area end -->

  <!-- rts service area start -->
  <div class="service-abot-area rts-section-gap service-about-bg bg_image">
      <div class="container-210">
          <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="thumbnail-service-about">
                      {{-- <img src="{{ asset('frontend') }}/assets/images/service/13.jpg" alt="service-image"> --}}
                      <video width="100%"  src="https://techtouch-bd.com/wp-content/uploads/2022/05/WhatsApp-Video-2022-05-25-at-9.58.43-AM.mp4" autoplay="" muted="muted" controlslist="nodownload"></video>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 pading-controler">
                  <div class="service-about-wrapper">
                      <div class="title-three-left">
                          <span class="pre-title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" style="display: block;">
                              Core Features
                          </span>
                          <h3 class="title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800">
                              Why Choose Us
                          </h3>
                      </div>
                      <div class="row mt--15 g-24">
                          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="single-service-sm">
                                  <div class="icon">
                                      <img src="{{ asset('frontend') }}/assets/images/service/icon/01.svg" alt="">
                                  </div>
                                  <p>Expert Teams</p>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="single-service-sm">
                                  <div class="icon">
                                      <img src="{{ asset('frontend') }}/assets/images/service/icon/02.svg" alt="">
                                  </div>
                                  <p>Timely Delivery</p>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="single-service-sm">
                                  <div class="icon">
                                      <img src="{{ asset('frontend') }}/assets/images/service/icon/03.svg" alt="">
                                  </div>
                                  <p>24/7 Support</p>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="single-service-sm">
                                  <div class="icon">
                                      <img src="{{ asset('frontend') }}/assets/images/service/icon/04.svg" alt="">
                                  </div>
                                  <p>Best Equipment</p>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="single-service-sm">
                                  <div class="icon">
                                      <img src="{{ asset('frontend') }}/assets/images/service/icon/05.svg" alt="">
                                  </div>
                                  <p>100% Guranty</p>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="single-service-sm">
                                  <div class="icon">
                                      <img src="{{ asset('frontend') }}/assets/images/service/icon/06.svg" alt="">
                                  </div>
                                  <p>Timely Delivery</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- rts service area end -->

    <!-- our service area start -->
    <div class="rts-service-area-three rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-three-center">
                        <div class="bg-title">
                            What We Do
                        </div>
                        <span class="pre-title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            Tech Touch-BD
                        </span>
                        <h3 class="title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            Our thoughts for developing <br>
                            your stylish life Level.
                        </h3>
                    </div>
                </div>
            </div>
            <div class="rts-offer-provide-section ">
            <div class="container">
                <div class="row g-24">
                    @foreach ($services as $service)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <!-- single offer area sart -->
                            <div class="rts-single-offer">
                                <a href="service-details.html" class="thumbnail">
                                    <img style="border-radius: 8px" src="{{ asset('frontend/assets/images/category/'.$service->image) }}" alt="service">
                                </a>
                                <div class="content-wrapper">
                                    <a href="service-details.html">
                                        <h5 class="title">
                                            {{ $service->name }}
                                        </h5>
                                    </a>
                                    <p class="disc">
                                        Dui lobortis scelerisque magna curabitur duis purus platea massa accumsan
                                    </p>
                                    <a href="service-details.html" class="rts-btn btn-transparent-service">View Service<i class="fa-light fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single offer area end -->
                        </div>
                    @endforeach
                </div>
            </div>
            </div>        
        </div>
        </div>
    </div>
    

  <!-- rts fun facts area starts -->
  <div class="rts-about-fun-facts bg_about-f">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="about-fun-facts-wrapper">
                      <!-- single -fun facts area start -->
                      <div class="single-funfacts-about">
                          <div class="top">
                              <div class="icon">
                                  <img src="{{ asset('frontend') }}/assets/images/fun-facts/icon/06.svg" alt="fun-facts">
                              </div>
                              <h2 class="title plus"><span class="counter">5</span></h2>
                          </div>
                          <p class="disc">
                              Years of Experience. Urban design draws together the many standers of place-making
                          </p>
                      </div>
                      <!-- single -fun facts area end -->
                      <!-- single -fun facts area start -->
                      <div class="single-funfacts-about">
                          <div class="top">
                              <div class="icon">
                                  <img src="{{ asset('frontend') }}/assets/images/fun-facts/icon/08.svg" alt="fun-facts">
                              </div>
                              <h2 class="title percent"><span class="counter">60</span></h2>
                          </div>
                          <p class="disc">
                              Projects completed Successfully. Urban design draws together the many standers of place-making
                          </p>
                      </div>
                      <!-- single -fun facts area end -->
                      <!-- single -fun facts area start -->
                      <div class="single-funfacts-about">
                          <div class="top">
                              <div class="icon">
                                  <img src="{{ asset('frontend') }}/assets/images/fun-facts/icon/09.svg" alt="fun-facts">
                              </div>
                              <h2 class="title plus"><span class="counter">150</span></h2>
                          </div>
                          <p class="disc">
                              Team members for 24/7 Support. Urban design draws together the many standers of place-making
                          </p>
                      </div>
                      <!-- single -fun facts area end -->
                      <!-- single -fun facts area start -->
                      <div class="single-funfacts-about">
                          <div class="top">
                              <div class="icon">
                                  <img src="{{ asset('frontend') }}/assets/images/fun-facts/icon/07.svg" alt="fun-facts">
                              </div>
                              <h2 class="title plus"><span class="counter">2</span></h2>
                          </div>
                          <p class="disc">
                              Countries, We Worked. Urban design draws together the many standers of place-making
                          </p>
                      </div>
                      <!-- single -fun facts area end -->
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- rts fun facts area end -->

  <!-- rts testimonials area start -->
  <div class="rts-testimonials-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="main-wrapper-testimonials">

                      <div class="swiper swiper-testimonials-1">
                          <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <!-- single -->
                                  <div class="testimonials-mian-wrapepr">
                                      <div class="image-area">
                                          <h4 class="title">
                                              TRUSTED FROM OVER <br>
                                          1,500 CLIENTS
                                          </h4>
                                          <div class="thumbnail">
                                              <img src="{{ asset('frontend') }}/assets/images/testimonials/01.png" alt="testimonials">
                                          </div>
                                      </div>
                                      <div class="testimonials-right">
                                          <h3 class="title">
                                              The group at Baroque is unimaginably committed, educated, and supportive. The completed item was delightful, and worth each penny. I would totally suggest Baroque...
                                          </h3>
                                          <a href="#" class="name">Bargman ,<span>ENVATO LLC</span></a>
                                      </div>
                                  </div>
                                  <!-- single -->
                              </div>
                              <div class="swiper-slide">
                                  <!-- single -->
                                  <div class="testimonials-mian-wrapepr">
                                      <div class="image-area">
                                          <h4 class="title">
                                              TRUSTED FROM OVER <br>
                                          1,500 CLIENTS
                                          </h4>
                                          <div class="thumbnail">
                                              <img src="{{ asset('frontend') }}/assets/images/testimonials/01.png" alt="testimonials">
                                          </div>
                                      </div>
                                      <div class="testimonials-right">
                                          <h3 class="title">
                                              The group at Baroque is unimaginably committed, educated, and supportive. The completed item was delightful, and worth each penny. I would totally suggest Baroque...
                                          </h3>
                                          <a href="#" class="name">Bargman ,<span>ENVATO LLC</span></a>
                                      </div>
                                  </div>
                                  <!-- single -->
                              </div>
                              <div class="swiper-slide">
                                  <!-- single -->
                                  <div class="testimonials-mian-wrapepr">
                                      <div class="image-area">
                                          <h4 class="title">
                                              TRUSTED FROM OVER <br>
                                          1,500 CLIENTS
                                          </h4>
                                          <div class="thumbnail">
                                              <img src="{{ asset('frontend') }}/assets/images/testimonials/01.png" alt="testimonials">
                                          </div>
                                      </div>
                                      <div class="testimonials-right">
                                          <h3 class="title">
                                              The group at Baroque is unimaginably committed, educated, and supportive. The completed item was delightful, and worth each penny. I would totally suggest Baroque...
                                          </h3>
                                          <a href="#" class="name">Bargman ,<span>ENVATO LLC</span></a>
                                      </div>
                                  </div>
                                  <!-- single -->
                              </div>
                          </div>
                      </div>
                      <div class="button-wrapper">

                          <div class="swiper-button-next"><i class="fa-regular fa-arrow-right"></i></div>
                          <div class="swiper-button-prev"><i class="fa-regular fa-arrow-left"></i></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- rts testimonials area end -->

  <!-- rts blog area start -->
  <div class="rts-blog-area rts-section-gapBottom">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="title-mid-wrapper-home-two" data-sal="slide-up" data-sal-delay="150" data-sal-duration="900">
                      <span class="pre">Our latest Blog</span>
                      <h2 class="title">Blog & Insights</h2>
                  </div>
              </div>
          </div>
          <div class="row g-24 mt--10">
              <div class="col-lg-4">
                  <!-- single blog two -->
                  <div class="blog-single-two-wrapper">
                      <div class="image-area">
                          <a href="blog-details.html" class="thumbnail">
                              <img src="{{ asset('frontend') }}/assets/images/blog/04.jpg" alt="blog-image">
                          </a>
                          <div class="date-area">
                              <div class="date">
                                  <span class="day">03</span>
                                  <span class="month">DEC</span>
                              </div>
                              <div class="year">
                                  <span class="year">2023</span>
                              </div>
                          </div>
                      </div>
                      <div class="inner">
                          <span class="pre-tag">
                              Construction
                          </span>
                          <a href="blog-details.html">
                              <h5 class="title">
                                  One of the World Largest Passive
                                  House Buildings
                              </h5>
                          </a>
                          <a href="blog-details.html" class="btn-read-more-blog">Read Details <i class="fa-light fa-arrow-right"></i></a>
                      </div>
                  </div>
                  <!-- single blog two end -->
              </div>
              <div class="col-lg-4">
                  <!-- single blog two -->
                  <div class="blog-single-two-wrapper">
                      <div class="image-area">
                          <a href="blog-details.html" class="thumbnail">
                              <img src="{{ asset('frontend') }}/assets/images/blog/05.jpg" alt="blog-image">
                          </a>
                          <div class="date-area">
                              <div class="date">
                                  <span class="day">01</span>
                                  <span class="month">DEC</span>
                              </div>
                              <div class="year">
                                  <span class="year">2023</span>
                              </div>
                          </div>
                      </div>
                      <div class="inner">
                          <span class="pre-tag">
                              Construction
                          </span>
                          <a href="blog-details.html">
                              <h5 class="title">
                                  Where the World Largest Passive
                                  House Buildings
                              </h5>
                          </a>
                          <a href="blog-details.html" class="btn-read-more-blog">Read Details <i class="fa-light fa-arrow-right"></i></a>
                      </div>
                  </div>
                  <!-- single blog two end -->
              </div>
              <div class="col-lg-4">
                  <!-- single blog two -->
                  <div class="blog-single-two-wrapper">
                      <div class="image-area">
                          <a href="blog-details.html" class="thumbnail">
                              <img src="{{ asset('frontend') }}/assets/images/blog/06.jpg" alt="blog-image">
                          </a>
                          <div class="date-area">
                              <div class="date">
                                  <span class="day">07</span>
                                  <span class="month">DEC</span>
                              </div>
                              <div class="year">
                                  <span class="year">2023</span>
                              </div>
                          </div>
                      </div>
                      <div class="inner">
                          <span class="pre-tag">
                              Construction
                          </span>
                          <a href="blog-details.html">
                              <h5 class="title">
                                  Best the World Largest Passive
                                  House Buildings
                              </h5>
                          </a>
                          <a href="blog-details.html" class="btn-read-more-blog">Read Details <i class="fa-light fa-arrow-right"></i></a>
                      </div>
                  </div>
                  <!-- single blog two end -->
              </div>
          </div>
      </div>
  </div>
  <!-- rts blog area end -->
@endsection