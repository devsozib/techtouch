@extends('frontend.layouts.app')
@section('content')
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
  @include('frontend.layouts.mobileMenu')
  <!-- mobile menu area end -->
</div>
<!-- header style two End -->
<!-- rts banner area -->
<div class="rts-banner-three-area rts-section-gap">
  <div class="container pt--150 pb--90">
      <div class="row">
          <div class="banner-three-wrapper">
              <span class="pre-title">Hospitality & Leisure</span>
              <h1 class="title">
                  Where fluid <br>
                  form describes <br>
                  <span class="strock" id="fullText">
                      Function
                  </span>
              </h1>
              <span class="bottom">
                  Sports Faciites <br>
                  Building, University of Cyprus <br>
                  <span>/2015</span>
              </span>
              <!-- to bottom icon -->
              <div class="rts-to-bottom-start">
                  <a href="#about"><img src="{{ asset('frontend') }}/assets/images/banner/shape/03.png" alt="shape image"></a>
              </div>
              <!-- to bottom icon end -->
          </div>
      </div>
  </div>
  <div class="banner-image-area">
      <img src="{{ asset('frontend') }}/assets/images/banner/01.png" alt="banner-image">
  </div>
</div>
<!-- rts banner area end -->

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

{{-- <!-- rts experience area start -->
<div class="rts-experience-area rts-section-gap3 bg-experience">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="experience-main-wrapper">
                  <div class="left">
                      <h3 class="title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                          Trusted Tech Touch-BD
                      </h3>
                      <p class="disc" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                          Imperdiet integer varius mauris neque rhoncus per, duis tortor fermentum viverra <br>
                          quisque, nostra proin dignissim at senectus.
                      </p>
                  </div>
                  <div class="right" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                      <h2 class="title">25+</h2>
                      <span>Years of Experience</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- rts experience area end --> --}}

<!-- our service area start -->
<div class="rts-service-area-three rts-section-gap3">
  <div class="container pb--120">
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
      <div class="rts-offer-provide-section rts-section-gap">
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
<!-- our service area end -->

<!-- rts faq area start -->
<div class="rts-faq-area-three-start">
  <div class="container-2">
      <div class="row">
          <div class="col-lg-12">
              <div class="faq-main-wrapper-three">
                  <div class="row align-items-center">
                      <div class="col-lg-6 pr--50 first-child">
                          <span class="pre-title">Tech Touch-BD Company</span>
                          <h3 class="title-main">Why People Choice Us?</h3>
                          <div class="accordion-three" id="accordionExample">
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          How much does a home remodeling cost?
                                      </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                          <p class="disc">Projects vary widely depending on your needs and budget. Our representatives visit with you to better understand your home remodeling needs. At construktion Home Improvements we do more than give you a quote. We provide you with the information you need to make the right decisions for your home. Our representatives take time to explain the details regarding your project.</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          How much does a home Building cost?
                                      </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                          <p class="disc">Projects vary widely depending on your needs and budget. Our representatives visit with you to better understand your home remodeling needs. At construktion Home Improvements we do more than give you a quote. We provide you with the information you need to make the right decisions for your home. Our representatives take time to explain the details regarding your project.</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          What is included with a free remodeling estimate?
                                      </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                          <p class="disc">Projects vary widely depending on your needs and budget. Our representatives visit with you to better understand your home remodeling needs. At construktion Home Improvements we do more than give you a quote. We provide you with the information you need to make the right decisions for your home. Our representatives take time to explain the details regarding your project.</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingFour">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                          Why do roofing estimates vary so widely?
                                      </button>
                                  </h2>
                                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                          <p class="disc">Projects vary widely depending on your needs and budget. Our representatives visit with you to better understand your home remodeling needs. At construktion Home Improvements we do more than give you a quote. We provide you with the information you need to make the right decisions for your home. Our representatives take time to explain the details regarding your project.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 pl--50 last-child">
                          <div class="thumbnail">
                              <div class="reveal-item overflow-hidden aos-init">
                                  <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end"></div>
                                  <img src="{{ asset('frontend') }}/assets/images/faq-area/01.jpg" alt="faq-area">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- rts faq area end -->

