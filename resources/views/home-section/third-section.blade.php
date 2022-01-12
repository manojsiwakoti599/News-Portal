<section class="news-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="add"><img src="{{ asset('frontend/assets/img/top-ad.jpg') }}" alt=""></div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="add"><img src="assets/img/top-ad.jpg" alt=""></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="cetagory-title-02"><a href="#">
                        Feature
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        all district news tab here
                        <span><i class="fa fa-plus" aria-hidden="true"></i> All News
                        </span></a></div>

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="top-news">
                            <a href="#"><img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Notebook"></a>
                            <h4 class="heading-02"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="image-title">
                            <a href="#"><img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
                        </div>
                        <div class="image-title">
                            <a href="#"><img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
                        </div>
                        <div class="image-title">
                            <a href="#"><img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="image-title">
                            <a href="#"><img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
                        </div>
                        <div class="image-title">
                            <a href="#"><img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
                        </div>
                        <div class="image-title">
                            <a href="#"><img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
                        </div>
                    </div>
                </div>
                <!-- ******* -->

                <br />
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="cetagory-title-02"><a href="#">Sci-Tech<i class="fa fa-angle-right"
                                    aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> সব
                                    খবর </span></a></div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="bg-gray">
                            <div class="top-news">
                                <a href="#"><img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="#">Facebook Messenger gets shiny new logo </a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="news-title">
                            <a href="#">Facebook Messenger gets shiny new logo </a>
                        </div>
                        <div class="news-title">
                            <a href="#">Facebook Messenger gets shiny new logo </a>
                        </div>
                        <div class="news-title">
                            <a href="#">Facebook Messenger gets shiny new logo</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="news-title">
                            <a href="#">Facebook Messenger gets shiny new logo </a>
                        </div>
                        <div class="news-title">
                            <a href="#">Facebook Messenger gets shiny new logo </a>
                        </div>
                        <div class="news-title">
                            <a href="#">Facebook Messenger gets shiny new logo </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="add"><img src="assets/img/top-ad.jpg" alt=""></div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="add"><img src="assets/img/top-ad.jpg" alt=""></div>
                        </div>
                    </div>
                </div>

                {{-- <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add">
                            <img src="{{ asset('frontend/img/top-ad.jpg') }}" alt="" />
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add">
                            <img src="{{ asset('frontend/assets/img/top-ad.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- /.add-close -->


            </div>
            <div class="col-md-3 col-sm-3">
                <div class="tab-header">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab"
                                data-toggle="tab" aria-expanded="false">
                                @if (session()->get('lang') == 'english')
                                    Latest
                                @else
                                    नयाँ
                                @endif
                            </a></li>
                        <li role="presentation"><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab"
                                aria-expanded="true">
                                @if (session()->get('lang') == 'english')
                                    Popular
                                @else
                                    लोकप्रिय
                                @endif
                            </a></li>
                        <li role="presentation"><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab"
                                aria-expanded="true">
                                @if (session()->get('lang') == 'english')
                                    Highest
                                @else
                                    धेरै हेरेको
                                @endif
                            </a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content ">
                        <div role="tabpanel" class="tab-pane in active" id="tab21">
                            <div class="news-titletab">
                                @foreach ($latest as $row)
                                    <div class="news-title-02">
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


                        <div role="tabpanel" class="tab-pane fade" id="tab22">
                            <div class="news-titletab">
                                @foreach ($popular as $row)
                                    <div class="news-title-02">
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

                        <div role="tabpanel" class="tab-pane fade" id="tab23">
                            <div class="news-titletab">
                                @foreach ($highest as $row)
                                    <div class="news-title-02">
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

                <!-- Namaj Times -->
                <div class="cetagory-title-03">
                    @if (session()->get('lang') == 'english')
                        Prayer Time in English
                    @else
                        Prayer time in nepali
                    @endif
                </div>

                <table class="table">
                    <tr>
                        <th>
                            @if (session()->get('lang') == 'english')
                                Fajr
                            @else
                                Prayer time in nepali1
                            @endif
                        <th>{{ $prayer->fajr }}</th>
                        </th>
                    </tr>

                    <tr>
                        <th>
                            @if (session()->get('lang') == 'english')
                                johor
                            @else
                                Prayer time in nepali2
                            @endif
                        <th>{{ $prayer->johor }}</th>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            @if (session()->get('lang') == 'english')
                                Asar
                            @else
                                Prayer time in nepali3
                            @endif
                        <th>{{ $prayer->asor }}</th>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            @if (session()->get('lang') == 'english')
                                Magrib
                            @else
                                Prayer time in nepali4
                            @endif
                        <th>{{ $prayer->magrib }}</th>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            @if (session()->get('lang') == 'english')
                                Esha
                            @else
                                Prayer time in nepali5
                            @endif
                        <th>{{ $prayer->esha }}</th>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            @if (session()->get('lang') == 'english')
                                Jummah
                            @else
                                Prayer time in nepali6
                            @endif
                        <th>{{ $prayer->jummah }}</th>
                        </th>
                    </tr>
                </table>
                <!-- Namaj Times Close Here-->

                <div class="cetagory-title-03">Old News </div>
                <form action="" method="post">
                    <div class="old-news-date">
                        <input type="text" name="from" placeholder="From Date" required="">
                        <input type="text" name="" placeholder="To Date">
                    </div>
                    <div class="old-date-button">
                        <input type="submit" value="search ">
                    </div>
                </form>

                <!-- Important Website Start Here -->
                <br><br><br><br><br>
                <div class="cetagory-title-04">
                    @if (session()->get('lang') == 'english')
                        Important Website In English
                    @else
                        Important Website In Nepali
                    @endif
                </div>
                <div class="">
                    @foreach ($website as $web)

                        <div class="news-title-02">
                            <h4 class="heading-03"><a href="{{ $web->website_link }}"><i class="fa fa-check"
                                        aria-hidden="true"></i>
                                    {{ $web->website_name }}
                                </a> </h4>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
