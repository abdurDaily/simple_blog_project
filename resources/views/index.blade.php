@extends('Frontend.Layouts')
@section('frontend_contains')
<main id="home" class="main">

  <!-- BANNER  -->
  <div
    class="intro-text large-section np-bottom grid-container np-mobile epcl-flex"
    id="epcl-intro-text-1"
  >
    <div class="left grid-50 tablet-grid-55">
      <div class="text">
        <h1 class="title ularge fw-medium">
          Hi, I&#8217;m <span class="highlight"> {{ $userProfile->name }} </span> 👋
        </h1>
        {!! $userProfile->about_author !!}
      </div>
      <form
        class="subscribe-form"
        action="#"
        method="POST"
        target="_blank"
      >
        {{-- <label class="title small" for="email-epcl-subscribe-form-2"
          >Let's connect</label
        >
        <div class="form-group">
          <input
            type="email"
            id="email-epcl-subscribe-form-2"
            name="MERGE0"
            class="inputbox large"
            required
            placeholder="Enter your email address"
          />
          <button class="epcl-button submit absolute" type="submit">
            Get Started<span class="loader"></span>
          </button>
        </div> --}}
      </form>
    </div>
    <div class="right grid-45 tablet-grid-45 mobile-grid-60">
      <img
        src="{{ $userProfile->image }}"
        fetchpriority="high"
        decoding="async"
        alt=""
        class="hero-image fullwidth"
        width="442"
        height="442"
      />
    </div>
  </div>
  <!-- BANNER END  -->

  <!-- Trending Topics -->
  <div class="section section np-bottom">
    <section
      class="epcl-popular-categories"
      id="epcl-popular-categories-3"
    >
      <div class="grid-container grid-medium np-mobile">
        <h2 class="title bordered medium textcenter">
          <svg class="icon large secondary-color">
            <use
              xlink:href="#"
            ></use>
          </svg>
          Trending Topics
        </h2>
        {{-- <div class="epcl-flex bg-box section">
          <div class="left epcl-flex grid-60 np-mobile">
            <div class="item grid-20 mobile-grid-33 overlay-effect">
              <div class="image-container ctag-22">
                <span class="category-image ctag ctag-22"
                  ><img
                    fetchpriority="low"
                    decoding="async"
                    loading="lazy"
                    src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/uploads/2024/03/html-icon.png"
                    alt="HTML"
                    class="cover"
                /></span>
                <span class="epcl-decoration-counter">8</span>
                <span class="overlay"></span>
              </div>
              <h3 class="title usmall">HTML</h3>
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/category/2-html/"
                class="full-link"
            ><span class="screen-reader-text"></span></a
              >
            </div>
            <div class="item grid-20 mobile-grid-33 overlay-effect">
              <div class="image-container ctag-21">
                <span class="category-image ctag ctag-21"
                  ><img
                    fetchpriority="low"
                    decoding="async"
                    loading="lazy"
                    src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/uploads/2024/03/code-icon.png"
                    alt="Fundamentals"
                    class="cover"
                /></span>
                <span class="epcl-decoration-counter">4</span>
                <span class="overlay"></span>
              </div>
              <h3 class="title usmall">Fundamentals</h3>
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/category/1-fundamentals/"
                class="full-link"
            ><span class="screen-reader-text"></span></a
              >
            </div>
            <div class="item grid-20 mobile-grid-33 overlay-effect">
              <div class="image-container ctag-17">
                <span class="category-image ctag ctag-17"
                  ><img
                    fetchpriority="low"
                    decoding="async"
                    loading="lazy"
                    src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/uploads/2024/03/css-icon.png"
                    alt="CSS"
                    class="cover"
                /></span>
                <span class="epcl-decoration-counter">3</span>
                <span class="overlay"></span>
              </div>
              <h3 class="title usmall">CSS</h3>
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/category/3-css/"
                class="full-link"
            ><span class="screen-reader-text"></span></a
              >
            </div>
            <div class="item grid-20 mobile-grid-33 overlay-effect">
              <div class="image-container ctag-24">
                <span class="category-image ctag ctag-24"
                  ><img
                    fetchpriority="low"
                    decoding="async"
                    loading="lazy"
                    src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/uploads/2024/03/databases-icon.png"
                    alt="Databases"
                    class="cover"
                /></span>
                <span class="epcl-decoration-counter">2</span>
                <span class="overlay"></span>
              </div>
              <h3 class="title usmall">Databases</h3>
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/category/5-databases/"
                class="full-link"
            ><span class="screen-reader-text"></span></a
              >
            </div>
            <div class="item grid-20 mobile-grid-33 overlay-effect">
              <div class="image-container ctag-26">
                <span class="category-image ctag ctag-26"
                  ><img
                    fetchpriority="low"
                    decoding="async"
                    loading="lazy"
                    src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/uploads/2024/03/deploy-icon.png"
                    alt="Deployment"
                    class="cover"
                /></span>
                <span class="epcl-decoration-counter">2</span>
                <span class="overlay"></span>
              </div>
              <h3 class="title usmall">Deployment</h3>
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/category/6-deployment/"
                class="full-link"
            ><span class="screen-reader-text"></span></a
              >
            </div>
            <div class="item grid-20 mobile-grid-33 overlay-effect">
              <div class="image-container ctag-1">
                <span class="category-image ctag ctag-1"
                  ><svg class="icon">
                    <use
                      xlink:href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/images/svg-icons.svg#fill-tag-icon"
                    ></use></svg
                ></span>
                <span class="epcl-decoration-counter">1</span>
                <span class="overlay"></span>
              </div>
              <h3 class="title usmall">Uncategorized</h3>
              <a
                href="https://themes.estudiopatagon.com/wordpress/zento/category/uncategorized/"
                class="full-link"
            ><span class="screen-reader-text"></span></a
              >
            </div>
          </div>
          <div class="right grid-40 hide-on-mobile hide-on-tablet">
            <span class="fw-bold">or...</span>
            <a
              href="{{ route('blog.all.list') }}"
              class="epcl-button"
              >Explore All</a
            >
          </div>
          <div class="clear"></div>
        </div>
        --}}



        <div class="container px-4 text-center">
          <div class="row gx-3 gy-3">
            @forelse ($categorys as $category)
            <div class="col-lg-4 ">
              <div class="p-3  shadow" style="background: #fff;">
                <a href="{{ route('blog.all', $category->id) }}" style="display: block; height:100%; ">
                  <div class="image-container ctag-17">
                    <span class="category-image ctag ctag-17"
                      ><img
                        fetchpriority="low"
                        decoding="async"
                        loading="lazy"
                        style="object-fit: cover;"
                        src="{{ $category->category_img }}"
                        alt="CSS"
                        class="cover"
                    /></span>
                    {{-- <span class="epcl-decoration-counter">3</span>
                    <span class="overlay"></span> --}}
                  </div>
                  <span>{{ $category->category_name }}</span>
                </a>
              </div>
            </div>
            @empty
             <span>No Category Found!</span>
            @endforelse
           
          </div>
        </div>


      </div> 



    </section>
  </div>
  <!-- Trending Topics END  -->

  <!-- Topics Index -->
  <div class="module-wrapper grid-container">
    <div
      class="content-wrapper classic classic-sidebar section large-section np-bottom"
      id="epcl-classic-sidebar-4"
    >

    
      <aside id="sidebar" class="grid-30 no-sidebar enable-sticky">
        <div class="sidebar-wrapper default-sidebar">
          <section
            id="epcl_topics_index-2"
            class="widget widget_epcl_topics_index"
          >
            <h3 class="widget-title title medium bordered">
              <svg class="decoration">
                <use
                  xlink:href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/images/svg-icons.svg#title-decoration"
                ></use></svg
              >Topics Index
            </h3>
            <div class="clear"></div>

            @forelse ($categorys as $key => $category)
            <div class="item item-1 cat-21 ">
              <h4 class="toggle-title underline-effect">
                <span class="epcl-number ctag ctag-21">{{ ++$key }}</span>
                <a href="{{ route('blog.all', $category->id) }}"
                  class="title small"
                  data-id="ctag-21"
                  >{{ $category->category_name }}</a
                >
              </h4>
              <span class="toggle-icon"
                ><svg
                  class="icon small"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                    fill="currentColor"
                  ></path></svg
              ></span>
              <ul class="post-list" style="display:none">
                @forelse ($category->blogs as $data=> $list)
                  <li>
                    <span class="fw-semibold">{{ ++$data }} .</span>
                    <a
                      href="{{ route('blog.details', $list->id) }}"
                      data-id="15"
                      >{{ Str::limit( $list->blog_title, 20, '...') }}</a
                    >
                  </li>
                @empty
                  <h4>Data not found!</h4>
                @endforelse
              </ul>
            </div>

            @empty
              <h4>No data found!</h4>
            @endforelse
            
            <div class="clear"></div>


            


            
            
          </section>
        </div>
      </aside>


      <div class="center left-content grid-70">
        <div class="articles classic">
         
          @forelse ($blogs as $blog)
            
         
          <article
            class="default classic-large bg-box epcl-flex index-2 post-style-small-image odd primary-cat-23 post-9 post type-post status-publish format-standard has-post-thumbnail hentry category-code category-2-html category-4-javascript">
            <div class="meta meta-data">
              <div class="tags fill-color">
                <a
                  href="https://themes.estudiopatagon.com/wordpress/zento/category/4-javascript/"
                  class="primary-tag tag-link-23"
                  >{{ $blog->category->category_name }} </a
                >
              </div>
              <time class="meta-info" datetime="2024-01-18">
                <span><i class="fa-solid fa-arrow-right"></i></span>
                {{ $blog->created_at->format('d-M-Y') }}
              </time>
              <div class="min-read meta-info">
                <span><i class="fa-solid fa-arrow-right"></i></span>
                {{ $blog->created_at->diffForHumans(); }}
              </div>


              <div class="min-read meta-info">
                <span><i class="fa-solid fa-arrow-right"></i></span>
                {{ $blog->user->name; }}
              </div>
            </div>
            <div class="info">
              <header>
                <h2 class="main-title title underline-effect">
                  <a
                    href="{{ route('blog.details', $blog->id) }}"
                    >{{ Str::limit($blog->blog_title, 50, '...')  }}</a
                  >
                </h2>
              </header>
              <div class="post-excerpt">
                <div class="clear"></div>
                <p>
                  {!! Str::limit($blog->blog_details, 100, '......')  !!}
                </p>
              </div>
              <footer class="bottom">
             
                <div class="meta inline hide-on-tablet hide-on-desktop">
                  <a
                    href="https://themes.estudiopatagon.com/wordpress/zento/author/admin/"
                    class="author"
                  >
                    <img
                      class="author-image cover"
                      loading="lazy"
                      fetchpriority="low"
                      decoding="async"
                      src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/uploads/2024/03/avatar-1-1.webp"
                      alt="Jonathan Doe"
                    />
                    <span class="author-name">Jonathan Doe</span>
                  </a>
                  <div class="min-read meta-info">
                    <svg class="icon main-color">
                      <use
                        xlink:href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/images/svg-icons.svg#reading-icon"
                      ></use>
                    </svg>
                    1 Min Read
                  </div>
                </div>
              </footer>
            </div>
          </article>

          @empty
            <p>No data found..!</p>
          @endforelse
   
        </div>
        <div class="separator last hide-on-tablet hide-on-mobile"></div>
        <div class="clear"></div>
        <div class="epcl-pagination section np-bottom">
          <div class="nav">
            <span class="page-number"> 
              {{ $blogs->currentPage() }} of {{ $blogs->lastPage() }} </span>
              {{-- {{ $blogs->links() }} --}}
            <a
              href="{{ route('blog.all.list') }}"
              class="epcl-button"
              data-title="Next"
              >See All</a
            >
          </div>
        </div>
      </div>



      
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <!-- Topics Index -->

