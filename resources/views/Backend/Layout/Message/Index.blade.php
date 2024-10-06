@extends('Backend.Layout.Layout')
@section('backend_contains')
<section class="section mt-5 backendContains">
    <div class="container">
      

<div class="title-wrapper pt-0">
<div class="row align-items-center">
  <div class="col-md-6">
    <div class="title">
      <h2> Message's  </h2>
    </div>
  </div>
  <!-- end col -->
  <div class="col-md-6">
    <div class="breadcrumb-wrapper">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          
          <li class="breadcrumb-item active" aria-current="page">
            <span style="color: #000;">{{ getCurrentPath() }}</span>
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- end col -->
</div>
<!-- end row -->
</div>




<div class="card-style">
    @forelse ($messages as $message)
      <div class="single-notification ">

        <div class="notification ">
          <div class="image warning-bg">
            <img src="https://api.dicebear.com/9.x/initials/svg?seed={{ $message->email }}" alt="">
          </div>
          <a href="#0" class="content">
            <h6>Email:</h6>
            <p class="text-sm text-gray">
             {{ $message->email }}
            </p>
            <span class="text-sm text-medium text-gray">{{ $message->created_at->diffForHumans() }}</span>
          </a>
        </div>
        <div class="action">
          {{-- <button class="delete-btn" >
            
          </button> --}}

          <a class="delete-btn" href="{{ route('message.delete' ,$message->id) }}">
            <i class="lni lni-trash-can"></i>
          </a>

    
        </div>

        
      </div>
    @empty
    <h4>No data found</h4>
    @endforelse
    <!-- end single notification -->
  </div>

  </section>
@endsection



@push('js_contains')
@include('sweetalert::alert')
@endpush