@extends('Frontend.Layouts')
@section('frontend_contains')
@push('frontend_css')
<style>

</style>
@endpush

<main id="tags-archive" class="main grid-container" style="margin-top: 50px !important;">
    <div class="intro-text text textcenter section np-bottom grid-container grid-medium np-mobile">
        <h1 class="title ularge">Explore our Categories ✨</h1>
        <div class="text">
            <p>Whether you’re a photography aficionado or simply intrigued by the art of visual storytelling, our blog
                is your gateway to exploring the mesmerizing world of renowned photographers and the captivating
                narratives.</p>
        </div>
    </div>
    <section class="epcl-tags-archive medium-section ">
        <div class="epcl-flex bg-box section">
            <div class="left epcl-flex grid-60 np-mobile">

                @forelse ($categorys as $category)
                @if ($category->blogs_count > 0)


                <div class="category-info item overlay-effect grid-25 mobile-grid-33 tablet-grid-33">
                    <div class="image-container ctag-18"> <span class="category-image ctag ctag-18"><img
                                fetchpriority="low" decoding="async" loading="lazy" src="{{ $category->category_img }}"
                                alt="Code" class="cover"></span></div>
                    <h3 class="title usmall fw-medium"><span class="title small fw-bold">{{ $category->category_name }}</span>{{ $category->blogs_count }} Articles</h3> <a
                        href="{{ route('blog.all', $category->id) }}" class="full-link"><span
                            class="screen-reader-text">Code</span></a>
                </div>
                @endif
                @empty
                <span>No category fount yet!</span>
                @endforelse


            </div>
        </div>
        <div class="clear"></div>
    </section>
</main>
@endsection