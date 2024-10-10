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
        #blog h1{
            font-family: 'Helvetica Neue', sans-serif;
            text-transform: capitalize;
            color: #222222;
            font: bold 28px / 1.1em;
        }
    </style>
@endpush


@section('frontend_contains')
    <div class="grid-container blog_details">
        <div class="row" id="blog">


            <div class="col-xl-9 blog_detail_find">
                <div>
                    <div class="card-header">
                        {{-- <h2 class="main-title title ularge">{{ $blog->blog_title }}</h2> --}}
                    </div>


                    <div class="card-body">
                        <h1>Navigating Missing Data Challenges with XGBoost</h1>
                        <span>By <b>{{ $blog->user->name }}</b> on {{ $blog->created_at->format('d M, Y') }} in Data Science</span>
                        <div class="share-icons">
                            <span>share in social plateform :</span>
                            <a href="#" class="facebook-icon">
                                <span style="background:#1877F2; color:#fff; font-size:10px; display:inline-block; padding:0px 10px; border-radius:10px;"><i class="fa-brands fa-facebook-f"></i> facebook </span>
                            </a> 
                            <a href="#" class="twitter-icon">
                                <span style="background:#1DA1F2; color:#fff; font-size:10px; display:inline-block; padding:0px 10px; border-radius:10px;"><i class="fa-brands fa-twitter"></i>Twitter</span>
                            </a>
                        </div>



                        <div class="blog_img text-center ">
                            <img style="height:400px; object-fit: scale-down;" class="img-fluid "
                                src="{{ $blog->feature_image }}" alt="">
                        </div>


                        <div>
                            {!! $blog->editor_content !!}
                        </div>



                        <div class="details text px-lg-5">
                            {!! $blog->blog_details !!}
                        </div>
                        <div class="details text px-lg-5" style="position: relative;">
                            <pre class="codemirror" style="white-space: pre-wrap;">
                                <code class="language-php" id="code">
                                    {{ preg_replace('/^\s+$/m', '', trim($blog->code)) }}
                                </code>
                            </pre>
                            <button class="copy-button" data-clipboard-target="#code"
                                style="position: absolute; top: 0; right: 5%; background:#6A4EE9; color:#fff; padding:5px;">Copy
                                Code</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3">
                @forelse ($categorys as $key => $category)
                    <a href="{{ route('blog.all', $category->id) }}" class="items">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                            <rect width="20" height="20" fill="none" />
                            <path fill="currentColor"
                                d="M8.5 2a.5.5 0 0 1 .5.5v4.025A5 5 0 0 1 13.475 11H17.5a.5.5 0 0 1 0 1h-4.025A5 5 0 0 1 9 16.475V17.5a.5.5 0 0 1-1 0v-1.025A5 5 0 0 1 3.525 12H2.5a.5.5 0 0 1 0-1h1.025A5 5 0 0 1 8 6.525V2.5a.5.5 0 0 1 .5-.5M4.531 12A4 4 0 0 0 8 15.47V12zM8 11V7.531A4 4 0 0 0 4.531 11zm1 1v3.47A4 4 0 0 0 12.47 12zm3.47-1A4 4 0 0 0 9 7.531V11z" />
                        </svg>
                        {{ $category->category_name }}</a>
                @empty
                    <h4>No category found!</h4>
                @endforelse
            </div>



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
        const copyButton = document.querySelector('.copy-button');
        const code = document.querySelector('#code');

        copyButton.addEventListener('click', () => {
            navigator.clipboard.writeText(code.textContent).then(() => {
                alert('Code copied to clipboard!');
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
