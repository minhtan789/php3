    <!-- Trending Area Start -->
{{-- @foreach ( $tinmoinhat as $i )
    {{$i->id}}
    @endforeach --}}
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                    <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                    <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <a href="{{ route('detail', ['slug' => $tinmoinhatto->slug]) }}"><img src="{{ asset('frontend/assets/'.$tinmoinhatto-> image)}}" alt=""></a>
                                <div class="trend-top-cap">
                                    <span>Appetizers</span>
                                    <h2><a href="">{{$tinmoinhatto->title}}</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                @for ($i = 0; $i < count($tinmoinhat); $i++)
                                    @if ($i < 3)
                                    <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <a href="{{ route('detail', ['slug' => $tinmoinhat[$i]->slug]) }}"><img src="{{ asset('frontend/assets/'.$tinmoinhat[$i]->image)}}" alt=""></a>
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color1">Lifestyple</span>
                                            <h4><a href="">{{ $tinmoinhat[$i]->title }}</a></h4>
                                        </div>
                                    </div>
                                    </div>

                                    @endif
                                @endfor
                                {{-- <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/trending/trending_bottom2.jpg')}}" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color2">Sports</span>
                                            <h4><h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/trending/trending_bottom3.jpg')}}" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Travels</span>
                                            <h4><a href="details.html"> Welcome To The Best Model Winner Contest</a></h4>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        @for ($i = 0; $i < count($tinmoinhat); $i++)
                        @if ($i > 2&& $i < 8)
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <a href="{{ route('detail', ['slug' => $tinmoinhat[$i]->slug]) }}"><img class="img-fluid" src="{{ asset('frontend/assets/'.$tinmoinhat[$i]->image)}}" alt=""></a>
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">Concert</span>
                                <h4><a href="">{{ $tinmoinhat[$i]->title }}</a></h4>
                            </div>
                        </div>
                        @endif
                        @endfor
                        {{-- <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="{{ asset('frontend/assets/img/trending/right2.jpg')}}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color3">sea beach</span>
                                <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="{{ asset('frontend/assets/img/trending/right3.jpg')}}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color2">Bike Show</span>
                                <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="{{ asset('frontend/assets/img/trending/right4.jpg')}}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color4">See beach</span>
                                <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="{{ asset('frontend/assets/img/trending/right5.jpg')}}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">Skeping</span>
                                <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
