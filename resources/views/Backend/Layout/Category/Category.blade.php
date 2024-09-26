@extends('Backend.Layout.Layout')
@section('backend_contains')


    <div class="row">
        <div class="col-lg-8">
          <div class="card-style mb-30">
            <h6 class="mb-10">Data Table</h6>
            <div class="table-wrapper table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="lead-info">
                      <h6>SN</h6>
                    </th>
                    <th class="lead-email">
                      <h6>Category</h6>
                    </th>
                    <th class="lead-phone">
                      <h6>Image</h6>
                    </th>
                    <th class="lead-company">
                      <h6>Status</h6>
                    </th>
                    <th>
                      <h6>Action</h6>
                    </th>
                  </tr>
                  <!-- end table row-->
                </thead>
                <tbody>

                @forelse ($categorys as $key=>$category)
                    
                  <tr>
                   
                    <td class="min-width">
                      <p>{{ $key + $categorys->firstItem() }}</p>
                    </td>
                    <td class="min-width">
                      <p>{{ $category->category_name }}</p>
                    </td>
                     <td class="min-width">
                      <div class="lead">
                        <div class="lead-image">
                          <img src="{{ $category->category_img }}" alt="{{ $category->category_name }}">
                        </div>
                      </div>
                    </td>
                    <td class="min-width">
                        <a class="status-btn active-btn" style=" color: {{ $category->category_status == 0 ? 'red' : '#365CF5' }};" href="{{ route('category.active',$category->id) }}">{{ $category->category_status == 1 ? 'Active' : 'Pending' }}</a>
                    </td>
                    <td>
                      <div class="action">
                        <a href="{{ route('category.edit', $category->id) }}"><i class="fa-solid fa-pen-to-square"></i></a> &nbsp;&nbsp;&nbsp;
                        <a href="{{ route('category.delete',$category->id) }}" style="color: red;"><i class="fa-regular fa-trash-can"></i></a>
                      </div>
                    </td>
                  </tr>

                @empty
                   <tr>
                       <td colspan="5" style="border: 1px solid #cccccc4a;">No data found!</td>
                    </tr>
                @endforelse
                    
                </tbody>
              </table>
              {{ $categorys->links() }}
              <!-- end table -->
            </div>
          </div>
          <!-- end card -->
        </div>

        <div class="col-xl-4 ">
            <div class="card-style">

                <div class="">
                    <h6 class="mb-10">{{ $editedCategory ? "Edit" : "Add" }} Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ $editedCategory ? route('category.update', $editedCategory->id) : route('category.add') }}" method="post" enctype="multipart/form-data">
                     @csrf
                
                     @if ($editedCategory)
                         @method('PUT')
                     @endif

                     <label for="name">Categoty Name</label>
                     <input type="text" value="{{ $editedCategory ? $editedCategory->category_name : '' }}" name="category_name" id="name" class="form-control py-3 mb-3" placeholder="insert category name">
                     @error('category_name')
                         <strong class="text-danger mb-2">{{ $message }}</strong>
                     @enderror
                     
                     
                     <label for="image">Categoty Image</label>
                     <input type="file" name="category_img" id="im,age" class="form-control p-3 mb-3">

                     <button class="main-btn primary-btn btn-hover w-50 text-center" type="submit">
                        Add Categoty
                      </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- end col -->
      </div>
@endsection


@push('js_contains')
@include('sweetalert::alert')
@endpush

@push('backend_css')
    <style>
      .category tr:last-child > * { 
            border-bottom: 1px solid #cccccc4a !important;
            padding-bottom: 15px !important;
    }
</style>
@endpush