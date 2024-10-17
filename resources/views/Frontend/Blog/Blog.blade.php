@extends('Frontend.Layouts')


@section('OgTags')
<meta property="og:title" content="{{ $blog->blog_title }}" />
<meta property="og:description" content="{{ Str::limit($blog->blog_details, 155) }}" />
<meta property="og:image" content="{{ asset('images/' . $blog->blog_image) }}" />
<img style="height:400px; object-fit: scale-down;" class="img-fluid " src="{{ asset('images/' . $blog->blog_image) }}"
    alt="">
<meta property="og:url" content="{{ url($blog->id) }}" />
@endsection

@push('frontend_css')
<link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">
<style>
    .foot-blog:hover img {
        transform: scale(1.2);
        transition: 0.5s;
    }

    .all_category_btn:hover {
        background: #6A4EE9;
        color: #fff !important;
    }

    .foot-blog .img {
        overflow: hidden;
    }

    .about_author p {
        font-size: 14px;
        line-height: 22px;
    }

    #blog h1 {
        font-family: 'Helvetica Neue', sans-serif;
        text-transform: capitalize;
        color: #222222;
        font: bold 28px / 1.1em;
    }

    #wrapper {
        /* font-family: 'Helvetica Neue', sans-serif; */
    }

    #blog .ql-code-block-container .copy-ql-code-button {
        position: absolute;
        top: 0;
        right: 0;
        background-color: #6A4EE9;
        color: #fff;
        padding: 5px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .ql-code-block-container {
        position: relative;
        background: #211D3F;
        color: #fff;
        padding: 10px 20px;
        height: 400px;
        overflow-y: scroll;
        margin: 20px 0;
    }

    .ql-code-block-container select {
        display: none;
    }
</style>
@endpush


@section('frontend_contains')
<div class="grid-container blog_details" style="margin-top: 80px; overflow-x: hidden;">
    <div class="row" id="blog">


        <div class="col-xl-9 blog_detail_fin">
            {{-- <button class="copy-ql-code-button" data-clipboard-target=".ql-code-block-container">Copy Code</button>
            --}}
            <div>
                <div class="card-body">
                    <h1 style="line-height: 35px;">{{ $blog->blog_title }}</h1>
                    <span>By <b>{{ $blog->user->name }}</b> on {{ $blog->created_at->format('d M, Y') }} in <b
                            style="border:1px solid #6A4EE9;  color:#6A4EE9;display:inline-block; padding:0px 10px; font-size:10px; border-radius:15px;">{{
                            $blog->category->category_name }}</b> </span>
                    <div class="share-icons">
                        <span>share in social plateform :</span>
                        <a href="#" class="facebook-icon">
                            <span
                                style="background:#1877F2; color:#fff; font-size:10px; display:inline-block; padding:0px 10px; border-radius:10px;"><i
                                    class="fa-brands fa-facebook-f"></i> facebook </span>
                        </a>
                        <a href="#" class="twitter-icon">
                            <span
                                style="background:#1DA1F2; color:#fff; font-size:10px; display:inline-block; padding:0px 10px; border-radius:10px;"><i
                                    class="fa-brands fa-twitter"></i>Twitter</span>
                        </a>
                    </div>



                    <div class="blog_img  mt-4">
                        <img style=" width:100%; object-fit:cover;" class="img-fluid " src="{{ $blog->feature_image }}"
                            alt="">
                    </div>


                    <div>
                        {!! $blog->editor_content !!}
                    </div>



                    <div class="details text px-lg-5">
                        {!! $blog->blog_details !!}
                    </div>

                </div>
            </div>
        </div>


        <div class="col-xl-3 about_author">

            <div class="row mb-5 px-3">

                <div class="">
                    <img class="img-fluid" src="{{ $blog->user->image }}" alt="">
                    
                    <h6 style="text-transform: capitalize;">{{ Str::limit($blog->user->name, 8, '....') }}</h6>
                    <span>{!! Str::limit($userProfile->about_author, 100, '<b><a href="' . route('about.index') . '" style="color:#6A4EE9;">....see more</a></b>') !!}</span>
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


            <div class="row px-3">
                <h3 class="widget-title title medium bordered  px-0">
                    Relevent blog's
                </h3>
                @forelse ($releventBlogs as $blog)
                <div class=" d-flex border-bottom mb-3 pb-4">
                    <img style="border-radius: 50%; width:70px; height:70px; object-fit:cover;" class="img-fluid"
                        src="{{ $blog->feature_image }}" alt="">
                    <div>
                        <a style="display: inline-block; padding-left:10px;"
                            href="{{ route('blog.details', $blog->id) }}"><span>{!! Str::limit($blog->blog_title, 60,
                                '....see more') !!}</span></a> <br>
                        <span style="display: inline-block; padding-left:10px;"><span style="font-weight: 400;">{{
                                $blog->created_at->diffForHumans() }} </span></span>
                    </div>
                </div>
                @empty
                <h4>No relevent data found!</h4>
                @endforelse

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


        <h3 style="margin-left: 25px;" class="widget-title title medium bordered mb-0 mt-5 px-0">
            Latest Post's
        </h3>

        <div class="row gy-3 mx-auto">
            @forelse ($latestPost as $blog)

            <div class="col-xl-3 col-lg-4 col-md-6 ">
                <div class="border foot-blog " style="height: 328px;">
                    <div class="img" style="height: 200px;">
                        <img class="img-fluid" style="height:100%; width:100%; object-fit:cover;"
                            src="{{ $blog->feature_image }}" alt="">
                    </div>
                    <div class="card-body p-3 w-100">
                        <a href="{{ route('blog.details', $blog->id) }}">
                            <h5 class="card-title" style="font-weight: bold; line-height:20px; margin-bottom:10px;">{{
                                Str::limit($blog->blog_title, 50, '...') }}</h5>
                        </a>
                        <span
                            style="font-size: 14px; font-weight:400; display:block; width:100%; color:#222222; display: flex; justify-content:space-between;">
                            <span>Last updated at:</span> <span style="color: #6A4EE9;">{{
                                $blog->updated_at->diffForHumans() }}</span> </span>
                    </div>
                </div>
            </div>

            @empty
            <h4>No category found!</h4>
            @endforelse
        </div>
        <br>

        <h6 style="text-align: center; margin-top:40px;"><a href="{{ route('blog.all.list') }}"
                style="display: inline-block; padding:5px 50px; border:1px solid #6A4EE9;color:#6A4EE9; ">{{
                count($latestPost) > 1 ? "see all" : 'see all' }}</a></h6>


    </div>
