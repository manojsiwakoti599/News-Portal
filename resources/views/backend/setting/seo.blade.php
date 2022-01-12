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
                                        class="btn btn-outline-light btn-rounded get-started-btn">Visit Your
                                        Page ?</a>
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
                    <h4 class="card-title"> Update Seo Setting</h4>
                    <form class="forms-sample" method="POST" action="{{ route('update.seo', $seo->id) }}">
                        @csrf
                        {{-- meta Author --}}
                        <div class="form-group text-white">
                            <label for="meta_author"> Meta Author </label>
                            <input type="text" class="form-control" name="meta_author" value="{{ $seo->meta_author }}">
                            @error('meta_author')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Meta Title --}}
                        <div class="form-group text-white">
                            <label for="meta_title"> Meta Title </label>
                            <input type="text" class="form-control" name="meta_title" value="{{ $seo->meta_title }}">
                            @error('meta_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Meta Keyword --}}
                        <div class="form-group text-white">
                            <label for="meta_keyword"> Meta Keyword </label>
                            <input type="text" class="form-control" name="meta_keyword"
                                value="{{ $seo->meta_keyword }}">
                            @error('meta_keyword')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Meta Description --}}
                        <div class="form-group">
                            <label for="meta_description">Meta Description </label>
                            <textarea class="form-control summernote" name="meta_description"
                                id="summernote_en">{{ $seo->meta_description }}</textarea>
                        </div>
                        {{-- Google Analytics --}}
                        <div class="form-group text-white">
                            <label for="google_analytics"> Google Analytics </label>
                            <textarea class="form-control" id="summernote"
                                name="google_analytics">{{ $seo->google_analytics }}</textarea>
                            @error('google_analytics')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Instagram --}}
                        <div class="form-group text-white">
                            <label for="google_verification"> Google Verification </label>
                            <input type="text" class="form-control" name="google_verification"
                                value="{{ $seo->google_analytics }}">
                            @error('google_verification')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Instagram --}}
                        <div class="form-group text-white">
                            <label for="alexa_analytics"> Alexa Analytics </label>
                            <textarea class="form-control" id="summernote"
                                name="alexa_analytics">{{ $seo->alexa_analytics }}</textarea>
                            @error('alexa_analytics')
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
