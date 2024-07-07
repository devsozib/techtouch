@extends('frontend.layouts.app')
@section('content')
    <!-- Bread-Crumb style two -->
    <!-- rts breadcrumba area start -->
    {{-- <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <!-- bread crumb inner wrapper -->
                  <div class="breadcrumb-inner text-center">
                      <h1 class="title">Contact Us</h1>
                      <div class="meta">
                          <a href="#" class="prev">Home /</a>
                          <a href="#" class="next">Contact Us</a>
                      </div>
                  </div>
                  <!-- bread crumb inner wrapper end -->
              </div>
          </div>
      </div>
  </div> --}}
  <!-- rts breadcrumba area end -->
  <!-- Bread-Crumb style two End -->

  <!-- rts contact area start -->
  <div class="rts-contact-area-m rts-section-gap">
      <div class="container">
          <div class="row g-24">
              <!-- single contact area -->
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="single-contact-one-inner">
                      
                      <div class="content">
                          <div class="icone">
                              <img src="{{ asset('frontend') }}/assets/images/contact/shape/01.svg" alt="">
                          </div>
                          <div class="info">
                              <span>DHAKA: 4/C, GODHULI TOWER, SHORNALI GARDEN, MIRPUR-13, DHAKA-1216, BANGLADESH.</span>                              
                          </div>
                      </div>
                  </div>
              </div>
              <!-- single contact area end -->
              <!-- single contact area -->
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="single-contact-one-inner">
                      <div class="content">
                          <div class="icone">
                              <img src="{{ asset('frontend') }}/assets/images/contact/shape/02.svg" alt="">
                          </div>
                          <div class="info">
                              <span>MAke A Quote</span>
                              <a href="mailto:someone@example.com">
                                  <h5>info@finbiz.com</h5>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- single contact area end -->
              <!-- single contact area -->
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="single-contact-one-inner">
                      <div class="content">
                          <div class="icone">
                              <img src="{{ asset('frontend') }}/assets/images/contact/shape/03.svg" alt="">
                          </div>
                          <div class="info">
                              <span>Service Station</span>
                              <a href="#">
                                  <h5>25 Hilton Street.</h5>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- single contact area end -->
          </div>
      </div>
  </div>
  <!-- rts contact area end -->

  <!-- contact form area strt -->
  <div class="rts-contact-page-form-area contact-2 rts-section-gapBottom">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.288851207937!2d90.47855065!3d23.798243149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1663151706353!5m2!1sen!2sbd" width="600" height="640" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
              </div>
              <div class="col-lg-6">
                  <div class="mian-wrapper-form">
                      <div class="title-mid-wrapper-home-two" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                          <span class="pre">Get In Touch</span>
                          <h2 class="title">Let’s Get in Touch</h2>
                      </div>
                      <form id="contact" action="#" class="appoinment-form mt--40">
                          <div class="input-half-wrapper">
                              <div class="single-input">
                                  <input type="text" placeholder="Your Name" required>
                              </div>
                              <div class="single-input">
                                  <input type="email" placeholder="Email Address" required>
                              </div>
                          </div>
                          <select>
                              <option data-display="Select">Select an option</option>
                              <option value="1">Some option</option>
                              <option value="2">Another option</option>
                              <option value="3" disabled>A disabled option</option>
                              <option value="4">Potato</option>
                          </select>
                          <div class="input-half-wrapper mt--25 mb--30">
                              <div class="single-input">
                                  <input placeholder="Select Date" type="text" name="checkIn" id="datepicker" value="" class="calendar" required>
                              </div>
                              <div class="single-input">
                                  <input type="text" id="timepicker" placeholder="Select Date" />
                              </div>
                          </div>
                          <textarea class="form-control mb--30" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                          <button type="submit" class="rts-btn btn-primary">SUBMIT MESSAGE</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- contact form area end -->
@endsection