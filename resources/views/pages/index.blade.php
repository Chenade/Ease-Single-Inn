{{--@include('includes.language')--}}
@extends('layouts.default', ['page_header' =>'About','page_parent' =>'Home','page_parent_path' =>'/','page_path' =>''])
@section('content')

    <section id="welcome" class="section" style="height: 100%">
        <div class="welcome-slides owl-carousel">
            <div class="single-welcome-slide bg-img" style="background-image: url(img/index5.jpg);" data-img-url="img/Room2.jpg">
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">{{trans('dictionary.highlight_1')}}</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms" style="font-family:微軟正黑體;">{{trans('dictionary.welcome')}} {{trans('dictionary.EASE')}}</h2>
                                    <a href="#index" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/Room2.jpg);" data-img-url="img/Room5.jpg">
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInUp" data-delay="200ms">{{trans('dictionary.highlight_3')}}</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms" style="font-family:微軟正黑體;">{{trans('dictionary.welcome')}} {{trans('dictionary.EASE')}}</h2>
                                    <a href="#index" class="btn roberto-btn btn-2" data-animation="fadeInUp" data-delay="800ms">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/Room5.jpg);" data-img-url="img/index5.jpg">
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInDown" data-delay="200ms">{{trans('dictionary.highlight_2')}}</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms" style="font-family:微軟正黑體;">{{trans('dictionary.welcome')}} {{trans('dictionary.EASE')}}</h2>
                                    <a href="#index" class="btn roberto-btn btn-2" data-animation="fadeInDown" data-delay="800ms">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section">
        <div class="col-12 col-sm-10 col-lg-8">
            <a id="index"></a>
            <div class="col-12 d-flex flex-wrap">
                <div class="col-12 col-lg-6 align-self-center">
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <h6 class="tag">About Us</h6>
                        <h2>{{trans('dictionary.welcome')}}<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{trans('dictionary.EASE')}}</h2>
                    </div>
                    <div class="about-us-content">
                        <h5 class="wow fadeInUp" data-wow-delay="300ms">{{trans('dictionary.index_about')}}</h5>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="wow fadeInUp" data-wow-delay="700ms">
                        <div class="row">
                            <div class="col-6 nopadding">
                                <div class="single-thumb">
                                    <img src="img/index1.jpg" alt="">
                                </div>
                                <div class="single-thumb">
                                    <img src="img/index2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-6 nopadding">
                                <div class="single-thumb">
                                    <img src="img/index3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service" class="section">
        <div class="col-12 col-sm-10 col-lg-8">
            <div class="col-12 d-flex justify-content-between">
                <div class="single-service-box wow fadeInUp" data-wow-delay="100ms">
                    <img src="img/core-img/icon-1.png" alt="">
                    <h5>{{trans('dictionary.highlight_1')}}</h5>
                </div>

                <div class="single-service-box wow fadeInUp" data-wow-delay="300ms">
                    <img src="img/core-img/icon-2.png" alt="">
                    <h5>{{trans('dictionary.highlight_2')}}</h5>
                </div>

                <div class="single-service-box wow fadeInUp" data-wow-delay="500ms">
                    <img src="img/core-img/icon-3.png" alt="">
                    <h5>{{trans('dictionary.highlight_3')}}</h5>
                </div>

                <div class="single-service-box wow fadeInUp" data-wow-delay="700ms">
                    <img src="img/core-img/icon-4.png" alt="">
                    <h5>{{trans('dictionary.highlight_4')}}</h5>
                </div>

                <div class="single-service-box wow fadeInUp" data-wow-delay="900ms">
                    <img src="img/core-img/icon-1.png" alt="">
                    <h5>{{trans('dictionary.highlight_5')}}</h5>
                </div>
            </div>
        </div>
    </section>

    <section id="nearby" class="section" style="flex-direction: column">
        <div class="col-12">
            <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                <h6 class="tag">Tourist</h6>
                <h2>{{trans('dictionary.Nearby')}}</h2>
            </div>
        </div>
        <div class="col-12">
{{--            owl-carousel--}}
            <div class="projects-slides owl-carousel">
                <div class="single-project-slide active bg-img" style="background-image: url(img/attraction1.jpg);">
                    <div class="project-content">
                        <div class="text">
                            <h6>道地小吃</h6>
                            <h5>台中第二市場</h5>
                        </div>
                    </div>
                    <div class="hover-effects">
                        <div class="text">
                            <h6>道地小吃</h6>
                            <h5>台中第二市場</h5>
                            <p>第二市場自創立已有近八十年的歷史，原為日治時期的新富町市場，主要販售精美高價的貨品，又有「日本人的市場」之稱，後經台中市政府全面整修而成現今風貌，內部集結眾多知名的美味小吃...</p>
                        </div>
                        <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <!-- Single Project Slide -->
                <div class="single-project-slide bg-img" style="background-image: url(img/attraction2.jpg);">
                    <!-- Project Text -->
                    <div class="project-content">
                        <div class="text">
                            <h6>歷史古蹟</h6>
                            <h5>道禾六藝文化館</h5>
                        </div>
                    </div>
                    <!-- Hover Effects -->
                    <div class="hover-effects">
                        <div class="text">
                            <h6>歷史古蹟</h6>
                            <h5>道禾六藝文化館</h5>
                            <p>又稱台中刑務所演武場，興建於日治時期昭和12年(西元1937年)，為司獄官、警察日常練武之武道館舍，屬本市僅存之演武場，歷史原貌保存完整， 極具保存、再利用及建築研究價值...</p>
                        </div>
                        <a href="./location2.html" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <!-- Single Project Slide -->
                <div class="single-project-slide bg-img" style="background-image: url(img/attraction3.jpg);">
                    <!-- Project Text -->
                    <div class="project-content">
                        <div class="text">
                            <h6>下午茶</h6>
                            <h5>宮原眼科</h5>
                        </div>
                    </div>
                    <!-- Hover Effects -->
                    <div class="hover-effects">
                        <div class="text">
                            <h6>下午茶</h6>
                            <h5>宮原眼科</h5>
                            <p>建造於西元1927年的宮原眼科是由日本眼科博士宮原武熊所興建，也是日治時代臺中規模最大的眼科診所，1945年日本戰敗，宮原武熊返回日本，宮原眼科變成了臺中衛生院，但隨著時代的物換遷移，老舊沒落的衛生院逐漸成了危樓，更在九二一大地震中變成了雜草叢生的廢墟。直到「日出」經營團隊耗時一年半，結合兩位建築師、一位古蹟修復博士所共同打造出現代感的日出宮原眼科...</p>
                        </div>
                        <a href="./location.html" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <!-- Single Project Slide -->
                <div class="single-project-slide bg-img" style="background-image: url(img/attraction4.jpg);">
                    <!-- Project Text -->
                    <div class="project-content">
                        <div class="text">
                            <h6>吃喝玩樂</h6>
                            <h5>一中商圈</h5>
                        </div>
                    </div>
                    <!-- Hover Effects -->
                    <div class="hover-effects">
                        <div class="text">
                            <h6>吃喝玩樂</h6>
                            <h5>一中商圈</h5>
                            <p>位於中友百貨附近，與三民商圈連成一氣，小吃攤、飲食店林立，各種新潮流行資訊在這隨處可見、隨手可得。各式新潮前衛的玩意都會在此先出現，若你是流行的追求者，一中夜市絕對不能錯過...</p>
                        </div>
                        <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <!-- Single Project Slide -->
                <div class="single-project-slide bg-img" style="background-image: url(img/attraction5.jpg);">
                    <!-- Project Text -->
                    <div class="project-content">
                        <div class="text">
                            <h6>夜景欣賞</h6>
                            <h5>柳川河岸</h5>
                        </div>
                    </div>
                    <!-- Hover Effects -->
                    <div class="hover-effects">
                        <div class="text">
                            <h6>夜景欣賞</h6>
                            <h5>柳川河岸</h5>
                            <p>而晚上的柳川充滿浪漫的氛圍，走在璀璨的燈火下，看著閃閃亮光的柳樹和裝置藝術天鵝，不僅是拍夜景的好地方，也適合情侶夜晚來此散步...</p>
                        </div>
                        <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
{{--            owl-carousel--}}
        </div>
    </section>

    <section id="room" class="section" style="flex-direction: column">
        <div class="col-12">
            <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                <h6 class="tag">Introduction</h6>
                <h2>{{trans('dictionary.Room')}}</h2>
            </div>
        </div>
        <div class="col-12">
{{--            owl-carousel--}}
            <div class="rooms-slides owl-carousel">
                <div class="single-room-slide d-flex align-items-center flex-wrap">
                    <div class="room-thumbnail bg-img col-12 col-sm-6" style="background-image: url(img/Room1.jpg);"></div>
                    <div class="room-content col-12 col-sm-6">
                        <h2 class="wow fadeInUp" data-wow-delay="100ms">{{trans('dictionary.Single_room')}}</h2>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">NT$ 800 - 900 <span>/ {{trans('dictionary.weekday')}}</span></h3>
                        <ul class="room-feature wow fadeInUp" data-wow-delay="700ms">
                            <li><span> {{trans('dictionary.weekend')}}</span> <span>: NT$ 900 - 1200</span></li>
                            <li style="margin-bottom: 2em;"><span> {{trans('dictionary.holiday')}}</span> <span>: NT$ 1200 - 1600</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.gender_option')}}</span> <span>: {{trans('dictionary.male')}} / {{trans('dictionary.female')}}</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.max_capacity')}}</span>  <span>: 1 {{trans('dictionary.person')}}</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.bed')}}</span> <span>: {{trans('dictionary.single_bed')}}</span></li>
                            <li><a href="/room/1"><span style="   font-weight: bold;">More Detail...</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="single-room-slide d-flex align-items-center flex-wrap">
                    <div class="room-thumbnail bg-img col-12 col-sm-6" style="background-image: url(img/Room1.jpg);"></div>
                    <div class="room-content col-12 col-sm-6">
                        <h2 class="wow fadeInUp" data-wow-delay="100ms">{{trans('dictionary.Double_room')}}</h2>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">NT$ 1200 - 1400 <span>/ {{trans('dictionary.weekday')}}</span></h3>
                        <ul class="room-feature wow fadeInUp" data-wow-delay="900ms">
                            <li><span> {{trans('dictionary.weekend')}}</span> <span>: NT$ 1600 - 1800</span></li>
                            <li style="margin-bottom: 2em;"><span> {{trans('dictionary.holiday')}}</span> <span>: NT$ 1800 - 2000</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.gender_option')}}</span> <span>: {{trans('dictionary.male')}} / {{trans('dictionary.female')}}</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.max_capacity')}}</span>  <span>: 2 {{trans('dictionary.people')}}</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.bed')}}</span> <span>: 2 {{trans('dictionary.single_bed')}}</span></li>
                            <li><a href="/room/2"><span style="font-weight: bold;">More Detail...</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="single-room-slide d-flex align-items-center flex-wrap">
                    <div class="room-thumbnail bg-img col-12 col-sm-6" style="background-image: url(img/Room1.jpg);"></div>
                    <div class="room-content col-12 col-sm-6">
                        <h2 class="wow fadeInUp" data-wow-delay="100ms">{{trans('dictionary.Triple_room')}}</h2>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">NT$ 1500 - 1650 <span>/ {{trans('dictionary.weekday')}}</span></h3>
                        <ul class="room-feature wow fadeInUp" data-wow-delay="900ms">
                            <li><span> {{trans('dictionary.weekend')}}</span> <span>: NT$ 1800 - 2000</span></li>
                            <li style="margin-bottom: 2em;"><span> {{trans('dictionary.holiday')}}</span> <span>: NT$ 2000 - 2400</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.gender_option')}}</span> <span>: {{trans('dictionary.male')}}</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.max_capacity')}}</span> <span>: 3 {{trans('dictionary.people')}}</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.bed')}}</span> <span>: 3 {{trans('dictionary.single_bed')}}</span></li>
                            <li><a href="/room/3"><span style="font-weight: bold;">More Detail...</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="single-room-slide d-flex align-items-center flex-wrap">
                    <div class="room-thumbnail bg-img col-12 col-sm-6" style="background-image: url(img/Room1.jpg);"></div>
                    <div class="room-content col-12 col-sm-6">
                        <h2 class="wow fadeInUp" data-wow-delay="100ms">{{trans('dictionary.Quadruple_room')}}</h2>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">NT$ 1800 - 2100 <span>/ {{trans('dictionary.weekday')}}</span></h3>
                        <ul class="room-feature wow fadeInUp" data-wow-delay="900ms">
                            <li><span> {{trans('dictionary.weekend')}}</span> <span>: NT$ 2400 - 2600</span></li>
                            <li style="margin-bottom: 2em;"><span> {{trans('dictionary.holiday')}}</span> <span>: NT$ 2600 - 3000</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.gender_option')}}</span> <span>: {{trans('dictionary.male')}} / {{trans('dictionary.female')}}</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.max_capacity')}}</span> <span>: 4 {{trans('dictionary.people')}}</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.bed')}}</span> <span>: {{trans('dictionary.Japanese-style')}}</span></li>
                            <li><a href="/room/4"><span style="font-weight: bold;">More Detail...</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="single-room-slide d-flex align-items-center flex-wrap">
                    <div class="room-thumbnail bg-img col-12 col-sm-6" style="background-image: url(img/Room1.jpg);"></div>
                    <div class="room-content col-12 col-sm-6">
                        <h2 class="wow fadeInUp" data-wow-delay="100ms">{{trans('dictionary.Bunk_room')}}</h2>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">NT$ 500 - 550 <span>/ {{trans('dictionary.weekday')}}</span></h3>
                        <ul class="room-feature wow fadeInUp" data-wow-delay="900ms">
                            <li><span> {{trans('dictionary.weekend')}}</span> <span>: NT$ 600 - 700</span></li>
                            <li style="margin-bottom: 2em;"><span> {{trans('dictionary.holiday')}}</span> <span>: NT$ 700 - 800</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.gender_option')}}</span> <span>: {{trans('dictionary.male')}} / {{trans('dictionary.female')}}</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.max_capacity')}}</span> <span>: 20 {{trans('dictionary.people')}}</span></li>
                            <li><span><i class="fa fa-check"></i> {{trans('dictionary.bed')}}</span> <span>: 1 {{trans('dictionary.bunk_bed')}}</span></li>
                            <li><a href="/room/5"><span style="font-weight: bold;">More Detail...</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex" style="margin-top: -5.2em; z-index: 2">
                <div class="col-6 d-flex justify-content-end nopadding"><button id="room-prev" class="roberto-btn-revert"><i class="fas fa-long-arrow-alt-left"></i>&emsp;Previous</button></div>
                <div class="col-6 d-flex justify-content-start nopadding"><button id="room-next" class="roberto-btn">Next&emsp;<i class="fas fa-long-arrow-alt-right"></i></button></div>
            </div>
{{--            owl-carousel--}}
        </div>
    </section>

    <section id="news" class="section">
        <div class="col-12 col-sm-10 col-lg-8">
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                    <h6 class="tag">Information</h6>
                    <h2>{{trans('dictionary.News')}}</h2>
                </div>
            </div>
            <div class="col-12 d-flex flex-wrap justify-content-around" id="newsList"></div>
        </div>
    </section>


    <div class="modal fade" id="news_modal" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content" style="padding: 15px;">
                <div class="modal-header">
                    <h4 class="modal-title nopadding" id="news_title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form onsubmit="return false;" class="input-group" style="padding-bottom: 5px">
                        <span class="input-group-prepend">
                            <button type="button" class="btn btn-primary" >期間</button>
                        </span>
                        <input type="text" class="form-control" id="news_duration">
                    </form>
                    <div class="col-12">
                        <img id="news_detail" class="col-12" src="/img/logo-lg.jpg" onerror="/img/logo-lg.jpg"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('dictionary.Close')}}</button>
                </div>
            </div>
        </div>
    </div>

@stop
@section('end_script')
<script src="/js/index.min.js"></script>
@stop