<!-- rts team area start -->
<div class="rts-section-gap3 team-3bg">
  <div class="container pt--100">
      <div class="row">
          <div class="col-lg-12">
              <div class="title-three-center">                
                  <h3 class="title" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                      Meet the management of our <br> dynamic company
                  </h3>
              </div>
          </div>
      </div>
      <div class="row mt--50">
          <div class="col-lg-3 col-md-6">
              <!-- single team one start -->
              <div class="single-team-three">
                  <div class="thumbnail">
                      <img src="{{ asset('frontend') }}/assets/images/chairman.png" alt="team_area-start">
                      <div class="social-team-wrapper">
                          <ul>
                              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="content-area">
                      <span class="designation">
                          CHAIRMAN
                      </span>
                      <a href="team-details.html">
                          <h6 class="name">ENGR. MD. CHAND ALI</h6>
                      </a>
                  </div>
              </div>
              <!-- single team one start -->
          </div>
          <div class="col-lg-3 col-md-6">
              <!-- single team one start -->
              <div class="single-team-three">
                  <div class="thumbnail">
                      <img style="width: 92%" src="{{ asset('frontend') }}/assets/images/md.png" alt="team_area-start">
                      <div class="social-team-wrapper">
                          <ul>
                              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="content-area">
                      <span class="designation">
                        FOUNDER & MANAGING DIRECTOR.
                      </span>
                      <a href="team-details.html">
                          <h6 class="name">ENGR. MD. ASADUZZAMAN SAKIB</h6>
                      </a>
                  </div>
              </div>
              <!-- single team one start -->
          </div>
          <div class="col-lg-3 col-md-6">
              <!-- single team one start -->
              <div class="single-team-three">
                  <div class="thumbnail">
                      <img style="width: 72%" src="{{ asset('frontend') }}/assets/images/director.jpeg" alt="team_area-start">
                      <div class="social-team-wrapper">
                          <ul>
                              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="content-area">
                      <span class="designation">
                          DIRECTOR & ADVISOR
                      </span>
                      <a href="team-details.html">
                          <h6 class="name">ENGR. MD. HASANUZZAMAN SUMON</h6>
                      </a>
                  </div>
              </div>
              <!-- single team one start -->
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- single team one start -->
            <div class="single-team-three">
                <div class="thumbnail">
                    <img src="{{ asset('frontend') }}/assets/images/business-developer.jpeg" alt="team_area-start">
                    <div class="social-team-wrapper">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="content-area">
                    <span class="designation">
                        BUSINESS DEVELOPER
                    </span>
                    <a href="team-details.html">
                        <h6 class="name">AHSAN HABIB ABIR</h6>
                    </a>
                </div>
            </div>
            <!-- single team one start -->
        </div>
      </div>
      <div class="row">
        <div class="col-3">

        </div>
        <div class="col-3 m-auto">
            <img style="border-radius: 10px" src="{{ asset('frontend') }}/assets/images/arshiya-alishba.png" alt="team_area-start">
        </div>
        <div class="col-3">
           
        </div>
      </div>
  </div>
</div>
<!-- rts team area end -->

