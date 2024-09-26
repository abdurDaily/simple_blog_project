@extends('Backend.Layout.Layout')

@section('backend_contains')


@push('backend_css')
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />

@endpush


<div class="form-elements-wrapper">
    <div class="row">
      <div class="col-lg-12 mx-auto">
         <form action="{{ route('blog.add') }}" method="post" enctype="multipart/form-data">
            @csrf

          <!-- input style start -->
            <div class="card-style mb-30 p-lg-5">
                <h4 class="mb-25">Create a new blog</h4>


                <div class="input-style-1">
                <label for="blog_title">Blog Title *</label>
                <input id="blog_title" type="text" name="blog_title" placeholder="blog title.." >
                 @error('blog_title')
                    <strong class="text-danger">{{ $message }}</strong>
                  @enderror
                </div>

                <label for="blog_details">Blog Details *</label>
                <textarea id="blog_details" name="blog_details" placeholder="Blog details..."></textarea>    
                @error('blog_details')
                  <strong class="text-danger">{{ $message }}</strong>
                @enderror

                <div class="input-style-1 mt-4">
                    <label for="blog_image">Blog Image</label>
                    <input id="blog_image" type="file" name="blog_image"  >
                </div>

                <div class="input-style-1 mt-4">
                    <label for="blog_image">Blog Image</label>
                    <select name="category_id" id="" class="form-control py-3" >
                        <option selected disabled>select a category</option>
                        @foreach ($categorys as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>

                    @error('category_id')
                      <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                
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




@push('js_contains')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
    .create( document.querySelector( '#blog_details' ), {
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

@endsection


@push('js_contains')
@include('sweetalert::alert')
@endpush