</div>



@endsection

@push('frontend_js')
<script src="https://code.iconify.design/iconify.min.js"></script>

<script>
    // Get the CodeMirror element
        var codeMirror = document.querySelector('.codemirror');

        // Get the Code Snippet textarea
        var codeSnippet = document.querySelector('#code_snippet');

        // Create a flag to track whether the code has already been appended
        var codeAppended = false;

        // Add an event listener to the Code Snippet textarea
        codeSnippet.addEventListener('input', function() {
            // Get the code from the Code Snippet textarea
            var code = codeSnippet.value;

            // Check if the code has already been appended
            if (!codeAppended) {
                // If not, append the code to the CodeMirror element
                codeMirror.innerHTML = '<code class="language-php">' + code + '</code>';
                codeAppended = true;
            }
        });
</script>


<script>
    const facebookIcon = document.querySelector('.facebook-icon');
        const twitterIcon = document.querySelector('.twitter-icon');

        facebookIcon.addEventListener('click', () => {
            window.open(`https://www.facebook.com/sharer/sharer.php?u=${window.location.href}`, '_blank');
        });

        twitterIcon.addEventListener('click', () => {
            window.open(`https://twitter.com/intent/tweet?url=${window.location.href}`, '_blank');
        });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
            const qlCodeContainers = document.querySelectorAll('.ql-code-block-container');

            qlCodeContainers.forEach((container) => {
                const codeTextContainer = document.createElement('div');
                codeTextContainer.classList.add('code-text-container');
                codeTextContainer.innerHTML = container.innerHTML;
                container.innerHTML = '';
                container.appendChild(codeTextContainer);

                const copyButton = document.createElement('button');
                copyButton.classList.add('copy-ql-code-button');
                copyButton.textContent = 'Copy Code';
                container.appendChild(copyButton);

                copyButton.addEventListener('click', () => {
                    const codeText = codeTextContainer.innerText.replace(
                        'PlainBashC++C#CSSDiffHTML/XMLJavaJavaScriptMarkdownPHPPythonRubySQL',
                        '');
                    navigator.clipboard.writeText(codeText.trim()).then(() => {
                        copyButton.textContent = 'Copied!';
                        setTimeout(() => {
                            copyButton.textContent = 'Copy Code';
                        }, 2000);
                    });
                });
            });
        });
</script>
@endpush

@push('frontend_css')
<style>
    pre {
        white-space: pre-wrap;
        max-height: 500px;
        /* adjust the height to your needs */
        overflow-y: auto;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism.min.css" />
@endpush