<!-- rts rtsa funfacts and case studys -->
<div class="funfacts-and-casestudy-wrapper bg_image--5 no-repeat">
  <div class="funfacts-area section-bottom-seperator rts-section-gap">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="funfacts-three-wrapper">
                      <!-- single sunfacts area start -->
                      <div class="single-fun-facts-three">
                          <div class="header-area">
                              <div class="logo">
                                  <img src="{{ asset('frontend') }}/assets/images/fun-facts/icon/02.svg" alt="funfacts">
                              </div>
                              <h2 class="title plus">
                                  <span class="counter">5</span>
                              </h2>
                          </div>
                          <p class="disc">
                              Years of Experience. Urban design draws together the many standers of place-making
                          </p>
                      </div>
                      <!-- single sunfacts area end -->
                      <!-- single sunfacts area start -->
                      <div class="single-fun-facts-three">
                          <div class="header-area">
                              <div class="logo">
                                  <img src="{{ asset('frontend') }}/assets/images/fun-facts/icon/08.svg" alt="funfacts">
                              </div>
                              <h2 class="title plus">
                                  <span class="counter">60</span>
                              </h2>
                          </div>
                          <p class="disc">
                              Projects completed Successfully. Urban design draws together the many standers of place-making
                          </p>
                      </div>
                      <!-- single sunfacts area end -->
                      <!-- single sunfacts area start -->
                      <div class="single-fun-facts-three">
                          <div class="header-area">
                              <div class="logo">
                                  <img src="{{ asset('frontend') }}/assets/images/fun-facts/icon/09.svg" alt="funfacts">
                              </div>
                              <h2 class="title plus">
                                  <span class="counter">150</span>
                              </h2>
                          </div>
                          <p class="disc">
                              Team members for 24/7 Support. Urban design draws together the many standers of place-making
                          </p>
                      </div>
                      <!-- single sunfacts area end -->
                      <!-- single sunfacts area start -->
                      <div class="single-fun-facts-three">
                          <div class="header-area">
                              <div class="logo">
                                  <img src="{{ asset('frontend') }}/assets/images/fun-facts/icon/07.svg" alt="funfacts">
                              </div>
                              <h2 class="title plus">
                                  <span class="counter">2</span>
                              </h2>
                          </div>
                          <p class="disc">
                              Countries, We Worked. Urban design draws together the many standers of place-making
                          </p>
                      </div>
                      <!-- single sunfacts area end -->
                  </div>
              </div>
          </div>
      </div>
  </div>
  {{-- <div class="rts-case-study-area rts-section-gapTop">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="title-wrapper-case">
                      <div class="left-title-area-case">
                          <span class="pre-title">LATEST CASES</span>
                          <h2 class="title">Universal Case Studies</h2>
                      </div>
                      <div class="swiper-btn-case">
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container-full-screen mt--50">
          <!-- Swiper -->
          <div class="swiper case-three">
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <!-- single image area start -->
                      <div class="rts-single-case-three">
                          <div class="wrapper">
                              <a href="project-details.html" class="thumbnail">
                                  <img src="{{ asset('frontend') }}/assets/images/project/04.jpg" alt="product-image">
                              </a>
                              <div class="content">
                                  <a href="project-details.html">
                                      <h4 class="title">Oil Mill Construction</h4>
                                  </a>
                                  <p class="disc">Building, Renovation</p>
                              </div>
                          </div>
                      </div>
                      <!-- single image area end -->
                  </div>
                  <div class="swiper-slide">
                      <!-- single image area start -->
                      <div class="rts-single-case-three">
                          <div class="wrapper">
                              <a href="project-details.html" class="thumbnail">
                                  <img src="{{ asset('frontend') }}/assets/images/project/05.jpg" alt="product-image">
                              </a>
                              <div class="content">
                                  <a href="project-details.html">
                                      <h4 class="title">Building Construction</h4>
                                  </a>
                                  <p class="disc">Building, Renovation</p>
                              </div>
                          </div>
                      </div>
                      <!-- single image area end -->
                  </div>
                  <div class="swiper-slide">
                      <!-- single image area start -->
                      <div class="rts-single-case-three">
                          <div class="wrapper">
                              <a href="project-details.html" class="thumbnail">
                                  <img src="{{ asset('frontend') }}/assets/images/project/06.jpg" alt="product-image">
                              </a>
                              <div class="content">
                                  <a href="project-details.html">
                                      <h4 class="title">Engin Construction</h4>
                                  </a>
                                  <p class="disc">Building, Renovation</p>
                              </div>
                          </div>
                      </div>
                      <!-- single image area end -->
                  </div>
                  <div class="swiper-slide">
                      <!-- single image area start -->
                      <div class="rts-single-case-three">
                          <div class="wrapper">
                              <a href="project-details.html" class="thumbnail">
                                  <img src="{{ asset('frontend') }}/assets/images/project/05.jpg" alt="product-image">
                              </a>
                              <div class="content">
                                  <a href="project-details.html">
                                      <h4 class="title">Boil Mill Construction</h4>
                                  </a>
                                  <p class="disc">Building, Renovation</p>
                              </div>
                          </div>
                      </div>
                      <!-- single image area end -->
                  </div>
              </div>
          </div>

      </div>
  </div> --}}
</div>
<!-- rts rtsa funfacts and case studys end -->

<!-- company process start -->
<div class="rts-company-process rts-section-gap3Top">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="title-three-left">
                  <div class="bg-title">
                      Process
                  </div>
                  <span class="pre-title">
                      Tech Touch-BD
                  </span>
                  <h3 class="title">
                      Working Easy Process
                  </h3>
              </div>
          </div>
      </div>
      <!-- process wrapper start -->
      <div class="row">
          <div class="col-lg-12">
              <div class="main-process-wrapper">

                  <!-- single process area start -->
                  <div class="single-working-process-three">
                      <div class="icon">
                          <img src="{{ asset('frontend') }}/assets/images/working-process/icon/01.png" alt="">
                      </div>
                      <h5 class="title">Consultation</h5>
                      <p class="disc">
                          Portitor aptent sociosqu per etiam inceptos posuere lobortis
                      </p>
                  </div>
                  <!-- single process area end -->
                  <!-- single process area start -->
                  <div class="single-working-process-three">
                      <div class="icon">
                          <img src="{{ asset('frontend') }}/assets/images/working-process/icon/02.png" alt="">
                      </div>
                      <h5 class="title">Detailed Proposal</h5>
                      <p class="disc">
                          Portitor aptent sociosqu per etiam inceptos posuere lobortis
                      </p>
                  </div>
                  <!-- single process area end -->
                  <!-- single process area start -->
                  <div class="single-working-process-three">
                      <div class="icon">
                          <img src="{{ asset('frontend') }}/assets/images/working-process/icon/03.png" alt="">
                      </div>
                      <h5 class="title">Project Installation</h5>
                      <p class="disc">
                          Portitor aptent sociosqu per etiam inceptos posuere lobortis
                      </p>
                  </div>
                  <!-- single process area end -->
                  <!-- single process area start -->
                  <div class="single-working-process-three">
                      <div class="icon">
                          <img src="{{ asset('frontend') }}/assets/images/working-process/icon/04.png" alt="">
                      </div>
                      <h5 class="title">Final Inspection</h5>
                      <p class="disc">
                          Portitor aptent sociosqu per etiam inceptos posuere lobortis
                      </p>
                  </div>
                  <!-- single process area end -->
              </div>

          </div>
      </div>
      <!-- process wrapper end -->
  </div>
