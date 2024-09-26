@extends('Backend.Layout.Layout')
@section('backend_contains')
@push('search')
<div class="header-search d-none d-md-flex">
    <form action="{{ route('blog.search.blog') }}" method="post">
        @csrf
        <input name="search_blog" type="text" placeholder="Search..." />
        <button type="submit"><i class="lni lni-search-alt"></i></button>
    </form>
</div>
@endpush

    <div class="tables-wrapper">
        <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
            <h6 class="mb-10">Blog List</h6>
            <div class="table-wrapper table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th>
                        <h6>SN.</h6>
                    </th>
                    <th>
                        <h6>Title</h6>
                    </th>
                    <th>
                        <h6>Author</h6>
                    </th>
                    <th>
                        <h6>Details</h6>
                    </th>
                    <th>
                        <h6>Image</h6>
                    </th>
                    <th>
                        <h6>Action</h6>
                    </th>
                    <th>
                        <h6>Status</h6>
                    </th>
                    </tr>
                    <!-- end table row-->
                </thead>


                <tbody>
                    @forelse ($blogs as $key=>$blog)

                    <tr>
                        <td class="min-width">
                        
                        <p>{{ $key + $blogs->firstItem() }}</p>
                        </td>
                        <td class="min-width">
                        <p>{{ Str::limit($blog->blog_title, 30, '...') }}</p>
                        </td>
                        <td class="min-width">
                        <p><a href="{{ route('profile.index') }}">{{ $blog->user->name }}</a></p>
                        </td>
                        <td class="min-width">
                        <p>{!! Str::limit($blog->blog_details, 30, '....') !!}</p>
                        </td>
                        <td class="min-width">
                        <div class="employee-image">
                            <img src="{{ $blog->blog_image == null ? env('APP_URL'). '/assets/images/default/code.svg' : $blog->blog_image }}" alt="">
                        </div>
                        </td>
                        <td class="min-width">
                            <a style="color: {{ $blog->active_status == 1 ? '#365CF5' : 'red'}}" href="{{ route('blog.active', $blog->id) }}" class="status-btn active-btn">{{ $blog->active_status == 1 ? 'Active' : 'Painding'  }}</a>
                        </td>
                        <td >

                        <div class="action" >
                            <a style="width: 50%; margin-top:5px" href="{{ route('blog.delete', $blog->id) }}" class="text-danger">
                            <i class="lni lni-trash-can"></i>
                            </a>

                            <a style="font-size: 13px;width: 50%" href="{{ route('blog.edit', $blog->id) }}" class="text-danger">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </div>

                    


                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
                </table>
                <!-- end table -->
            </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        </div>
    </div>
@endsection
