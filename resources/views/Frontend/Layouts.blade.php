<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
  <head>

    <style>

      @media (max-width: 576px) { 
        .open-menu span{
          display: inline-block;
          margin-top: 10px;
        }
      }


      @media (max-width: 767px) { 
          .grid-container {
              padding-left: 0px !important;
              padding-right: 0px !important;
          }
      }
      
    #wrapper{
      background: #fff; 
    }
    body{
      overflow-x: hidden;
    }
    .menu-wrapper{
      box-shadow: 3px 3px 30px #e9d4d477;
      border: none  ;
    }
    </style>


      @yield('OgTags')


      @stack('frontend_css')


    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=5"
    />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawsome.css') }}" />
    <link
      rel="shortcut icon"
      href=""
    />
    
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <meta
      name="robots"
      content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"
    />
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <title>Educational Website</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    {{-- <link
      rel="alternate"
      type="application/rss+xml"
      title="Zento &raquo; Feed"
      href="https://themes.estudiopatagon.com/wordpress/zento/feed/"
    /> --}}
    {{-- <link
      rel="alternate"
      type="application/rss+xml"
      title="Zento &raquo; Comments Feed"
      href="https://themes.estudiopatagon.com/wordpress/zento/comments/feed/"
    /> --}}
    {{-- <link
      rel="preload"
      as="style"
      id="wp-block-library-css"
      onload="this.onload=null;this.rel=`stylesheet`"
      href="https://themes.estudiopatagon.com/wordpress/zento/wp-includes/css/dist/block-library/style.min.css?ver=6.6.1"
      media="all"
    /> --}}
    
