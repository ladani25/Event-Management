@include('front-end.header')
<!-- Countdown Section Begin -->
<section class="countdown countdown--page spad set-bg" data-setbg="{{ url('public/front-end/img/countdown-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="countdown__text">
                    <h1>Tomorrowland 2020</h1>
                    <h4>Music festival start in</h4>
                </div>
                <div class="countdown__timer" id="countdown-time">
                    <div class="countdown__item">
                        <span>20</span>
                        <p>days</p>
                    </div>
                    <div class="countdown__item">
                        <span>45</span>
                        <p>hours</p>
                    </div>
                    <div class="countdown__item">
                        <span>18</span>
                        <p>minutes</p>
                    </div>
                    <div class="countdown__item">
                        <span>09</span>
                        <p>seconds</p>
                    </div>
                </div>
                <div class="buy__tickets">
                    <a href="#" class="primary-btn">Buy tickets</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Countdown Section End -->

<!-- Tours Section Begin -->
{{-- <section class="tours spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1">
                    <div class="tours__item__text">
                        <h2>Untold Festival 2020</h2>
                        <div class="tours__text__widget">
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span>8:00pm</span>
                                    <span>Dec 15, 2019</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    Funkhaus Berlin, Berlin, Germany
                                </li>
                            </ul>
                            <div class="price">$ 35.00</div>
                        </div>
                        <div class="tours__text__desc">
                            <p>Held in Europe’s electronic music capital on New Year’s Eve, the seminal Funkhaus Berlin
                                hosts an impressive roster of techno artists worthy.</p>
                            <p>Soundtracking the leap from 2019 into 2020 in what is one of the most anticipated nights
                                of the year, in one of the city’s most hyped venues, HYTE Berlin NYE is the</p>
                        </div>
                        <a href="#" class="primary-btn border-btn">Buy tickets</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="tours__item__pic">
                        <img src="{{ url('front-end/img/tours/tour-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-4">
                    <div class="tours__item__text tours__item__text--right">
                        <h2>Untold Festival 2020</h2>
                        <div class="tours__text__widget">
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span>8:00pm</span>
                                    <span>Dec 15, 2019</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    Funkhaus Berlin, Berlin, Germany
                                </li>
                            </ul>
                            <div class="price">$ 35.00</div>
                        </div>
                        <div class="tours__text__desc">
                            <p>Held in Europe’s electronic music capital on New Year’s Eve, the seminal Funkhaus Berlin
                                hosts an impressive roster of techno artists worthy.</p>
                            <p>Soundtracking the leap from 2019 into 2020 in what is one of the most anticipated nights
                                of the year, in one of the city’s most hyped venues, HYTE Berlin NYE is the</p>
                        </div>
                        <a href="#" class="primary-btn border-btn">Buy tickets</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-3">
                    <div class="tours__item__pic tours__item__pic--left">
                        <img src="{{ url('front-end/img/tours/tour-2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-5">
                    <div class="tours__item__text">
                        <h2>Untold Festival 2020</h2>
                        <div class="tours__text__widget">
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span>8:00pm</span>
                                    <span>Dec 15, 2019</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    Funkhaus Berlin, Berlin, Germany
                                </li>
                            </ul>
                            <div class="price">$ 35.00</div>
                        </div>
                        <div class="tours__text__desc">
                            <p>Held in Europe’s electronic music capital on New Year’s Eve, the seminal Funkhaus Berlin
                                hosts an impressive roster of techno artists worthy.</p>
                            <p>Soundtracking the leap from 2019 into 2020 in what is one of the most anticipated nights
                                of the year, in one of the city’s most hyped venues, HYTE Berlin NYE is the</p>
                        </div>
                        <a href="#" class="primary-btn border-btn">Buy tickets</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-6">
                    <div class="tours__item__pic tours__item__pic--last">
                        <img src="{{ url('front-end/img/tours/tour-3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
<!-- Tours Section End -->
<section class="tours spad">
    @foreach ($event as $item)
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1">
                    <div class="tours__item__text">
                        <h2>Untold Festival 2020</h2>
                        <div class="tours__text__widget">
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span>{{ $item->time }}</span>
                                    <span>{{ $item->date }}</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    {{ $item->place }}
                                </li>
                            </ul>
                            <div class="price">{{ $item->price }}</div>
                        </div>
                        <div class="tours__text__desc">
                            <p>{!! $item->description !!}</p>
                            <p>{!! $item->terms !!}</p>
                        </div>

                        <a href="{{ url('tickets/' . $item->id) }}" class="primary-btn border-btn">Buy tickets</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="tours__item__pic">
                        {{-- <img src="{{ url('front-end/img/tours/tour-1.jpg') }}" alt=""> --}}
                        {{-- <img src="{{ url('uploads/' . $item->image) }}" alt=""> --}}
                        @foreach (explode(',', $item->image) as $image)
                            <img src="{{ asset('public/images/' . $image) }}" alt="{{ $image }}"
                                style="width: 100px; height: auto;">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination__links">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">Next</a>
                </div>
            </div>
        </div>
    </div>

</section>

@include('front-end.footer')
