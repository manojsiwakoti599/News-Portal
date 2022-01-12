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
                    <h4 class="card-title"> Update Prayer Setting</h4>
                    <form class="forms-sample" method="POST" action="{{ route('update.prayer', $prayer->id) }}">
                        @csrf
                        {{-- Fajr --}}
                        <div class="form-group text-white">
                            <label for="fajr"> Fajr </label>
                            <input type="text" class="form-control" name="fajr" value="{{ $prayer->fajr }}">
                            @error('fajr')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- johor --}}
                        <div class="form-group text-white">
                            <label for="johor"> Dohor </label>
                            <input type="text" class="form-control" name="johor" value="{{ $prayer->johor }}">
                            @error('johor')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- asor --}}
                        <div class="form-group text-white">
                            <label for="asor"> Asor </label>
                            <input type="text" class="form-control" name="asor" value="{{ $prayer->asor }}">
                            @error('asor')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- magrib --}}
                        <div class="form-group text-white">
                            <label for="magrib"> Magrib </label>
                            <input type="text" class="form-control" name="magrib" value="{{ $prayer->magrib }}">
                            @error('magrib')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- esha --}}
                        <div class="form-group text-white">
                            <label for="esha"> Isha </label>
                            <input type="text" class="form-control" name="esha" value="{{ $prayer->esha }}">
                            @error('esha')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- jummah --}}
                        <div class="form-group text-white">
                            <label for="jummah"> Jummah </label>
                            <input type="text" class="form-control" name="jummah" value="{{ $prayer->jummah }}">
                            @error('jummah')
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
