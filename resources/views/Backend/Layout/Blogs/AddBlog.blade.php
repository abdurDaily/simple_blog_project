@extends('Backend.Layout.Layout')

@section('backend_contains')


@push('backend_css')
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.3/codemirror.min.css" />
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

                <div class="input-style-1">
                    <label for="code_snippet">Code Snippet </label>
                    <textarea id="code_snippet" name="code" placeholder="Write your code here..."></textarea>
                    <div id="code-preview"></div>
                </div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.3/codemirror.min.js"></script>
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

    var codeMirrorEditor = CodeMirror.fromTextArea(document.getElementById('code_snippet'), {
        mode: 'htmlmixed', // or 'javascript', 'css', etc.
        theme: 'monokai',
        lineNumbers: true,
        lineWrapping: true,
        autoCloseTags: true,
        matchBrackets: true,
        indentUnit: 4,
        indentWithTabs: true
    });

    codeMirrorEditor.on('change', function() {
        var code = codeMirrorEditor.getValue();
        document.getElementById('code-preview').innerHTML = '<pre>' + code + '</pre>';
    });
</script>
<script>
codeMirrorEditor.on('change', function() {
    var code = codeMirrorEditor.getValue().trim();
    document.getElementById('code-preview').textContent = code;
});
</script>
@endpush

@endsection


@push('js_contains')
@include('sweetalert::alert')
@endpush


@push('backend_css')
<style>
#code-preview {
    white-space: pre-wrap;
    max-height: 500px;
    overflow-y: auto;
    padding: 10px;
    border: 1px solid #ccc;
    font-family: monospace;
}
</style>
@endpush