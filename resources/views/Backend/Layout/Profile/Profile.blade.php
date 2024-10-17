@extends('Backend.Layout.Layout')
@section('backend_contains')

@push('backend_css')
  <style>
    .ck.ck-editor__main>.ck-editor__editable{
      min-height: 200px;
    }
  </style>
@endpush


    <div class="d-flex justify-content-between py-3">
      <div class="form-check form-switch">
        <form action="{{ route('profile.active', Auth::user()->id) }}" method="post" id="profile-active-form">
          @csrf
          <input {{ $active->author_active_status == Auth::user()->id ? 'checked' : '' }} name="profile_active" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick="document.getElementById('profile-active-form').submit()">
          <label class="form-check-label" for="flexSwitchCheckDefault">Active Status</label>
      </form>
      </div>
      
      <span>{{ getCurrentPath() }}</span>
    </div>


    <div class="form-elements-wrapper">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            
             <form action="{{ route('profile.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
              @csrf 
              @method('put')

              <!-- input style start -->
            <div class="card-style mb-30 p-lg-5">
                <h6 class="mb-25">User Info. </h6>

                <div class="input-style-1">
                  <label>Full Name</label>
                  <input type="text" name="user_name" placeholder="Full Name" value="{{ Auth::user()->name }}">
                </div>

                
                <div class="input-style-1">
                  <label>Email</label>
                  <input type="email" name="user_email" placeholder="Full Name" value="{{ Auth::user()->email }}">
                </div>


                
                <div class="input-style-1">
                  <label>old password</label>
                  <input type="password" name="current_password" placeholder="old password">
                  @error('error')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                
                <div class="input-style-1">
                  <label>new password</label>
                  <input type="password" name="user_new_password" placeholder="new password">
                </div>


                {{-- ABOUT AUTHOR --}}
                <div class="input-style-1">
                  <label for="about_author">About Author</label>
                  <textarea rows="30" id="about_author" name="about_author" placeholder="about author"></textarea>    
                </div>


                {{-- <img style="height: 150px" src="" alt="123"> --}}
                <img style="height: 150px" src="{{ Auth::user()->image  ? Auth::user()->image : 'https://api.dicebear.com/9.x/initials/svg?seed=' .  Auth::user()->name  }}" alt="profile image">
                {{-- AUTHOR IMAGE --}}
                <div class="input-style-1">
                  <label for="author_image">Author Profile image</label>
                  <input type="file" id="author_image" name="author_image">
                </div>

                



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


      @push('js_contains')
        @include('sweetalert::alert')
      @endpush

@endsection


@push('backend_css')
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />

@endpush

@push('js_contains')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
    .create( document.querySelector( '#about_author' ), {
        toolbar: {
            items: [
                'heading',
                'bold',
                'italic',
                'link',
                'bulletedList',
                'numberedList',
                'blockQuote',
                'undo',
                'redo'
            ],
            shouldNotGroupWhenFull: true
        },
        image: {
            toolbar: []
        },
        mediaEmbed: {
            toolbar: []
        }
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
@endpush