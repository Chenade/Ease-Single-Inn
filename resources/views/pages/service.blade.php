{{--@include('includes.language')--}}
@extends('layouts.default', ['page_header' =>'Service','page_parent' =>'Home','page_parent_path' =>'/','page_path' =>'Service'])
@section('content')

{{--    <section id="service" class="section">--}}
{{--        <div class="col-12 col-sm-10 col-lg-8">--}}
{{--            <div class="col-12">--}}
{{--                <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">--}}
{{--                    <h6 class="tag">Ultimate Solutions</h6>--}}
{{--                    <h2>Inside EASE Single Inn</h2>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-12 d-flex flex-wrap">--}}
{{--                <div class="col-12 col-md-1 col-lg-4">--}}
{{--                    <div class="single-service-area wow fadeInUp" data-wow-delay="300ms">--}}
{{--                        <img src="img/facilities1.jpg" alt="">--}}
{{--                        <div class="service-title d-flex align-items-center justify-content-center">--}}
{{--                            <h5>大廳櫃檯</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-1 col-lg-4">--}}
{{--                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">--}}
{{--                        <img src="img/facilities1.jpg" alt="">--}}
{{--                        <a href="#lobby">--}}
{{--                            <div class="service-title d-flex align-items-center justify-content-center">--}}
{{--                                <h5>公共交誼廳</h5>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-1 col-lg-4">--}}
{{--                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">--}}
{{--                        <img src="img/facilities1.jpg" alt="">--}}
{{--                        <a href="#lobby">--}}
{{--                            <div class="service-title d-flex align-items-center justify-content-center">--}}
{{--                                <h5>公共衛浴</h5>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section id="lobby" class="section"> <a id="lobby" ></a>
        <div class="col-12 col-sm-10 col-lg-8">
            <div class="col-12">
                <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                    <h6 class="tag">Lobby</h6>
                    <h2>大廳櫃檯</h2>
                    <hr>
                </div>
            </div>
            <div class="col-12 d-flex flex-wrap">
                <div class="col-12 col-lg-7 wow fadeInUp" data-wow-delay="300ms"><img src="img/index5.jpg"></div>
                <div class="col-12 col-lg-5">
                    <div class="about-content wow fadeInUp" data-wow-delay="500ms" style="margin:15px;">
                        <br>
                        <p>1.24小時櫃檯人員服務</p>
                        <p>2.公共電腦、傳真、影印服務</p>
                        <p>3.郵寄信件、代收宅配服務  <span style=" margin-left:10px;color:blue;"> (限不需代付費用) </span></p>
                        <p>4.旅遊諮詢、代叫計程車服務</p>
                        <p>5.個人衛浴清潔用品販售</p>
                        <p>6.簡易餐食、飲料販售服務</p>
                        <p>7.明信片、紀念商品販售服務</p>
                        <p>8.簡易急救箱、行李秤、充電器借用</p>
                        <p>9.衣物洗+烘清洗服務 <span style=" margin-left:10px;color:red;"> 需自費 </span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="social" class="section"> <a id="social" ></a>
        <div class="col-12 col-sm-10 col-lg-8">
            <div class="col-12">
                <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                    <h6 class="tag">Social Longue</h6>
                    <h2>公共交誼廳</h2>
                    <hr>
                </div>
            </div>
            <div class="col-12 d-flex flex-wrap flex-row-reverse">
                <div class="col-12 col-lg-7 wow fadeInUp" data-wow-delay="300ms"><img src="img/index5.jpg"></div>
                <div class="col-12 col-lg-5">
                    <div class="about-content wow fadeInUp" data-wow-delay="500ms" style="margin:15px;">
                        <br>
                        <p>1.早上7:00～10:30活力早餐 <span style=" margin-left:10px;color:blue;"> (素食請先告知)</span></p>
                        <p>2.24小時簡易廚房開放使用 <span style=" margin-left:10px;color:blue;"> (限無油煙烹飪)</span></p>
                        <p>3.24小時飲料吧服務</p>
                        <p>4.提供冰箱供食物寄存服務</p>
                        <p>5.公共電視、雜誌、音樂欣賞</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="shower" class="section"> <a id="shower" ></a>
        <div class="col-12 col-sm-10 col-lg-8">
            <div class="col-12">
                <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                    <h6 class="tag">shower</h6>
                    <h2>公共衛浴</h2>
                    <hr>
                </div>
            </div>
            <div class="col-12 d-flex flex-wrap">
                <div class="col-12 col-lg-7 wow fadeInUp" data-wow-delay="300ms"><img src="img/index5.jpg"></div>
                <div class="col-12 col-lg-5">
                    <div class="about-content wow fadeInUp" data-wow-delay="500ms" style="margin:15px;">
                        <br>
                        <p>1.24小時熱水提供</p>
                        <p>2.提供乾濕分離沐浴區、梳妝區</p>
                        <p>3.提供沐浴乳、洗髮精、洗手乳、牙膏、吹風機</p>
                        <p>4.洗衣台、脫水機免費使用</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
@section('end_script')

@stop
