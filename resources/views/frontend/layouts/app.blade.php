<!DOCTYPE html>
<html lang="en-US">
  <!-- Mirrored from reactheme.com/products/wordpress/elevate/renovation/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2024 05:16:50 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <!-- /Added by HTTrack -->
  @include('frontend.layouts.head')
  <body class="home page-template-default page page-id-2728 theme-elevate woocommerce-no-js ehf-header ehf-footer ehf-template-elevate ehf-stylesheet-elevate elementor-default elementor-kit-5 elementor-page elementor-page-2728">
    <div class="close-button body-close"></div>
    <div class="body-overlay-cart"></div>
    <div class="cart-icon-total-products">
      <div class="cart-header">
        <h3 class="cart-heading">Cart Total Items ( <span class="icon-num">0</span>) </h3>
        <div class="close-cart">
          <i class="rt-xmark"></i>
        </div>
      </div>
      <div class="widget woocommerce widget_shopping_cart">
        <h2 class="widgettitle">Cart</h2>
        <div class="widget_shopping_cart_content"></div>
      </div>
    </div>
    <div id="elevate-load">
      <div class="loader-wrapper">
        <div class="lds-ellipsis">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
    <div id="page" class="site  lesspadding">
      <div class="sticky_form rts-search-popup">
        <div class="sticky_form_full">
          <form role="search" class="bs-search search-form" method="get" action="https://reactheme.com/products/wordpress/elevate/renovation/">
            <div class="search-wrap">
              <label class="screen-reader-text"> Search for: </label>
              <input type="search" placeholder="Searching..." name="s" class="search-input" value="" />
              <button type="submit" value="Search">
                <i class="rt-search"></i>
              </button>
            </div>
          </form>
        </div>
        <i class=" rt-xmark close-search sticky_search sticky_form_search"></i>
      </div>
      @include('frontend.layouts.header')
        @yield('content')
      @include('frontend.layouts.footer')
    </div>
    <div id="top-to-bottom">
      <i class="rt-angles-up"></i>
    </div>
    @include('frontend.layouts.script')
  </body>
  <!-- Mirrored from reactheme.com/products/wordpress/elevate/renovation/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2024 05:17:54 GMT -->
</html>