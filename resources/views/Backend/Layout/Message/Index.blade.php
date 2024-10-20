@extends('Backend.Layout.Layout')
@section('backend_contains')
<section class="section backendContains px-0" style="margin: 0 !important">
    <div class="container px-0">
      

<div class="title-wrapper pt-0  p-0">
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


    <div class="row d-flex justify-content-between align-items-center">
      <div class="col-lg-2">
        <img style="width: 60px; border-radius:50%;" class="img-fluid" src="https://api.dicebear.com/9.x/initials/svg?seed={{ $message->email }}" alt="">
      </div>
      <div class="col-lg-2">
        <h6>Email:</h6>
            <p class="text-sm text-gray">
             {{ $message->email }}
            </p>
      </div>
      <div class="col-lg-2">
        <span style="font-size: 30px;">
          <a class="delete-btn" href="{{ route('message.delete' ,$message->id) }}">
            <i class="lni lni-trash-can"></i>
          </a>
        </span>
      </div>
    </div>


      <div class="single-notification">





   


        <div class="action">
          {{-- <button class="delete-btn" >
            
          </button> --}}

          {{-- <a class="delete-btn" href="{{ route('message.delete' ,$message->id) }}">
            <i class="lni lni-trash-can"></i>
          </a> --}}

    
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