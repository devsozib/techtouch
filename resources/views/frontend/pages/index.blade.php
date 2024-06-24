@extends('frontend.layouts.app')
@section('content')
<div class="main-contain offcontents">
  <div class="container">
    <div id="content">
      <div class="row padding-">
        <div class="col-lg-12 ">
          <article id="post-2728" class="post-2728 page type-page status-publish hentry">
            <div class="entry-content">
              <div data-elementor-type="wp-page" data-elementor-id="2728" class="elementor elementor-2728">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-e0efceb elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e0efceb" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4cb3f03" data-id="4cb3f03" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-a675661 elementor-widget__width-initial elementor-widget elementor-widget-react-heading" data-id="a675661" data-element_type="widget" data-widget_type="react-heading.default">
                          <div class="elementor-widget-container">
                            <div class="react-heading default  title-border-no">
                              <div class="title-inner no">
                                <span class="sub-text" data-aos-delay="200" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Hospitality &amp; Leisure</span>
                                <h2 class="title" data-aos-delay="300" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">WHERE FLUID FORM DESCRIBES</h2>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-8f8232c elementor-widget elementor-widget-rts-animated-heading" data-id="8f8232c" data-element_type="widget" data-widget_type="rts-animated-heading.default">
                          <div class="elementor-widget-container">
                            <div class="banner-marketing stroke-yes">
                              <div class="banner-title">
                                <div class="title">
                                  <div class="changebox">
                                    <span class="word">Design</span>
                                    <span class="word">Function</span>
                                    <span class="word">Developer</span>
                                    <span class="word">Rooms</span>
                                    <span class="word">Interior</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <script>
                              jQuery(document).ready(function() {
                                var words = document.getElementsByClassName('word');
                                var wordArray = [];
                                var currentWord = 0;
                                words[currentWord].style.opacity = 1;
                                for (var i = 0; i < words.length; i++) {
                                  splitLetters(words[i]);
                                }

                                function changeWord() {
                                  var cw = wordArray[currentWord];
                                  var nw = currentWord == words.length - 1 ? wordArray[0] : wordArray[currentWord + 1];
                                  for (var i = 0; i < cw.length; i++) {
                                    animateLetterOut(cw, i);
                                  }
                                  for (var i = 0; i < nw.length; i++) {
                                    nw[i].className = 'letter behind';
                                    nw[0].parentElement.style.opacity = 1;
                                    animateLetterIn(nw, i);
                                  }
                                  currentWord = (currentWord == wordArray.length - 1) ? 0 : currentWord + 1;
                                }

                                function animateLetterOut(cw, i) {
                                  setTimeout(function() {
                                    cw[i].className = 'letter out';
                                  }, i * 80);
                                }

                                function animateLetterIn(nw, i) {
                                  setTimeout(function() {
                                    nw[i].className = 'letter in';
                                  }, 340 + (i * 80));
                                }

                                function splitLetters(word) {
                                  var content = word.innerHTML;
                                  word.innerHTML = '';
                                  var letters = [];
                                  for (var i = 0; i < content.length; i++) {
                                    var letter = document.createElement('span');
                                    letter.className = 'letter';
                                    letter.innerHTML = content.charAt(i);
                                    word.appendChild(letter);
                                    letters.push(letter);
                                  }
                                  wordArray.push(letters);
                                }
                                changeWord();
                                setInterval(changeWord, 4000);
                              });
                            </script>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-8014534 elementor-widget__width-initial elementor-widget elementor-widget-topbar-icon-list" data-id="8014534" data-element_type="widget" data-widget_type="topbar-icon-list.default">
                          <div class="elementor-widget-container">
                            <div class="rt-features-list-content">
                              <ul class="rt-features-list separator_no border_no rotate_no">
                                <li>
                                  <div class="icon"></div>
                                  <div class="query-list">
                                    <span class="sub-text">SPORTS FACIITES</span>
                                    <span class="text-heading">BUILDING, UNIVERSITY OF CYPRUS /2015</span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-6ef72c4 elementor-widget elementor-widget-rt-linedraw" data-id="6ef72c4" data-element_type="widget" data-widget_type="rt-linedraw.default">
                          <div class="elementor-widget-container">
                            <div class="rt-line-draw">
                              <div class="rts-to-bottom-start">
                                <a href="#about" class="active"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-517fe59 elementor-section-content-top elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="517fe59" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-571cc9d" data-id="571cc9d" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-d09dda9 elementor-section-full_width elementor-section-content-top elementor-section-height-default elementor-section-height-default" data-id="d09dda9" data-element_type="section" id="about">
                          <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-09b6dc0" data-id="09b6dc0" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-813eb9b elementor-widget elementor-widget-rt-react-image" data-id="813eb9b" data-element_type="widget" data-widget_type="rt-react-image.default">
                                  <div class="elementor-widget-container">
                                    <div class="react-image ">
                                      <img decoding="async" class="react-multi-image   " src="wp-content/uploads/2023/03/about2.webp" alt="image" />
                                    </div>
                                  </div>
                                </div>
                                <div class="elementor-element elementor-element-bac488d elementor-absolute elementor-widget elementor-widget-rt-react-image" data-id="bac488d" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="rt-react-image.default">
                                  <div class="elementor-widget-container">
                                    <div class="react-image yes">
                                      <img decoding="async" class="react-multi-image veritcal  " src="wp-content/uploads/2023/03/about3.webp" alt="image" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c669624" data-id="c669624" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-d6967fa elementor-widget__width-initial elementor-widget elementor-widget-react-heading" data-id="d6967fa" data-element_type="widget" data-widget_type="react-heading.default">
                                  <div class="elementor-widget-container">
                                    <div class="react-heading default  title-border-">
                                      <div class="title-inner ">
                                        <span class="sub-text" data-aos-delay="200" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">RENOVATION COMPANY</span>
                                        <h2 class="title" data-aos-delay="300" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Our thoughts for developing your stylish life Level.</h2>
                                      </div>
                                      <span class="watermark">COMPANY</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="elementor-element elementor-element-5e7af0d elementor-default-tab elementor-tabs-view-horizontal elementor-widget elementor-widget-tabs" data-id="5e7af0d" data-element_type="widget" data-widget_type="tabs.default">
                                  <div class="elementor-widget-container">
                                    <style>
                                      .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-wrapper {
                                        width: 25%;
                                        flex-shrink: 0
                                      }

                                      .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active {
                                        border-right-style: none
                                      }

                                      .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:after,
                                      .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:before {
                                        height: 999em;
                                        width: 0;
                                        right: 0;
                                        border-right-style: solid
                                      }

                                      .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:before {
                                        top: 0;
                                        transform: translateY(-100%)
                                      }

                                      .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:after {
                                        top: 100%
                                      }

                                      .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title {
                                        display: table-cell
                                      }

                                      .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active {
                                        border-bottom-style: none
                                      }

                                      .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:after,
                                      .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:before {
                                        bottom: 0;
                                        height: 0;
                                        width: 999em;
                                        border-bottom-style: solid
                                      }

                                      .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:before {
                                        right: 100%
                                      }

                                      .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:after {
                                        left: 100%
                                      }

                                      .elementor-widget-tabs .elementor-tab-content,
                                      .elementor-widget-tabs .elementor-tab-title,
                                      .elementor-widget-tabs .elementor-tab-title:after,
                                      .elementor-widget-tabs .elementor-tab-title:before,
                                      .elementor-widget-tabs .elementor-tabs-content-wrapper {
                                        border: 1px #d5d8dc
                                      }

                                      .elementor-widget-tabs .elementor-tabs {
                                        text-align: left
                                      }

                                      .elementor-widget-tabs .elementor-tabs-wrapper {
                                        overflow: hidden
                                      }

                                      .elementor-widget-tabs .elementor-tab-title {
                                        cursor: pointer;
                                        outline: var(--focus-outline, none)
                                      }

                                      .elementor-widget-tabs .elementor-tab-desktop-title {
                                        position: relative;
                                        padding: 20px 25px;
                                        font-weight: 700;
                                        line-height: 1;
                                        border: solid transparent
                                      }

                                      .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active {
                                        border-color: #d5d8dc
                                      }

                                      .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active:after,
                                      .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active:before {
                                        display: block;
                                        content: "";
                                        position: absolute
                                      }

                                      .elementor-widget-tabs .elementor-tab-desktop-title:focus-visible {
                                        border: 1px solid #000
                                      }

                                      .elementor-widget-tabs .elementor-tab-mobile-title {
                                        padding: 10px;
                                        cursor: pointer
                                      }

                                      .elementor-widget-tabs .elementor-tab-content {
                                        padding: 20px;
                                        display: none
                                      }

                                      @media (max-width:767px) {

                                        .elementor-tabs .elementor-tab-content,
                                        .elementor-tabs .elementor-tab-title {
                                          border-style: solid solid none
                                        }

                                        .elementor-tabs .elementor-tabs-wrapper {
                                          display: none
                                        }

                                        .elementor-tabs .elementor-tabs-content-wrapper {
                                          border-bottom-style: solid
                                        }

                                        .elementor-tabs .elementor-tab-content {
                                          padding: 10px
                                        }
                                      }

                                      @media (min-width:768px) {
                                        .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs {
                                          display: flex
                                        }

                                        .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-wrapper {
                                          flex-direction: column
                                        }

                                        .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-content-wrapper {
                                          flex-grow: 1;
                                          border-style: solid solid solid none
                                        }

                                        .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-content {
                                          border-style: none solid solid
                                        }

                                        .elementor-widget-tabs.elementor-tabs-alignment-center .elementor-tabs-wrapper,
                                        .elementor-widget-tabs.elementor-tabs-alignment-end .elementor-tabs-wrapper,
                                        .elementor-widget-tabs.elementor-tabs-alignment-stretch .elementor-tabs-wrapper {
                                          display: flex
                                        }

                                        .elementor-widget-tabs.elementor-tabs-alignment-center .elementor-tabs-wrapper {
                                          justify-content: center
                                        }

                                        .elementor-widget-tabs.elementor-tabs-alignment-end .elementor-tabs-wrapper {
                                          justify-content: flex-end
                                        }

                                        .elementor-widget-tabs.elementor-tabs-alignment-stretch.elementor-tabs-view-horizontal .elementor-tab-title {
                                          width: 100%
                                        }

                                        .elementor-widget-tabs.elementor-tabs-alignment-stretch.elementor-tabs-view-vertical .elementor-tab-title {
                                          height: 100%
                                        }

                                        .elementor-tabs .elementor-tab-mobile-title {
                                          display: none
                                        }
                                      }
                                    </style>
                                    <div class="elementor-tabs">
                                      <div class="elementor-tabs-wrapper" role="tablist">
                                        <div id="elementor-tab-title-9901" class="elementor-tab-title elementor-tab-desktop-title" aria-selected="true" data-tab="1" role="tab" tabindex="0" aria-controls="elementor-tab-content-9901" aria-expanded="false">Skills</div>
                                        <div id="elementor-tab-title-9902" class="elementor-tab-title elementor-tab-desktop-title" aria-selected="false" data-tab="2" role="tab" tabindex="-1" aria-controls="elementor-tab-content-9902" aria-expanded="false">Experience</div>
                                        <div id="elementor-tab-title-9903" class="elementor-tab-title elementor-tab-desktop-title" aria-selected="false" data-tab="3" role="tab" tabindex="-1" aria-controls="elementor-tab-content-9903" aria-expanded="false">Destination</div>
                                      </div>
                                      <div class="elementor-tabs-content-wrapper" role="tablist" aria-orientation="vertical">
                                        <div class="elementor-tab-title elementor-tab-mobile-title" aria-selected="true" data-tab="1" role="tab" tabindex="0" aria-controls="elementor-tab-content-9901" aria-expanded="false">Skills</div>
                                        <div id="elementor-tab-content-9901" class="elementor-tab-content elementor-clearfix" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-9901" tabindex="0" hidden="false">
                                          <p>
                                          <div data-elementor-type="wp-post" data-elementor-id="3042" class="elementor elementor-3042">
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-4b0a254 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4b0a254" data-element_type="section">
                                              <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5f2bf7f" data-id="5f2bf7f" data-element_type="column">
                                                  <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-c6de6da elementor-widget elementor-widget-text-editor" data-id="c6de6da" data-element_type="widget" data-widget_type="text-editor.default">
                                                      <div class="elementor-widget-container">
                                                        <style>
                                                          /*! elementor - v3.16.0 - 20-09-2023 */
                                                          .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                            background-color: #69727d;
                                                            color: #fff
                                                          }

                                                          .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                            color: #69727d;
                                                            border: 3px solid;
                                                            background-color: transparent
                                                          }

                                                          .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                            margin-top: 8px
                                                          }

                                                          .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                            width: 1em;
                                                            height: 1em
                                                          }

                                                          .elementor-widget-text-editor .elementor-drop-cap {
                                                            float: left;
                                                            text-align: center;
                                                            line-height: 1;
                                                            font-size: 50px
                                                          }

                                                          .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                            display: inline-block
                                                          }
                                                        </style>
                                                        <p>Uniquely repurpose client-centered imperatives without distinctive products <br />leverage existing fully researched. </p>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-dc86f28 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-topbar-icon-list" data-id="dc86f28" data-element_type="widget" data-widget_type="topbar-icon-list.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="rt-features-list-content">
                                                          <ul class="rt-features-list separator_no border_no rotate_no">
                                                            <li>
                                                              <div class="icon">
                                                                <i aria-hidden="true" class="fas fa-square-full"></i>
                                                              </div>
                                                              <div class="query-list">
                                                                <span class="sub-text">Great Quality Service</span>
                                                                <span class="text-heading"></span>
                                                              </div>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-210d107 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-topbar-icon-list" data-id="210d107" data-element_type="widget" data-widget_type="topbar-icon-list.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="rt-features-list-content">
                                                          <ul class="rt-features-list separator_no border_no rotate_no">
                                                            <li>
                                                              <div class="icon">
                                                                <i aria-hidden="true" class="fas fa-square-full"></i>
                                                              </div>
                                                              <div class="query-list">
                                                                <span class="sub-text">Great Quality Service</span>
                                                                <span class="text-heading"></span>
                                                              </div>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-f46d941 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-topbar-icon-list" data-id="f46d941" data-element_type="widget" data-widget_type="topbar-icon-list.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="rt-features-list-content">
                                                          <ul class="rt-features-list separator_no border_no rotate_no">
                                                            <li>
                                                              <div class="icon">
                                                                <i aria-hidden="true" class="fas fa-square-full"></i>
                                                              </div>
                                                              <div class="query-list">
                                                                <span class="sub-text">Professional Work Skills</span>
                                                                <span class="text-heading"></span>
                                                              </div>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-d1526c0 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-topbar-icon-list" data-id="d1526c0" data-element_type="widget" data-widget_type="topbar-icon-list.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="rt-features-list-content">
                                                          <ul class="rt-features-list separator_no border_no rotate_no">
                                                            <li>
                                                              <div class="icon">
                                                                <i aria-hidden="true" class="fas fa-square-full"></i>
                                                              </div>
                                                              <div class="query-list">
                                                                <span class="sub-text">Professional Work Skills</span>
                                                                <span class="text-heading"></span>
                                                              </div>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-dd9601f elementor-widget elementor-widget-react-button" data-id="dd9601f" data-element_type="widget" data-widget_type="react-button.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="react-button secondary_btn">
                                                          <a class="react_button left" href="#">
                                                            <span class="btn_text">Learn More</span>
                                                          </a>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </section>
                                          </div>
                                          </p>
                                        </div>
                                        <div class="elementor-tab-title elementor-tab-mobile-title" aria-selected="false" data-tab="2" role="tab" tabindex="-1" aria-controls="elementor-tab-content-9902" aria-expanded="false">Experience</div>
                                        <div id="elementor-tab-content-9902" class="elementor-tab-content elementor-clearfix" data-tab="2" role="tabpanel" aria-labelledby="elementor-tab-title-9902" tabindex="0" hidden="hidden">
                                          <p>
                                          <div data-elementor-type="wp-post" data-elementor-id="3155" class="elementor elementor-3155">
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-eb6d533 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="eb6d533" data-element_type="section">
                                              <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-54333a4" data-id="54333a4" data-element_type="column">
                                                  <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-502c8dd elementor-widget elementor-widget-text-editor" data-id="502c8dd" data-element_type="widget" data-widget_type="text-editor.default">
                                                      <div class="elementor-widget-container">
                                                        <p>Uniquely repurpose client-centered imperatives without distinctive products <br />leverage existing fully researched. </p>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-e1c9f5c elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-topbar-icon-list" data-id="e1c9f5c" data-element_type="widget" data-widget_type="topbar-icon-list.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="rt-features-list-content">
                                                          <ul class="rt-features-list separator_no border_no rotate_no">
                                                            <li>
                                                              <div class="icon">
                                                                <i aria-hidden="true" class="fas fa-square-full"></i>
                                                              </div>
                                                              <div class="query-list">
                                                                <span class="sub-text">Great Quality Service</span>
                                                                <span class="text-heading"></span>
                                                              </div>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-dab292d elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-topbar-icon-list" data-id="dab292d" data-element_type="widget" data-widget_type="topbar-icon-list.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="rt-features-list-content">
                                                          <ul class="rt-features-list separator_no border_no rotate_no">
                                                            <li>
                                                              <div class="icon">
                                                                <i aria-hidden="true" class="fas fa-square-full"></i>
                                                              </div>
                                                              <div class="query-list">
                                                                <span class="sub-text">Great Quality Service</span>
                                                                <span class="text-heading"></span>
                                                              </div>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-bb92ff0 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-topbar-icon-list" data-id="bb92ff0" data-element_type="widget" data-widget_type="topbar-icon-list.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="rt-features-list-content">
                                                          <ul class="rt-features-list separator_no border_no rotate_no">
                                                            <li>
                                                              <div class="icon">
                                                                <i aria-hidden="true" class="fas fa-square-full"></i>
                                                              </div>
                                                              <div class="query-list">
                                                                <span class="sub-text">Professional Work Skills</span>
                                                                <span class="text-heading"></span>
                                                              </div>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-dc482f7 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-topbar-icon-list" data-id="dc482f7" data-element_type="widget" data-widget_type="topbar-icon-list.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="rt-features-list-content">
                                                          <ul class="rt-features-list separator_no border_no rotate_no">
                                                            <li>
                                                              <div class="icon">
                                                                <i aria-hidden="true" class="fas fa-square-full"></i>
                                                              </div>
                                                              <div class="query-list">
                                                                <span class="sub-text">Professional Work Skills</span>
                                                                <span class="text-heading"></span>
                                                              </div>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-ae92b99 elementor-widget elementor-widget-react-button" data-id="ae92b99" data-element_type="widget" data-widget_type="react-button.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="react-button secondary_btn">
                                                          <a class="react_button left" href="#">
                                                            <span class="btn_text">Learn More</span>
                                                          </a>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </section>
                                          </div>
                                          </p>
                                        </div>
                                        <div class="elementor-tab-title elementor-tab-mobile-title" aria-selected="false" data-tab="3" role="tab" tabindex="-1" aria-controls="elementor-tab-content-9903" aria-expanded="false">Destination</div>
                                        <div id="elementor-tab-content-9903" class="elementor-tab-content elementor-clearfix" data-tab="3" role="tabpanel" aria-labelledby="elementor-tab-title-9903" tabindex="0" hidden="hidden">
                                          <p>
                                          <div data-elementor-type="wp-post" data-elementor-id="3160" class="elementor elementor-3160">
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-0d3a58d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0d3a58d" data-element_type="section">
                                              <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a8065eb" data-id="a8065eb" data-element_type="column">
                                                  <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-e6853a8 elementor-widget elementor-widget-text-editor" data-id="e6853a8" data-element_type="widget" data-widget_type="text-editor.default">
                                                      <div class="elementor-widget-container">
                                                        <p>Uniquely repurpose client-centered imperatives without distinctive products <br />leverage existing fully researched. </p>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-3d1fa0e elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-topbar-icon-list" data-id="3d1fa0e" data-element_type="widget" data-widget_type="topbar-icon-list.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="rt-features-list-content">
                                                          <ul class="rt-features-list separator_no border_no rotate_no">
                                                            <li>
                                                              <div class="icon">
                                                                <i aria-hidden="true" class="fas fa-square-full"></i>
                                                              </div>
                                                              <div class="query-list">
                                                                <span class="sub-text">Great Quality Service</span>
                                                                <span class="text-heading"></span>
                                                              </div>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-b52ae6d elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-topbar-icon-list" data-id="b52ae6d" data-element_type="widget" data-widget_type="topbar-icon-list.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="rt-features-list-content">
                                                          <ul class="rt-features-list separator_no border_no rotate_no">
                                                            <li>
                                                              <div class="icon">
                                                                <i aria-hidden="true" class="fas fa-square-full"></i>
                                                              </div>
                                                              <div class="query-list">
                                                                <span class="sub-text">Great Quality Service</span>
                                                                <span class="text-heading"></span>
                                                              </div>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-3ae2ef6 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-topbar-icon-list" data-id="3ae2ef6" data-element_type="widget" data-widget_type="topbar-icon-list.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="rt-features-list-content">
                                                          <ul class="rt-features-list separator_no border_no rotate_no">
                                                            <li>
                                                              <div class="icon">
                                                                <i aria-hidden="true" class="fas fa-square-full"></i>
                                                              </div>
                                                              <div class="query-list">
                                                                <span class="sub-text">Professional Work Skills</span>
                                                                <span class="text-heading"></span>
                                                              </div>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-1122bb3 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-topbar-icon-list" data-id="1122bb3" data-element_type="widget" data-widget_type="topbar-icon-list.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="rt-features-list-content">
                                                          <ul class="rt-features-list separator_no border_no rotate_no">
                                                            <li>
                                                              <div class="icon">
                                                                <i aria-hidden="true" class="fas fa-square-full"></i>
                                                              </div>
                                                              <div class="query-list">
                                                                <span class="sub-text">Professional Work Skills</span>
                                                                <span class="text-heading"></span>
                                                              </div>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-c78021d elementor-widget elementor-widget-react-button" data-id="c78021d" data-element_type="widget" data-widget_type="react-button.default">
                                                      <div class="elementor-widget-container">
                                                        <div class="react-button secondary_btn">
                                                          <a class="react_button left" href="#">
                                                            <span class="btn_text">Learn More</span>
                                                          </a>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </section>
                                          </div>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-c7d2718 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c7d2718" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1ea9543" data-id="1ea9543" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-57b224f elementor-widget elementor-widget-react-heading" data-id="57b224f" data-element_type="widget" data-widget_type="react-heading.default">
                          <div class="elementor-widget-container">
                            <div class="react-heading default  title-border-no">
                              <div class="title-inner no">
                                <h2 class="title" data-aos-delay="300" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Trusted Renovation Company</h2>
                              </div>
                              <div class="description" data-aos-delay="350" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                                <p>Imperdiet integer varius mauris neque rhoncus per, duis tortor fermentum viverra <br />quisque, nostra proin dignissim at senectus. </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-66de8ca" data-id="66de8ca" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-b600268 elementor-widget elementor-widget-rt-counter" data-id="b600268" data-element_type="widget" data-widget_type="rt-counter.default">
                          <div class="elementor-widget-container">
                            <div class="counter-top-area no style1">
                              <div class="rts-counter-list">
                                <div class="rts-counter-list-inner">
                                  <div class="count-text">
                                    <div class="count-number">
                                      <span data-letters="500" class="rs-counter"> 25</span>
                                      <span class="prefix">+</span>
                                    </div>
                                    <span class="title"> YEARS OF EXPERIENCE</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-fe705a6 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fe705a6" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-27a4ace" data-id="27a4ace" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2c14de6 elementor-widget elementor-widget-react-heading" data-id="2c14de6" data-element_type="widget" data-widget_type="react-heading.default">
                          <div class="elementor-widget-container">
                            <div class="react-heading default  title-border-no">
                              <div class="title-inner no">
                                <span class="sub-text" data-aos-delay="200" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">RENOVATION COMPANY</span>
                                <h2 class="title" data-aos-delay="300" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Our thoughts for developing your stylish life Level.</h2>
                              </div>
                              <span class="watermark">What We Do</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-82722b9 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="82722b9" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7174836" data-id="7174836" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-a9b71eb elementor-widget elementor-widget-rt-service-grid" data-id="a9b71eb" data-element_type="widget" data-widget_type="rt-service-grid.default">
                          <div class="elementor-widget-container">
                            <div class="react-addon-services services-style4">
                              <div class="rts-single-service-three sal-animate" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                                <a class="thumbnail-area">
                                  <img decoding="async" src="wp-content/uploads/2023/03/ser1.webp" alt="image" />
                                </a>
                                <div class="content-area">
                                  <a href="general-construction/index.html">
                                    <h5 class="title">Home Renovation</h5>
                                  </a>
                                  <p class="disc">Crsus cras faest diam natoe elementum mattis lectus</p>
                                  <a href="general-construction/index.html" class="read-more-btn"> Learn More <i class="rt rt-arrow-right"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-288d47e" data-id="288d47e" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-96df782 elementor-widget elementor-widget-rt-service-grid" data-id="96df782" data-element_type="widget" data-widget_type="rt-service-grid.default">
                          <div class="elementor-widget-container">
                            <div class="react-addon-services services-style4">
                              <div class="rts-single-service-three sal-animate" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                                <a class="thumbnail-area">
                                  <img decoding="async" src="wp-content/uploads/2023/03/02-6.webp" alt="image" />
                                </a>
                                <div class="content-area">
                                  <a href="virtual-design-build/index.html">
                                    <h5 class="title"> Interior Paint</h5>
                                  </a>
                                  <p class="disc">Crsus cras faest diam natoe elementum mattis lectus</p>
                                  <a href="virtual-design-build/index.html" class="read-more-btn"> Learn More <i class="rt rt-arrow-right"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ee7e68a" data-id="ee7e68a" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-d4c7b15 elementor-widget elementor-widget-rt-service-grid" data-id="d4c7b15" data-element_type="widget" data-widget_type="rt-service-grid.default">
                          <div class="elementor-widget-container">
                            <div class="react-addon-services services-style4">
                              <div class="rts-single-service-three sal-animate" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                                <a class="thumbnail-area">
                                  <img decoding="async" src="wp-content/uploads/2023/03/03-1.webp" alt="image" />
                                </a>
                                <div class="content-area">
                                  <a href="property-maintenance/index.html">
                                    <h5 class="title">Kitchen Remodel</h5>
                                  </a>
                                  <p class="disc">Crsus cras faest diam natoe elementum mattis lectus</p>
                                  <a href="property-maintenance/index.html" class="read-more-btn"> Learn More <i class="rt rt-arrow-right"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-5545ee6 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5545ee6" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-314aa12" data-id="314aa12" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-81d253c elementor-widget elementor-widget-rt-service-grid" data-id="81d253c" data-element_type="widget" data-widget_type="rt-service-grid.default">
                          <div class="elementor-widget-container">
                            <div class="react-addon-services services-style4">
                              <div class="rts-single-service-three sal-animate" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                                <a class="thumbnail-area">
                                  <img decoding="async" src="wp-content/uploads/2023/03/04.webp" alt="image" />
                                </a>
                                <div class="content-area">
                                  <a href="factory-design/index.html">
                                    <h5 class="title">Bathroom Design</h5>
                                  </a>
                                  <p class="disc">Crsus cras faest diam natoe elementum mattis lectus</p>
                                  <a href="factory-design/index.html" class="read-more-btn"> Learn More <i class="rt rt-arrow-right"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-694d2fb" data-id="694d2fb" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-633f0d1 elementor-widget elementor-widget-rt-service-grid" data-id="633f0d1" data-element_type="widget" data-widget_type="rt-service-grid.default">
                          <div class="elementor-widget-container">
                            <div class="react-addon-services services-style4">
                              <div class="rts-single-service-three sal-animate" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                                <a class="thumbnail-area">
                                  <img decoding="async" src="wp-content/uploads/2023/03/05.webp" alt="image" />
                                </a>
                                <div class="content-area">
                                  <a href="industrial-building/index.html">
                                    <h5 class="title">Apartment Work</h5>
                                  </a>
                                  <p class="disc">Crsus cras faest diam natoe elementum mattis lectus</p>
                                  <a href="industrial-building/index.html" class="read-more-btn"> Learn More <i class="rt rt-arrow-right"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b820a76" data-id="b820a76" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-e801a26 elementor-widget elementor-widget-rt-service-grid" data-id="e801a26" data-element_type="widget" data-widget_type="rt-service-grid.default">
                          <div class="elementor-widget-container">
                            <div class="react-addon-services services-style4">
                              <div class="rts-single-service-three sal-animate" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                                <a class="thumbnail-area">
                                  <img decoding="async" src="wp-content/uploads/2023/03/06.webp" alt="image" />
                                </a>
                                <div class="content-area">
                                  <a href="architectural-design/index.html">
                                    <h5 class="title">Roofing Service</h5>
                                  </a>
                                  <p class="disc">Crsus cras faest diam natoe elementum mattis lectus</p>
                                  <a href="architectural-design/index.html" class="read-more-btn"> Learn More <i class="rt rt-arrow-right"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-917f391 elementor-section-full_width elementor-section-height-min-height elementor-section-stretched elementor-section-height-default elementor-section-items-middle" data-id="917f391" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5e63293" data-id="5e63293" data-element_type="column">
                      <div class="elementor-widget-wrap"></div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-f0d24ad elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f0d24ad" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-723970c" data-id="723970c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-6e9b170 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="6e9b170" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1e7d968" data-id="1e7d968" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-bdf78e7 elementor-widget elementor-widget-react-heading" data-id="bdf78e7" data-element_type="widget" data-widget_type="react-heading.default">
                                  <div class="elementor-widget-container">
                                    <div class="react-heading default  title-border-no">
                                      <div class="title-inner no">
                                        <span class="sub-text" data-aos-delay="200" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">RENOVATION COMPANY</span>
                                        <h2 class="title" data-aos-delay="300" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Why People Choice Us?</h2>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="elementor-element elementor-element-40db517 elementor-widget elementor-widget-rt-custom-accordions" data-id="40db517" data-element_type="widget" data-widget_type="rt-custom-accordions.default">
                                  <div class="elementor-widget-container">
                                    <div class="rts-accordion style2" id="accordionExample21243">
                                      <div class="accordion-item">
                                        <div class="accordion-header" id="heading-212431">
                                          <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse212431" aria-expanded="true" aria-controls="collapse212431"> How much does a home remodeling cost? <span class="accordion-icon">
                                              <i aria-hidden="true" class="rt rt-plus-regular"></i>
                                            </span>
                                            <span class="accordion-icon-active">
                                              <i aria-hidden="true" class="rt rt-minus-regular"></i>
                                            </span>
                                          </button>
                                        </div>
                                        <div id="collapse212431" class="accordion-collapse collapse show" aria-labelledby="heading212431" data-bs-parent="#accordionExample21243">
                                          <div class="accordion-body"> Projects vary widely depending on your needs and budget. Our representatives visit with you to better understand your home remodeling needs. At construktion Home Improvements we do more than give you a quote. We provide you with the information you need to make the right decisions for your home. Our representatives take time to explain the details regarding your project.</div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <div class="accordion-header" id="heading-212432">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse212432" aria-expanded="false" aria-controls="collapse212432"> How much does a home Building cost? <span class="accordion-icon">
                                              <i aria-hidden="true" class="rt rt-plus-regular"></i>
                                            </span>
                                            <span class="accordion-icon-active">
                                              <i aria-hidden="true" class="rt rt-minus-regular"></i>
                                            </span>
                                          </button>
                                        </div>
                                        <div id="collapse212432" class="accordion-collapse collapse " aria-labelledby="heading212432" data-bs-parent="#accordionExample21243">
                                          <div class="accordion-body"> Projects vary widely depending on your needs and budget. Our representatives visit with you to better understand your home remodeling needs. At construktion Home Improvements we do more than give you a quote. We provide you with the information you need to make the right decisions for your home. Our representatives take time to explain the details regarding your project.</div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <div class="accordion-header" id="heading-212433">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse212433" aria-expanded="false" aria-controls="collapse212433"> What is included with a free remodeling estimate? <span class="accordion-icon">
                                              <i aria-hidden="true" class="rt rt-plus-regular"></i>
                                            </span>
                                            <span class="accordion-icon-active">
                                              <i aria-hidden="true" class="rt rt-minus-regular"></i>
                                            </span>
                                          </button>
                                        </div>
                                        <div id="collapse212433" class="accordion-collapse collapse " aria-labelledby="heading212433" data-bs-parent="#accordionExample21243">
                                          <div class="accordion-body"> Projects vary widely depending on your needs and budget. Our representatives visit with you to better understand your home remodeling needs. At construktion Home Improvements we do more than give you a quote. We provide you with the information you need to make the right decisions for your home. Our representatives take time to explain the details regarding your project.</div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <div class="accordion-header" id="heading-212434">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse212434" aria-expanded="false" aria-controls="collapse212434"> Why do roofing estimates vary so widely? <span class="accordion-icon">
                                              <i aria-hidden="true" class="rt rt-plus-regular"></i>
                                            </span>
                                            <span class="accordion-icon-active">
                                              <i aria-hidden="true" class="rt rt-minus-regular"></i>
                                            </span>
                                          </button>
                                        </div>
                                        <div id="collapse212434" class="accordion-collapse collapse " aria-labelledby="heading212434" data-bs-parent="#accordionExample21243">
                                          <div class="accordion-body"> Projects vary widely depending on your needs and budget. Our representatives visit with you to better understand your home remodeling needs. At construktion Home Improvements we do more than give you a quote. We provide you with the information you need to make the right decisions for your home. Our representatives take time to explain the details regarding your project.</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-200e457" data-id="200e457" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-7e78a17 elementor-widget elementor-widget-image" data-id="7e78a17" data-element_type="widget" data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                    <img decoding="async" width="640" height="485" src="wp-content/uploads/2023/03/h3_accordion-bg.webp" class="attachment-large size-large wp-image-3496" alt="" srcset="https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/h3_accordion-bg.webp 653w, https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/h3_accordion-bg-300x227.webp 300w, https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/h3_accordion-bg-600x455.webp 600w" sizes="(max-width: 640px) 100vw, 640px" />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-699f184 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="699f184" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c327921" data-id="c327921" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-0a53874 elementor-widget elementor-widget-react-heading" data-id="0a53874" data-element_type="widget" data-widget_type="react-heading.default">
                          <div class="elementor-widget-container">
                            <div class="react-heading default  title-border-no">
                              <div class="title-inner no">
                                <span class="sub-text" data-aos-delay="200" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Experts Members</span>
                                <h2 class="title" data-aos-delay="300" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Meet the leaders of our dynamic company</h2>
                              </div>
                              <span class="watermark">Meet Leaders</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-90f0adb elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="90f0adb" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-41adc72" data-id="41adc72" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-66d8bf5 elementor-widget elementor-widget-rsteam-slider" data-id="66d8bf5" data-element_type="widget" data-widget_type="rsteam-slider.default">
                          <div class="elementor-widget-container">
                            <div class="team-slider-main-wrapper">
                              <div class="swiper rt-addon-slider rt_team-7583 rts-team team-slider-style6">
                                <div class="swiper-wrapper rt-addon-slider gray_no">
                                  <div class="team-item swiper-slide">
                                    <div class="single-team-three">
                                      <div class="thumbnail">
                                        <a href="teams/mark-smith/index.html" class="thumbnail">
                                          <img loading="lazy" decoding="async" width="358" height="415" src="wp-content/uploads/2023/03/team7-358x415.webp" class="attachment-elevate-team-slider size-elevate-team-slider wp-post-image" alt="" srcset="https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/team7-358x415.webp 358w, https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/team7-258x300.webp 258w, https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/team7.webp 546w" sizes="(max-width: 358px) 100vw, 358px" />
                                        </a>
                                        <div class="social-team-wrapper">
                                          <ul>
                                            <li>
                                              <a href="#" class="social-icon">
                                                <i class="fab fa-facebook-f"></i>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#" class="social-icon">
                                                <i class="fab fa-twitter"></i>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#" class="social-icon">
                                                <i class="fab fa-instagram"></i>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#" class="social-icon">
                                                <i class="fab fa-linkedin-in"></i>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="content-area">
                                        <span class="designation"> ARCHITECT </span>
                                        <a href="teams/mark-smith/index.html">
                                          <h6 class="name">Mark Smith</h6>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="team-item swiper-slide">
                                    <div class="single-team-three">
                                      <div class="thumbnail">
                                        <a href="teams/justice-smith/index.html" class="thumbnail">
                                          <img loading="lazy" decoding="async" width="358" height="415" src="wp-content/uploads/2023/03/team6-358x415.webp" class="attachment-elevate-team-slider size-elevate-team-slider wp-post-image" alt="" srcset="https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/team6-358x415.webp 358w, https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/team6-258x300.webp 258w, https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/team6.webp 546w" sizes="(max-width: 358px) 100vw, 358px" />
                                        </a>
                                        <div class="social-team-wrapper">
                                          <ul>
                                            <li>
                                              <a href="#" class="social-icon">
                                                <i class="fab fa-facebook-f"></i>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#" class="social-icon">
                                                <i class="fab fa-twitter"></i>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#" class="social-icon">
                                                <i class="fab fa-instagram"></i>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#" class="social-icon">
                                                <i class="fab fa-linkedin-in"></i>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="content-area">
                                        <span class="designation"> Manager </span>
                                        <a href="teams/justice-smith/index.html">
                                          <h6 class="name">Justice Smith</h6>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="team-item swiper-slide">
                                    <div class="single-team-three">
                                      <div class="thumbnail">
                                        <a href="teams/daniel-smith/index.html" class="thumbnail">
                                          <img loading="lazy" decoding="async" width="358" height="415" src="wp-content/uploads/2023/03/team5-358x415.webp" class="attachment-elevate-team-slider size-elevate-team-slider wp-post-image" alt="" srcset="https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/team5-358x415.webp 358w, https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/team5-258x300.webp 258w, https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/team5.webp 546w" sizes="(max-width: 358px) 100vw, 358px" />
                                        </a>
                                        <div class="social-team-wrapper">
                                          <ul>
                                            <li>
                                              <a href="#" class="social-icon">
                                                <i class="fab fa-facebook-f"></i>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#" class="social-icon">
                                                <i class="fab fa-twitter"></i>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#" class="social-icon">
                                                <i class="fab fa-instagram"></i>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#" class="social-icon">
                                                <i class="fab fa-linkedin-in"></i>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="content-area">
                                        <span class="designation"> ceo </span>
                                        <a href="teams/daniel-smith/index.html">
                                          <h6 class="name">Daniel Smith</h6>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <script type="text/javascript">
                              jQuery(document).ready(function() {
                                var swiper = new Swiper(".rt_team-7583", {
                                  slidesPerView: 3,
                                  speed: 1000,
                                  loop: false,
                                  autoplay: false,
                                  spaceBetween: 15,
                                  pagination: {
                                    el: ".swiper-pagination",
                                    clickable: true,
                                  },
                                  centeredSlides: false,
                                  navigation: {
                                    nextEl: ".testimonial-cat-next",
                                    prevEl: ".testimonial-cat-prev",
                                  },
                                  breakpoints: {
                                    0: {
                                      slidesPerView: 1
                                    },
                                    575: {
                                      slidesPerView: 1
                                    },
                                    767: {
                                      slidesPerView: 2
                                    },
                                    991: {
                                      slidesPerView: 3
                                    },
                                    1199: {
                                      slidesPerView: 3
                                    },
                                    1399: {
                                      slidesPerView: 3,
                                      spaceBetween: 15
                                    }
                                  }
                                });
                              });
                            </script>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-2f23a6c elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="2f23a6c" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4bfdf2d" data-id="4bfdf2d" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-47f18d1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="47f18d1" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-cf3bc06" data-id="cf3bc06" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-690ab2f elementor-widget elementor-widget-rt-counter" data-id="690ab2f" data-element_type="widget" data-widget_type="rt-counter.default">
                                  <div class="elementor-widget-container">
                                    <div class="counter-top-area  style3">
                                      <div class="rts-counter-list">
                                        <div class="rts-counter-list-inner">
                                          <div class="counter-icon">
                                            <img decoding="async" src="wp-content/uploads/2023/03/07.svg" alt="image" />
                                          </div>
                                          <div class="count-text">
                                            <div class="count-number">
                                              <span data-letters="500" class="rs-counter"> 38</span>
                                              <span class="prefix">+</span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="text"> Countries, We Worked. Urban design draws together the many standers of place-making</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-93e0fe5" data-id="93e0fe5" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-25aa502 elementor-widget elementor-widget-rt-counter" data-id="25aa502" data-element_type="widget" data-widget_type="rt-counter.default">
                                  <div class="elementor-widget-container">
                                    <div class="counter-top-area  style3">
                                      <div class="rts-counter-list">
                                        <div class="rts-counter-list-inner">
                                          <div class="counter-icon">
                                            <img decoding="async" src="wp-content/uploads/2023/03/06.svg" alt="image" />
                                          </div>
                                          <div class="count-text">
                                            <div class="count-number">
                                              <span data-letters="500" class="rs-counter"> 100</span>
                                              <span class="prefix">+</span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="text"> Team members for 24/7 Support. Urban design draws together the many standers of place-making</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-81072e1" data-id="81072e1" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-1ee6778 elementor-widget elementor-widget-rt-counter" data-id="1ee6778" data-element_type="widget" data-widget_type="rt-counter.default">
                                  <div class="elementor-widget-container">
                                    <div class="counter-top-area  style3">
                                      <div class="rts-counter-list">
                                        <div class="rts-counter-list-inner">
                                          <div class="counter-icon">
                                            <img decoding="async" src="wp-content/uploads/2023/03/08.svg" alt="image" />
                                          </div>
                                          <div class="count-text">
                                            <div class="count-number">
                                              <span data-letters="500" class="rs-counter"> 80</span>
                                              <span class="prefix">%</span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="text"> Projects completed Successfully. Urban design draws together the many standers of place-making</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1303454" data-id="1303454" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-d3005b6 elementor-widget elementor-widget-rt-counter" data-id="d3005b6" data-element_type="widget" data-widget_type="rt-counter.default">
                                  <div class="elementor-widget-container">
                                    <div class="counter-top-area  style3">
                                      <div class="rts-counter-list">
                                        <div class="rts-counter-list-inner">
                                          <div class="counter-icon">
                                            <img decoding="async" src="wp-content/uploads/2023/03/05.svg" alt="image" />
                                          </div>
                                          <div class="count-text">
                                            <div class="count-number">
                                              <span data-letters="500" class="rs-counter"> 25</span>
                                              <span class="prefix">+</span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="text"> Years of Experience. Urban design draws together the many standers of place-making</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                        <div class="elementor-element elementor-element-75381b4 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="75381b4" data-element_type="widget" data-widget_type="divider.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-divider">
                              <span class="elementor-divider-separator"></span>
                            </div>
                          </div>
                        </div>
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-2ad24f7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2ad24f7" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c7f32fa" data-id="c7f32fa" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6da943f elementor-widget elementor-widget-react-heading" data-id="6da943f" data-element_type="widget" data-widget_type="react-heading.default">
                                  <div class="elementor-widget-container">
                                    <div class="react-heading default  title-border-no">
                                      <div class="title-inner no">
                                        <span class="sub-text" data-aos-delay="200" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">LATEST CASES</span>
                                        <h2 class="title" data-aos-delay="300" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Universal Case Studies</h2>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-a390dbd elementor-section-stretched elementor-section-full_width portfolio-style2 elementor-section-height-default elementor-section-height-default" data-id="a390dbd" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                  <div class="elementor-container elementor-column-gap-extended">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-327a105" data-id="327a105" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-c33b16a elementor-widget elementor-widget-rt-portfolio-slider" data-id="c33b16a" data-element_type="widget" data-widget_type="rt-portfolio-slider.default">
                          <div class="elementor-widget-container">
                            <div class="portfolio-slider-nav">
                              <div class="swiper-button-prev">
                                <i class="rt rt-arrow-left"></i>
                              </div>
                              <div class="swiper-button-next">
                                <i class="rt rt-arrow-right"></i>
                              </div>
                            </div>
                            <div class="swiper rtaddon-portfolio-slider-8509  rsaddon-unique-slider rs-addon-slider rt-portfolio-slider rt-portfolio rt-portfolio-style9 slider-style-9 center-mode-true">
                              <div class="swiper-wrapper">
                                <div class="grid-item swiper-slide">
                                  <div class="rts-business-case-s-2">
                                    <a href="rt-portfolios/bathroom-modeling/index.html" class="thumbnail">
                                      <img loading="lazy" decoding="async" width="648" height="500" src="wp-content/uploads/2023/04/Bathroom-Modeling-648x500.webp" class="attachment-elevate-portfolio-slider size-elevate-portfolio-slider wp-post-image" alt="" />
                                    </a>
                                    <div class="inner">
                                      <a href="rt-portfolios/bathroom-modeling/index.html">
                                        <h5 class="title"> Bathroom Modeling</h5>
                                      </a>
                                      <span class="p-category">
                                        <a href="rt-portfolio-category/building/index.html" rel="tag">Building</a>
                                        <span class="separator">,</span>
                                        <a href="rt-portfolio-category/renovation/index.html" rel="tag">Renovation</a>
                                      </span>
                                    </div>
                                    <a href="rt-portfolios/bathroom-modeling/index.html" class="over_link"></a>
                                  </div>
                                </div>
                                <div class="grid-item swiper-slide">
                                  <div class="rts-business-case-s-2">
                                    <a href="rt-portfolios/interior-construction/index.html" class="thumbnail">
                                      <img loading="lazy" decoding="async" width="648" height="500" src="wp-content/uploads/2023/03/interior-construction-housing-project-with-drywall-installed-door-new-home-before-installing-648x500.webp" class="attachment-elevate-portfolio-slider size-elevate-portfolio-slider wp-post-image" alt="" />
                                    </a>
                                    <div class="inner">
                                      <a href="rt-portfolios/interior-construction/index.html">
                                        <h5 class="title"> Interior Construction</h5>
                                      </a>
                                      <span class="p-category">
                                        <a href="rt-portfolio-category/construction/index.html" rel="tag">Construction</a>
                                      </span>
                                    </div>
                                    <a href="rt-portfolios/interior-construction/index.html" class="over_link"></a>
                                  </div>
                                </div>
                                <div class="grid-item swiper-slide">
                                  <div class="rts-business-case-s-2">
                                    <a href="rt-portfolios/roofing-construction/index.html" class="thumbnail">
                                      <img loading="lazy" decoding="async" width="648" height="500" src="wp-content/uploads/2023/03/roofing-1-648x500.webp" class="attachment-elevate-portfolio-slider size-elevate-portfolio-slider wp-post-image" alt="" />
                                    </a>
                                    <div class="inner">
                                      <a href="rt-portfolios/roofing-construction/index.html">
                                        <h5 class="title"> Roofing Construction</h5>
                                      </a>
                                      <span class="p-category">
                                        <a href="rt-portfolio-category/building/index.html" rel="tag">Building</a>
                                        <span class="separator">,</span>
                                        <a href="rt-portfolio-category/renovation/index.html" rel="tag">Renovation</a>
                                      </span>
                                    </div>
                                    <a href="rt-portfolios/roofing-construction/index.html" class="over_link"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <script type="text/javascript">
                              jQuery(document).ready(function() {
                                var swiper = new Swiper(".rtaddon-portfolio-slider-8509", {
                                  slidesPerView: 2.4,
                                  speed: 1000,
                                  loop: true,
                                  autoplay: false,
                                  spaceBetween: 50,
                                  centeredSlides: true,
                                  navigation: {
                                    nextEl: ".swiper-button-next",
                                    prevEl: ".swiper-button-prev",
                                  },
                                  breakpoints: {
                                    0: {
                                      slidesPerView: 1,
                                    },
                                    575: {
                                      slidesPerView: 1
                                    },
                                    767: {
                                      slidesPerView: 2
                                    },
                                    991: {
                                      slidesPerView: 3
                                    },
                                    1199: {
                                      slidesPerView: 2.4
                                    },
                                    1399: {
                                      slidesPerView: 2.4,
                                      spaceBetween: 50
                                    }
                                  }
                                });
                              });
                            </script>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-16c7159 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="16c7159" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ac0f7ed" data-id="ac0f7ed" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-b310895 elementor-widget elementor-widget-react-heading" data-id="b310895" data-element_type="widget" data-widget_type="react-heading.default">
                          <div class="elementor-widget-container">
                            <div class="react-heading default  title-border-no">
                              <div class="title-inner no">
                                <span class="sub-text" data-aos-delay="200" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">RENOVATION COMPANY</span>
                                <h2 class="title" data-aos-delay="300" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Working Easy Process</h2>
                              </div>
                              <span class="watermark">Process</span>
                            </div>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-a66e35c elementor-widget elementor-widget-image" data-id="a66e35c" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <img loading="lazy" decoding="async" width="640" height="5" src="wp-content/uploads/2023/03/Group-244-1024x8.png" class="attachment-large size-large wp-image-4335" alt="" srcset="https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/Group-244-1024x8.png 1024w, https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/Group-244-300x2.png 300w, https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/Group-244-768x6.png 768w, https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/Group-244-600x5.png 600w, https://reactheme.com/products/wordpress/elevate/renovation/wp-content/uploads/2023/03/Group-244.png 1320w" sizes="(max-width: 640px) 100vw, 640px" />
                          </div>
                        </div>
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-346705a elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="346705a" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1f66e66" data-id="1f66e66" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4e53f0d elementor-widget elementor-widget-rt-service-grid" data-id="4e53f0d" data-element_type="widget" data-widget_type="rt-service-grid.default">
                                  <div class="elementor-widget-container">
                                    <div class="react-addon-services services-style1">
                                      <div class="services-part">
                                        <div class="services-icon">
                                          <img decoding="async" src="wp-content/uploads/2023/03/service1.svg" alt="image" />
                                        </div>
                                        <div class="services-text style5">
                                          <div class="services-title">
                                            <span class="service_number">01</span>
                                            <h2 class="title">
                                              <a href="#">Consultation</a>
                                            </h2>
                                          </div>
                                          <p class="services-txt"> Portitor aptent sociosqu per etiam inceptos posuere lobortis</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-ffe6150" data-id="ffe6150" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-a9306ec elementor-widget elementor-widget-rt-service-grid" data-id="a9306ec" data-element_type="widget" data-widget_type="rt-service-grid.default">
                                  <div class="elementor-widget-container">
                                    <div class="react-addon-services services-style1">
                                      <div class="services-part">
                                        <div class="services-icon">
                                          <img decoding="async" src="wp-content/uploads/2023/03/service2.svg" alt="image" />
                                        </div>
                                        <div class="services-text style5">
                                          <div class="services-title">
                                            <span class="service_number">02</span>
                                            <h2 class="title">
                                              <a href="#">Detailed Proposal</a>
                                            </h2>
                                          </div>
                                          <p class="services-txt"> Portitor aptent sociosqu per etiam inceptos posuere lobortis</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5e0fbf0" data-id="5e0fbf0" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-f18a49b elementor-widget elementor-widget-rt-service-grid" data-id="f18a49b" data-element_type="widget" data-widget_type="rt-service-grid.default">
                                  <div class="elementor-widget-container">
                                    <div class="react-addon-services services-style1">
                                      <div class="services-part">
                                        <div class="services-icon">
                                          <img decoding="async" src="wp-content/uploads/2023/03/service3.svg" alt="image" />
                                        </div>
                                        <div class="services-text style5">
                                          <div class="services-title">
                                            <span class="service_number">03</span>
                                            <h2 class="title">
                                              <a href="#">Project Installation</a>
                                            </h2>
                                          </div>
                                          <p class="services-txt"> Portitor aptent sociosqu per etiam inceptos posuere lobortis</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5770ae9" data-id="5770ae9" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-facab0a elementor-widget elementor-widget-rt-service-grid" data-id="facab0a" data-element_type="widget" data-widget_type="rt-service-grid.default">
                                  <div class="elementor-widget-container">
                                    <div class="react-addon-services services-style1">
                                      <div class="services-part">
                                        <div class="services-icon">
                                          <img decoding="async" src="wp-content/uploads/2023/03/service4.svg" alt="image" />
                                        </div>
                                        <div class="services-text style5">
                                          <div class="services-title">
                                            <span class="service_number">04</span>
                                            <h2 class="title">
                                              <a href="#">Final Inspection</a>
                                            </h2>
                                          </div>
                                          <p class="services-txt"> Portitor aptent sociosqu per etiam inceptos posuere lobortis</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-d31c86d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d31c86d" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ea96a29" data-id="ea96a29" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-d201067 elementor-widget elementor-widget-react-heading" data-id="d201067" data-element_type="widget" data-widget_type="react-heading.default">
                          <div class="elementor-widget-container">
                            <div class="react-heading default  title-border-no">
                              <div class="title-inner no">
                                <h2 class="title">AWARD WINNING CONSTRUCTION COMPANY IN 2020</h2>
                              </div>
                              <div class="rt-button">
                                <a class="readon react_button elementor-animation-" href="#">
                                  <span>Learn More</span>
                                  <i aria-hidden="true" class="rt rt-arrow-right-regular"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5555274" data-id="5555274" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-086461b elementor-widget elementor-widget-react-heading" data-id="086461b" data-element_type="widget" data-widget_type="react-heading.default">
                          <div class="elementor-widget-container">
                            <div class="react-heading default  title-border-no">
                              <div class="title-inner no">
                                <h2 class="title">AWARD WINNING CONSTRUCTION COMPANY IN 2020</h2>
                              </div>
                              <div class="rt-button">
                                <a class="readon react_button elementor-animation-" href="#">
                                  <span>Learn More</span>
                                  <i aria-hidden="true" class="rt rt-arrow-right-regular"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-e0232dc elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e0232dc" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a18d92" data-id="6a18d92" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-98237a2 elementor-widget elementor-widget-react-heading" data-id="98237a2" data-element_type="widget" data-widget_type="react-heading.default">
                          <div class="elementor-widget-container">
                            <div class="react-heading default center title-border-no">
                              <div class="title-inner no">
                                <span class="sub-text" data-aos-delay="200" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Latest Updates</span>
                                <h2 class="title" data-aos-delay="300" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Articles &amp; blog posts</h2>
                              </div>
                              <span class="watermark">Update News</span>
                            </div>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-869c148 elementor-widget elementor-widget-rt-blog-slider" data-id="869c148" data-element_type="widget" data-widget_type="rt-blog-slider.default">
                          <div class="elementor-widget-container">
                            <div class="rsaddon-unique-slider gray_ rs-addon-slider rt-blog-slider rt-blog rt-blog-style3 slider-style-3 ">
                              <div id="rsaddon-slick-slider-34201" class="rt_widget_sliders swiper rtaddon-slider-34201">
                                <div class="swiper-wrapper">
                                  <div class="align-items-center no-gutter blog-item reactheme-blog-grid1 col-md-12 swiper-slide">
                                    <div class="rts-blog-h-2-wrapper">
                                      <div class="col-top">
                                        <div class="image-part">
                                          <a href="one-of-the-world-largest-passive-house-buildings-construction/index.html">
                                            <img loading="lazy" decoding="async" width="420" height="365" src="wp-content/uploads/2023/03/bg-10-420x365.webp" class="attachment-elevate-blog-slider size-elevate-blog-slider wp-post-image" alt="" />
                                          </a>
                                        </div>
                                      </div>
                                      <div class="col-bottom">
                                        <div class="blog-content">
                                          <ul class="blog-meta">
                                            <li>
                                              <span> By </span>
                                              <span class="author">ReacThemes</span>
                                            </li>
                                            <li>
                                              <div class="blog-badge"> April 3, 2023</div>
                                            </li>
                                          </ul>
                                          <h3 class="title dd">
                                            <a href="one-of-the-world-largest-passive-house-buildings-construction/index.html">One of the World Largest Passive House Buildings Construction</a>
                                          </h3>
                                          <div class="blog-btn react-button">
                                            <a class="rts-read-more btn-primary" href="one-of-the-world-largest-passive-house-buildings-construction/index.html"> Read Details <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                                <path d="M11.0039 3.414L2.39691 12.021L0.98291 10.607L9.58891 2H2.00391V-3.8147e-06H13.0039V11H11.0039V3.414Z" fill="white"></path>
                                              </svg>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="align-items-center no-gutter blog-item reactheme-blog-grid1 col-md-12 swiper-slide">
                                    <div class="rts-blog-h-2-wrapper">
                                      <div class="col-top">
                                        <div class="image-part">
                                          <a href="how-to-secure-funding-for-your-new-home-at-london/index.html">
                                            <img loading="lazy" decoding="async" width="420" height="365" src="wp-content/uploads/2023/03/bg-9-420x365.webp" class="attachment-elevate-blog-slider size-elevate-blog-slider wp-post-image" alt="" />
                                          </a>
                                        </div>
                                      </div>
                                      <div class="col-bottom">
                                        <div class="blog-content">
                                          <ul class="blog-meta">
                                            <li>
                                              <span> By </span>
                                              <span class="author">ReacThemes</span>
                                            </li>
                                            <li>
                                              <div class="blog-badge"> April 3, 2023</div>
                                            </li>
                                          </ul>
                                          <h3 class="title dd">
                                            <a href="how-to-secure-funding-for-your-new-home-at-london/index.html">How to Secure Funding for Your New Home at London</a>
                                          </h3>
                                          <div class="blog-btn react-button">
                                            <a class="rts-read-more btn-primary" href="how-to-secure-funding-for-your-new-home-at-london/index.html"> Read Details <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                                <path d="M11.0039 3.414L2.39691 12.021L0.98291 10.607L9.58891 2H2.00391V-3.8147e-06H13.0039V11H11.0039V3.414Z" fill="white"></path>
                                              </svg>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="align-items-center no-gutter blog-item reactheme-blog-grid1 col-md-12 swiper-slide">
                                    <div class="rts-blog-h-2-wrapper">
                                      <div class="col-top">
                                        <div class="image-part">
                                          <a href="key-foature-largest-passive-house-buildings-solution/index.html">
                                            <img loading="lazy" decoding="async" width="420" height="365" src="wp-content/uploads/2023/03/bg-4-420x365.webp" class="attachment-elevate-blog-slider size-elevate-blog-slider wp-post-image" alt="" />
                                          </a>
                                        </div>
                                      </div>
                                      <div class="col-bottom">
                                        <div class="blog-content">
                                          <ul class="blog-meta">
                                            <li>
                                              <span> By </span>
                                              <span class="author">ReacThemes</span>
                                            </li>
                                            <li>
                                              <div class="blog-badge"> March 16, 2023</div>
                                            </li>
                                          </ul>
                                          <h3 class="title dd">
                                            <a href="key-foature-largest-passive-house-buildings-solution/index.html">Key foature Largest Passive House Buildings Solution</a>
                                          </h3>
                                          <div class="blog-btn react-button">
                                            <a class="rts-read-more btn-primary" href="key-foature-largest-passive-house-buildings-solution/index.html"> Read Details <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                                <path d="M11.0039 3.414L2.39691 12.021L0.98291 10.607L9.58891 2H2.00391V-3.8147e-06H13.0039V11H11.0039V3.414Z" fill="white"></path>
                                              </svg>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <script type="text/javascript">
                              jQuery(document).ready(function() {
                                var swiper = new Swiper(".rtaddon-slider-34201", {
                                  slidesPerView: 3,
                                  speed: 1000,
                                  loop: false,
                                  autoplay: false,
                                  spaceBetween: 45,
                                  pagination: {
                                    el: ".swiper-pagination",
                                    clickable: true,
                                  },
                                  centeredSlides: false,
                                  navigation: {
                                    nextEl: ".testimonial-cat-next",
                                    prevEl: ".testimonial-cat-prev",
                                  },
                                  breakpoints: {
                                    0: {
                                      slidesPerView: 1,
                                    },
                                    575: {
                                      slidesPerView: 1
                                    },
                                    767: {
                                      slidesPerView: 2
                                    },
                                    991: {
                                      slidesPerView: 3
                                    },
                                    1199: {
                                      slidesPerView: 3
                                    },
                                    1399: {
                                      slidesPerView: 3,
                                      spaceBetween: 45
                                    }
                                  }
                                });
                              });
                            </script>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-08c526d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="08c526d" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d7bce85" data-id="d7bce85" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-8152429 elementor-widget elementor-widget-rt-slider" data-id="8152429" data-element_type="widget" data-widget_type="rt-slider.default">
                          <div class="elementor-widget-container">
                            <div class="slider-inner-wrapper">
                              <div class="trasted-client">
                                <span>Trusted From Over 1,500 Clients</span>
                              </div>
                              <div class="swiper rt--slider slider-style2 rt_slider-12059">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide">
                                    <div class="single--item">
                                      <div class="content--box">
                                        <div class="banner-image">
                                          <img decoding="async" class="banner-img" src="wp-content/uploads/2023/03/testimonial_img.webp" alt="Product Image">
                                          <img decoding="async" class="quote" src="wp-content/uploads/2023/03/quote-img.png" alt="quote">
                                        </div>
                                        <div class="description">
                                          <div class="desc"> The group at Baroque is unimaginably committed, educated, and supportive. The completed item was delightful, and worth each penny. I would totally suggest Baroque...</div>
                                          <h2 class="slider-title">Bargman, <span class="slider-subtitle">ENVATO LLC</span>
                                          </h2>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide">
                                    <div class="single--item">
                                      <div class="content--box">
                                        <div class="banner-image">
                                          <img decoding="async" class="banner-img" src="wp-content/uploads/2023/03/testimonial_img.webp" alt="Product Image">
                                          <img decoding="async" class="quote" src="wp-content/uploads/2023/03/quote-img.png" alt="quote">
                                        </div>
                                        <div class="description">
                                          <div class="desc"> The group at Baroque is unimaginably committed, educated, and supportive. The completed item was delightful, and worth each penny. I would totally suggest Baroque...</div>
                                          <h2 class="slider-title">Bargman, <span class="slider-subtitle">ENVATO LLC</span>
                                          </h2>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide">
                                    <div class="single--item">
                                      <div class="content--box">
                                        <div class="banner-image">
                                          <img decoding="async" class="banner-img" src="wp-content/uploads/2023/03/testimonial_img.webp" alt="Product Image">
                                          <img decoding="async" class="quote" src="wp-content/uploads/2023/03/quote-img.png" alt="quote">
                                        </div>
                                        <div class="description">
                                          <div class="desc"> The group at Baroque is unimaginably committed, educated, and supportive. The completed item was delightful, and worth each penny. I would totally suggest Baroque...</div>
                                          <h2 class="slider-title">Bargman, <span class="slider-subtitle">ENVATO LLC</span>
                                          </h2>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="rt-slider-navigation">
                              <div class="rt-slider-prev rts-prev12059">
                                <i class="rt rt-arrow-left-long"></i>
                              </div>
                              <div class="rt-slider-next rts-next12059">
                                <i class="rt rt-arrow-right-long"></i>
                              </div>
                            </div>
                            <script type="text/javascript">
                              jQuery(document).ready(function() {
                                var swiper1205912059 = new Swiper(".rt_slider-12059", {
                                  slidesPerView: 1,
                                  speed: 1000,
                                  slidesPerGroup: 1,
                                  loop: false,
                                  autoplay: false,
                                  spaceBetween: 15,
                                  pagination: {
                                    el: ".swiper-pagination",
                                    clickable: true,
                                  },
                                  centeredSlides: false,
                                  navigation: {
                                    nextEl: ".rts-next12059",
                                    prevEl: ".rts-prev12059",
                                  },
                                  breakpoints: {
                                    575: {
                                      slidesPerView: 1
                                    },
                                    767: {
                                      slidesPerView: 1
                                    },
                                    991: {
                                      slidesPerView: 1
                                    },
                                    1199: {
                                      slidesPerView: 1
                                    },
                                    1399: {
                                      slidesPerView: 1,
                                      spaceBetween: 15
                                    }
                                  }
                                });
                              });
                            </script>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection