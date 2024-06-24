@extends('frontend.layouts.app')
@section('content')
<div class="mad-content">
    <div class="container">
      <div class="content-element-4">
        <h1 class="align-center">Donec in Velit Vel</h1>
        <div class="content-element-4">
          <div class="mad-img"><img src="images/1488x960_img1.jpg" alt=""></div>
        </div>
        <div class="content-element-4">
          <div class="mad-img"><img src="images/1488x1224_img1.jpg" alt=""></div>
        </div>
        <div class="content-element-4">
          <div class="mad-img"><img src="images/1488x760_img1.jpg" alt=""></div>
        </div>
      </div>
      <div class="content-element-main">
        <div class="row hr-size-1">
          <div class="col-xl-8">
            <h4 class="mad-title">Donec in Velit Vel</h4>
            <p class="content-element-4"> Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor,
              dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat.
              Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget,
              malesuada at, neque. Duis ac turpis. Donec sit amet eros. </p>
            <a href="pages_donate.html" class="btn btn-big"><span>Donate</span> <i class="icon"><img src="{{ asset('frontend') }}/charity_icons_svg/heart.svg" alt=""></i></a>
          </div>
          <div class="col-xl-4">
            <div class="mad-rest-info size-2">
              <div class="mad-rest-info-item">
                <span class="mad-rest-title">Date</span>
                <span>April 15, 2022</span>
              </div>
              <div class="mad-rest-info-item">
                <span class="mad-rest-title">Category</span>
                <span><a href="portfolio_grid_3_cols.html" class="mad-link">Fundraising</a></span>
              </div>
              <div class="mad-rest-info-item">
                <span class="mad-rest-title">Author</span>
                <span><a href="portfolio_grid_3_cols.html" class="mad-link">Monkeysan</a></span>
              </div>
              <div class="mad-rest-info-item">
                <span class="mad-rest-title">Tags</span>
                <div class="tagcloud">
                  <a href="portfolio_grid_2_cols.html">Child</a>
                  <a href="portfolio_grid_2_cols.html">fundrasing</a>
                  <a href="portfolio_grid_2_cols.html">Health</a>
                </div>
              </div>
              <div class="mad-rest-info-item">
                <span class="mad-rest-title">Share This</span>
                <div class="mad-social-icons size-small">
                  <ul>
                    <li>
                      <a href="https://facebook.com" target="blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="https://instagram.com" target="blank"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="https://twitter.com" target="blank"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="https://youtube.com"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                      <a href="https://linkedin.com" target="blank"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ul class="mad-pagination">
          <li>
            <a href="portfolio_single_slider.html" class="prev mad-arrows"><span class="material-icons">
                arrow_back_ios </span><span>Previous</span></a>
          </li>
          <li>
            <a href="portfolio_grid_3_cols.html"><svg xmlns="http://www.w3.org/2000/svg" width="38" height="24" viewBox="0 0 38 24" fill="none" class="svg replaced-svg">
<rect x="15" y="1" width="8" height="8" rx="1" fill="white" stroke="#F36A4F" stroke-width="2"></rect>
<rect x="1" y="1" width="8" height="8" rx="1" fill="white" stroke="#F36A4F" stroke-width="2"></rect>
<rect x="15" y="15" width="8" height="8" rx="1" fill="white" stroke="#F36A4F" stroke-width="2"></rect>
<rect x="1" y="15" width="8" height="8" rx="1" fill="white" stroke="#F36A4F" stroke-width="2"></rect>
<rect x="29" y="1" width="8" height="8" rx="1" fill="white" stroke="#F36A4F" stroke-width="2"></rect>
<rect x="29" y="15" width="8" height="8" rx="1" fill="white" stroke="#F36A4F" stroke-width="2"></rect>
</svg></a>
          </li>
          <li>
            <a href="portfolio_single_slider.html" class="next mad-arrows"><span class="material-icons">
                arrow_forward_ios </span><span>Next</span></a>
          </li>
        </ul>
      </div>
      <h2 class="mad-title align-center">Related Portfolio Posts</h2>
      <div class="mad-portfolio item-col-3">
        <div class="mad-col">
          <div class="mad-gallery-item">
            <a href="portfolio_single_grid.html" class="mad-gallery-media"><img src="images/475x368_img4.jpg" alt=""></a>
            <div class="mad-gallery-desc">
              <a href="portfolio_grid_3_cols.html" class="mad-gallery-cat">Fundraising</a>
              <h4 class="mad-gallery-name">
                <a href="portfolio_grid_3_cols.html">Vestibulum Ante</a>
              </h4>
            </div>
          </div>
        </div>
        <div class="mad-col">
          <div class="mad-gallery-item">
            <a href="portfolio_single_grid.html" class="mad-gallery-media"><img src="images/475x368_img8.jpg" alt=""></a>
            <div class="mad-gallery-desc">
              <a href="portfolio_grid_3_cols.html" class="mad-gallery-cat">Fundraising</a>
              <h4 class="mad-gallery-name">
                <a href="portfolio_grid_3_cols.html">Fusce Euismod</a>
              </h4>
            </div>
          </div>
        </div>
        <div class="mad-col">
          <div class="mad-gallery-item">
            <a href="portfolio_single_grid.html" class="mad-gallery-media"><img src="images/475x368_img9.jpg" alt=""></a>
            <div class="mad-gallery-desc">
              <a href="portfolio_grid_3_cols.html" class="mad-gallery-cat">Fundraising</a>
              <h4 class="mad-gallery-name">
                <a href="portfolio_grid_3_cols.html">Nemo Enim Ipsam</a>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection