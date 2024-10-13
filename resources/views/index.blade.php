@extends('Frontend.Layouts')
@section('frontend_contains')

    @push('frontend_css')
        <style>
            .large-section {
                margin-top: 50px;
            }
        </style>
    @endpush
    <main id="home" class="main">

        <!-- BANNER  -->
        <div class="intro-text large-section np-bottom grid-container np-mobile epcl-flex" id="epcl-intro-text-1">
            <div class="left grid-50 tablet-grid-55">
                <div class="text">
                    <h1 class="title ularge fw-medium">
                        Hi, I&#8217;m <span class="highlight"> {{ $userProfile->name }} </span> 👋
                    </h1>
                    {!! $userProfile->about_author !!}
                </div>
                <form class="subscribe-form" action="#" method="POST" target="_blank">
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
                <img src="{{ $userProfile->image }}" fetchpriority="high" decoding="async" alt=""
                    class="hero-image fullwidth" width="442" height="442" />
            </div>
        </div>
        <!-- BANNER END  -->

        <!-- Trending Topics -->
        <div class="section section np-bottom">
            <section class="epcl-popular-categories" id="epcl-popular-categories-3">
                <div class="grid-container grid-medium np-mobile">
                    



                    <div class="section section np-bottom">
                        <section class="epcl-popular-categories" id="epcl-popular-categories-3">
                            <div class="grid-container grid-medium np-mobile">
                                <h2 class="title bordered medium textcenter"><svg class="icon large secondary-color">
                                        <use
                                            xlink:href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/images/svg-icons.svg#trending-icon">
                                        </use>
                                    </svg> Trending Topics</h2>
                                <div class="epcl-flex bg-box section">
                                    <div class="left epcl-flex grid-60 np-mobile" >

                                        @forelse ($categorys as $category)
    <div class="item grid-20 mobile-grid-33 overlay-effect">
        <div class="image-container ctag-22" > 
            <span class="category-image ctag ctag-22">
                <img fetchpriority="low" decoding="async" loading="lazy" src="{{ $category->category_img }}" alt="HTML" class="cover">
            </span> 
            <span class="epcl-decoration-counter">{{ $category->blogs_count }}</span> 
            <span class="overlay"></span>
        </div>
        <h3 class="title usmall">{{ $category->category_name }}</h3> 
        <a href="" class="full-link">
            <span class="screen-reader-text"></span>
        </a>
    </div>
@empty
    <span>No Category Found!</span>
@endforelse




                                        
                                    </div>
                                    <div class="right grid-40 hide-on-mobile hide-on-tablet"> <span
                                            class="fw-bold">or...</span> <a
                                            href="{{ route('blog.all.list') }}"
                                            class="epcl-button">Explore All</a></div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </section>
                    </div>


                </div>



            </section>
        </div>
        <!-- Trending Topics END  -->

        <!-- Topics Index -->
        <div class="module-wrapper grid-container">
            <div class="content-wrapper classic classic-sidebar section large-section np-bottom"
                id="epcl-classic-sidebar-4">


                <aside id="sidebar" class="grid-30 no-sidebar enable-sticky">
                    <div class="sidebar-wrapper default-sidebar">
                        <section id="epcl_topics_index-2" class="widget widget_epcl_topics_index">
                            <h3 class="widget-title title medium bordered">
                                <svg class="decoration">
                                    <use
                                        xlink:href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/images/svg-icons.svg#title-decoration">
                                    </use>
                                </svg>Topics Index
                            </h3>
                            <div class="clear"></div>

                            @forelse ($categorys as $key => $category)
                                <div class="item item-1 cat-21 ">
                                    <h4 class="toggle-title underline-effect">
                                        <span class="epcl-number ctag ctag-21">{{ ++$key }}</span>
                                        <a href="{{ route('blog.all', $category->id) }}" class="title small"
                                            data-id="ctag-21">{{ $category->category_name }}</a>
                                    </h4>
                                    <span class="toggle-icon"><svg class="icon small" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                                fill="currentColor"></path>
                                        </svg></span>
                                    <ul class="post-list" style="display:none">
                                        @forelse ($category->blogs as $data=> $list)
                                            <li>
                                                <span class="fw-semibold">{{ ++$data }} .</span>
                                                <a href="{{ route('blog.details', $list->id) }}"
                                                    data-id="15">{{ Str::limit($list->blog_title, 20, '...') }}</a>
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
                                        <a href="https://themes.estudiopatagon.com/wordpress/zento/category/4-javascript/"
                                            class="primary-tag tag-link-23">{{ $blog->category->category_name }} </a>
                                    </div>
                                    <time class="meta-info" datetime="2024-01-18">
                                        <span><i class="fa-solid fa-arrow-right"></i></span>
                                        {{ $blog->created_at->format('d-M-Y') }}
                                    </time>
                                    <div class="min-read meta-info">
                                        <span><i class="fa-solid fa-arrow-right"></i></span>
                                        {{ $blog->created_at->diffForHumans() }}
                                    </div>


                                    <div class="min-read meta-info">
                                        <span><i class="fa-solid fa-arrow-right"></i></span>
                                        {{ $blog->user->name }}
                                    </div>
                                </div>
                                <div class="info">
                                    <header>
                                        <h2 class="main-title title underline-effect">
                                            <a
                                                href="{{ route('blog.details', $blog->id) }}">{{ Str::limit($blog->blog_title, 50, '...') }}</a>
                                        </h2>
                                    </header>
                                    <div class="post-excerpt">
                                        <div class="clear"></div>
                                        <p>
                                            {!! Str::limit($blog->blog_details, 100, '......') !!}
                                        </p>
                                    </div>
                                    <footer class="bottom">

                                        <div class="meta inline hide-on-tablet hide-on-desktop">
                                            <a href="https://themes.estudiopatagon.com/wordpress/zento/author/admin/"
                                                class="author">
                                                <img class="author-image cover" loading="lazy" fetchpriority="low"
                                                    decoding="async"
                                                    src="https://themes.estudiopatagon.com/wordpress/zento/wp-content/uploads/2024/03/avatar-1-1.webp"
                                                    alt="Jonathan Doe" />
                                                <span class="author-name">Jonathan Doe</span>
                                            </a>
                                            <div class="min-read meta-info">
                                                <svg class="icon main-color">
                                                    <use
                                                        xlink:href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/images/svg-icons.svg#reading-icon">
                                                    </use>
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
                                {{-- {{ $blogs->currentPage() }} of {{ $blogs->lastPage() }} </span> --}}
                            {{-- {{ $blogs->links() }} --}}
                            <a href="{{ route('blog.all.list') }}" class="epcl-button" data-title="Next">See All</a>
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





@endsection