{{--    
    <link
      rel="stylesheet"
      id="woocommerce-layout-css"
      href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/cache/autoptimize/css/autoptimize_single_279a41fe094a1c0ff59f6d84dc6ec0d2.css?ver=8.9.3"
      media="all"
    />
    <link
      rel="stylesheet"
      id="woocommerce-smallscreen-css"
      href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/cache/autoptimize/css/autoptimize_single_29ed0396622780590223cd919f310dd7.css?ver=8.9.3"
      media="only screen and (max-width: 768px)"
    />
    <link
      rel="stylesheet"
      id="woocommerce-general-css"
      href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/cache/autoptimize/css/autoptimize_single_37b03431b5d0e4bab2f0f5def1f3b553.css?ver=8.9.3"
      media="all"
    /> --}}
    <style id="woocommerce-inline-inline-css">
      .woocommerce form .form-row .required {
        visibility: visible;
      }

    </style>
    <link
      rel="preload"
      as="style"
      id="epcl-plugins-css"
      onload="this.onload=null;this.rel=`stylesheet`"
      href="{{ asset('frontend/assets/css/plugins.min.css') }}"
      media="all"
    />
    {{-- <link
      rel="preload"
      as="style"
      id="epcl-google-fonts-css"
      onload="this.onload=null;this.rel=`stylesheet`"
      href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/cache/autoptimize/css/autoptimize_single_3331617a0a844d37554673ba04ac50c9.css?v=1711766183"
      media="all"
    /> --}}
    {{-- <link
      rel="stylesheet"
      id="epcl-woocommerce-css"
      href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/dist/woocommerce.min.css?ver=1.3.0"
      media="all"
    /> --}}
    <script
      defer
      src="{{ asset('frontend/assets/js/jquery.min.js') }}"
    ></script>
    {{-- <script
      defer
      src="https://themes.estudiopatagon.com/wordpress/zento/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
      id="jquery-migrate-js"
    ></script> --}}
    {{-- <script
      defer
      src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.9.3"
      id="jquery-blockui-js"
      defer
      data-wp-strategy="defer"
    ></script> --}}
    <script id="wc-add-to-cart-js-extra">
      var wc_add_to_cart_params = {
        ajax_url: "\/wordpress\/zento\/wp-admin\/admin-ajax.php",
        wc_ajax_url: "\/wordpress\/zento\/?wc-ajax=%%endpoint%%",
        i18n_view_cart: "View cart",
        cart_url:
          "https:\/\/themes.estudiopatagon.com\/wordpress\/zento\/cart\/",
        is_cart: "",
        cart_redirect_after_add: "no",
      };
    </script>
    {{-- <script
      defer
      src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.9.3"
      id="wc-add-to-cart-js"
      defer
      data-wp-strategy="defer"
    ></script> --}}
    {{-- <script
      defer
      src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.9.3"
      id="js-cookie-js"
      defer
      data-wp-strategy="defer"
    ></script> --}}
    <script id="woocommerce-js-extra">
      var woocommerce_params = {
        ajax_url: "\/wordpress\/zento\/wp-admin\/admin-ajax.php",
        wc_ajax_url: "\/wordpress\/zento\/?wc-ajax=%%endpoint%%",
      };
    </script>
    {{-- <script
      defer
      src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.9.3"
      id="woocommerce-js"
      defer
      data-wp-strategy="defer"
    ></script> --}}
    {{-- <link
      rel="https://api.w.org/"
      href="https://themes.estudiopatagon.com/wordpress/zento/wp-json/"
    /> --}}
    {{-- <link
      rel="alternate"
      title="JSON"
      type="application/json"
      href="https://themes.estudiopatagon.com/wordpress/zento/wp-json/wp/v2/pages/1225"
    /> --}}
    {{-- <link
      rel="EditURI"
      type="application/rsd+xml"
      title="RSD"
      href="https://themes.estudiopatagon.com/wordpress/zento/xmlrpc.php?rsd"
    /> --}}
    <meta name="generator" content="WordPress 6.6.1" />
    <meta name="generator" content="WooCommerce 8.9.3" />
    {{-- <link
      rel="shortlink"
      href="https://themes.estudiopatagon.com/wordpress/zento/"
    /> --}}
    {{-- <link
      rel="alternate"
      title="oEmbed (JSON)"
      type="application/json+oembed"
      href="https://themes.estudiopatagon.com/wordpress/zento/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthemes.estudiopatagon.com%2Fwordpress%2Fzento%2F"
    /> --}}
    {{-- <link
      rel="alternate"
      title="oEmbed (XML)"
      type="text/xml+oembed"
      href="https://themes.estudiopatagon.com/wordpress/zento/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthemes.estudiopatagon.com%2Fwordpress%2Fzento%2F&#038;format=xml"
    /> --}}
    <style id="epcl-theme-header-css">
      div.tags .primary-tag.tag-link-18,
      div.tags .tag-link-18:before,
      .overlay-effect .ctag-18.image-container:before,
      .epcl-carousel .item article.ctag-18,
      #single section.siblings article.primary-cat-18,
      .ctag.ctag-18 {
        background: #ff2ed9;
      }
      .tagcloud a.tag-link-18:before,
      .widget_tag_cloud a.tag-link-18:before {
        background: #ff2ed9;
      }
      div.tags .primary-tag.tag-link-17,
      div.tags .tag-link-17:before,
      .overlay-effect .ctag-17.image-container:before,
      .epcl-carousel .item article.ctag-17,
      #single section.siblings article.primary-cat-17,
      .ctag.ctag-17 {
        background: #227dff;
      }
      .tagcloud a.tag-link-17:before,
      .widget_tag_cloud a.tag-link-17:before {
        background: #227dff;
      }
      div.tags .primary-tag.tag-link-24,
      div.tags .tag-link-24:before,
      .overlay-effect .ctag-24.image-container:before,
      .epcl-carousel .item article.ctag-24,
      #single section.siblings article.primary-cat-24,
      .ctag.ctag-24 {
        background: #5751ff;
      }
      .tagcloud a.tag-link-24:before,
      .widget_tag_cloud a.tag-link-24:before {
        background: #5751ff;
      }
      div.tags .primary-tag.tag-link-26,
      div.tags .tag-link-26:before,
      .overlay-effect .ctag-26.image-container:before,
      .epcl-carousel .item article.ctag-26,
      #single section.siblings article.primary-cat-26,
      .ctag.ctag-26 {
        background: #2a2728;
      }
      .tagcloud a.tag-link-26:before,
      .widget_tag_cloud a.tag-link-26:before {
        background: #2a2728;
      }
      div.tags .primary-tag.tag-link-21,
      div.tags .tag-link-21:before,
      .overlay-effect .ctag-21.image-container:before,
      .epcl-carousel .item article.ctag-21,
      #single section.siblings article.primary-cat-21,
      .ctag.ctag-21 {
        background: #6a4ee9;
      }
      .tagcloud a.tag-link-21:before,
      .widget_tag_cloud a.tag-link-21:before {
        background: #6a4ee9;
      }
      div.tags .primary-tag.tag-link-19,
      div.tags .tag-link-19:before,
      .overlay-effect .ctag-19.image-container:before,
      .epcl-carousel .item article.ctag-19,
      #single section.siblings article.primary-cat-19,
      .ctag.ctag-19 {
        background: #3aa9fd;
      }
      .tagcloud a.tag-link-19:before,
      .widget_tag_cloud a.tag-link-19:before {
        background: #3aa9fd;
      }
      div.tags .primary-tag.tag-link-22,
      div.tags .tag-link-22:before,
      .overlay-effect .ctag-22.image-container:before,
      .epcl-carousel .item article.ctag-22,
      #single section.siblings article.primary-cat-22,
      .ctag.ctag-22 {
        background: #ff8e51;
      }
      .tagcloud a.tag-link-22:before,
      .widget_tag_cloud a.tag-link-22:before {
        background: #ff8e51;
      }
      div.tags .primary-tag.tag-link-23,
      div.tags .tag-link-23:before,
      .overlay-effect .ctag-23.image-container:before,
      .epcl-carousel .item article.ctag-23,
      #single section.siblings article.primary-cat-23,
      .ctag.ctag-23 {
        background: #ffcb29;
      }
      .tagcloud a.tag-link-23:before,
      .widget_tag_cloud a.tag-link-23:before {
        background: #ffcb29;
      }
      div.tags .primary-tag.tag-link-25,
      div.tags .tag-link-25:before,
      .overlay-effect .ctag-25.image-container:before,
      .epcl-carousel .item article.ctag-25,
      #single section.siblings article.primary-cat-25,
      .ctag.ctag-25 {
        background: #f95353;
      }
      .tagcloud a.tag-link-25:before,
      .widget_tag_cloud a.tag-link-25:before {
        background: #f95353;
      }
      div.tags .primary-tag.tag-link-20,
      div.tags .tag-link-20:before,
      .overlay-effect .ctag-20.image-container:before,
      .epcl-carousel .item article.ctag-20,
      #single section.siblings article.primary-cat-20,
      .ctag.ctag-20 {
        background: #4775ff;
      }
      .tagcloud a.tag-link-20:before,
      .widget_tag_cloud a.tag-link-20:before {
        background: #4775ff;
      }
      body {
        background: #faf8ff;
      }
      ::selection {
        background-color: #f8f2c6;
      }
      ::selection {
        color: #282424;
      }
      #sidebar .widget .widget-title,
      #sidebar .widget .wp-block-heading {
        color: #302d55;
      }
      :root {
        --epcl-font-size: 16px;
      }
      @media screen and (max-width: 767px) {
        #header .logo.text-logo .title,
        #header[data-stuck] div.menu-wrapper .logo a {
          font-size: 40px;
        }
      }
      .minimalist .main-nav ul.menu > li.menu-item-has-children {
        margin-right: 5px;
      }
    </style>
    <noscript
      ><style>
        .woocommerce-product-gallery {
          opacity: 1 !important;
        }
      </style></noscript
    >
    <link
      rel="amphtml"
      href="https://themes.estudiopatagon.com/wordpress/zento/?amp=1"
    />


    <style  tyle>
      /* SOCIAL ICON */
      .social-icons{
        position: fixed;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
      }
      .social-icons span{
        background: #000;
        color: #fff;
        width:40px;
        height: 40px;
        display: block;
        text-align: center;
        line-height: 40px;
        margin-bottom: 3px;
      }
      /* SOCIAL ICON */



      .blog_details{
        margin-top: 30px;
      }
      .blog_details .blog_detail_find{
        background: #fff;
        box-shadow: 3px 3px 30px #88888825;
        padding: 30px 10px;  
      }
      .blog_details .blog_detail_find h2{
        text-align: center;
        font-family: "DM Sans", sans-serif;
        margin-bottom: 20px;
        padding-top:30px; 
      }
      .blog_details .details{
        font-size: 1.2rem;
      }

      .blog_details .items{
        background: #fff;
        display: block;
        margin-bottom: 10px ;
        padding: 10px;
        box-shadow: 3px 3px 30px #88888825;
        color: #000;
        text-transform: uppercase;
      }
    </style>

    
  </head>
  <body
    class="home page-template page-template-page-templates page-template-home page-template-page-templateshome-php page page-id-1225 wp-embed-responsive theme-zento enable-optimization sticky-header-enabled woocommerce-no-js"
  >
    <img
      loading="eager"
      fetchpriority="high"
      src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/images/svg-icons.svg"
      alt="Social Icons"
      style="display: none"
    />
    <nav class="mobile side-nav">
      <div class="close">
        <span><i class="fa-solid fa-x"></i></span>
        {{-- <svg class="icon">
          <use
            xlink:href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/images/svg-icons.svg#close-icon"
          ></use>
        </svg> --}}
      </div>
      <div class="logo">
        <a href="{{ route('home.index') }}"
          ><img
            src="{{ $logo ? $logo->logo : 'https://citictgms.com/logo.png'  }}"
            alt="Zento"
            width="160"
        /></a>
      </div>
      {{-- <div class="tagline"><small>Thoughts, stories and ideas.</small></div> --}}
      <ul id="menu-header" class="menu underline-effect">
        {{-- <li
          id="menu-item-87"
          class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-87"
        >
          <a
            href="https://themes.estudiopatagon.com/wordpress/zento/"
            aria-current="page"
            >Home</a
          >
          <ul class="sub-menu">
            <li
              id="menu-item-1227"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1225 current_page_item menu-item-1227"
            >
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/"
                aria-current="page"
                >Home Classic Full</a
              >
            </li>
            <li
              id="menu-item-1208"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1208"
            >
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/home-classic-w-intro/"
                >Home Classic w/ Intro</a
              >
            </li>
           
          </ul>
        </li> --}}


        {{-- <li
          id="menu-item-1171"
          class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1171"
        >
          <a href="#">Header Styles</a>
          <ul class="sub-menu">
            <li
              id="menu-item-1179"
              class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1179"
            >
              <a href="?header=minimalist">Minimalist Style</a>
            </li>



            
          </ul>
        </li> --}}



        {{-- <li
          id="menu-item-1184"
          class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1184"
        >
          <a href="#">Post Features</a>
          <ul class="sub-menu">
            <li
              id="menu-item-1185"
              class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1185"
            >
              <a href="#">Post Formats</a>
              <ul class="sub-menu">
                <li
                  id="menu-item-1217"
                  class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1217"
                >
                  <a
                    href="https://themes.estudiopatagon.com/wordpress/zento/classic/"
                    >Standard</a
                  >
                </li>



                
              </ul>
            </li>


            
            <li
              id="menu-item-1211"
              class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1211"
            >
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/text-only/"
                >Text Only</a
              >
            </li>
            <li
              id="menu-item-1214"
              class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1214"
            >
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/fullwidth/"
                >Fullwidth with Sidebar</a
              >
            </li>
            <li
              id="menu-item-1189"
              class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1189"
            >
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/nosidebar/"
                >Fullwidth no Sidebar</a
              >
            </li>
            <li
              id="menu-item-1188"
              class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1188"
            >
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/classic/"
                >Classic with Sidebar</a
              >
            </li>
            <li
              id="menu-item-1186"
              class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1186"
            >
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/vertical/"
                >Vertical with Sidebar</a
              >
            </li>
            <li
              id="menu-item-1212"
              class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1212"
            >
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/vertical-nosidebar/"
                >Vertical no Sidebar</a
              >
            </li>
            <li
              id="menu-item-1216"
              class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1216"
            >
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/mastering-html-essentials-for-your-tech-blog/"
                >Post Pagination</a
              >
            </li>
            <li
              id="menu-item-1281"
              class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1281"
            >
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/text-only/?amp"
                >AMP Article</a
              >
            </li>
          </ul>
        </li> --}}
        

        <li
          id="menu-item-1172"
          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1172"
        >
          <a href="{{ route('blog.all.list') }}"
            >Blog's</a
          >
        </li>



        <li
          id="menu-item-1172"
          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1172"
        >
          <a href="{{ route('about.index') }}"
            >About Me</a
          >
        </li>

        <li
          id="menu-item-1172"
          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1172"
        >
          <a href="{{ route('video.fetch') }}"
            >Video's</a
          >
        </li>
      </ul>
      {{-- <div class="epcl-buttons">
        <a href="{{ route('login') }}" class="epcl-button subscribe-button" >
          Login
        </a>
      </div> --}}
    </nav>
    <div class="menu-overlay"></div>
    <div id="wrapper">



      <!-- NAV -->
      <header id="header" class="compact enable-sticky" style="width: 100%;
    top: -31px !important;
    position: absolute;">
        <div class="menu-wrapper" style="padding-top: 0px; ">
          <div class="grid-container">
            <div class="epcl-flex grid-wrapper" style="padding: 10px 0;">
              <nav class="main-nav">
                <ul class="menu">
                  <li class="search-menu-item">
                    <a href="#search-lightbox" class="link mfp-inline"
                      >
                      <span><i class="fa-solid fa-magnifying-glass"></i></span>
                      {{-- <svg class="icon main-color large">
                        <use
                          xlink:href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/images/svg-icons.svg#search-icon"
                        ></use>
                      </svg> --}}
                      <span class="hide-on-mobile">Quick Search...</span></a
                    >
                  </li>
                </ul>
              </nav>
              <div class="logo">
                <a href="{{ route('home.index') }}"
                  ><img
                    src="{{ $logo ? $logo->logo : 'https://citictgms.com/logo.png'  }}"
                    alt="Zento"
                    width="160"
                /></a>
              </div>
              <div
                class="account underline-effect hide-on-mobile hide-on-tablet hide-on-desktop-sm"
              >
                {{-- <a
                  href="{{ route('login') }}"
                  class="epcl-button subscribe-button hide-on-mobile hide-on-tablet hide-on-desktop-sm"
                  
                >
                  Login
                </a> --}}
              </div>
              <div class="open-menu">
                <span style="font-size: 20px; ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <rect width="24" height="24" fill="none" />
                    <g fill="none" fill-rule="evenodd">
                      <path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                      <path fill="currentColor" d="M9 13a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2zm10 0a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2zM9 3a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm10 0a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                    </g>
                  </svg>
                </span>
              </div>
              <a
                href="#search-lightbox"
                class="link epcl-search-button mfp-inline hide-on-desktop-lg"
                >
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
              </a>
              <div class="clear"></div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </header>
      <!-- NAV END -->



      <div class="clear"></div>
      <div class="hide-on-mobile hide-on-tablet hide-on-desktop">
        <div
          id="search-lightbox"
          class="mfp-hide grid-container grid-usmall grid-parent"
        >
          <h4
            class="title textcenter white fw-bold hide-on-mobile hide-on-tablet"
          >
            Press <span>ESC</span> to close
          </h4>
          <div class="search-wrapper">

              <div class="form-group">
                
               <form class="subscribe-form" action="{{ route('blog.search') }}" method="get">
               
                @csrf
                <label class="title small" for="email-epcl_subscribe_form-2 " style="color:#fff;">Serch by blog title</label>
                <div class="form-group">
                  <input  id="email-epcl_subscribe_form-2" name="search_blog" class="inputbox large" required placeholder="search by blog title..">
                  <button class="epcl-button submit absolute" type="submit">Search<span class="loader"></span></button>
                </div>
              </form>



              </div>
          </div>
        </div>
      </div>


      @yield('frontend_contains')

        


      <footer id="footer" class="hide-default" style="box-shadow: 3px 3px 30px #e9d4d477; padding-top:30px;">
        <div class="widgets grid-container">
          <div class="hide-on-mobile hide-on-tablet default-sidebar">
            <section
              id="epcl_social-2"
              class="widget widget_epcl_social widget_nav_menu grid-30 tablet-grid-50 mobile-grid-100"
            >
              <h3 class="widget-title title medium bordered">
                <svg class="decoration">
                  <use
                    xlink:href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/images/svg-icons.svg#title-decoration"
                  ></use></svg
                >Follow me!
              </h3>
              <ul class="icons epcl-social-fill-color">
                
                @forelse ($fetchSocialData as $social)
                  

                
                <li>
                  <a
                    href="{{ $social->social_link }}"
                    class="twitter"
                    target="_blank"
                    rel="nofollow noopener"
                    ><span class="name">Follow me on <b>{{ $social->social_name }}</b> </span
                    ><span class="icon twitter"
                      ><svg class="icon small">
                        <use
                          xlink:href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/images/svg-icons.svg#twitter-icon"
                        ></use></svg></span
                  ></a>
                </li>
                

                @empty
                  <li> no social media data found! </li>
                @endforelse
  
              </ul>
              <div class="clear"></div>
            </section>
            <section
              id="nav_menu-2"
              class="px-3 widget widget_nav_menu grid-30 tablet-grid-50 mobile-grid-100"
            >
              <h3 class="widget-title title medium bordered">
                <svg class="decoration">
                  <use
                    xlink:href=""
                  ></use></svg
                >Quick Links
              </h3>
              <div class="menu-quick-links-container ">
                <ul id="menu-quick-links" class="menu ">
                  
                 
                  <li
                    id="menu-item-1160"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1160"
                  >
                    <a href="{{ route('blog.all.list') }}">Blog's</a>
                  </li>
                  <li
                    id="menu-item-1161"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1161"
                  >
                    <a href="{{ route('video.fetch') }}">Video's</a>
                  </li>
                </ul>
              </div>
              <div class="clear"></div>
            </section>
            <section
              id="epcl_subscribe_form-2"
              class="widget widget_epcl_subscribe_form grid-30 tablet-grid-50 mobile-grid-100"
            >
              <div class="widget_text">
                <div class="textwidget">
                  <p>
                    <img
                      class="alignnone size-full wp-image-59"
                      src="{{ $logo ? $logo->logo : 'https://citictgms.com/logo.png'  }}"
                      alt="Zento Website Logo"
                      width="170"
                      height="44"
                    />
                  </p>
                  <p>
                    Subscribe to our email newsletter and unlock access
                    to <b>members-only</b> content and <b>exclusive updates.</b>
                  </p>
                </div>
                <br />
                <form
                  class="subscribe-form"
                  action="{{ route('message.store.message') }}"
                  method="POST"
                >
                @csrf
                  <label class="title small" for="email-epcl_subscribe_form-2"
                    >Let's connect</label
                  >
                  <div class="form-group">
                   

                
                        <input
                        type="email"
                        id="email-epcl_subscribe_form-2"
                        name="subscribe"
                        class="inputbox large"
                        required
                        placeholder="Enter your email address"
                      />
                      
                      <button class="epcl-button submit absolute" type="submit">
                        Subscribe <span class="loader"></span>
                      </button>

                    </form>
                    
                    
                  </div>
                  @if (Session::has('success'))
                  <a id="flash-message-anchor"></a>
                  <div class="alert alert-success">{{ Session::get('success') }}</div>
                  @endif
                  
                </form>
                <div class="clear"></div>
              </div>
              <div class="clear"></div>
            </section>
          </div>
          <div class="clear"></div>
          <div class="mobile-sidebar hide-on-desktop">

            
            <section id="nav_menu-3" class="px-3 widget widget_nav_menu grid-30">
              <h3 class="widget-title title medium bordered">
                Quick Links 
              </h3>
              <div class="menu-quick-links-container px-2">
                <ul id="menu-quick-links-1" class="menu">
                  
                  
                  
                  <li
                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1157"
                  >
                    <a
                      href="{{ route('blog.all.list') }}"
                      aria-current="page"
                      >Blog's</a
                    >
                  </li>
                  
                  <li
                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1157"
                  >
                    <a
                      href="{{ route('video.fetch') }}"
                      aria-current="page"
                      >Video's</a
                    >
                  </li>


                  
                </ul>
              </div>
              <div class="clear"></div>
            </section>


            <section
              id="epcl_subscribe_form-3"
              class="widget px-3 widget_epcl_subscribe_form grid-30"
            >
              <div class="widget_text">
                <div class="textwidget">
                  <p>
                    <img
                      class="alignnone size-full wp-image-59"
                      src="{{ $logo ? $logo->logo : 'https://citictgms.com/logo.png'  }}"
                      alt=""
                      width="170"
                    />
                  </p>
                  <p>
                    Subscribe to our email newsletter and unlock access
                    to <b>members-only</b> content and <b>exclusive updates.</b>
                  </p>
                </div>
                <br />
                

              
                  <label class="title small" for="email-epcl_subscribe_form-3"
                    >Let's connect</label
                  >
                  <div class="form-group ">
                    <form
                    class="subscribe-form"
                    action="{{ route('message.store.message') }}"
                    method="POST"
                  >
                  @csrf
                        

                      <input
                      type="email"
                      id="email-epcl_subscribe_form-3"
                      name="subscribe"
                      class="inputbox large"
                      required
                      placeholder="Enter your email address"
                    />
                    <button class="epcl-button submit absolute" type="submit">
                      Get Started <span class="loader"></span>
                    </button>

                     </form>
                  </div>
                  @if (Session::has('success'))
                  <a id="flash-message-anchor"></a>
                  <div class="alert alert-success">{{ Session::get('success') }}</div>
                  @endif
                </form>
                <div class="clear"></div>
              </div>
              <div class="clear"></div>
            </section>
          </div>
          <div class="clear"></div>
        </div>
        
        <span id="back-to-top" class="epcl-button">
          <svg
            class="icon large"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="m12 5l6 6m-6-6l-6 6m6-6v14"
            />
          </svg>
        </span>
        <div class="clear"></div>


        <div class="container">
           <div class="text-center py-3">
            <span> &copy; Developed by: <a target="_blank" style="color: #6A4EE9" href="https://www.linkedin.com/in/abdurdaily/"> <b>abdurDaily</b> </a> </span>
           </div>
        </div>
      </footer>


      
      <div class="clear"></div>
    </div>
    <script>
      (function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, "woocommerce-js");
        document.body.className = c;
      })();
    </script>
    {{-- <link
      rel="stylesheet"
      id="wc-blocks-style-css"
      href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/cache/autoptimize/css/autoptimize_single_2408ade926b71fe4f88ffb508f01adbd.css?ver=wc-8.9.3"
      media="all"
    /> --}}
    {{-- <script
      defer
      src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=8.9.3"
      id="sourcebuster-js-js"
    ></script> --}}
    <script id="wc-order-attribution-js-extra">
      var wc_order_attribution = {
        params: {
          lifetime: 1.0e-5,
          session: 30,
          ajaxurl:
            "https:\/\/themes.estudiopatagon.com\/wordpress\/zento\/wp-admin\/admin-ajax.php",
          prefix: "wc_order_attribution_",
          allowTracking: true,
        },
        fields: {
          source_type: "current.typ",
          referrer: "current_add.rf",
          utm_campaign: "current.cmp",
          utm_source: "current.src",
          utm_medium: "current.mdm",
          utm_content: "current.cnt",
          utm_id: "current.id",
          utm_term: "current.trm",
          session_entry: "current_add.ep",
          session_start_time: "current_add.fd",
          session_pages: "session.pgs",
          session_count: "udata.vst",
          user_agent: "udata.uag",
        },
      };
    </script>
    {{-- <script
      defer
      src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=8.9.3"
      id="wc-order-attribution-js"
    ></script> --}}
    <script id="epcl-scripts-js-extra">
      var ajax_var = {
        url: "https:\/\/themes.estudiopatagon.com\/wordpress\/zento\/wp-admin\/admin-ajax.php",
        nonce: "37bbb11605",
        assets_folder:
          "https:\/\/themes.estudiopatagon.com\/wordpress\/zento\/wp-content\/themes\/zento\/assets",
      };
    </script>
    <script
      defer
      src="{{ asset('frontend/assets/js/scripts.min.js') }}"
    ></script>
    
    
    
    <script>
      @if (Session::has('success'))
        window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
      @endif
    </script>



@stack('frontend_js')
  </body>
</html>