</div>
<!-- company process end -->

<!-- rts award area start -->
<div class="rts-award-area rts-section-gap3Top">
  <div class="container">
      <div class="row g-5">
          <div class="col-lg-6">
              <div class="award-single-wrapper bg-1">
                  <div class="inner">
                      <h4 class="title">
                          Award Winning Construction <br>
                          Company in 2020
                      </h4>
                      <a href="company-story.html" class="rts-readmore-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="award-single-wrapper bg-2">
                  <div class="inner">
                      <h4 class="title">
                          Award Winning Renovation <br>
                          Company in 2022
                      </h4>
                      <a href="company-story.html" class="rts-readmore-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- rts award area end -->

{{-- <!-- meet leaders area start -->
<div class="rts-leaders-area-three rts-section-gap3">
  <div class="container">
      <div class="grid-lines-wrapper">
          <div class="grid-lines">
              <div class="grid-line"></div>
              <div class="grid-line two"></div>
              <div class="grid-line three"></div>
              <div class="grid-line four"></div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
              <div class="title-three-center">
                  <div class="bg-title">
                      Meet Leaders
                  </div>
                  <span class="pre-title">
                      Experts Members
                  </span>
                  <h3 class="title">
                      Meet the leaders of our <br> dynamic company
                  </h3>
              </div>
          </div>
      </div>
      <div class="row mt--0 g-60">
          <div class="col-lg-4 col-md-6">
              <!-- single leaders area -->
              <div class="single-leaders-area">
                  <a href="blog-details.html" class="thumbnail">
                      <img src="{{ asset('frontend') }}/assets/images/team/06.jpg" alt="leaders">
                  </a>
                  <div class="content-area">
                      <div class="top">
                          <span class="name">By david Smith</span>
                          <span class="date">03 January, 2023</span>
                      </div>
                      <a href="blog-details.html">
                          <h5 class="title">Essex Crossing Wins ULI Americas Awards for Excellence</h5>
                      </a>
                      <a href="blog-details.html" class="rts-btn  btn-seconday">Read Details <i class="fa-light fa-arrow-right"></i></a>
                  </div>
              </div>
              <!-- single leaders area end -->
          </div>
          <div class="col-lg-4 col-md-6">
              <!-- single leaders area -->
              <div class="single-leaders-area">
                  <a href="blog-details.html" class="thumbnail">
                      <img src="{{ asset('frontend') }}/assets/images/team/07.jpg" alt="leaders">
                  </a>
                  <div class="content-area">
                      <div class="top">
                          <span class="name">By Jone Smith</span>
                          <span class="date">10 January, 2023</span>
                      </div>
                      <a href="blog-details.html">
                          <h5 class="title">Renovation and Wins ULI Americas Awards for Challenges</h5>
                      </a>
                      <a href="blog-details.html" class="rts-btn  btn-seconday">Read Details <i class="fa-light fa-arrow-right"></i></a>
                  </div>
              </div>
              <!-- single leaders area end -->
          </div>
          <div class="col-lg-4 col-md-6">
              <!-- single leaders area -->
              <div class="single-leaders-area">
                  <a href="blog-details.html" class="thumbnail">
                      <img src="{{ asset('frontend') }}/assets/images/team/08.jpg" alt="leaders">
                  </a>
                  <div class="content-area">
                      <div class="top">
                          <span class="name">By Mark Kor</span>
                          <span class="date">24 January, 2022</span>
                      </div>
                      <a href="blog-details.html">
                          <h5 class="title">Construction will Wins ULI Americas Awards for Excellence</h5>
                      </a>
                      <a href="blog-details.html" class="rts-btn  btn-seconday">Read Details <i class="fa-light fa-arrow-right"></i></a>
                  </div>
              </div>
              <!-- single leaders area end -->
          </div>
      </div>
  </div>
</div>
<!-- meet leaders area end --> --}}

<!-- rts testimonials area start -->
<div class="rts-testimonials-area rts-section-gap3Bottom">
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
                                          TRUSTED FROM OVER
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
                                          TRUSTED FROM OVER
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
                                          TRUSTED FROM OVER
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
@endsection