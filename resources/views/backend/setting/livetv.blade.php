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
                    <h4 class="card-title"> Live Tv Setting</h4>
                    <form class="forms-sample" method="POST" action="{{ route('update.livetv', $livetv->id) }}">
                        @csrf

                        {{-- Meta Description --}}
                        <div class="form-group">
                            <div class="template-demo">

                                @if ($livetv->status == 1)
                                    <a href="{{ route('deactive.livetv', $livetv->id) }}"><button class="btn btn-danger btn-fw m-2"
                                            type="button">Dective</button></a>
                                @else
                                    <a href="{{ route('active.livetv', $livetv->id) }}"><button class="btn btn-primary btn-fw m-2"
                                            type="button">Active</button></a>
                            </div>
                            @endif

                            @if ($livetv->status == 1)
                            <small class="text-success"> Your Live Tv Is Active </small>
                            @else
                            <small class="text-danger"> Your Live Tv Is Deactive </small>
                            @endif

                            <br><br>
                            <label for="embed_code">Embed Code For Live </label>
                            <textarea class="form-control summernote" name="embed_code"
                                id="summernote_en">{{ $livetv->embed_code }}</textarea>

                        </div>

                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
