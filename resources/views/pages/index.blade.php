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
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">優質住宿</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms" style="font-family:微軟正黑體;">歡迎光臨 宜舍單人旅店</h2>
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
                                    <h6 data-animation="fadeInUp" data-delay="200ms">最佳選擇</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" style="font-family:微軟正黑體;">歡迎光臨 宜舍單人旅店</h2>
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
                                    <h6 data-animation="fadeInDown" data-delay="200ms">物超所值	</h6>
                                    <h2 data-animation="fadeInDown" data-delay="500ms" style="font-family:微軟正黑體;">歡迎光臨 宜舍單人旅店</h2>
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
                        <h2>歡迎來到<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 宜舍單人旅店</h2>
                    </div>
                    <div class="about-us-content">
                        <h5 class="wow fadeInUp" data-wow-delay="300ms">給您超乎想像的獨立空間，享受如在家的自在與放鬆 ，並提供出差商旅的全方位服務，獨立商務區，免費WIFI上網</h5>
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
                    <h5>交通便利</h5>
                </div>

                <div class="single-service-box wow fadeInUp" data-wow-delay="300ms">
                    <img src="img/core-img/icon-2.png" alt="">
                    <h5>優質服務</h5>
                </div>

                <div class="single-service-box wow fadeInUp" data-wow-delay="500ms">
                    <img src="img/core-img/icon-3.png" alt="">
                    <h5>完善設施</h5>
                </div>

                <div class="single-service-box wow fadeInUp" data-wow-delay="700ms">
                    <img src="img/core-img/icon-4.png" alt="">
                    <h5>歡樂暢飲</h5>
                </div>

                <div class="single-service-box wow fadeInUp" data-wow-delay="900ms">
                    <img src="img/core-img/icon-1.png" alt="">
                    <h5>周邊景點</h5>
                </div>
            </div>
        </div>
    </section>

    <section id="nearby" class="section" style="flex-direction: column">
        <div class="col-12">
            <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                <h6 class="tag">Nearby</h6>
                <h2>周邊景點</h2>
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
                <h6 class="tag">Room</h6>
                <h2>房型介紹</h2>
            </div>
        </div>
        <div class="col-12">
{{--            owl-carousel--}}
            <div class="rooms-slides owl-carousel">
                <div class="single-room-slide d-flex align-items-center flex-wrap">
                    <div class="room-thumbnail bg-img col-12 col-sm-6" style="background-image: url(img/Room1.jpg);"></div>
                    <div class="room-content col-12 col-sm-6">
                        <h2 data-animation="fadeInUp" data-delay="500ms">單人頭等艙</h2>
                        <h3 data-animation="fadeInUp" data-delay="700ms">NT$ 800 - 900 <span>/ 平日</span></h3>
                        <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                            <li><span> 假日</span> <span>: NT$ 900 - 1200</span></li>
                            <li style="margin-bottom: 2em;"><span> 旺日</span> <span>: NT$ 1200 - 1600</span></li>
                            <li><span><i class="fa fa-check"></i> 可入住性別</span> <span>: 男 / 女</span></li>
                            <li><span><i class="fa fa-check"></i> 最大客容量</span> <span>: 一位</span></li>
                            <li><span><i class="fa fa-check"></i> 房型</span> <span>: 單人床</span></li>
                            <li><a href="#"><span style="font-weight: bold;">More Detail...</span></a></li>
                        </ul>
{{--                        <a href="./single-room1.html" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">查看更多</a>--}}
                    </div>
                </div>

                <div class="single-room-slide d-flex align-items-center flex-wrap">
                    <div class="room-thumbnail bg-img col-12 col-sm-6" style="background-image: url(img/Room1.jpg);"></div>
                    <div class="room-content col-12 col-sm-6">
                        <h2 data-animation="fadeInUp" data-delay="500ms">二人商務艙</h2>
                        <h3 data-animation="fadeInUp" data-delay="700ms">NT$ 1200 - 1400 <span>/ 平日</span></h3>
                        <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                            <li><span> 假日</span> <span>: NT$ 1600 - 1800</span></li>
                            <li style="margin-bottom: 2em;"><span> 旺日</span> <span>: NT$ 1800 - 2000</span></li>
                            <li><span><i class="fa fa-check"></i> 可選擇性別</span> <span>: 男 / 女</span></li>
                            <li><span><i class="fa fa-check"></i> 最大可容量</span> <span>: 2位</span></li>
                            <li><span><i class="fa fa-check"></i> 房型</span> <span>: 兩張單人床</span></li>
                            <li><a href="#"><span style="font-weight: bold;">More Detail...</span></a></li>
                        </ul>
{{--                        <a href="./single-room2.html" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">查看更多</a>--}}
                    </div>
                </div>

                <div class="single-room-slide d-flex align-items-center flex-wrap">
                    <div class="room-thumbnail bg-img col-12 col-sm-6" style="background-image: url(img/Room1.jpg);"></div>
                    <div class="room-content col-12 col-sm-6">
                        <h2 data-animation="fadeInUp" data-delay="100ms">三人商務艙</h2>
                        <h3 data-animation="fadeInUp" data-delay="300ms">NT$ 1500 - 1650 <span>/ 平日</span></h3>
                        <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                            <li><span> 假日</span> <span>: NT$ 1800 - 2000</span></li>
                            <li style="margin-bottom: 2em;"><span> 旺日</span> <span>: NT$ 2000 - 2400</span></li>
                            <li><span><i class="fa fa-check"></i> 可選擇性別</span> <span>: 男 </span></li>
                            <li><span><i class="fa fa-check"></i> 最大客容量</span> <span>: 3位</span></li>
                            <li><span><i class="fa fa-check"></i> 房型</span> <span>: 三張單人床</span></li>
                            <li><a href="#"><span style="font-weight: bold;">More Detail...</span></a></li>
                        </ul>
{{--                        <a href="./single-room3.html" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">查看更多</a>--}}
                    </div>
                </div>

                <div class="single-room-slide d-flex align-items-center flex-wrap">
                    <div class="room-thumbnail bg-img col-12 col-sm-6" style="background-image: url(img/Room1.jpg);"></div>
                    <div class="room-content col-12 col-sm-6">
                        <h2 data-animation="fadeInUp" data-delay="100ms">四人商務艙</h2>
                        <h3 data-animation="fadeInUp" data-delay="300ms">NT$ 1800 - 2100 <span>/ 平日</span></h3>
                        <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                            <li><span> 假日</span> <span>: NT$ 2400 - 2600</span></li>
                            <li style="margin-bottom: 2em;"><span> 旺日</span> <span>: NT$ 2600 - 3000</span></li>
                            <li><span><i class="fa fa-check"></i> 可選擇性別</span> <span>: 男 / 女</span></li>
                            <li><span><i class="fa fa-check"></i> 最大客容量</span> <span>: 4位</span></li>
                            <li><span><i class="fa fa-check"></i> 房型</span> <span>: 和室通鋪</span></li>
                            <li><a href="#"><span style="font-weight: bold;">More Detail...</span></a></li>
                        </ul>
{{--                        <a href="./single-room4.html" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">查看更多</a>--}}
                    </div>
                </div>

                <div class="single-room-slide d-flex align-items-center flex-wrap">
                    <div class="room-thumbnail bg-img col-12 col-sm-6" style="background-image: url(img/Room1.jpg);"></div>
                    <div class="room-content col-12 col-sm-6">
                        <h2 data-animation="fadeInUp" data-delay="100ms">混居經濟艙</h2>
                        <h3 data-animation="fadeInUp" data-delay="300ms">NT$ 500 - 550 <span>/ 平日</span></h3>
                        <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                            <li><span> 假日</span> <span>: NT$ 600 - 700</span></li>
                            <li style="margin-bottom: 2em;"><span> 旺日</span> <span>: NT$ 700 - 800</span></li>
                            <li><span><i class="fa fa-check"></i> 可選擇性別</span> <span>: 男 / 女</span></li>
                            <li><span><i class="fa fa-check"></i> 最大客容量</span> <span>: 20位</span></li>
                            <li><span><i class="fa fa-check"></i> 房型</span> <span>: 上 / 下舖床位</span></li>
                            <li><a href="#"><span style="font-weight: bold;">More Detail...</span></a></li>
                        </ul>
{{--                        <a href="./single-room5.html" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">查看更多</a>--}}
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
                    <h6 class="tag">News</h6>
                    <h2>最新消息</h2>
                </div>
            </div>
            <div class="col-12 d-flex flex-wrap justify-content-around">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-box wow fadeInUp" data-wow-delay="500ms">
                        <div class="post-thumbnail"><img src="img/news5.jpg" alt=""></div>
                        <div class="post-meta">
                            <a href="#" class="post-date">AUG 30, 2019</a>
                            <a href="#" class="post-catagory">DISCOUNT</a>
                        </div>
                        <div class="post-title">擴大國旅秋冬遊</div>
                        <p>住宿優惠活動<br>平日住宜舍每房折抵 NT$ 1000</p>
                        <a href="index.html" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-box wow fadeInUp" data-wow-delay="500ms">
                        <div class="post-thumbnail"><img src="img/news5.jpg" alt=""></div>
                        <div class="post-meta">
                            <a href="#" class="post-date">AUG 30, 2019</a>
                            <a href="#" class="post-catagory">DISCOUNT</a>
                        </div>
                        <div class="post-title">擴大國旅秋冬遊</div>
                        <p>住宿優惠活動<br>平日住宜舍每房折抵 NT$ 1000</p>
                        <a href="index.html" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-box wow fadeInUp" data-wow-delay="500ms">
                        <div class="post-thumbnail"><img src="img/news5.jpg" alt=""></div>
                        <div class="post-meta">
                            <a href="#" class="post-date">AUG 30, 2019</a>
                            <a href="#" class="post-catagory">DISCOUNT</a>
                        </div>
                        <div class="post-title">擴大國旅秋冬遊</div>
                        <p>住宿優惠活動<br>平日住宜舍每房折抵 NT$ 1000</p>
                        <a href="index.html" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
@section('end_script')
<script>
    $('#breadcrumb').hide();

    var welcomeSlider = $('.welcome-slides');
    welcomeSlider.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout:5000,
        smartSpeed: 1000,
        nav: true
    })

    welcomeSlider.on('translate.owl.carousel', function () {
        var layer = $("[data-animation]");
        layer.each(function () {
            var anim_name = $(this).data('animation');
            $(this).removeClass('animated ' + anim_name).css('opacity', '0');
        });
    });

    $("[data-delay]").each(function () {
        var anim_del = $(this).data('delay');
        $(this).css('animation-delay', anim_del);
    });

    $("[data-duration]").each(function () {
        var anim_dur = $(this).data('duration');
        $(this).css('animation-duration', anim_dur);
    });

    welcomeSlider.on('translated.owl.carousel', function () {
        var layer = welcomeSlider.find('.owl-item.active').find("[data-animation]");
        layer.each(function () {
            var anim_name = $(this).data('animation');
            $(this).addClass('animated ' + anim_name).css('opacity', '1');
        });
    });

    function welcomeSlide() {
        $('.owl-item').removeClass('prev next');
        var currentSlide = $('.welcome-slides .owl-item.active');
        currentSlide.next('.owl-item').addClass('next');
        currentSlide.prev('.owl-item').addClass('prev');
        var nextSlideImg = $('.owl-item.next').find('.single-welcome-slide').attr('data-img-url');
        var prevSlideImg = $('.owl-item.prev').find('.single-welcome-slide').attr('data-img-url');
        $('.owl-nav .owl-prev').css({
            background: 'url(' + prevSlideImg + ')'
        });
        $('.owl-nav .owl-next').css({
            left: $(window).width() -100,
            background: 'url(' + nextSlideImg + ')'
        });
    }

    welcomeSlide();

    welcomeSlider.on('translated.owl.carousel', function () {
        welcomeSlide();
    });

    var projectSlide = $('.projects-slides');
    projectSlide.owlCarousel({
        items: 5,
        margin: 0,
        loop: true,
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1500: {
                items: 4
            }
        }
    });

    $(".single-project-slide").on("mouseenter", function () {
        $(".single-project-slide").removeClass("active");
        $(this).addClass("active");
    });

    var roomSlides = $('.rooms-slides');
    roomSlides.owlCarousel({
        items: 1,
        margin: 0,
        loop: true,
        autoplay: true,
        autoplayTimeout:5000,
        smartSpeed: 1500,
        // nav: true,
        // navText: [$('#room-prev'),$('#room-next')]
    });

    $('#room-next').click(function() {
        roomSlides.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('#room-prev').click(function() {
        roomSlides.trigger('prev.owl.carousel');
    })

    roomSlides.on('translate.owl.carousel', function () {
        var layer = $("[data-animation]");
        layer.each(function () {
            var anim_name = $(this).data('animation');
            $(this).removeClass('animated ' + anim_name).css('opacity', '0');
        });
    });

    $("[data-delay]").each(function () {
        var anim_del = $(this).data('delay');
        $(this).css('animation-delay', anim_del);
    });

    $("[data-duration]").each(function () {
        var anim_dur = $(this).data('duration');
        $(this).css('animation-duration', anim_dur);
    });

    roomSlides.on('translated.owl.carousel', function () {
        var layer = roomSlides.find('.owl-item.active').find("[data-animation]");
        layer.each(function () {
            var anim_name = $(this).data('animation');
            $(this).addClass('animated ' + anim_name).css('opacity', '1');
        });
    });
</script>
@stop
