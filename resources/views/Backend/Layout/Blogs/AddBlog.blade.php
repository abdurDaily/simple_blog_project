@extends('Backend.Layout.Layout')
@section('backend_contains')

@push('backend_css')
<style>
  
  .ql-font-family .ql-picker-label polygon{
    display: none;
  }
  .ql-snow .ql-tooltip{
    z-index: 10000;
  }
  #editor .ql-editor{
    height: 450px;
  }
  #editor .ql-editor p img{
    height: 200px;
    object-fit: cover;
    padding: 20px;
  }
</style>
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css" />
@endpush

<div id="toolbar-container">
    <span class="ql-formats">
      <select class="ql-font"></select>
      <select class="ql-size"></select>
      <select class="ql-font-family">
        <option value="Arial">Arial</option>
        <option value="Calibri">Calibri</option>
        <option value="Courier New">Courier New</option>
        <option value="Helvetica">Helvetica</option>
        <option value="Times New Roman">Times New Roman</option>
      </select>
    </span>
    <span class="ql-formats">
      <button class="ql-bold"></button>
      <button class="ql-italic"></button>
      <button class="ql-underline"></button>
      <button class="ql-strike"></button>
    </span>
    {{-- <span class="ql-formats">
      <select class="ql-color"></select>
      <select class="ql-background"></select>
    </span> --}}
    <span class="ql-formats">
      <button class="ql-script" value="sub"></button>
      <button class="ql-script" value="super"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-header" value="1"></button>
      <button class="ql-header" value="2"></button>
      <button class="ql-blockquote"></button>
      <button class="ql-code-block"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-list" value="ordered"></button>
      <button class="ql-list" value="bullet"></button>
      <button class="ql-indent" value="-1"></button>
      <button class="ql-indent" value="+1"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-direction" value="rtl"></button>
      <select class="ql-align"></select>
    </span>
    <span class="ql-formats">
      <button class="ql-link"></button>
      <button class="ql-image"></button>
      <button class="ql-video"></button>
      <button class="ql-formula"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-clean"></button>
    </span>

</div>


<div id="editor" >
</div>



<form action="{{ route('blog.add') }}" method="post" enctype="multipart/form-data">
  @csrf
   

  <div class="row mt-3">
    <div class="col-lg-12">
      <div class="input-style-1">
        <label for="blog_title">blog title</label> 
        <textarea name="blog_title" id="blog_title" cols="30" placeholder="blog title...." rows="3" value="{{ old('blog_title') }}"></textarea>
        @error('blog_title')
            <span style="color: red;">{{ $message }}</span>
        @enderror
      </div>
    </div>

    
    <div class="col-lg-6">
        <select style="padding: 20px; border:none;" name="category_id" id="" class="form-control input-style-1 " >
            <option selected disabled>select a category</option>
            @foreach ($categorys as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
            @endforeach
        </select>

        @error('category_id')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-lg-6">
        <div class="input-style-1 d-flex align-items-center" style="background: #fff; ">
            <label style="width: 25%; margin-bottom:0; padding-left:15px;" for="blog_image">Blog Image</label>
            <input  id="blog_image" type="file" name="blog_image" value="{{ old('blog_image') }}" > <br>
        </div>
        @error('blog_image')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-lg-12">
       <label for="about_blog">about blog * (shortly)</label>
        <textarea class="form-control mb-3" placeholder="simple description about this post..." name="about_blog" id="" cols="30" rows="10">{{ old('about_blog') }}</textarea>
        @error('about_blog')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
</div>

  <button class="main-btn primary-btn btn-hover w-25 text-center" type="submit">
    submit
  </button>
</form>

@push('js_contains')
<script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

<script>
 const quill = new Quill('#editor', {
  modules: {
    syntax: true,
    toolbar: '#toolbar-container',
    imageResize: {
      displaySize: true,
    },
  },
  placeholder: 'Compose an epic...',
  theme: 'snow',
});

// Set the content of the Quill editor
quill.root.innerHTML = `{!! old('editor_content') ?? '' !!}`;

const form = document.querySelector('form');

form.addEventListener('submit', function(event) {
  const editorContent = quill.root.innerHTML;
  const hiddenInput = document.createElement('input');
  hiddenInput.type = 'hidden';
  hiddenInput.name = 'editor_content';
  hiddenInput.value = editorContent;
  form.appendChild(hiddenInput);
});

$('#editor .ql-editor p img').after('<br> <br>');
</script>
@endpush

@endsection
