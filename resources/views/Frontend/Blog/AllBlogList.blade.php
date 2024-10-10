@extends('Frontend.Layouts')
@section('frontend_contains')
    @push('frontend_css')
        <style>
            @font-face {
                font-family: 'helvetica';
                src: url('{{ asset('assets/fonts/Helvetica-Bold.ttf') }}');
            }

            .see_btn {
                background: #365CF5;
                color: #fff;
                display: inline-block;
                padding: 10px 20px;
            }
            .see_btn:hover{
                color: #fff;
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
    <div class="grid-container mt-5 ">
        <div class="row g-3">
            @forelse ($allBlogList as $blog)
                <div class="col-xl-6" >
                    <div class="shadow py-3">
                        <div class="row mx-0">
                            <div class="col-lg-4">
                                <img class="img-fluid" src="{{ $blog->feature_image }}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <span>{{ Str::limit($blog->about_blog, 80, '.....') }}</span> <br>
                                <a href="#" class="see_btn">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h4>No blog data hlw found..!</h4>
            @endforelse
        </div>
    </div>
@endsection
