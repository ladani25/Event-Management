@include('front-end.header')



<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="{{ url('public/front-end/img/hero-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero__text">
                    <span>New single</span>
                    <h1>Feel the heart beats</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br />tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                    <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn video-popup"><i
                            class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="linear__icon">
        <i class="fa fa-angle-double-down"></i>
    </div>
</section>
<!-- Hero Section End -->

<!-- Event Section Begin -->
<section class="event spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Upcoming Events</h2>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            @foreach ($event as $item)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            @foreach (explode(',', $item->image) as $image)
                                <img src="{{ asset('public/images/' . $image) }}" alt="{{ $image }}"
                                    style="width: 50px; height:50%;">
                            @endforeach
                        </div>
                        <div class="discography__item__text">
                            <span>{{ $item->price }}</span>
                            <h4>{{ $item->name }}</h4>
                            <h2>{{ $item->date }}</h2>
                            <h2>{{ $item->time }}</h2>

                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}

        <div class="row">
            <div class="event__slider owl-carousel">
                @foreach ($event as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="event__item">
                            <div class="event__item__pic set-bg">
                                @foreach (explode(',', $item->image) as $image)
                                    <img src="{{ asset('public/images/' . $image) }}" alt="{{ $image }}">
                                @endforeach
                                <div class="tag-date">
                                    <span>{{ $item->date }}</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>{{ $item->name }}</h4>
                                <p><i class="fa fa-map-marker"></i> {{ $item->location }}</p>
                                <h2>{{ $item->time }}</h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- <div class="row">
            <div class="event__slider owl-carousel">
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg"
                            data-setbg="{{ url('public/front-end/img/events/event-1.jpg') }}">
                            <div class="tag-date">
                                <span>Dec 15, 2019</span>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4>David Guetta Miami Ultra</h4>
                            <p><i class="fa fa-map-marker"></i> Funkhaus Berlin, Berlin, Germany</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg"
                                data-setbg="{{ url('public/front-end/img/events/event-2.jpg') }}">
                                <div class="tag-date">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class="fa fa-map-marker"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg"
                                data-setbg="{{ url('public/front-end/img/events/event-3.jpg') }}">
                                <div class="tag-date">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class="fa fa-map-marker"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg"
                                data-setbg="{{ url('public/front-end/img/events/event-2.jpg') }}">
                                <div class="tag-date">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class="fa fa-map-marker"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                </div>
                 
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- Event Section End -->

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__pic">
                    <img src="{{ url('public/front-end/img/about/about.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="section-title">
                        <h2>DJ Alexandra Rud</h2>
                        <h1>About me</h1>
                    </div>
                    <p>DJ Rainflow knows how to move your mind, body and soul by delivering tracks that stand out
                        from the norm. As if this impressive succession of high impact, floor-filling bombs wasn’t
                        enough to sustain.</p>
                    <a href="#" class="primary-btn">CONTACT ME</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Services Section Begin -->
<section class="services">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="services__left set-bg"
                    data-setbg="{{ url('public/front-end/img/services/service-left.jpg') }}">
                    {{-- <a href="https://www.youtube.com/watch?v=JGwWNGJdvx8" class="play-btn video-popup"><i class="fa fa-play"></i></a> --}}
                    <a href="https://www.youtube.com/watch?v=JGwWNGJdvx8" class="play-btn video-popup"><i
                            class="fa fa-play"></i></a>
                </div>
            </div>

            <div class="col-lg-6 p-0">
                <div class="row services__list">
                    <div class="col-lg-6 p-0 order-lg-1 col-md-6 order-md-1">
                        <div class="service__item deep-bg">
                            <img src="{{ url('public/front-end/img/services/service-1.png') }}" alt="">
                            <h4>Wedding</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-2 col-md-6 order-md-2">
                        <div class="service__item">
                            <img src="{{ url('public/front-end/img/services/service-2.png') }}" alt="">
                            <h4>Clubs and bar</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-4 col-md-6 order-md-4">
                        <div class="service__item deep-bg">
                            <img src="{{ url('public/front-end/img/services/service-4.png') }}" alt="">
                            <h4>DJ lessons</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-3 col-md-6 order-md-3">
                        <div class="service__item">
                            <img src="{{ url('public/front-end/img/services/service-3.png') }}" alt="">
                            <h4>Corporate events</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Track Section Begin -->
<section class="track spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title">
                    <h2>Latest tracks</h2>
                    <h1>Music podcast</h1>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="track__all">
                    <a href="#" class="primary-btn border-btn">View all tracks</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 p-0">
                <div class="track__content nice-scroll">
                    <div class="single_player_container">
                        <h4>David Guetta Miami Ultra</h4>
                        <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1" data-url="music-files/1.mp3">
                        </div>
                        <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                            <div class="jp-gui jp-interface">
                                <!-- Player Controls -->
                                <div class="player_controls_box">
                                    <button class="jp-play player_button" tabindex="0"></button>
                                </div>
                                <!-- Progress Bar -->
                                <div class="player_bars">
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div>
                                                <div class="jp-play-bar">
                                                    <div class="jp-current-time" role="timer" aria-label="time">
                                                        0:00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                </div>
                                <!-- Volume Controls -->
                                <div class="jp-volume-controls">
                                    <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_player_container">
                        <h4>David Guetta Miami Ultra</h4>
                        <div class="jp-jplayer jplayer" data-ancestor=".jp_container_2" data-url="music-files/2.mp3">
                        </div>
                        <div class="jp-audio jp_container_2" role="application" aria-label="media player">
                            <div class="jp-gui jp-interface">
                                <!-- Player Controls -->
                                <div class="player_controls_box">
                                    <button class="jp-play player_button" tabindex="0"></button>
                                </div>
                                <!-- Progress Bar -->
                                <div class="player_bars">
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div>
                                                <div class="jp-play-bar">
                                                    <div class="jp-current-time" role="timer" aria-label="time">
                                                        0:00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                </div>
                                <!-- Volume Controls -->
                                <div class="jp-volume-controls">
                                    <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_player_container">
                        <h4>David Guetta Miami Ultra</h4>
                        <div class="jp-jplayer jplayer" data-ancestor=".jp_container_3" data-url="music-files/3.mp3">
                        </div>
                        <div class="jp-audio jp_container_3" role="application" aria-label="media player">
                            <div class="jp-gui jp-interface">
                                <!-- Player Controls -->
                                <div class="player_controls_box">
                                    <button class="jp-play player_button" tabindex="0"></button>
                                </div>
                                <!-- Progress Bar -->
                                <div class="player_bars">
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div>
                                                <div class="jp-play-bar">
                                                    <div class="jp-current-time" role="timer" aria-label="time">
                                                        0:00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                </div>
                                <!-- Volume Controls -->
                                <div class="jp-volume-controls">
                                    <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_player_container">
                        <h4>David Guetta Miami Ultra</h4>
                        <div class="jp-jplayer jplayer" data-ancestor=".jp_container_4" data-url="music-files/4.mp3">
                        </div>
                        <div class="jp-audio jp_container_4" role="application" aria-label="media player">
                            <div class="jp-gui jp-interface">
                                <!-- Player Controls -->
                                <div class="player_controls_box">
                                    <button class="jp-play player_button" tabindex="0"></button>
                                </div>
                                <!-- Progress Bar -->
                                <div class="player_bars">
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div>
                                                <div class="jp-play-bar">
                                                    <div class="jp-current-time" role="timer" aria-label="time">
                                                        0:00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                </div>
                                <!-- Volume Controls -->
                                <div class="jp-volume-controls">
                                    <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_player_container">
                        <h4>David Guetta Miami Ultra</h4>
                        <div class="jp-jplayer jplayer" data-ancestor=".jp_container_5" data-url="music-files/5.mp3">
                        </div>
                        <div class="jp-audio jp_container_5" role="application" aria-label="media player">
                            <div class="jp-gui jp-interface">
                                <!-- Player Controls -->
                                <div class="player_controls_box">
                                    <button class="jp-play player_button" tabindex="0"></button>
                                </div>
                                <!-- Progress Bar -->
                                <div class="player_bars">
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div>
                                                <div class="jp-play-bar">
                                                    <div class="jp-current-time" role="timer" aria-label="time">
                                                        0:00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                </div>
                                <!-- Volume Controls -->
                                <div class="jp-volume-controls">
                                    <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_player_container">
                        <h4>David Guetta Miami Ultra</h4>
                        <div class="jp-jplayer jplayer" data-ancestor=".jp_container_6" data-url="music-files/6.mp3">
                        </div>
                        <div class="jp-audio jp_container_6" role="application" aria-label="media player">
                            <div class="jp-gui jp-interface">
                                <!-- Player Controls -->
                                <div class="player_controls_box">
                                    <button class="jp-play player_button" tabindex="0"></button>
                                </div>
                                <!-- Progress Bar -->
                                <div class="player_bars">
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div>
                                                <div class="jp-play-bar">
                                                    <div class="jp-current-time" role="timer" aria-label="time">
                                                        0:00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                </div>
                                <!-- Volume Controls -->
                                <div class="jp-volume-controls">
                                    <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-0">
                <div class="track__pic">
                    <img src="{{ url('public/front-end/img/track-right.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Track Section End -->

<!-- Youtube Section Begin -->
<section class="youtube spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Youtube feed</h2>
                    <h1>Latest videos</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="youtube__item">
                    <div class="youtube__item__pic set-bg"
                        data-setbg="{{ url('public/front-end/img/youtube/youtube-1.jpg') }}">
                        <a
                            href="{{ url('public/front-end/https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1" class="play-btn video-popup') }}"><i
                                class="fa fa-play"></i></a>
                    </div>
                    <div class="youtube__item__text">
                        <h4>David Guetta Miami Ultra Music Festival 2019</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="youtube__item">
                    <div class="youtube__item__pic set-bg"
                        data-setbg="{{ url('public/front-end/img/youtube/youtube-2.jpg') }}">
                        <a
                            href="{{ url('public/front-end/https://www.youtube.com/watch?v=K4DyBUG242c?autoplay=1" class="play-btn video-popup') }}"><i
                                class="fa fa-play"></i></a>
                    </div>
                    <div class="youtube__item__text">
                        <h4>Martin Garrix (Full live-set) | SLAM!Koningsdag</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="youtube__item">
                    <div class="youtube__item__pic set-bg"
                        data-setbg="{{ url('public/front-end/img/youtube/youtube-3.jpg') }}">
                        <a
                            href="{{ url('public/front-end/https://www.youtube.com/watch?v=S19UcWdOA-I?autoplay=1" class="play-btn video-popup') }}"><i
                                class="fa fa-play"></i></a>
                    </div>
                    <div class="youtube__item__text">
                        <h4>Dimitri Vegas, Steve Aoki & Like Mike’s “3 Are Legend”</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Youtube Section End -->

<!-- Countdown Section Begin -->
<section class="countdown spad set-bg" data-setbg="{{ url('public/front-end/img/countdown-bg.jpg') }}">
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

@include('front-end.footer')


{{-- <script>
    $(document).ready(function() {
        $(".event__slider").owlCarousel({
            items: 3, // Number of items to show
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script> --}}
