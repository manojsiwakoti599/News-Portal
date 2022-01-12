@extends('admin.admin-master')

@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-3 col-xl-2">
                                <img src="{{ asset('backend/assets/images/dashboard/Group126@2x.png') }}"
                                    class="gradient-corona-img img-fluid" alt="">
                            </div>
                            <div class="col-5 col-sm-7 col-xl-8 p-0">
                                <h4 class="mb-1 mb-sm-0">Welcome to Easy News</h4>
                            </div>
                            <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                <span>
                                    <a href="{{ url('/') }}" target="_blank"
                                        class="btn btn-outline-light btn-rounded get-started-btn">Visit Your Page ?</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Image Gallery</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data"
                        action="{{ route('update.photo', $photo->id) }}">
                        @csrf

                        <div class="form-group">
                            <label for="title">Image Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $photo->title }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for=""> Image Type</label>
                            <select class="form-control" id="type" name="type">
                                <option disabled="">--Choose Category--</option>
                                <option value="1"  @if ('1' == $photo->type) selected @endif>Big Icon</option>
                                <option value="0"  @if ('0' == $photo->type) selected @endif>Small Icon</option>
                            </select>
                        </div>

                        {{-- new image --}}
                        <div class="mb-3">
                            <label for="photo" class="form-label">Old Images</label>
                            <img src="{{ URL::to($photo->photo) }}" style="height: 70px; width: 70px;">
                            <input type="hidden" class="form-control" value="{{ $photo->photo }}" name="oldimage"
                                multiple>
                        </div>

                        {{-- old image --}}
                        <div class="mb-3">
                            <label for="photo" class="form-label">Upload a News Images</label>
                            <input class="form-control" name="photo" type="file" id="photo" multiple>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update Gallery</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
