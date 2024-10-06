<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Dashboard</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    @stack('backend_css')
  </head>
  <body>
    <!-- ======== Preloader =========== -->
    {{-- <div id="preloader">
      <div class="spinner"></div>
    </div> --}}
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->

        <aside class="sidebar-nav-wrapper">
            <div class="navbar-logo text-center">
              <a href="{{ route('dashboard.index') }}">
                {{-- <h4>DigiViz</h4> --}}
                <img style="width: 150px;" src="{{ $logo ? $logo->logo : 'https://citictgms.com/logo.png'  }}" alt="logo" />
              </a>
            </div>
            <nav class="sidebar-nav">
              <ul>
                <li class="nav-item nav-item-has-children">
                  <a
                    href="#0"
                    class="collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#ddmenu_1"
                    aria-controls="ddmenu_1"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="icon">
                      <i class="fa-regular fa-folder"></i>
                    </span>
                    <span class="text">Category</span>
                  </a>
                  <ul id="ddmenu_1" class="collapse dropdown-nav">
                    <li>
                      <a href="{{ route('category.index') }}"> Add Category </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item nav-item-has-children">
                  <a
                    href="#01"
                    class="collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#ddmenu_03"
                    aria-controls="ddmenu_03"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="icon">
                      <i class="fa-regular fa-pen-to-square"></i>
                    </span>
                    <span class="text">Blog's</span>
                  </a>
                  <ul id="ddmenu_03" class="collapse dropdown-nav">
                    <li>
                      <a href="{{ route('blog.index') }}"> Add a New Blog </a>
                    </li>
                    <li>
                      <a href="{{ route('blog.list') }}"> List Blog </a>
                    </li>
                  </ul>
                </li>

                
                <li class="nav-item nav-item-has-children">
                  <a
                    href="#0"
                    class="collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#ddmenu_3"
                    aria-controls="ddmenu_3"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="icon">
                      <i class="fa-regular fa-circle-play"></i>
                    </span>
                    <span class="text">Video</span>
                  </a>
                  <ul id="ddmenu_3" class="collapse dropdown-nav">
                    <li>
                      <a href="{{  route('video.index')  }}"> insert new </a>
                    </li>
                    <li>
                      <a href="{{ route('video.list') }}"> Video List </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a
                    href="{{ route('message.index')  }}">
                    <span class="icon">
                      <i class="fa-regular fa-message"></i>
                    </span>
                    <span class="text">Messages </span>
                  </a>
                </li>



                <li class="nav-item">
                  <a
                    href="{{ route('setting.index') }}">
                    <span class="icon">
                      <i class="lni lni-cog"></i>
                    </span>
                    <span class="text">Setting </span>
                  </a>
                </li>



                <li class="nav-item">
                  <a
                    href="{{ route('home.index') }}">
                    <span class="icon">
                      <i class="fa-solid fa-globe"></i>
                    </span>
                    <span class="text">View Website</span>
                  </a>
                </li>

                <span class="divider"></span>
                
              </ul>
            </nav>
          </aside>
 
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-15">
                  <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
                @stack('search')
                {{-- <div class="header-search d-none d-md-flex">
                  <form action="#">
                    <input type="text" placeholder="Search..." />
                    <button><i class="lni lni-search-alt"></i></button>
                  </form>
                </div> --}}
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                <!-- notification start -->
                <div class="notification-box ml-15 d-none d-md-flex">
                   <a href="{{ route('approve.index') }}">
                    <button >
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M11 20.1667C9.88317 20.1667 8.88718 19.63 8.23901 18.7917H13.761C13.113 19.63 12.1169 20.1667 11 20.1667Z"
                            fill="" />
                          <path
                            d="M10.1157 2.74999C10.1157 2.24374 10.5117 1.83333 11 1.83333C11.4883 1.83333 11.8842 2.24374 11.8842 2.74999V2.82604C14.3932 3.26245 16.3051 5.52474 16.3051 8.24999V14.287C16.3051 14.5301 16.3982 14.7633 16.564 14.9352L18.2029 16.6342C18.4814 16.9229 18.2842 17.4167 17.8903 17.4167H4.10961C3.71574 17.4167 3.5185 16.9229 3.797 16.6342L5.43589 14.9352C5.6017 14.7633 5.69485 14.5301 5.69485 14.287V8.24999C5.69485 5.52474 7.60672 3.26245 10.1157 2.82604V2.74999Z"
                            fill="" />
                        </svg>
                      <span style="width: 20px; height:20px; display:inline-block; text-align:center; ligh-height:20px; font-size:12px; color:#fff;">{{ $notificationData }}</span>
                    </button>
                   </a>
                </div>
                <!-- notification end -->
                <!-- message start -->
                {{-- <div class="header-message-box ml-15 d-none d-md-flex">
                  <button class="dropdown-toggle" type="button" id="message" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.74866 5.97421C7.91444 5.96367 8.08162 5.95833 8.25005 5.95833C12.5532 5.95833 16.0417 9.4468 16.0417 13.75C16.0417 13.9184 16.0364 14.0856 16.0259 14.2514C16.3246 14.138 16.6127 14.003 16.8883 13.8482L19.2306 14.629C19.7858 14.8141 20.3141 14.2858 20.129 13.7306L19.3482 11.3882C19.8694 10.4604 20.1667 9.38996 20.1667 8.25C20.1667 4.70617 17.2939 1.83333 13.75 1.83333C11.0077 1.83333 8.66702 3.55376 7.74866 5.97421Z"
                        fill="" />
                      <path
                        d="M14.6667 13.75C14.6667 17.2938 11.7939 20.1667 8.25004 20.1667C7.11011 20.1667 6.03962 19.8694 5.11182 19.3482L2.76946 20.129C2.21421 20.3141 1.68597 19.7858 1.87105 19.2306L2.65184 16.8882C2.13062 15.9604 1.83338 14.89 1.83338 13.75C1.83338 10.2062 4.70622 7.33333 8.25004 7.33333C11.7939 7.33333 14.6667 10.2062 14.6667 13.75ZM5.95838 13.75C5.95838 13.2437 5.54797 12.8333 5.04171 12.8333C4.53545 12.8333 4.12504 13.2437 4.12504 13.75C4.12504 14.2563 4.53545 14.6667 5.04171 14.6667C5.54797 14.6667 5.95838 14.2563 5.95838 13.75ZM9.16671 13.75C9.16671 13.2437 8.7563 12.8333 8.25004 12.8333C7.74379 12.8333 7.33338 13.2437 7.33338 13.75C7.33338 14.2563 7.74379 14.6667 8.25004 14.6667C8.7563 14.6667 9.16671 14.2563 9.16671 13.75ZM11.4584 14.6667C11.9647 14.6667 12.375 14.2563 12.375 13.75C12.375 13.2437 11.9647 12.8333 11.4584 12.8333C10.9521 12.8333 10.5417 13.2437 10.5417 13.75C10.5417 14.2563 10.9521 14.6667 11.4584 14.6667Z"
                        fill="" />
                    </svg>
                    <span></span>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="message">
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-5.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>Jacob Jones</h6>
                          <p>Hey!I can across your profile and ...</p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-3.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>John Doe</h6>
                          <p>Would you mind please checking out</p>
                          <span>12 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-2.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>Anee Lee</h6>
                          <p>Hey! are you available for freelance?</p>
                          <span>1h ago</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div> --}}
                <!-- message end -->
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-info">
                      <div class="info">
                        <div class="image">
                          <img src="{{ Auth::user()->image  ? Auth::user()->image : 'https://api.dicebear.com/9.x/initials/svg?seed=' .  Auth::user()->name  }}" alt="" />
                        </div>
                        <div>
                          <h6 class="fw-500">{{ Auth::user()->name; }}</h6>
                          <p>Admin</p>
                        </div>
                      </div>
                    </div>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                
                    <li class="divider"></li>
                    <li>
                      <a href="{{ route('profile.index') }}">
                        <i class="lni lni-user"></i> View Profile
                      </a>
                    </li>
                   
                    <li class="divider"></li>
                    <li>
                      <a href="{{ route('profile.signout') }}"> <i class="lni lni-exit"></i> Sign Out </a>
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <section class="section mt-5 backendContains">
        <div class="container">
          @yield('backend_contains')
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

 
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/dynamic-pie-chart.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
    <script src="{{ asset('assets/js/jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/world-merc.js') }}"></script>
    <script src="{{ asset('assets/js/polyfill.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('js_contains');
  </body>
</html>
