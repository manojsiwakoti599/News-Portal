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
                    <h4 class="card-title">Social Setting</h4>
                    <form class="forms-sample" method="POST" action="{{ route('update.social', $social->id) }}">
                        @csrf
                                {{-- Facebook --}}
                        <div class="form-group text-white">
                            <label for="facebook"> Facebook </label>
                            <input type="text" class="form-control" name="facebook" value="{{$social->facebook}}">
                            @error('facebook')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                                    {{-- Twitter --}}
                        <div class="form-group text-white">
                            <label for="twitter"> Twitter</label>
                            <input type="text" class="form-control" name="twitter" value="{{$social->twitter}}">
                            @error('twitter')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                                        {{-- Youtube --}}
                        <div class="form-group text-white">
                            <label for="youtube"> Youtube</label>
                            <input type="text" class="form-control" name="youtube" value="{{$social->youtube}}">
                            @error('youtube')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                                    {{-- LinkedIn --}}
                        <div class="form-group text-white">
                            <label for="linkedin"> LinkedIn</label>
                            <input type="text" class="form-control" name="linkedin" value="{{$social->linkedin}}">
                            @error('linkedin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                                    {{-- Instagram --}}
                        <div class="form-group text-white">
                            <label for="instagram"> Instagram</label>
                            <input type="text" class="form-control" name="instagram" value="{{$social->instagram}}">
                            @error('instagram')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
