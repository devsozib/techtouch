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
                  <img class="image-1" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" src="{{ asset('frontend') }}/assets/images/about/02.jpg" alt="about-image">
                  <img class="image-2" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" src="{{ asset('frontend') }}/assets/images/about/03.jpg" alt="about-image">
              </div>
          </div>
          <div class="col-lg-7 pl--60 p-md-0">
              <div class="about-three-wrapper">
                  <div class="title-three-left">
                      <div class="bg-title">
                          Company
                      </div>
                      <span class="pre-title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" style="display: block;">
                          Renovation Company
                      </span>
                      <h3 class="title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800">
                          Our thoughts for developing <br>
                          your stylish life Level.
                      </h3>
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

<!-- rts experience area start -->
<div class="rts-experience-area rts-section-gap3 bg-experience">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="experience-main-wrapper">
                  <div class="left">
                      <h3 class="title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                          Trusted Renovation Company
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
<!-- rts experience area end -->

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
                      Renovation Company
                  </span>
                  <h3 class="title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                      Our thoughts for developing <br>
                      your stylish life Level.
                  </h3>
              </div>
          </div>
      </div>
      <div class="row g-5 mt--20">
          <div class="col-lg-4 col-md-6">
              <!-- single service area start-->
              <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                  <a href="service-details.html" class="thumbnail-area">
                      <img src="{{ asset('frontend') }}/assets/images/service/01.jpg" alt="Service-area">
                  </a>
                  <div class="content-area">
                      <a href="service-details.html">
                          <h5 class="title">Home Renovation</h5>
                      </a>
                      <p class="disc">Crsus cras faest diam natoe
                          elementum mattis lectus</p>
                      <a href="service-details.html" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                  </div>
              </div>
              <!-- single service area end-->
          </div>
          <div class="col-lg-4 col-md-6">
              <!-- single service area start-->
              <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                  <a href="service-details.html" class="thumbnail-area">
                      <img src="{{ asset('frontend') }}/assets/images/service/02.jpg" alt="Service-area">
                  </a>
                  <div class="content-area">
                      <a href="service-details.html">
                          <h5 class="title">Interior Paint</h5>
                      </a>
                      <p class="disc">Crsus cras faest diam natoe
                          elementum mattis lectus</p>
                      <a href="service-details.html" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                  </div>
              </div>
              <!-- single service area end-->
          </div>
          <div class="col-lg-4 col-md-6">
              <!-- single service area start-->
              <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                  <a href="service-details.html" class="thumbnail-area">
                      <img src="{{ asset('frontend') }}/assets/images/service/03.jpg" alt="Service-area">
                  </a>
                  <div class="content-area">
                      <a href="service-details.html">
                          <h5 class="title">Kitchen Remodel</h5>
                      </a>
                      <p class="disc">Crsus cras faest diam natoe
                          elementum mattis lectus</p>
                      <a href="service-details.html" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                  </div>
              </div>
              <!-- single service area end-->
          </div>
          <div class="col-lg-4 col-md-6">
              <!-- single service area start-->
              <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                  <a href="service-details.html" class="thumbnail-area">
                      <img src="{{ asset('frontend') }}/assets/images/service/04.jpg" alt="Service-area">
                  </a>
                  <div class="content-area">
                      <a href="service-details.html">
                          <h5 class="title">Bathroom Design</h5>
                      </a>
                      <p class="disc">Crsus cras faest diam natoe
                          elementum mattis lectus</p>
                      <a href="service-details.html" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                  </div>
              </div>
              <!-- single service area end-->
          </div>
          <div class="col-lg-4 col-md-6">
              <!-- single service area start-->
              <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                  <a href="service-details.html" class="thumbnail-area">
                      <img src="{{ asset('frontend') }}/assets/images/service/05.jpg" alt="Service-area">
                  </a>
                  <div class="content-area">
                      <a href="service-details.html">
                          <h5 class="title">Apartment Work</h5>
                      </a>
                      <p class="disc">Crsus cras faest diam natoe
                          elementum mattis lectus</p>
                      <a href="service-details.html" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                  </div>
              </div>
              <!-- single service area end-->
          </div>
          <div class="col-lg-4 col-md-6">
              <!-- single service area start-->
              <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                  <a href="service-details.html" class="thumbnail-area">
                      <img src="{{ asset('frontend') }}/assets/images/service/06.jpg" alt="Service-area">
                  </a>
                  <div class="content-area">
                      <a href="service-details.html">
                          <h5 class="title">Roofing Service</h5>
                      </a>
                      <p class="disc">Crsus cras faest diam natoe
                          elementum mattis lectus</p>
                      <a href="service-details.html" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                  </div>
              </div>
              <!-- single service area end-->
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
                          <span class="pre-title">Renovation Company</span>
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
                  <div class="bg-title">
                      Meet Leaders
                  </div>
                  <span class="pre-title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                      Experts Members
                  </span>
                  <h3 class="title" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                      Meet the leaders of our <br> dynamic company
                  </h3>
              </div>
          </div>
      </div>
      <div class="row mt--50">
          <div class="col-lg-4 col-md-6">
              <!-- single team one start -->
              <div class="single-team-three">
                  <div class="thumbnail">
                      <img src="{{ asset('frontend') }}/assets/images/team/03.jpg" alt="team_area-start">
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
                          CEO
                      </span>
                      <a href="team-details.html">
                          <h6 class="name">DANIEL SMITH</h6>
                      </a>
                  </div>
              </div>
              <!-- single team one start -->
          </div>
          <div class="col-lg-4 col-md-6">
              <!-- single team one start -->
              <div class="single-team-three">
                  <div class="thumbnail">
                      <img src="{{ asset('frontend') }}/assets/images/team/04.jpg" alt="team_area-start">
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
                          PROJECT MANAGER
                      </span>
                      <a href="team-details.html">
                          <h6 class="name">Justice SMITH</h6>
                      </a>
                  </div>
              </div>
              <!-- single team one start -->
          </div>
          <div class="col-lg-4 col-md-6">
              <!-- single team one start -->
              <div class="single-team-three">
                  <div class="thumbnail">
                      <img src="{{ asset('frontend') }}/assets/images/team/05.jpg" alt="team_area-start">
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
                          ARCHITECT
                      </span>
                      <a href="team-details.html">
                          <h6 class="name">MArk SMITH</h6>
                      </a>
                  </div>
              </div>
              <!-- single team one start -->
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
                                  <span class="counter">25</span>
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
                              <h2 class="title parcent">
                                  <span class="counter">80</span>
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
                                  <span class="counter">100</span>
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
                                  <span class="counter">38</span>
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
  <div class="rts-case-study-area rts-section-gapTop">
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
  </div>
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
                      Renovation Company
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

<!-- meet leaders area start -->
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
<!-- meet leaders area end -->

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