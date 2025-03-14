    <!--   Weekly2-News start -->
    <div class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Weekly Top News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            @foreach ($tinnoibat as $nb)
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{ asset('frontend/assets/'.$nb->image)}}" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">{{ $nb->title }}</a></h4>
                                </div>
                            </div>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Weekly-News -->
