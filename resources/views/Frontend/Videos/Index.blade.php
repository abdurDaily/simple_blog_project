@extends('Frontend.Layouts')

@section('OgTags')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.1.8/venobox.min.css"  />
@endsection


@push('frontend_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.1.8/venobox.min.js" ></script>

<script>
    new VenoBox({
        selector: '.my-video-links',
        spinner: "circle",
        border: "1px",
    });
</script>
@endpush

@section('frontend_contains')
    <div class="grid-container my-5">
        <div class="row">
            
            @forelse ($allVideos as $video)
            <div class="col-xl-3 gy-3">
                <div class="p-3 shadow-sm ">
                    <div class="card-body">


                        @php
if ($video !== null) {
    $video_link = $video->video_link;
    if (strpos($video_link, 'youtu.be/') !== false) {
        $video_id = str_replace('https://youtu.be/', '', $video_link);
        $video_id = explode('?', $video_id)[0]; // remove any query parameters
    } elseif (strpos($video_link, 'youtube.com/watch?v=') !== false) {
        $video_id = str_replace('https://www.youtube.com/watch?v=', '', $video_link);
    } else {
        $video_id = '';
    }
    $thumbnail = "http://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
} else {
    $thumbnail = ''; 
}
@endphp







                        <div class="img">

                            <a data-gall="myGallery" class="my-video-links" data-autoplay="true" data-vbtype="video" href="{{ $video->video_link }}">
                                <img src="{{ $thumbnail }}" alt="">
                            </a>
                            
                        </div>

                        <p style="text-transform: capitalize;">{{ Str::limit($video->video_title, 50, '...') }}</p>
                    </div>

                </div>
            </div>

            {{ $allVideos->links() }}
            @empty

            <h1>No video found!</h1>
                
            @endforelse
            
        </div>
    </div>
@endsection