</main>



<div class="clear"></div>



<div class="epcl-cta bg-box no-border-radius">
<div class="grid-container epcl-flex">
  <div class="left grid-50 tablet-grid-50 np-mobile text">
    <h2 class="title ularge no-margin">Join to our community 👋</h2>
    <p>
      Unlock full access to <b>Zento</b> and see the entire library
      of <b>paid-members</b> only posts.
    </p>
  </div>
  <div class="right grid-50 tablet-grid-50 np-mobile text">
    <p style="text-align: center">
      Subscribe to our <strong>Newsletter</strong>, cancel at <b
        >anytime.</b
      >
    </p>
    <p style="text-align: center">
      <a
        href="#"
        class="epcl-shortcode epcl-button large primary-style dark"
        target="_blank"
        >Join Now</a
      >
    </p>
  </div>
</div>
<div class="clear"></div>
<svg
  class="bg"
  width="284"
  height="453"
  viewBox="0 0 284 453"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path
    class="main-color"
    d="M100.795 7.49467C105.015 -1.99852 118.025 -2.47329 123.123 6.07068L123.86 7.49467L136.88 36.7886C148.263 62.3995 167.185 83.8837 191.069 98.4068L195.095 100.762L218.221 113.77C226.323 118.328 226.773 129.596 219.571 134.898L218.221 135.769L195.095 148.778C170.668 162.518 151.059 183.378 138.846 208.521L136.88 212.751L123.86 242.045C119.641 251.538 106.63 252.013 101.531 243.469L100.795 242.045L87.7754 212.751C76.3928 187.141 57.4695 165.656 33.5855 151.133L29.5593 148.778L6.43298 135.769C-1.66775 131.213 -2.1179 119.945 5.08284 114.641L6.43298 113.77L29.5593 100.762C53.9866 87.0215 73.5964 66.162 85.8089 41.0183L87.7754 36.7886L100.795 7.49467Z"
    fill="currentColor"
  />
  <path
    class="secondary-color"
    d="M159.795 210.495C164.015 201.001 177.025 200.527 182.123 209.071L182.86 210.495L195.88 239.789C207.263 265.399 226.185 286.884 250.069 301.407L254.095 303.762L277.221 316.77C285.323 321.328 285.773 332.596 278.571 337.898L277.221 338.769L254.095 351.778C229.668 365.518 210.059 386.378 197.846 411.521L195.88 415.751L182.86 445.045C178.641 454.538 165.63 455.013 160.531 446.469L159.795 445.045L146.775 415.751C135.393 390.141 116.47 368.656 92.5855 354.133L88.5593 351.778L65.433 338.769C57.3322 334.213 56.8821 322.945 64.0828 317.641L65.433 316.77L88.5593 303.762C112.987 290.022 132.596 269.162 144.809 244.018L146.775 239.789L159.795 210.495Z"
    fill="currentColor"
  />
