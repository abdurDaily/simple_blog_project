@extends('Backend.Layout.Layout')
@section('backend_contains')


        <div class="row">
            {{-- 1ST FIELD--}}
            <div class="col-lg-4">
                <div class="card-style mb-30">
                    
  
                        <!-- Modal -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="card p-5">
                                <form action="{{ route('setting.store') }}" method="post">
                                    @csrf

                                    <label for="social">Add new social media</label>
                                    <input name="social_name" id="social" type="text" class="form-control py-3 mb-3" placeholder="name social media" >
                                    
                                    <button type="submit" class="btn btn-primary w-25">Add</button>
                                </form>
                            </div>
                            </div>
                            </div>
                        </div>

                         {{-- ADD --}}
                        <div class="d-flex mb-25 justify-content-between align-items-center">

                            
                            <h6 class="">Social Media Fields</h6>
                            <!-- Button trigger modal -->
                           <div class="social_btn">
                            <a href="{{ route('setting.edit') }}"  class="btn shadow-sm" style="background: #F7F7F7; color:blue;">
                                <i class="lni lni-list"></i>
                            </a>

                            &nbsp;
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-regular fa-square-plus"></i>
                            </button>

                            
                           </div>

                        </div>

                            @error('social_name')
                            <div class="alert alert-danger">
                                <strong class="text-danger">{{ $message }}</strong>
                            </div>
                            @enderror

                        {{-- 1ST FILED --}}
                        <form action="{{ route('setting.store.link') }}" method="post">
                            @csrf
                            <div class="input-style-1">

                                <!-- end input -->
                                <div class="input-style-3">
                                    <div class="select-style-1">
                                        <label>Category</label>
                                        <div class="select-position">
                                          <select name="select_option">
                                            <option selected disabled>Select category</option>
                                            @foreach ($settingOption->reverse() as $option)
                                             <option  value="{{ $option->id }}">{{ $option->social_name }}</option>
                                            @endforeach
                                          </select>

                                          @error('select_option')
                                            <strong class="text-danger">{{ $message }}</strong>
                                          @enderror
                                        </div>
                                      </div>
                                </div>
                                <!-- end input -->


                                <!-- end input -->
                                <div class="input-style-3">
                                    <input name="social_link" type="text" placeholder="URL link">
                                        @error('social_link')
                                          <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    <span class="icon"><i class="lni lni-user"></i></span>
                                </div>
                                <!-- end input -->
                            </div>

                            <button class="main-btn w-100 primary-btn btn-hover  text-center" type="submit">
                                Update
                            </button>
                        </form>
                </div>
            </div>




            {{-- 2ND FILED --}}
            <div class="col-lg-4">
                <div class="card-style mb-30">
                    <h6 class="mb-25">Input Fields</h6>
                    <div class="input-style-1">
                        <!-- end input -->
                        <div class="input-style-3">
                        <input type="text" placeholder="Full Name">
                        <span class="icon"><i class="lni lni-user"></i></span>
                        </div>
                        <!-- end input -->
                    </div>
                </div>
            </div>
            {{-- 3RD FILED --}}
            <div class="col-lg-4">
                <div class="card-style mb-30">
                    <h6 class="mb-25">Input Fields</h6>
                    <div class="input-style-1">
                        <!-- end input -->
                        <div class="input-style-3">
                        <input type="text" placeholder="Full Name">
                        <span class="icon"><i class="lni lni-user"></i></span>
                        </div>
                        <!-- end input -->
                    </div>
                </div>
            </div>
        </div>

        @push('js_contains')
        @include('sweetalert::alert')
        @endpush


@endsection