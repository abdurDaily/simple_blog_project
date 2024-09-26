@extends('Backend.Layout.Layout')
@section('backend_contains')


        <div class="row">
            {{-- 1ST FIELD--}}
            <div class="col-lg-4">
                <div class="card-style mb-30">
                    
  
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="card p-5">
                                <form action="{{ route('setting.store') }}" method="post">
                                    @csrf

                                    <label for="social">Add new social media</label>
                                    <input name="social_name" id="social" type="text" class="form-control py-3 mb-3" placeholder="name social media" name="" id="">
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
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-regular fa-square-plus"></i>
                            </button>

                        </div>

                        {{-- 1ST FILED --}}
                        <form action="">
                            @csrf
                            <div class="input-style-1">

                                <!-- end input -->
                                <div class="input-style-3">
                                    <div class="select-style-1">
                                        <label>Category</label>
                                        <div class="select-position">
                                          <select>
                                            <option value="">Select category</option>
                                            <option value="">Category one</option>
                                            <option value="">Category two</option>
                                            <option value="">Category three</option>
                                          </select>
                                        </div>
                                      </div>
                                </div>
                                <!-- end input -->


                                <!-- end input -->
                                <div class="input-style-3">
                                    <input type="text" placeholder="URL link">
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



        



@endsection