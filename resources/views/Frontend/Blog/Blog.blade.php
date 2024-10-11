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
        #blog h1 {
            font-family: 'Helvetica Neue', sans-serif;
            text-transform: capitalize;
            color: #222222;
            font: bold 28px / 1.1em;
        }

        #wrapper{
            font-family: 'Helvetica Neue', sans-serif;
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
        }

        .ql-code-block-container select {
            display: none;
        }
    </style>
@endpush


@section('frontend_contains')
    <div class="grid-container blog_details" style="margin-top: 120px;">
        <div class="row" id="blog">


            <div class="col-xl-8 blog_detail_fin">
                {{-- <button class="copy-ql-code-button" data-clipboard-target=".ql-code-block-container">Copy Code</button> --}}
                <div>
                    <div class="card-body">
                        <h1>{{ $blog->blog_title }}</h1>
                        <span>By <b>{{ $blog->user->name }}</b> on {{ $blog->created_at->format('d M, Y') }} in <b
                                style="background: yellow; font-family:sans-serif;">{{ $blog->category->category_name }}</b> </span>
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


            <div class="col-xl-4">

                <div class="row mb-5 px-3">

                    <div class="col-4">
                        <img class="img-fluid" src="{{ $blog->user->image }}" alt="">
                    </div>
                    <div class="col-8">
                        <h6>{{ $blog->user->name }}</h6>
                        <span>{!! Str::limit($blog->user->about_author, 100, '....see more') !!}</span>
                    </div>
                    <h6>Never miss a tutorial:</h6>
                </div>


                <div class="row px-3">
                    <h4>relevent blog's</h4>

                    @forelse ($releventBlogs as $blog)
                        <div class=" d-flex border-bottom mb-3 pb-4">
                            <img style="border-radius: 50%; width:70px; height:70px;" class="img-fluid"
                                src="{{ $blog->feature_image }}" alt="">
                            <div>
                                <a style="display: inline-block; padding-left:10px;" href="{{ route('blog.details', $blog->id) }}"><span>{!! Str::limit($blog->blog_title, 60, '....see more') !!}</span></a> <br>
                                <span style="display: inline-block; padding-left:10px;"><span style="font-weight: 400;">{{ $blog->created_at->diffForHumans() }} </span></span>
                            </div>
                        </div>
                    @empty
                        <h4>No relevent data found!</h4>
                    @endforelse

                </div>

                <h4 style="font-size: 16px; text-transform:lowercase; font-weight:400; margin-bottom:10px;">All Category's Post</h4>
                @forelse ($categorys as $key => $category)
                    <a href="{{ route('blog.all', $category->id) }}" style="
                    background: #6A4EE9;
                    color:#fff;
                    display:inline-block;
                    padding:5px 20px;
                    ">{{ $category->category_name }}</a>
                @empty
                    <h4>No category found!</h4>
                @endforelse



                
            </div>


            <h4>Latest Post's:</h4>
            @forelse ($latestPost as $blog)
                  
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="border">
                <img class="img-fluid" src="{{ $blog->feature_image }}" alt="">
                <div class="card-body p-3">
                    <a href="{{ route('blog.details', $blog->id) }}"><h5 class="card-title">{{ Str::limit($blog->blog_title, 50, '...') }}</h5></a>
                    <span style="font-size: 14px; font-weight:400;"> Last updated at: {{ $blog->updated_at->diffForHumans() }}</span>
                </div>
              </div>
            </div>
            @empty
            <h4>No relevent data found!</h4>
        @endforelse


        </div>
    </div>


    <div class="social-icons">
        <a href="#" class="facebook-icon">
            <span><i class="fa-brands fa-facebook"></i></span>
        </a>
        <a href="#" class="twitter-icon">
            <span><i class="fa-brands fa-twitter"></i></span>
        </a>
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
