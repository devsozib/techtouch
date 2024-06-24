<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Construction WordPress Theme</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='preconnect' href='https://fonts.gstatic.com/' crossorigin />
    <link rel="alternate" type="application/rss+xml" title="Construction WordPress Theme &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Construction WordPress Theme &raquo; Comments Feed" href="comments/feed/index.html" />
    <link rel='stylesheet' id='wp-block-library-css' href='{{ asset('frontend') }}/wp-includes/css/dist/block-library/style.min380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_b4eefed94a4409b1b967c1d9f3f24ca771f0.css?ver=10.9.3' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-all-blocks-style-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_3668483d6bec85381fa572cfb16064de71f0.css?ver=10.9.3' type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
      /*! This file is auto-generated */
      .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em
      }

      .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
      }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
      body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
      }

      :where(.is-layout-flex) {
        gap: 0.5em;
      }

      :where(.is-layout-grid) {
        gap: 0.5em;
      }

      body .is-layout-flex {
        display: flex;
      }

      body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
      }

      body .is-layout-flex>* {
        margin: 0;
      }

      body .is-layout-grid {
        display: grid;
      }

      body .is-layout-grid>* {
        margin: 0;
      }

      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }

      :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
      }

      :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
      }

      :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
      }

      .has-black-color {
        color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-color {
        color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
      }

      .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
      }

      .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
      }

      .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
      }

      .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
      }

      .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
      }

      .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
      }

      .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
      }

      .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
      }

      .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
      }

      .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
      }

      .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
      }

      .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
      }

      .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
      }

      .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
      }

      .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
      }

      :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
      }

      :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
      }

      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }

      :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
      }

      .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
      }
    </style>
    <link rel='stylesheet' id='redux-extendify-styles-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_b49e6b83f7bd47e2b24fae34688e415c946e.css?ver=4.4.7' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_ce795adb7e7594cbc25f9fd2d6e1a2fd12c8.css?ver=8.1.1' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_29ed0396622780590223cd919f310dd712c8.css?ver=8.1.1' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_68a2e1c3048033103d11856810f40fb212c8.css?ver=8.1.1' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
      .woocommerce form .form-row .required {
        visibility: visible;
      }
    </style>
    <link rel='stylesheet' id='rtelements-cf7-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_1de11504f8043867fc2e8625828ebcb7380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='rtelements-pricing-table-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_f94b8073ea8679f6410e6415ddcff9d8380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='rtelements-cta-css' href='{{ asset('frontend') }}/wp-content/plugins/rt-elements/widgets/cta/cta-css/cta380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='rtelements-iconbox-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_9c3e35fa35ca635aafa6ded57abfc305380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='rtelements-progress-pie-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_442c6fdbc2a933c77548fc251b13d71b380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-elements-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_9ed0632a3c8df1bf9690ccaf9308e6df380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='aos-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_08327450deb112e565a3d147fbf75b5f380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='hfe-style-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_a5bf64d5859ee94a3e8e93d592d6d2a08a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min192d.css?ver=5.23.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='{{ asset('frontend') }}/wp-content/uploads/elementor/css/custom-frontend-lite.min4c67.css?ver=1695630638' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-5-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_c4cb8ce92895c980d522733035579fbf4c67.css?ver=1695630638' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-2728-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_80084334a1f1426a6d129fb87846c73ad004.css?ver=1695633602' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.minafc7.css?ver=3.16.4' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.minafc7.css?ver=3.16.4' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-2769-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_af52359f375e6d74a80abb0b55703ee64c67.css?ver=1695630638' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-2662-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_484e8b63c46f38c63ff4df36b2f4ccd74c67.css?ver=1695630638' type='text/css' media='all' />
    <link rel='stylesheet' id='text-editor-style-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_51c3a61609244c0b628c20d87c96d59eaf6c.css?ver=3.6.0' type='text/css' media='all' />
    <link rel='stylesheet' id='boostrap-css' href='{{ asset('frontend') }}/wp-content/themes/elevate/assets/css/bootstrap.min380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='rt-icons-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_510d1f5301b7fd00d878d20cec7f5cae380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-all-css' href='{{ asset('frontend') }}/wp-content/themes/elevate/assets/css/font-awesome.min380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_30b593b71d7672658f89bfea0ab360c9380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='elevate-style-default-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_acad4ed7f71d317136099bc90eff21a2380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='elevate-style-responsive-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_3e2c45f862d918ed2da424cd0065dc55380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='elevate-style-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_006ee2e7d3ae86c9a6c7c6c2288a3470380f.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='studio-fonts-css' href='http://fonts.googleapis.com/css?family=Archivo%3A300%3B400%3B500%3B600%3B700%3B%7CTitillium+Web%3A400%3B600%3B700&amp;ver=1.0.0' type='text/css' media='all' />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Archivo:400%7CTitillium%20Web:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic&amp;display=swap&amp;ver=1681013690" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo:400%7CTitillium%20Web:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic&amp;display=swap&amp;ver=1681013690" media="print" onload="this.media='all'">
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo:400%7CTitillium%20Web:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic&amp;display=swap&amp;ver=1681013690" />
    </noscript>
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CTitillium+Web%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CArchivo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-rts-custom-icons-css' href='{{ asset('frontend') }}/wp-content/cache/autoptimize/css/autoptimize_single_510d1f5301b7fd00d878d20cec7f5caef049.css?ver=6.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/javascript" src="{{ asset('frontend') }}/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.minafc7.js?ver=3.16.4" id="font-awesome-4-shim-js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/wp-content/themes/elevate/assets/js/swiper-bundle.minf200.js?ver=8.2.3" id="swiper-js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/wp-content/themes/elevate/assets/js/wow.mincfa9.js?ver=1.1.2" id="wow-js"></script>
    <link rel="https://api.w.org/" href="{{ asset('frontend') }}/wp-json/index.html" />
    <link rel="alternate" type="application/json" href="{{ asset('frontend') }}/wp-json/wp/v2/pages/2728" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <meta name="generator" content="WordPress 6.5.4" />
    <meta name="generator" content="WooCommerce 8.1.1" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed" href="{{ asset('frontend') }}/wp-json/oembed/1.0/embed6268.json?url=https%3A%2F%2Freactheme.com%2Fproducts%2Fwordpress%2Felevate%2Frenovation%2F" />
    <link rel="alternate" type="text/xml+oembed" href="{{ asset('frontend') }}/wp-json/oembed/1.0/embed47c7?url=https%3A%2F%2Freactheme.com%2Fproducts%2Fwordpress%2Felevate%2Frenovation%2F&amp;format=xml" />
    <meta name="generator" content="Redux 4.4.7" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/wp-content/uploads/2023/03/fav.png">
    <noscript>
      <style>
        .woocommerce-product-gallery {
          opacity: 1 !important;
        }
      </style>
    </noscript>
    <meta name="generator" content="Elementor 3.16.4; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <meta name="generator" content="Powered by Slider Revolution 6.6.11 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script>
      function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {
        window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
          var pw = document.getElementById(e.c).parentNode.offsetWidth,
            newh;
          pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
          e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
          e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
          e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
          e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
          e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
          e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
          e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
          if (e.layout === "fullscreen" || e.l === "fullscreen") newh = Math.max(e.mh, window.RSIH);
          else {
            e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
            for (var i in e.rl)
              if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
            e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
            e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
            for (var i in e.rl)
              if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];
            var nl = new Array(e.rl.length),
              ix = 0,
              sl;
            e.tabw = e.tabhide >= pw ? 0 : e.tabw;
            e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
            e.tabh = e.tabhide >= pw ? 0 : e.tabh;
            e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
            for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
            sl = nl[0];
            for (var i in nl)
              if (sl > nl[i] && nl[i] > 0) {
                sl = nl[i];
                ix = i;
              }
            var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
            newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
          }
          var el = document.getElementById(e.c);
          if (el !== null && el) el.style.height = newh + "px";
          el = document.getElementById(e.c + "_wrapper");
          if (el !== null && el) {
            el.style.height = newh + "px";
            el.style.display = "block";
          }
        } catch (e) {
          console.log("Failure at Presize of Slider:" + e)
        }
        //});
      };
    </script>
    <style id="elevate_option-dynamic-css" title="dynamic-css" class="redux-options-output">
      .lds-ellipsis div {
        background: #FF6600;
      }

      .react-heading .title-inner .sub-text,
      .menu-area .navbar ul li:hover a {
        color: #FF6600;
      }

      .react-button a {
        background-color: #FF6600;
      }

      .react-button a:hover {
        background: #0C0A0A;
      }

      .react-button a {
        color: #FFFFFF;
      }

      .react-button a:hover {
        color: #FFFFFF;
      }

      .react-button.secondary_btn a {
        background-color: #0C0A0A;
      }

      .react-button.secondary_btn a:after {
        background: #FF6600;
      }

      .react-button.secondary_btn a {
        color: #FFFFFF;
      }

      .react-button.secondary_btn a:after {
        color: #FFFFFF;
      }
    </style>
    <style>
      body {
        background: #FFFFFF;
        color: #6E777D !important;
        font-family: Archivo !important;
        font-size: 16px !important;
      }

      .counter-top-area.style2:hover,
      .counter-top-area.style2:hover .rts-counter-list .count-text .count-number,
      .react-addon-services.services-style3:hover,
      .about-four-img .thumbnail-1:after,
      .rt-service--slider .swiper-pagination-bullet-active:after {
        border-color: #FF6600
      }

      .service-one-inner-four .big-thumbnail-area img {
        border-top-color: #FF6600
      }

      .happy-clients-area-start:after,
      .rts-accordion.style1 .accordion-item:after {
        border-left-color: #FF6600
      }

      h1 {
        color: #0c0a0a;
        font-family: Titillium Web;
        font-size: 66px;
        font-weight: 700;
        line-height: 76px;
      }

      h2 {
        color: #0c0a0a;
        font-size: 48px;
        font-weight: 700;
        line-height: 58px
      }

      h3 {
        color: #0c0a0a;
        font-size: 36px;
        line-height: 46px;
      }

      h4 {
        color: #0c0a0a;
        font-size: 30px;
        font-weight: 700;
        line-height: 40px;
      }

      h5 {
        color: #0c0a0a;
        font-size: 24px;
        font-weight: 700;
        line-height: 34px;
      }

      h6 {
        color: #0c0a0a;
        font-size: 20px;
        font-weight: 700;
        line-height: 30px;
      }

      .menu-area .navbar ul li>a,
      .sidenav .widget_nav_menu ul li a {
        font-weight: 700;
        font-family: Titillium Web;
        font-size: 16px;
      }

      html input[type="button"]:hover,
      input[type="reset"]:hover,
      .rt-portfolio-style6 .single-varticle-product .name-area span,
      .sidenav .widget-title:before,
      .reactheme-blog-grid .blog-img a.float-cat,
      #sidebar-services .download-btn ul li,
      .reactheme-video-2 .popup-videos,
      .reactheme-blog-details .blog-item.style2 .category a,
      .reactheme-blog .blog-item.style2 .category a,
      .blog .blog-item.style2 .category a,
      .reactheme-blog-details .blog-item.style1 .category a,
      .reactheme-blog .blog-item.style1 .category a,
      .blog .blog-item.style1 .category a,
      #mobile_menu .submenu-button,
      .react-sideabr .tagcloud a:hover,
      .reactheme-blog-details .bs-info.tags a:hover,
      .mfp-close-btn-in .mfp-close,
      .single-teams .team-inner h3:before,
      .single-teams .team-detail-wrap-btm.team-inner,
      ::selection,
      .reactheme-footer #wp-calendar th,
      .reactheme-services .services-style-9 .services-wrap:after,
      blockquote cite::before,
      blockquote::after,
      .rt-service--slider .swiper-pagination-bullet-active,
      .react-sideabr .widget-title::after,
      .reactheme-team-grid.team-style4 .team-wrapper:hover .team_desc,
      .single-portfolios .ps-informations h3,
      .react-sideabr.dynamic-sidebar .service-singles .menu li.current-menu-item a,
      .react-sideabr.dynamic-sidebar .service-singles .menu li a:hover,
      .single-teams .team-skill .reactheme-progress .progress-bar,
      .reactheme-unique-slider .reactheme-addon-slider button:hover,
      .reactheme-blog-grid1.blog-item .image-part span.date-full,
      .elementor-widget-container .rs-skill-bar .skillbar .skillbar-bar,
      .elementor-widget-container .react-video .popup-videos,
      .react-sideabr .widget_search button,
      .react-sideabr .bs-search button,
      .comment-respond .form-submit #submit,
      .react-addon-services.services-style2 .rts-single-service-inner .services-image .img-batch span,
      .react-heading .rt-button a i,
      .portfolio-slider-nav .swiper-button-prev:hover,
      .portfolio-slider-nav .swiper-button-next:hover,
      .swipper-bulet-pagination .swiper-pagination-bullets .swiper-pagination-bullet-active,
      .rt-blog-slider.slider-style-3 .rts-blog-h-2-wrapper .image-part .cat_list .post-categories li a,
      .rt-blog-slider.slider-style-3 .blog-btn.react-button a::after,
      #top-to-bottom i,
      .swiper.team-slider-style5 .rts-team-one-start .inner .info-wrapper .single i,
      .react-button.secondary_btn a:after,
      .counter-top-area.style2:after,
      .react-addon-services.services-style3:after,
      .react-addon-services.services-style3 .services-part .services--bottom .services-btn:hover,
      .reveal-item .reveal-animation,
      .happy-clients-area-start,
      .rts-accordion.style2 .accordion-item .accordion-header button .accordion-icon-active i,
      .rt-blog-slider.slider-style-2 .rts-blog-h-2-wrapper .image-part .blog-badge .date-2,
      .menu-wrap-off .inner-offcan .nav-link-container .close-button,
      .portfolio-style2 .portfolio-slider-nav .swiper-button-prev:hover,
      .portfolio-style2 .portfolio-slider-nav .swiper-button-next:hover,
      .rt-slider-navigation .rt-slider-prev i,
      .rt-slider-navigation .rt-slider-next i,
      .react-addon-services.services-style5 .single-service-four .thumbnail::after,
      .about-four-img .thumbnail-2 span,
      .service-one-inner-four:hover .content .icon,
      .rts-btn,
      .rts-accordion.style1 .accordion-item .accordion-header button[aria-expanded=true]::before,
      .slider-inner-wrapper .rt--slider.slider-style3 .swiper-pagination .swiper-pagination-bullet-active,
      .rt-bg-theme {
        background: #FF6600;
      }

      .react-sideabr .recent-post-widget .post-desc a:hover,
      .team-slider-style4 .team-item .team-content .team-name a:hover,
      .rt-blog-slider.slider-style-5 .blog-meta i,
      .swiper.team-slider-style5 .rts-team-one-start .inner .info-wrapper .single a:hover,
      .swiper.team-slider-style5 .rts-team-one-start .inner a.name:hover .title,
      .rt-blog-slider .title a:hover,
      .slider-inner-wrapper .rt--slider.slider-style2 .single--item .content--box .slider-title .slider-subtitle,
      .react-addon-services.services-style4 .rts-single-service-three .content-area a .title:hover,
      .single-post .reactheme-blog-details .type-post .single-content-full .user-info .single-info i,
      .single-post .reactheme-blog-details .type-post .single-content-full .user-info .single-info a:hover,
      cite a,
      a,
      .single-post .react-order-list li:before,
      .blog .reactheme-blog .blog-item .full-blog-content .user-info .single-info i,
      .archive .reactheme-blog .blog-item .full-blog-content .user-info .single-info i,
      .elementor-widget-container .rs-skill-bar.style1 .skillbar .skill-bar-percent,
      .elementor-widget-container .team-content .team-title,
      .elementor-widget-container .react-heading .title-inner .sub-text,
      .elementor-widget-container .react-addon-services .services-part .services-text .services-btn-part .services-btn,
      .elementor-widget-container .rs-dual-heading .title-inner .sub-text,
      .elementor-widget-container .rts-accordion.style2 .accordion-item .accordion-header button span,
      .portfolio-item .star-rating i,
      .rt-portfolio-style1 .portfolio-item .p-title a:hover,
      .elementor-widget-container .rt-blog-slider.slider-style-4 .blog-item .blog-content .title a:hover,
      .menu-area.sticky-menu .navbar ul li:hover a,
      .menu-area .navbar ul li ul.sub-menu li:hover>a,
      .menu-area .navbar ul li ul.sub-menu li.current-menu-ancestor>a,
      .menu-area .navbar ul li ul.sub-menu li.current_page_item>a,
      .menu-area.sticky-menu .navbar ul .current-menu-ancestor.menu-item-has-children>a,
      .sidenav .widget_nav_menu ul li a:hover,
      .rt-features-list-content ul li .text-heading:hover,
      .navbar-menu ul#single-menu li:hover a,
      .slider-call-area .icon i,
      .react-heading .rt-button a:hover,
      .react-addon-services.services-style2 .rts-single-service-inner .service-content .services-title .title a:hover,
      .counter-top-area .rts-counter-list .count-text .rs-counter,
      .react-addon-services.services-style3 .services-part .service--top .services-title .title a:hover,
      .react-addon-services.services-style4 .rts-single-service-three .content-area a.read-more-btn:hover,
      .swiper.team-slider-style6 .single-team-three .content-area .name:hover,
      .swiper.team-slider-style6 .single-team-three .thumbnail .social-team-wrapper ul li a:hover i,
      .react-addon-services.services-style5 .single-service-four .services-text a:hover .title,
      .about-four-img .thumbnail-1 .experience h3,
      .about-four-img .thumbnail-1 .experience span.plus {
        color: #FF6600;
      }

      .react-addon-services.services-style5 .single-service-four .icon-area svg path,
      .service-one-inner-four .content .icon svg path {
        fill: #FF6600;
      }

      html input[type="button"],
      input[type="reset"],
      input[type="submit"] {
        background: #0C0A0A;
      }

      .reactheme-breadcrumbs .breadcrumbs-inner,
      #reactheme-header.header-style-3 .reactheme-breadcrumbs .breadcrumbs-inner {
        padding-top: 150px;
        padding-bottom: 150px;
      }

      @media only screen and (max-width: 767px) {

        .reactheme-breadcrumbs .breadcrumbs-inner,
        #reactheme-header.header-style-3 .reactheme-breadcrumbs .breadcrumbs-inner {
          padding-top: 100px;
          padding-bottom: 100px;
        }
      }

      .portfolio-filter button:hover,
      .portfolio-filter button.active {
        background: #FF6600;
      }

      .blog .reactheme-blog .blog-item .full-blog-content .user-info .single-info.cat a:hover,
      .archive .reactheme-blog .blog-item .full-blog-content .user-info .single-info.cat a:hover,
      .reactheme-blog .blog-meta .blog-title a:hover,
      a:hover,
      a:focus,
      a:active,
      .reactheme-blog .blog-meta .blog-title a:hover,
      .reactheme-blog .blog-item .blog-meta .categories a:hover,
      .react-sideabr ul a:hover,
      .react-sideabr .widget_categories ul li a:hover,
      .react-sideabr .widget_archive ul li a:hover,
      .react-sideabr .widget_pages ul li a:hover,
      .react-sideabr .widget_meta ul li a:hover,
      .react-sideabr .widget_recent_entries ul li a:hover,
      .react-sideabr .widget_nav_menu ul li a:hover,
      .react-sideabr .widget_block ul li a:hover,
      .blog .reactheme-blog .blog-item .full-blog-content .title-wrap .blog-title:hover a,
      .archive .reactheme-blog .blog-item .full-blog-content .title-wrap .blog-title:hover a {
        color: #FF6600;
      }

      .reacbutton,
      button,
      html input[type="button"],
      input[type="reset"] {
        background: #0C0A0A;
      }

      @media only screen and (min-width: 1300px) {
        .container {
          max-width: 1320px;
        }
      }

      #elevate-load {
        background: #0C0A0A;
      }

      .reactheme-breadcrumbs .page-title {
        color: #000000 !important;
      }

      body.archive.tax-product_cat {
        background: #FFFFFF !important;
      }
    </style>
    <style>
      .main-contain #content,
      body.reactheme-pages-btm-gap .main-contain #content {
        padding-top: 0px;
        padding-bottom: 0px;
      }
    </style>
  </head>