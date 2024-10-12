@extends('Frontend.Layouts')
@section('frontend_contains')
    <div class="grid-container mt-5">
        <div class="row">
            @forelse ($blogs as $blog)
            <div class="col-xl-4 text-center">
                <div class="" style="background: #fff; padding:20px; box-shadow:3px 3px 30px #88888839;">
                    <div class="blog-img text-center">
                        <img class="img-fluid" style=" height:200px; object-fit:cover;" src="{{ $blog->blog_image }}" alt="">
                    </div>
                    <div class="card-body">
                        <h4 style="font-size: 30px; line-height:100%;">
                            <a style="color:#6A4EE9; font-weight:bold;" href="{{ route('blog.details', $blog->id) }}">{{ Str::limit($blog->blog_title, 40, '...') }}</a>
                        </h4>
                        <div class="details mt-3">
                            {!!  Str::limit($blog->about_blog, 150, '.....') !!}
                        </div>
                        <div class="btn-items text-end mt-3">
                            <a style="border: 1px solid #937EEF; color:#937EEF; padding:8px 30px; text-transform:uppercase; display:inline-block;" href="{{ route('blog.details', $blog->id) }}">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <h4>No blog data found..!</h4>
            @endforelse

        </div>
    </div>
@endsection