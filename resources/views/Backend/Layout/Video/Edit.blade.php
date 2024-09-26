@extends('Backend.Layout.Layout')
@section('backend_contains')
<div class="form-elements-wrapper">
    <div class="row">
      <div class="col-lg-12 mx-auto">
         <form action="{{ route('video.update', $editVideo->id ) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')


            <!-- input style start -->
            <div class="card-style mb-30 p-lg-5">
                <h4 class="mb-25">Edit Video..</h4>

                <div class="input-style-1">
                    <label for="video_title">Video Title *</label>
                    <input value="{{ $editVideo->video_title }}" required id="video_title" type="text" name="video_title" placeholder="video title..">
                </div>
                
                @error('video_title')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror

                <div class="input-style-1">
                    <label for="video_link">insert youtube video link *</label>
                    <input value="{{ $editVideo->video_link }}" required id="video_link" type="text" name="video_link" placeholder="video link..">
                </div>

                @error('video_link')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror

                <br>

                
                <!-- end input -->
                <button class="main-btn primary-btn btn-hover w-25 text-center" type="submit">
                    Update
                </button>


            </div>
            <!-- end card -->

            </form>
            </div>
    </div>
    <!-- end row -->
  </div>
@endsection