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
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Photo Gallery </h4>
                    <div class="template-demo">
                        <a href="{{ route('add.photo') }}"><button class="btn btn-primary btn-fw m-2" type="button"
                                style="float: right"> Add Photos </button></a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> S.no </th>
                                    <th> Photo Title </th>
                                    <th> Photo Collection </th>
                                    <th> Photo Type </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach ($photo as $row)

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td> {{ $row->title }} </td>
                                        <td> <img src="{{ asset($row->photo) }}" style="height: 70px; width: 70px;"> </td>
                                        <td>
                                            @if ($row->type == 1)
                                                <small class="badge badge-success">Big Icon </small>
                                            @else
                                                <small class="badge badge-info">Small Icon </small>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('edit.photo', $row->id) }}"
                                                class="btn btn-info">Edit</a>

                                            <a href="{{ route('delete.photo', $row->id) }}"
                                                onclick="return confirm('Are you Sure Want to Delete?')"
                                                class="btn btn-danger">
                                                Delete</a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        {{ $photo->links('pagination-links') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
