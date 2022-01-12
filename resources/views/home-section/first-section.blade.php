<section class="news-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <div class="col-md-1 col-sm-1 col-lg-1"></div>
                    <div class="col-md-10 col-sm-10">
                        <div class="lead-news">
                            <div class="service-img"><a href="#"><img src="{{ asset($firstbig->image) }}"
                                        width="800px" alt="Notebook"></a></div>
                            <div class="content">
                                <h4 class="lead-heading-01"><a href="{{ URL::to('view/post/' .$firstbig->id )}}">
                                        @if (session()->get('lang') == 'english')
                                            {{ $firstbig->title_en }}
                                        @else
                                            {{ $firstbig->title_nep }}
                                        @endif
                                    </a> </h4>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    @foreach ($firstsection as $section)
                        <div class="col-md-3 col-sm-3">
                            <div class="top-news">
                                <a href="#"><img src="{{ asset($section->image) }}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="#">
                                        @if (session()->get('lang') == 'english')
                                            {{ $section->title_en }}
                                        @else
                                            {{ $section->title_nep }}
                                        @endif
                                    </a> </h4>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- news-start -->
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="bg-one">
                            <div class="cetagory-title"><a href="#">

                                    @if (session()->get('lang') == 'english')
                                        {{ $category->category_en }}
                                    @else
                                        {{ $category->category_nep }}
                                    @endif
                                    <span>
                                        @if (session()->get('lang') == 'english')
                                            More
                                        @else
                                            अन्य
                                        @endif
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="top-news">
                                        <a href="#"><img src="{{ asset($generalbig->image) }}" alt="Notebook"></a>
                                        <h4 class="heading-02"><a href="#">
                                                @if (session()->get('lang') == 'english')
                                                    {{ $generalbig->title_en }}
                                                @else
                                                    {{ $generalbig->title_nep }}
                                                @endif
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    @foreach ($generalsmall as $row)

                                        <div class="image-title">
                                            <a href="#"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                                            <h4 class="heading-03"><a href="#">
                                                    @if (session()->get('lang') == 'english')
                                                        {{ $row->title_en }}
                                                    @else
                                                        {{ $row->title_nep }}
                                                    @endif
                                                </a>
                                             </h4>
                                        </div>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Second category -->
                    <div class="col-md-6 col-sm-6">
                        <div class="bg-one">
                            <div class="cetagory-title"><a href="#">
                                    @if (session()->get('lang') == 'english')
                                        {{ $secondcategory->category_en }}
                                    @else
                                        {{ $secondcategory->category_nep }}
                                    @endif
                                    <span>
                                        @if (session()->get('lang') == 'english')
                                            More
                                        @else
                                            अन्य
                                        @endif

                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="top-news">
                                        <a href="#"><img src="{{ asset($secondgeneralbig->image) }}"
                                                alt="Notebook"></a>
                                        <h4 class="heading-02"><a href="#">
                                                @if (session()->get('lang') == 'english')
                                                    {{ $secondgeneralbig->title_en }}
                                                @else
                                                    {{ $secondgeneralbig->title_nep }}
                                                @endif
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    @foreach ($secondgeneralsmall as $row)
                                        <div class="image-title">
                                            <a href="#"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                                            <h4 class="heading-03"><a href="#">
                                                    @if (session()->get('lang') == 'english')
                                                        {{ $row->title_en }}
                                                    @else
                                                        {{ $row->title_nep }}
                                                    @endif
                                                </a>
                                             </h4>
                                        </div>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <!-- add-start -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add"><img src="{{ asset('frontend/assets/img/add_01.jpg') }}" alt="" /></div>
                    </div>
                </div><!-- /.add-close -->

                <!-- youtube-live-start -->
                @if ($livetvs->status == 1)
                    <div class="cetagory-title-03">Live TV</div>
                    <div class="photo">
                        <div class="embed-responsive embed-responsive-16by9 embed-responsive-item"
                            style="margin-bottom:5px;">

                            <iframe width="729" height="410" src="{!! $livetvs->embed_code !!}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                @endif


                <!-- /.youtube-live-close -->

                <!-- facebook-page-start -->
                <div class="cetagory-title-03">Facebook </div>
                <div class="fb-root">
                    facebook page here
                </div><!-- /.facebook-page-close -->

                <!-- add-start -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add">
                            <img src="{{ asset('frontend/assets/img/add_01.jpg') }}" alt="" />
                        </div>
                    </div>
                </div><!-- /.add-close -->
            </div>
        </div>
    </div>
</section>
