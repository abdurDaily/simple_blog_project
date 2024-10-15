@extends('Frontend.Layouts')
@section('frontend_contains')
    @push('frontend_css')
        <style>
            body {
                background: #fff !important;
            }
            .all_category_btn:hover {
                background: #6A4EE9;
                color: #fff !important;
            }
            @font-face {
                font-family: 'helvetica';
                src: url('{{ asset('assets/fonts/Helvetica-Bold.ttf') }}');
            }
            #social_link li a{
                display: block !important;
                width: 100% !important;
                background: transparent ;
                color: #6A4EE9 !important ;
                text-align: left !important;
            }
            .paginate_style ul {
                margin-top: 40px;
                display: flex;
                justify-content: center;
            }
            .paginate_style ul li.active a{
                background: #ffffff;
                color: #6A4EE9 !important;
                border: 2px solid #6A4EE9;
            }

            .paginate_style ul li a{
                display: inline-block;
                width: 40px;
                height: 40px;
                background: #6A4EE9;
                margin: 0 5px;
                text-align: center;
                line-height: 40px;
                color: #fff !important;
               
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

            .ql-code-block-container {
                background-color: #251f1f;
                color: #fff;
                text-align: left;
                line-height: 40px;
            }

            .card-body {
                font-family: helvetica;
                font-weight: lighter;

            }

            .ql-code-block-container .ql-ui {
                display: none;
            }

            #editor .ql-tooltip .ql-editing {
                z-index: 3500 !important;
            }

        </style>
    @endpush
    <div class="grid-container paginate_style" style="margin-top: 120px;">
        <div class="row g-3">
            <div class="col-xl-9">
                @forelse ($allBlogList as $blog)
                    <div class="col-xl-12" >
                        <div class=" rounded all_blog mb-4">
                            <div>
                                <img class="me-3" style="object-fit: cover;float: left; height:100px; width:100px; " src="{{ $blog->feature_image }}" alt="">
                                <h4 style="color:#555555 ;line-height: 30px;font-weight:bold;">{{ Str::limit($blog->blog_title, 60, '...') }}</h4>
                                <b style="margin-bottom:10px; display:inline-block;">{{ $blog->created_at->format('F j, Y') }}</b> <br>
                                <span style="color: #555555;">{{ Str::limit($blog->about_blog, 300, '.....') }}</span> <br>
                                <a href="{{ route('blog.details', $blog->id) }}" class="see_btn">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4>No blog data hlw found..!</h4>
                @endforelse

            </div>

            <div class="col-xl-3">
                <div class="row mb-5 px-3">

                    <div class="">
                        <img class="img-fluid" src="{{ $userProfile->image }}" alt="">
                        
                        <h6 style="text-transform: capitalize;">{{ Str::limit($userProfile->name, 8, '....') }}</h6>
                        <span>{!! Str::limit($userProfile->about_author, 100, '<b><a href="" style="color:#6A4EE9;">....see more</a></b>') !!}</span>
                    </div>
                    <h6>Follow Me on:</h6>
                    <ul id="social_link" class="m-0 ms-4  p-0 d-block " style="list-style-type: circle;">
                        @forelse ($socialLink as $link)
                        <li ><a target="_blank" href="{{ $link->social_link }}">{{ $link->social_name }}</a></li>
                            
                        @empty
                        <li>No social link found</li>
                        @endforelse
                    </ul>
                </div>


                <h3 class="widget-title title medium bordered mt-5 p-0">
                    All Category's Post
                </h3>
    
    
                @forelse ($categorys as $key => $category)
                

                @if ($category->blogs_count > 0)
                <a class="all_category_btn" href="{{ route('blog.all', $category->id) }}" style="
                    display:inline-block;
                    padding:2px 20px;
                    margin:5px 5px 5px 0;
                    border-radius:20px;
                    color:#6A4EE9;
                    border:1px solid #6A4EE9;
                    ">{{ $category->category_name }}</a> 
                @endif


                @empty
                <h4>No category found!</h4>
                @endforelse
            </div>


            @if ($allBlogList->lastPage() > 1)
            <ul class="pagination">
                @php
                    $start = $allBlogList->currentPage() - 2;
                    $end = $allBlogList->currentPage() + 2;
                    if ($start < 1) {
                        $start = 1;
                        $end = 5;
                    }
                    if ($end > $allBlogList->lastPage()) {
                        $end = $allBlogList->lastPage();
                        $start = $end - 4 > 0 ? $end - 4 : 1;
                    }
                @endphp
            
                @if($start > 1)
                    <li><a href="{{ $allBlogList->url(1) }}">1</a></li>
                    @if($start > 2)
                        <li><span>...</span></li>
                    @endif
                @endif
            
                @for ($i = $start; $i <= $end; $i++)
                    <li class="{{ ($allBlogList->currentPage() == $i) ? 'active' : '' }}">
                        <a href="{{ $allBlogList->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
            
                @if($end < $allBlogList->lastPage())
                    @if($end < $allBlogList->lastPage() - 1)
                        <li><span>...</span></li>
                    @endif
                    <li><a href="{{ $allBlogList->url($allBlogList->lastPage()) }}">{{ $allBlogList->lastPage() }}</a></li>
                @endif
            </ul>
            @endif
        </div>

        
    </div>
@endsection
