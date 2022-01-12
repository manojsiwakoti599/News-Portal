@extends('admin.admin-master')

@section('content')
    {{-- cdn link for ajax jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



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

    <h4 class="card-title">Insert Image </h4>
    <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{ route('store.photo') }}">
        @csrf

        <div class="form-group ">
            <label for="title_en"> Photo Title </label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="image" class="form-label">Upload  Image </label>
            <input class="form-control" name="photo" type="file" multiple>
        </div>

        <div class="form-group">
            <label for="subdistrict_id"> Image Type </label>
            <select class="form-control" name="type">
                <option value="1"> Big Icon </option>
                <option value="0"> Small Icon </option>

            </select>
        </div>

        <button type="submit" class="btn btn-primary me-2">Insert</button>

    </form>
</div>



@endsection
