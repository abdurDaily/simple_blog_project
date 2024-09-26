@extends('Backend.Layout.Layout')
@section('backend_contains')
<div class="form-elements-wrapper">
    <div class="row">
      <div class="col-lg-12 mx-auto">
         <form action="" method="post" enctype="multipart/form-data">
            @csrf


            <!-- input style start -->
            <div class="card-style mb-30 p-lg-5">
                <h4 class="mb-25">add a new video</h4>

                <div class="input-style-1">
                    <label for="video_title">Video Title *</label>
                    <input required id="video_title" type="text" name="video_title" placeholder="video title..">
                </div>
                
                @error('video_title')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror

                <div class="input-style-1">
                    <label for="video_link">insert youtube video link *</label>
                    <input required id="video_link" type="text" name="video_link" placeholder="video link..">
                </div>

                @error('video_link')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror

                <br>

                
                <!-- end input -->
                <button class="main-btn primary-btn btn-hover w-25 text-center" type="submit">
                    Post
                </button>


            </div>
            <!-- end card -->

            </form>
        </div>
    </div>
    <!-- end row -->
  </div>
@endsection