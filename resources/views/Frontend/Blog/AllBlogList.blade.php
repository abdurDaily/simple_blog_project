@extends('Frontend.Layouts')
@section('frontend_contains')
    @push('frontend_css')
        <style>
            @font-face {
                font-family: 'helvetica';
                src: url('{{ asset('assets/fonts/Helvetica-Bold.ttf') }}');
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
    <div class="grid-container paginate_style" style="margin-top: 100px;">
        <div class="row g-3">
            @forelse ($allBlogList as $blog)
                <div class="col-xl-6" >
                    <div class="shadow all_blog">
                        <div class="row mx-0">
                            <div class="col-lg-4 p-0">
                                <img class="img-fluid h-100" style="object-fit: cover;" src="{{ $blog->feature_image }}" alt="">
                            </div>
                            <div class="col-lg-8 p-4">
                                <span>{{ Str::limit($blog->about_blog, 80, '.....') }}</span> <br>
                                <a href="{{ route('blog.details', $blog->id) }}" class="see_btn">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h4>No blog data hlw found..!</h4>
            @endforelse

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