</svg>
<svg
  class="bg2"
  width="284"
  height="453"
  viewBox="0 0 284 453"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path
    class="main-color"
    d="M100.795 445.045C105.015 454.538 118.025 455.013 123.123 446.469L123.86 445.045L136.88 415.751C148.263 390.14 167.185 368.656 191.069 354.133L195.095 351.777L218.221 338.77C226.323 334.212 226.773 322.944 219.571 317.642L218.221 316.77L195.095 303.762C170.668 290.022 151.059 269.162 138.846 244.018L136.88 239.788L123.86 210.494C119.641 201.002 106.63 200.527 101.531 209.071L100.795 210.494L87.7754 239.788C76.3928 265.399 57.4695 286.884 33.5855 301.406L29.5593 303.762L6.43298 316.77C-1.66775 321.327 -2.1179 332.595 5.08284 337.898L6.43298 338.77L29.5593 351.777C53.9866 365.518 73.5964 386.378 85.8089 411.521L87.7754 415.751L100.795 445.045Z"
    fill="currentColor"
  />
  <path
    class="secondary-color"
    d="M159.795 242.045C164.015 251.538 177.025 252.013 182.123 243.469L182.86 242.045L195.88 212.751C207.263 187.14 226.185 165.656 250.069 151.133L254.095 148.777L277.221 135.77C285.323 131.212 285.773 119.944 278.571 114.642L277.221 113.77L254.095 100.762C229.668 87.0217 210.059 66.1616 197.846 41.0181L195.88 36.7884L182.86 7.49449C178.641 -1.99834 165.63 -2.473 160.531 6.07056L159.795 7.49449L146.775 36.7884C135.393 62.399 116.47 83.8839 92.5855 98.4062L88.5593 100.762L65.433 113.77C57.3322 118.327 56.8821 129.595 64.0828 134.898L65.433 135.77L88.5593 148.777C112.987 162.518 132.596 183.378 144.809 208.521L146.775 212.751L159.795 242.045Z"
    fill="currentColor"
  />
</svg>
</div>

@endsection