@extends('Backend.Layout.Layout')
@section('backend_contains')


<div class="row px-3">
    <div class=" col-lg-4 col-sm-6">
      <div class="icon-card mb-30">
        <div class="icon purple">
          <i class="lni lni-cart-full"></i>
        </div>
        <div class="content">
          <h6 class="mb-10">Available Category's</h6>
          <h3 class="text-bold mb-10">{{ $activeCategory < 10 ? '0'.$activeCategory : $activeCategory }}</h3>
          <p class="text-sm text-success">
            {{-- <i class="lni lni-arrow-up"></i> +2.00%
            <span class="text-gray">(30 days)</span> --}}
          </p>
        </div>
      </div>
      <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class=" col-lg-4 col-sm-6">
      <div class="icon-card mb-30">
        <div class="icon success">
          <i class="lni lni-dollar"></i>
        </div>
        <div class="content">
          <h6 class="mb-10">Active Blog's</h6>
          <h3 class="text-bold mb-10">{{ $activeBlog < 10 ? '0'.$activeBlog : $activeBlog }}</h3>
          <p class="text-sm text-success">
            {{-- <i class="lni lni-arrow-up"></i> +5.45%
            <span class="text-gray">Increased</span> --}}
          </p>
        </div>
      </div>
      <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class=" col-lg-4 col-sm-6">
      <div class="icon-card mb-30">
        <div class="icon primary">
          <i class="lni lni-credit-cards"></i>
        </div>
        <div class="content">
          <h6 class="mb-10">Published Video's</h6>
          <h3 class="text-bold mb-10">{{ $activeVideo < 10 ? '0'.$activeVideo : $activeVideo }}</h3>
          <p class="text-sm text-danger">
            {{-- <i class="lni lni-arrow-down"></i> -2.00%
            <span class="text-gray">Expense</span> --}}
          </p>
        </div>
      </div>
      <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <!-- End Col -->
</div>

@endsection                                                     

