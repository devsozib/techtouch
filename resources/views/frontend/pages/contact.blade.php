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
  <div class="rts-contact-area-m">
      <div class="container">
          <div class="row g-24">
              <!-- single contact area -->
              <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d449.62495673815215!2d88.639653!3d25.638137!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fb53ffb62f4b5f%3A0x53ed174d50a6e4f9!2sTECH%20TOUCH%20AUTOMATION%20%26%20ENGINEERING!5e0!3m2!1sen!2sus!4v1720370509428!5m2!1sen!2sus"  height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  {{-- <div class="single-contact-one-inner"> --}}
                      
                      {{-- <div class="content">
                          <div class="icone">
                              <img src="{{ asset('frontend') }}/assets/images/contact/shape/01.svg" alt="">
                          </div>
                          <div class="info">
                              <span>DHAKA: 4/C, GODHULI TOWER, SHORNALI GARDEN, MIRPUR-13, DHAKA-1216, BANGLADESH.</span>                              
                          </div>
                      </div> --}}
                  {{-- </div> --}}
              </div>
              <!-- single contact area end -->
              <!-- single contact area -->
              {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
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
              </div> --}}
              <!-- single contact area end -->
              <!-- single contact area -->
              {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
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
              </div> --}}
              <!-- single contact area end -->
          </div>
      </div>
  </div>
  <!-- rts contact area end -->

  <!-- contact form area strt -->
  <div class="rts-contact-page-form-area contact-2 rts-section-gapBottom">
      <div class="container">
          <div class="row">
              <div class="col-lg-6" id="contact">
                  {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.288851207937!2d90.47855065!3d23.798243149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1663151706353!5m2!1sen!2sbd" width="600" height="640" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                  </iframe> --}}
                   <h4> Contact Info</h4>
                   <p> Have you a question about our features, service pricing or anything else our team is ready to answer all your questions.</p>
                  <div class="single-number">
                    <h6 class="title">Office Location</h6>
                    <div class="number">
                        <strong>Head Office</strong><br>
                        <i class="fa-light fa-location-dot"></i>
                        <a class="mt-dec" href="https://www.google.com/maps?ll=25.638148,88.639657&z=21&t=m&hl=en-US&gl=US&mapclient=embed&cid=6047515495461479673"> 671/1, Kalitola, Sadar Dinajpur, Dinajpur-5200, Bangladesh.</a>
                    </div>      
                    <div class="number">
                        <strong>Branch Office</strong><br>
                        <i class="fa-light fa-location-dot"></i>
                        <a class="mt-dec" href="https://www.google.com/maps?ll=25.638148,88.639657&z=21&t=m&hl=en-US&gl=US&mapclient=embed&cid=6047515495461479673">Dhaka:4/C, Godhuli Tower, Shornali Garden, Mirpur-13, Dhaka-1216, Bangladesh.</a><br><br>

                        <i class="fa-light fa-location-dot"></i>
                        <a class="mt-dec" href="https://www.google.com/maps?ll=25.638148,88.639657&z=21&t=m&hl=en-US&gl=US&mapclient=embed&cid=6047515495461479673">Rangpur: Road-1, House-10, Nawab Bazar Road, Munshipara, Rangpur-5400, Bangladesh.</a><br><br>

                        <i class="fa-light fa-location-dot"></i>
                        <a class="mt-dec" href="https://www.google.com/maps?ll=25.638148,88.639657&z=21&t=m&hl=en-US&gl=US&mapclient=embed&cid=6047515495461479673">Pabna: 534/7, Purbo Tengri, Ishordi, Pabna, Bangladesh.</a><br><br>
                        <div class="number">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:+880 1711-271234">+880 1711-271234</a>
                        </div><br>
                        <div class="number">
                            <i class="fa-light fa-envelope"></i>
                            <a href="mailto:info@techtouch-bd.com">info@techtouch-bd.com</a>
                        </div>
                        <div class="rts-social-wrapper-three">
                            <ul>
                                <li data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li data-sal="slide-up" data-sal-delay="400" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>                           
                    {{-- <a href="{{ route('contact') }}"><small>See others office address</small></a> --}}
                </div>
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