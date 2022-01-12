@extends('admin.admin-master')

@section('content')
    {{-- cdn link for ajax jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @php
    $sub = DB::table('subcategories')
        ->where('category_id', $post->category_id)
        ->get();
    @endphp

    @php
    $subdist = DB::table('subdistricts')
        ->where('district_id', $post->district_id)
        ->get();
    @endphp


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
    </div>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Post</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data"
                    action="{{ route('update.post', $post->id) }}">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title_en">Title English</label>
                            <input type="text" class="form-control" id="title_en" name="title_en"
                                value="{{ $post->title_en }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="title_nep">Title Nepali</label>
                            <input type="text" class="form-control" id="title_nep" name="title_nep"
                                value="{{ $post->title_nep }}">
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Category</label>
                            <select class="form-control" id="" name="category_id">
                                <option disabled="" selected="">--Choose Category--</option>

                                @foreach ($category as $row)
                                    <option value="{{ $row->id }}" <?php if ($row->id == $post->category_id) {
    echo 'selected';
} ?>>{{ $row->category_en }} |
                                        {{ $row->category_nep }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="subcategory_id">SubCategory</label>
                            <select class="form-control" id="subcategory_id" name="subcategory_id">
                                <option disabled="" selected="">--Choose SubCategory--</option>

                                @foreach ($sub as $row)
                                    <option value="{{ $row->id }}" <?php if ($row->id == $post->subcategory_id) {
    echo 'selected';
} ?>>{{ $row->subcategory_en }}
                                        |
                                        {{ $row->subcategory_nep }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">District</label>
                            <select class="form-control" id="" name="district_id">
                                <option disabled="" selected="">--Choose District--</option>

                                @foreach ($district as $row)
                                    <option value="{{ $row->id }}" <?php if ($row->id == $post->district_id) {
    echo 'selected';
} ?>>{{ $row->district_en }}
                                        |
                                        {{ $row->district_nep }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="subdistrict_id">SubDistrict</label>
                            <select class="form-control" id="subdistrict_id" name="subdistrict_id">
                                <option disabled="" selected="">--Choose SubDistrict--</option>

                                @foreach ($subdist as $row)
                                    <option value="{{ $row->id }}" <?php if ($row->id == $post->subdistrict_id) {
    echo 'selected';
} ?>>
                                        {{ $row->subdistrict_en }} |
                                        {{ $row->subdistrict_nep }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    {{-- old image --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload a News Images</label>
                        <input class="form-control" name="image" type="file" id="image" multiple>
                    </div>
                    {{-- new image --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">Old Images</label>
                        <img src="{{ URL::to($post->image) }}" style="height: 70px; width: 70px;">
                        <input type="hidden" class="form-control" value="{{ $post->image }}" name="oldimage" multiple>
                    </div>


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="tags_en">Tags English</label>
                            <input type="text" class="form-control" id="tags_en" name="tags_en"
                                value="{{ $post->tags_en }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tags_nep">Tags Nepali</label>
                            <input type="text" class="form-control" id="tags_nep" name="tags_nep"
                                value="{{ $post->tags_nep }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Details English</label>
                        <textarea class="form-control summernote" name="details_en"
                            id="summernote_en">{{ $post->details_en }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Details Nepali</label>
                        <textarea class="form-control summernote" name="details_nep"
                            id="summernote_nep">{{ $post->details_nep }}</textarea>
                    </div>

                    <hr>
                    <h4 class="text-center"> More Option </h4>
                    <br>
                    <div class="row">
                        <label class="form-check-label col-md-3">
                            <input type="checkbox" name="headline" class="form-check-input" value="1" {{-- checked --}}
                                <?php if ($post->headline == 1) {
                                    echo 'checked';
                                } ?>> Headline
                        </label>

                        <label class="form-check-label col-md-3">
                            <input type="checkbox" name="big_thumbnail" class="form-check-input" value="1"
                                {{-- checked --}} <?php if ($post->big_thumbnail == 1) {
    echo 'checked';
} ?>> General Big Thumbnail
                        </label>

                        <label class="form-check-label col-md-3">
                            <input type="checkbox" name="first_section" class="form-check-input" value="1"
                                {{-- checked --}} <?php if ($post->first_section == 1) {
    echo 'checked';
} ?>> First Section
                        </label>

                        <label class="form-check-label col-md-3">

                            <input type="checkbox" name="first_section_thumbnail" class="form-check-input" value="1"
                                {{-- checked --}} <?php if ($post->first_section_thumbnail == 1) {
    echo 'checked';
} ?>> First Section
                            Thumbnail
                        </label>

                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary me-2">Update Post</button>
                </form>
            </div>
        </div>
    </div>



    <!-- This is for category-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();

                if (category_id) {
                    $.ajax({
                        url: "{{ url('/get/subcategory') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {

                            $('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .subcategory_nep + ' | ' + value
                                    .subcategory_en + '</option>');
                            });

                            console.log(data);

                        },
                        error: function() {
                            console.log('error');
                        }
                    });
                } else {
                    $('select[name="category_id"]').empty();
                }
            });
        });
    </script>


    <!-- This is for SUBDISTRICT-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="district_id"]').on('change', function() {
                var district_id = $(this).val();

                if (district_id) {
                    $.ajax({
                        url: "{{ url('/get/subdistrict') }}/" + district_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {

                            $('select[name="subdistrict_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subdistrict_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .subdistrict_en + ' | ' + value
                                    .subdistrict_nep + '</option>');
                            });

                            console.log(data);

                        },
                        error: function() {
                            console.log('error');
                        }
                    });
                } else {
                    $('select[name="district_id"]').empty();
                }
            });
        });
    </script>

@endsection
