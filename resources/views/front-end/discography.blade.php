@include('front-end.header')

<!-- Discography Section Begin -->
<section class="discography spad">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <h2>Latest Releases</h2>
                    <h1>Discography</h1>
                </div>
            </div>
        </div>
        <div class="row">
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
<!-- Discography Section End -->

<!-- Footer Section Begin -->

<!-- Footer Section End -->


@include('front-end.footer')
