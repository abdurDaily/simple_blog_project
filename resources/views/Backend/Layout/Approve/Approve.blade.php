@extends('Backend.Layout.Layout')
@section('backend_contains')


  <div class="title-wrapper pt-0">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="title">
          <h2>Approve</h2>
        </div>
      </div>
      <!-- end col -->
      <div class="col-md-6 ">
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
    @forelse ($userInfo as $key => $user)
      <div class="single-notification ">

        <div class="notification ">
          <div class="image warning-bg">
            <img src="https://api.dicebear.com/9.x/initials/svg?seed={{ $user->name }}" alt="">
          </div>
          <a href="#0" class="content">
            <h6>{{ $user->name }} </h6>
            <p class="text-sm text-gray">
             {{ $user->email }}
            </p>
            <span class="text-sm text-medium text-gray">{{ $user->created_at->diffForHumans() }}</span>
          </a>
        </div>
        <div class="action">
          {{-- <button class="delete-btn" >
            
          </button> --}}

          <a class="delete-btn" href="{{ route('approve.is.delete', $user->id) }}">
            <i class="lni lni-trash-can"></i>
          </a>






          
          <button style="color: {{ $user->status == 1 ? 'green' : 'red' }}" class="more-btn dropdown-toggle show" id="moreAction" data-bs-toggle="dropdown" aria-expanded="true">
            <i class="lni lni-more-alt"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end show" aria-labelledby="moreAction" data-popper-placement="top-end" style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate3d(-30.4px, -1203.2px, 0px);">
            <li class="dropdown-item">
              <a href="{{ route('approve.is.approve', $user->id) }}" style="color:{{ $user->status == 1 ? 'red' : 'green' }}">{{ $user->status == 1 ? 'Decline' : 'approve'  }}</a>
            </li>
          </ul>
        </div>

        
      </div>
    @empty
    <h4>No data found</h4>
    @endforelse
    <!-- end single notification -->
  </div>
@endsection

@push('js_contains')
@include('sweetalert::alert')
@endpush