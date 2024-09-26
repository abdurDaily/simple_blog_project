@extends('Backend.Layout.Layout')
@section('backend_contains')
@push('search')
    {{-- <div class="header-search d-none d-md-flex">
        <form action="" method="post">
            @csrf
            <input type="text" placeholder="Search..." />
            <button type="submit"><i class="lni lni-search-alt"></i></button>
        </form>
    </div> --}}
@endpush








   <div class="card-style mb-30">
    <h6 class="mb-10">All Video List</h6>
    <div class="table-wrapper table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th class="lead-info">
              <h6>SN.</h6>
            </th>
            <th class="lead-info">
              <h6>Watch</h6>
            </th>
            <th class="lead-email">
              <h6>Title</h6>
            </th>
            <th class="lead-phone">
              <h6>Status</h6>
            </th>
          </tr>
          <!-- end table row-->
        </thead>
        <tbody>

         @forelse ($allVideoRecords as $key => $video)
          <tr>
            <td class="min-width">
              <div class="lead">
                <div class="lead-text">
                  <p>{{ $key + $allVideoRecords->firstItem()  }}</p>
                </div>

              </div>
            </td>


            <td class="min-width">
              <p><a target="_blank" href="{{ $video->video_link }}" class="badge bg-info text-light"> Click </a></p>
            </td>

            <td class="min-width">
              <p>{{ $video->video_title }}</p>
            </td>


            <td>
              <div class="action">
                <a href="{{ route('video.edit', $video->id) }}" ><i class="fa-solid fa-pen-to-square"></i></a>
                &nbsp; &nbsp; &nbsp; <a style="color: red;" href="{{ route('video.delete', $video->id) }}"><i class="fa-regular fa-trash-can"></i></a> 
              </div>
            </td>
          </tr>
          @empty
            <tr>
                <td colspan="3">No Data Found!</td>
            </tr>
          @endforelse
        </tbody>
      </table>

      {{ $allVideoRecords->links() }}
      <!-- end table -->
    </div>
  </div>
@endsection
