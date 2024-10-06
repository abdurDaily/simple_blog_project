@extends('Frontend.Layouts')


@section('OgTags')
    <meta property="og:title" content="{{ $blog->blog_title }}" />
    <meta property="og:description" content="{{ Str::limit($blog->blog_details, 155) }}" />
    {{-- <meta property="og:image" content="{{ asset($blog->blog_image) }}" /> --}}
    <meta property="og:image" content="{{ asset('images/' . $blog->blog_image) }}" />
    <img  style="height:400px; object-fit: scale-down;" class="img-fluid " src="{{ asset('images/' . $blog->blog_image) }}" alt="">
    <meta property="og:url" content="{{ url($blog->id) }}" />
    {{-- {{ dd($blog->blog_image) }} --}}
@endsection
@section('frontend_contains')

  <div class="grid-container blog_details">
    <div class="row">
        <div class="col-xl-9 blog_detail_find">
            <div>
                <div class="card-header">
                    <h2 class="main-title title ularge">{{ $blog->blog_title }}</h2>
                    <div class="meta small inline text-center"> <time datetime="2024-01-19"> <svg class="icon main-color"><use xlink:href="https://themes.estudiopatagon.com/wordpress/zento/wp-content/themes/zento/assets/images/svg-icons.svg#calendar-icon"></use></svg> <span class="fw-semibold">Published:</span> {{ $blog->created_at->format('d M, Y') }} | {{ '@' . $blog->user->name }} </time><div class="clear"></div></div>
                </div>
                <div class="card-body">
                     <div class="blog_img text-center ">  
                        <img  style="height:400px; object-fit: scale-down;" class="img-fluid " src="{{ $blog->blog_image }}" alt="">
                     </div>
                     <div class="details text px-lg-5">
                         {!! $blog->blog_details !!}
                     </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            @forelse ($categorys as $key => $category)
                 <a href="{{ route('blog.all', $category->id) }}" class="items" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                        <rect width="20" height="20" fill="none" />
                        <path fill="currentColor" d="M8.5 2a.5.5 0 0 1 .5.5v4.025A5 5 0 0 1 13.475 11H17.5a.5.5 0 0 1 0 1h-4.025A5 5 0 0 1 9 16.475V17.5a.5.5 0 0 1-1 0v-1.025A5 5 0 0 1 3.525 12H2.5a.5.5 0 0 1 0-1h1.025A5 5 0 0 1 8 6.525V2.5a.5.5 0 0 1 .5-.5M4.531 12A4 4 0 0 0 8 15.47V12zM8 11V7.531A4 4 0 0 0 4.531 11zm1 1v3.47A4 4 0 0 0 12.47 12zm3.47-1A4 4 0 0 0 9 7.531V11z" />
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
    const facebookIcon = document.querySelector('.facebook-icon');
    const twitterIcon = document.querySelector('.twitter-icon');

    facebookIcon.addEventListener('click', () => {
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${window.location.href}`, '_blank');
    });

    twitterIcon.addEventListener('click', () => {
    window.open(`https://twitter.com/intent/tweet?url=${window.location.href}`, '_blank');
    });
</script>
@endpush