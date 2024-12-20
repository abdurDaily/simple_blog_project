@extends('Frontend.Layouts')
@section('frontend_contains')

@section('OgTags')
    
@endsection

    @push('frontend_css')
        <style>
            @media (max-width: 767px) { 
                .index_image{
                width: 85% !important;
                margin:0; 
                padding:0 0 20px 0
               }
            
            }
           
            .large-section {
                margin-top: 50px;
            }

            .see_btn {
                border: 1px solid #6A4EE9;
                color: #6A4EE9;
                display: inline-block;
                padding: 10px 20px;
                margin-top: 10px;
            }
            .see_btn:hover{
                color: #fff;
                background: #6A4EE9;
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

                    {!! Str::limit($userProfile->about_author, 300, '..... <a href="' . route('about.index') . '" class="your-class">read more</a>') !!}
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
            <div class="right grid-45 tablet-grid-45 mobile-grid-60 index_image" >
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
                                        {{-- <use
                                            xlink:href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/images/svg-icons.svg#trending-icon">
                                        </use> --}}
                                    </svg> Trending Topics</h2>
                                <div class="epcl-flex bg-box section">
                                    <div class="left epcl-flex grid-60 np-mobile" >

                                        @forelse ($categorys as $category)

                                        @if ($category->blogs_count > 0)
                                        <div class="item grid-20 mobile-grid-33 overlay-effect">
                                            <div class="image-container ctag-22" > 
                                                <span class="category-image ctag ctag-22">
                                                    <img fetchpriority="low" decoding="async" loading="lazy" src="{{ $category->category_img }}" alt="HTML" class="cover">
                                                </span> 
                                                <span class="epcl-decoration-counter">{{ $category->blogs_count }}</span> 
                                                <span class="overlay"></span>
                                            </div>
                                            <h3 class="title usmall">{{ Str::limit($category->category_name, 6, '...') }}</h3> 
                                            <a href="{{ route('blog.all', $category->id) }}" class="full-link">
                                                <span class="screen-reader-text"></span>
                                            </a>
                                        </div>  
                                        @endif
                                            
                                        @empty
                                            <span>No Category Found!</span>
                                        @endforelse




                                        
                                    </div>
                                    <div class="right grid-40 hide-on-mobile hide-on-tablet"> <span
                                            class="fw-bold">or...</span> <a
                                            href="{{ route('blog.category') }}"
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
                                                @forelse ($category->blogs->take(5) as $data=> $list)
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
                
                        @forelse ($categorys as $category)
                            @foreach ($category->blogs as $blog)
                                <article class="px-2 py-2 border-0 shadow-sm default classic-large bg-box epcl-flex index-2 post-style-small-image odd primary-cat-23 post-9 post type-post status-publish format-standard has-post-thumbnail hentry category-code category-2-html category-4-javascript">
                                    
                                    <div class="col-xl-12 p-0">
                                        <div class="rounded all_blog mb-4">
                                            <div>
                                                <img class="me-3" style="object-fit: cover;float: left; height:100px; width:100px;" src="{{ $blog->feature_image }}" alt="">
                                                <h4 style="color:#555555; line-height: 30px; font-weight:bold;">{{ Str::limit($blog->blog_title, 100, '.....') }}</h4>
                                                <b style="margin-bottom:10px; display:inline-block;">{{ $blog->created_at->format('M d, Y') }}</b> <br>
                                                <span style="color: #555555;">{{ Str::limit($blog->about_blog, 200, '.....') }}</span> <br>
                                                <a href="{{ route('blog.details', $blog->id) }}" class="see_btn">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
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
                            </span>
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
