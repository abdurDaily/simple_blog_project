@extends('Frontend.Layouts')
@section('frontend_contains')
    @push('frontend_css')
        <style>
            @font-face {
                font-family: 'helvetica';
                src: url('{{ asset('assets/fonts/Helvetica-Bold.ttf') }}');
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
        <div class="row gy-3">
            @forelse ($allBlogList as $blog)
                <div class="col-xl-9">
                    <div class=""
                        style="background: #fff; padding:20px; box-shadow:3px 3px 30px #88888839; height:100%;">
                        <div class="blog-img text-center">
                            <img class="img-fluid" style=" height:200px; object-fit:cover;" src="{{ $blog->blog_image }}"
                                alt="">
                        </div>
                        <div class="card-body">
                            <img src="{{ $blog->feature_image }}" alt="">
                            {!! $blog->editor_content !!}
                        </div>
                    </div>
                </div>
                {{ $allBlogList->links() }}
            @empty
                <h4>No blog data hlw found..!</h4>
            @endforelse
        </div>
    </div>
@endsection
