@extends('Backend.Layout.Layout')
@section('backend_contains')
    <div class="container">

        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12 content" style="display: none;">
                    <div class="card-style mb-30">
                        <button class="btn btn-outline-danger mb-3 btn-cross">Close</button>
                        <form action="{{ route('setting.update.social.media') }}" method="post" id="update-form">
                            @csrf
                            @method('put')
                            <input type="hidden" name="id" id="id" value="">
                        
                            <div class="row">
                                <div class="col-lg-5">
                                    <label for="social">Add new social media</label>
                                    <input value="" name="social_name" id="social" type="text" class="form-control py-3 mb-3" placeholder="name social media" >
                                </div>
                                <div class="col-lg-5">
                                    <label for="social_link">Add new social media link</label>
                                    <input name="social_link" id="social_link" type="text" class="form-control py-3 mb-3" placeholder="social media link" >
                                </div>
                                <div class="col-lg-2 d-flex align-items-center">
                                    <button type="submit" class="btn btn-outline-primary w-100 py-3 mt-1">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <h6 class="mb-10">All Social Links</h6>
                        <div class="table-wrapper table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6>SN.</h6>
                                        </th>
                                        <th>
                                            <h6>Social Media</h6>
                                        </th>
                                        <th>
                                            <h6>Link</h6>
                                        </th>
                                        <th>
                                            <h6>Status</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                </thead>


                                <tbody>

                                 @forelse ($allSocialMedia as $key => $media)
                                     
                                 
                                    <tr data-id="{{ $media->id }}">
                                        <td class="min-width">
                                            <p>{{ ++$key }}</p>
                                        </td>
                                       
                                        <td class="min-width">
                                            <p>{{ $media->social_name }}</p>
                                        </td>
                                       
                                        
                                        <td class="min-width">
                                            <p><a target="_blank" href="{{ $media->social_link }}" class="badge bg-primary text-light">{{ $media->social_link ? 'click' : '' }}</a></p>
                                            
                                        </td>

                                        <td>

                                        <div class="action">
                                            <a style="" class="btn btn-danger"
                                                href="{{ route('setting.delete', $media->id) }}" class="text-danger">
                                                <i class="lni lni-trash-can"></i>
                                            </a>

                                            &nbsp;

                                            <a class="btn btn-primary edit-btn"
                                                href="{{ route('setting.edit', $media->id) }}" class="text-danger">
                                                 <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </div>

                                        </td>
                                    </tr>

                                @empty
                                    <tr>
                                        <td colspan="4" style="text-align: center; color:red;">No Data Found!</td>
                                    </tr>
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
    </div>





@endsection


@push('js_contains')<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@include('sweetalert::alert')
<script>
document.querySelectorAll('.edit-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        let id = this.href.split('/').pop(); // Get the ID from the href attribute
        let content = document.querySelector('.content');
        content.style.display = 'block';
        window.scrollTo({ top: 0, behavior: 'smooth' }); 

        // Send AJAX request to settingEdit function
        $.ajax({
            type: 'GET',
            url: '{{ route("setting.edit") }}/' + id,
            success: function(data) {
                $('#social').val(data.social_name); // Populate the input field
                $('#id').val(data.id); // Populate the ID field
                $('#social_link').val(data.social_link); // Populate the social link field
            }
        });
    });
});

// Add an event listener to the form submit event
document.getElementById('update-form').addEventListener('submit', function(e) {
    e.preventDefault();
    let id = document.getElementById('id').value;
    let socialName = document.getElementById('social').value;
    let socialLink = document.getElementById('social_link').value;

    // Send AJAX request to updateSocialMedia function
    $.ajax({
        type: 'PUT',
        url: '{{ route("setting.update.social.media") }}',
        data: {
            '_token': '{{ csrf_token() }}',
            'id': id,
            'social_name': socialName,
            'social_link': socialLink
        },
        success: function(data) {
            // Update the table row with the new data
            let tableRow = document.querySelector(`tr[data-id="${id}"]`);
            tableRow.cells[1].textContent = socialName;
            let socialLinkCell = tableRow.cells[2];
            socialLinkCell.innerHTML = `<p><a target="_blank" href="${socialLink}" class="badge bg-primary text-light">${socialLink ? 'click' : ''}</a></p>`;

            // Hide the content
            let content = document.querySelector('.content');
            content.style.display = 'none';

            // Clear the form fields
            document.getElementById('social').value = '';
            document.getElementById('social_link').value = '';
            document.getElementById('id').value = '';
        }
    });
});
</script>
@endpush