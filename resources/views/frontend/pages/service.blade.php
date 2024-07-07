@extends('frontend.layouts.app')
@section('content')

<!-- our service area start -->
<div class="rts-service-area-three" style="padding-top:100px">
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


  <!-- service accordion area start -->
  <div class="rts-accordion-area service">
      <div class="accordion-service-bg bg_image ptb--120 ptb_md--80 ptb_sm--60">
          <div class="container">
              <div class="row">
                  <div class="col-xl-6">
                      <div class="accordion-service-inner">
                          <div class="title-area-start" data-sal="slide-up" data-sal-delay="150" data-sal-duration="900">
                              <span class="sub color-primary">JUST A CONSULTANCY</span>
                              <h2 class="title">We know how to manage
                                  business globally</h2>
                          </div>
                          <div class="accordion-area">
                              <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingOne">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                              Making Easy Business Growth
                                          </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                              Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                          </div>
                                      </div>
                                  </div>
                                  <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingTwo">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                              Business Solution Model
                                          </button>
                                      </h2>
                                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                              Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                          </div>
                                      </div>
                                  </div>
                                  <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingThree">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                              Finbiz Company Solution
                                          </button>
                                      </h2>
                                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                              Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                          </div>
                                      </div>
                                  </div>
                                  <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingFour">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                              Management Process
                                          </button>
                                      </h2>
                                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                              Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                          </div>
                                      </div>
                                  </div>
                                  <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingFive">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                              Managing Invesment
                                          </button>
                                      </h2>
                                      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                              Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- service accordion area end -->
@endsection