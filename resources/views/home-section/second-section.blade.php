<section class="news-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="bg-one">
                    <div class="cetagory-title-02"><a href="#">
                            @if (session()->get('lang') == 'english')
                                {{ $thirdcategory->category_en }}
                            @else
                                {{ $thirdcategory->category_nep }}
                            @endif
                            <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus"
                                    aria-hidden="true"></i>
                                @if (session()->get('lang') == 'english')
                                    ALL News
                                @else
                                    सबै समाचार
                                @endif
                            </span>
                        </a></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-news">
                                <a href="#"><img src="{{ asset($thirdgeneralbig->image) }}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="#">
                                        @if (session()->get('lang') == 'english')
                                            {{ $thirdgeneralbig->title_en }}
                                        @else
                                            {{ $thirdgeneralbig->title_nep }}
                                        @endif
                                    </a> </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            @foreach ($thirdgeneralsmall as $row)
                                <div class="image-title">
                                    <a href="#"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                                    <h4 class="heading-03"><a href="#">
                                            @if (session()->get('lang') == 'english')
                                                {{ $row->title_en }}
                                            @else
                                                {{ $row->title_nep }}
                                            @endif
                                        </a> </h4>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

            {{-- fourth column from category --}}
            <div class="col-md-6 col-sm-6">
                <div class="bg-one">
                    <div class="cetagory-title-02"><a href="#">
                            @if (session()->get('lang') == 'english')
                                {{ $fourcategory->category_en }}
                            @else
                                {{ $fourcategory->category_nep }}
                            @endif
                            <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus"
                                    aria-hidden="true"></i>
                                @if (session()->get('lang') == 'english')
                                    ALL News
                                @else
                                    सबै समाचार
                                @endif
                            </span>
                        </a></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-news">
                                <a href="#"><img src="{{ asset($fourgeneralbig->image) }}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="#">
                                        @if (session()->get('lang') == 'english')
                                            {{ $fourgeneralbig->title_en }}
                                        @else
                                            {{ $fourgeneralbig->title_nep }}
                                        @endif
                                    </a> </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            @foreach ($fourgeneralsmall as $row)

                                <div class="image-title">
                                    <a href="#"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                                    <h4 class="heading-03"><a href="#">
                                            @if (session()->get('lang') == 'english')
                                                {{ $row->title_en }}
                                            @else
                                                {{ $row->title_nep }}
                                            @endif
                                        </a> </h4>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ******* Fifth category column Start Here -->
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="bg-one">
                    <div class="cetagory-title-02"><a href="#">
                            @if (session()->get('lang') == 'english')
                                {{ $fivecategory->category_en }}
                            @else
                                {{ $fivecategory->category_nep }}
                            @endif
                            <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus"
                                    aria-hidden="true"></i>
                                @if (session()->get('lang') == 'english')
                                    ALL News
                                @else
                                    सबै समाचार
                                @endif
                            </span>
                        </a></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-news">
                                <a href="#"><img src="{{ asset($fivegeneralbig->image) }}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="#">
                                        @if (session()->get('lang') == 'english')
                                            {{ $fivegeneralbig->title_en }}
                                        @else
                                            {{ $fivegeneralbig->title_nep }}
                                        @endif
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            @foreach ($fivegeneralsmall as $row)
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

            <!--  Sixth Category-->
            <div class="col-md-6 col-sm-6">
                <div class="bg-one">
                    <div class="cetagory-title-02"><a href="#">
                            @if (session()->get('lang') == 'english')
                                {{ $sixcategory->category_en }}
                            @else
                                {{ $sixcategory->category_nep }}
                            @endif
                            <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus"
                                    aria-hidden="true"></i>
                                @if (session()->get('lang') == 'english')
                                    ALL News
                                @else
                                    सबै समाचार
                                @endif
                            </span>
                        </a></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-news">
                                <a href="#"><img src="{{ asset($sixgeneralbig->image) }}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="#">
                                        @if (session()->get('lang') == 'english')
                                            {{ $sixgeneralbig->title_en }}
                                        @else
                                            {{ $sixgeneralbig->title_nep }}
                                        @endif
                                    </a>
                                 </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            @foreach ($sixgeneralsmall as $row)
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
        <!-- add-start -->
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="add"><img src="assets/img/top-ad.jpg" alt="" /></div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="add"><img src="assets/img/top-ad.jpg" alt="" /></div>
            </div>
        </div><!-- /.add-close -->

    </div>
</section>
