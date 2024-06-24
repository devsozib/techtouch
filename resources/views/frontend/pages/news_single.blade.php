@extends('frontend.layouts.app')
@section('content')

  <div class="mad-content">
    <div class="content-element-8">
      <div class="mad-media-section">
        <div class="mad-media-element with-overlay" data-bg-image-src="{{ asset('frontend') }}/images/news/{{ $singleNews->thumbnail_image }}" style="background-image: url({{ asset('frontend') }}/images/news/{{ $singleNews->thumbnail_image }});">
          <div class="mad-media-inner align-center">
            <div class="mad-pre-title">
              <a href="#">{{ $singleNews->created_at }}</a> <span>-</span> <a href="#">{{ $singleNews->name }}</a>              
            </div>
            <h1 class="mad-title">{{ $singleNews->title }}</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="content-element-main">
        <div class="mad-entities single-event type-2">
          <!--================ Entity ================-->
          <article class="mad-entity mad-entity-single content-element-8">
            <div class="mad-entity-content">
              <div class="mad-entity-header">
                <div class="content-element-7">
                  <div class="mad-dropcap style-2 color-2 mad-text-medium content-element-4">
                    <p> {!! $singleNews->short_description !!} </p>
                  </div>
                          
              </div>
            </div>
          </article>
          <!--================ End of Entity ================-->
        </div>
      </div>
      {{-- <div class="content-element-main">
        <h2>Related Articles</h2>
        <div class="mad-entities type-2 item-col-3">
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="{{ route('news_single') }}"><img src="{{ asset('frontend') }}/images/IMG_20240315_175430_1.jpg" alt="" /></a>
                </div>
                <div class="mad-entity-content">
                  <div class="mad-entity-header">
                    <div class="mad-entity-tags">
                      <a href="{{ route('news_single') }}">August 26, 2022 </a> - <a
                        href="{{ route('news_single') }}">Disasters</a>
                    </div>
                    <h6 class="mad-entity-title">
                      <a href="{{ route('news_single') }}"> হাফেজদের নিয়ে ইফতার মাহফিল</a>
                    </h6>
                    <p> বসুন্ধরা শুভসংঘের উদ্যোগে রাজশাহী জেলার গোদাগাড়ী উপজেলা শাখার আয়োজনে হাফেজদের নিয়ে ইফতার মাহফিল এর আয়োজন করা হয়েছে। শুক্রবার (১৫ মার্চ ) গোদাগাড়ী  উপজেলার      
                        নুরানী কিন্ডার গার্টেন ও হাফেজিয়া মাদরাসা  ইফতার মাহফিল করান শুভসংঘের সদস্যরা। উপস্থিত ছিলেন মোঃ আব্দুল মালেক সহকারি শিক্ষক গোদাগাড়ী সরঃ উচ্চ বিদ্যাঃ ও কলেজ
                        আরো ছিলেন অত্র প্রতিষ্ঠানের প্রধান শিক্ষক আব্দুল খালেক 
                    </p>
                    <div class="mad-entity-footer">
                      <a href="{{ route('news_single') }}" class="mad-text-link"><span>Read More</span> <span
                          class="icon material-icons"> arrow_forward_ios </span></a>
                      <div class="mad-share-wrap">
                        <a href="#" class="mad-text-link share no-arrow"><span>Share</span> <img
                            src="charity_icons_svg/share.svg" class="svg" alt="" />
                        </a>
                        <div class="mad-social-icons size-small">
                          <ul>
                            <li>
                              <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                              <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                              <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                              <a href="https://www.youtube.com/channel/UCHLY0iBPh03oLba9Hc0ABMg"><i
                                  class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                              <a href="https://www.linkedin.com/in/sergii-velykorodnov-714b5a25/"><i
                                  class="fab fa-linkedin-in"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="blog_single_sidebar.html"><img src="{{ asset('frontend') }}/images/SAVE_20240316_180255.jpg" alt="" /></a>
                </div>
                <div class="mad-entity-content">
                  <div class="mad-entity-header">
                    <div class="mad-entity-tags">
                      <a href="blog_list_sidebar.html">August 22, 2022 </a> - <a href="blog_list_sidebar.html">Child
                        Protection, survival</a>
                    </div>
                    <h6 class="mad-entity-title">
                      <a href="blog_single_sidebar.html">অসহায় মানুষের পাশে ইফতার নিয়ে হাজির বসুন্ধরা শুভসংঘ, ঢাবি শাখার শুভার্থীরা।</a>
                    </h6>
                    <p> 
                        পবিত্র রমজান মাস উপলক্ষে বসুন্ধরা শুভসংঘ, ঢাকা বিশ্ববিদ্যালয় শাখার পক্ষ থেকে ১৬ মার্চ, ২০২৪ তারিখে টিএসসি প্রাঙ্গণে অসহায় মানুষদের জন্য ইফতারের আয়োজন করা হয়।
                        রমজান মাস মুসলিম সম্প্রদায়ের মানুষের কাছে সবচেয়ে বেশি আবেগ এবং পাশাপাশি আনন্দেরও মাস। এই মাস খুবই বরকতপূর্ণ সময়। ধনী গরিব নির্বিশেষে সকল পেশার ধর্মপ্রাণ মুসলমানগণ রোজা রাখেন। তবে পার্থক্যটা হলো সেহরি এবং ইফতারে খাবারের মধ্যে। সেই পার্থক্যটাই কিছুটা নিরসন করতে এই ক্ষুদ্র প্রয়াস ঢাবি শুভার্থীদর। 
                         </p>
                    <div class="mad-entity-footer">
                      <a href="blog_single.html" class="mad-text-link"><span>Read More</span> <span
                          class="icon material-icons"> arrow_forward_ios </span></a>
                      <div class="mad-share-wrap">
                        <a href="#" class="mad-text-link share no-arrow"><span>Share</span> <img
                            src="charity_icons_svg/share.svg" class="svg" alt="" />
                        </a>
                        <div class="mad-social-icons size-small">
                          <ul>
                            <li>
                              <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                              <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                              <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                              <a href="#"><i
                                  class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                              <a href="#"><i
                                  class="fab fa-linkedin-in"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="blog_single_sidebar.html"><img src="{{ asset('frontend') }}/images/1710581198-f7fc6945951c05cf639260b2330d1b3c.webp" alt="" /></a>
                </div>
                <div class="mad-entity-content">
                  <div class="mad-entity-header">
                    <div class="mad-entity-tags">
                      <a href="blog_list_sidebar.html">August 22, 2022 </a> - <a href="blog_list_sidebar.html">Child
                        Protection</a>
                    </div>
                    <h6 class="mad-entity-title">
                      <a href="blog_single_sidebar.html">পঞ্চগড়ে বসুন্ধরা শুভসংঘের ইফতার ও কিরাত প্রতিযোগিতা</a>
                    </h6>
                    <p>পঞ্চগড়ের তেঁতুলিয়া উপজেলায় মাহে রমজান উপলক্ষে শতাধিক কোরআনের পাখিকে নিয়ে হামদ নাত ও কিরাত প্রতিযোগিতা অনুষ্ঠিত হয়েছে। শুক্রবার (১৫ মার্চ) বিকেলে উপজেলার খয়খাটপাড়া নুরানিয়া হাফেজিয়া মাদরাসা ও এতিমখানায় এই আয়োজন করে বসুন্ধরা শুভসংঘ তেঁতুলিয়া উপজেলা শাখা। </p>
                    <div class="mad-entity-footer">
                      <a href="blog_single.html" class="mad-text-link"><span>Read More</span> <span
                          class="icon material-icons"> arrow_forward_ios </span></a>
                      <div class="mad-share-wrap">
                        <a href="#" class="mad-text-link share no-arrow"><span>Share</span> <img
                            src="charity_icons_svg/share.svg" class="svg" alt="" />
                        </a>
                        <div class="mad-social-icons size-small">
                          <ul>
                            <li>
                              <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                              <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                              <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                              <a href="#"><i
                                  class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                              <a href="#/"><i
                                  class="fab fa-linkedin-in"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
          </div>
      </div> --}}
   
    </div>
  </div>
@endsection