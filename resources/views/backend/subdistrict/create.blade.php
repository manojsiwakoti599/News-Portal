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

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add SubDistrict</h4>
                    <form class="forms-sample" method="POST" action="{{ route('store.subdistrict')}}">
                        @csrf
                        <div class="form-group text-white">
                            <label for="subdistrict_en">SubDistrict English</label>
                            <input type="text" class="form-control" name="subdistrict_en"
                                placeholder="SubDistrict English">
                            @error('subdistrict_en')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group text-white">
                            <label for="subdistrict_nep">SubDistrict Nepali</label>
                            <input type="text" class="form-control" name="subdistrict_nep"
                                placeholder="SubDistrict Nepali">
                            @error('subdistrict_nep')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category_id"> Select SubDistrict</label>
                            <select class="form-control" name="district_id" id="district_id">
                                <option disabled="" selected="">--Choose SubDistrict</option>

                                @foreach ($district as $row)

                                    <option value="{{$row->id}}">{{ $row->district_en }} | {{ $row->district_nep }}</option>

                                @endforeach


                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
