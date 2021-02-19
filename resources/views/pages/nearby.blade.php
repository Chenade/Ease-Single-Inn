{{--@include('includes.language')--}}
@extends('layouts.default', ['page_header' =>'Nearby','page_parent' =>'Home','page_parent_path' =>'/','page_path' =>'Nearby'])
@section('content')

    <section id="room" class="section">
        <div class="col-12 col-sm-10 col-lg-8">
            <div class="col-12 d-flex flex-wrap">
                <div class="col-12 col-lg-3">
                    <div class="nearby-search-area">
                        <div align="center"><h2>Search</h2></div>
                        <hr>
                        <div class="checkbox">
                            <label style="font-size: 1.5em">
                                <input type="checkbox" value="all" class="category" checked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                All
                            </label>
                        </div>
                        <div class="checkbox">
                            <label style="font-size: 1.5em">
                                <input type="checkbox" value="food" class="category" checked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                Food
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="single-nearby-area d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="nearby-thumbnail col-12 col-sm-4"><a href="#"><img src="img/attraction1.jpg"></a></div>
                        <div class="nearby-content d-flex flex-column justify-content-around col-12 col-sm-8">
                            <div class="post-meta">
                                <a id="food" href="#" class="post-author">Food</a>&emsp;|&emsp;
                                <a href="#" class="post-tutorial">Afternoon Tea</a>
                            </div>
                            <div class="d-flex flex-wrap align-content-center">
                                <div><p class="post-title">宮原眼科</p></div>
                                <div><p class="post-recomd">必吃：冰淇淋、巧克力</p></div>
                            </div>
                            <div>
                                <p>營業時間：10:00 - 22:00 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;  電話：04-2227-1927</p>
                                <p>地址：台中市中區中山路20號</p>
                                <a href="http://www.miyahara.com.tw/index-go.php" class="btn view-detail-btn">Visit Website <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="single-nearby-area d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="nearby-thumbnail col-12 col-sm-4"><a href="#"><img src="img/attraction1.jpg"></a></div>
                        <div class="nearby-content d-flex flex-column justify-content-around col-12 col-sm-8">
                            <div class="post-meta">
                                <a id="food" href="#" class="post-author">Food</a>&emsp;|&emsp;
                                <a href="#" class="post-tutorial">Afternoon Tea</a>
                            </div>
                            <div class="d-flex flex-wrap align-content-center">
                                <div><p class="post-title">第四信用合作社</p></div>
                                <div><p class="post-recomd">必吃：冰淇淋、巧克力</p></div>
                            </div>
                            <div>
                                <p>營業時間：10:00 - 22:00 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;  電話：04-2227-1966</p>
                                <p>地址：台中市中區中山路72號</p>
{{--                                <a href="http://www.miyahara.com.tw/index-go.php" class="btn view-detail-btn">Visit Website <i class="fas fa-long-arrow-alt-right"></i></a>--}}
                            </div>
                        </div>
                    </div>

                    <div class="single-nearby-area d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="nearby-thumbnail col-12 col-sm-4"><a href="#"><img src="img/attraction1.jpg"></a></div>
                        <div class="nearby-content d-flex flex-column justify-content-around col-12 col-sm-8">
                            <div class="post-meta">
                                <a id="food" href="#" class="post-author">Food</a>&emsp;|&emsp;
                                <a href="#" class="post-tutorial">Sandwiches</a>
                            </div>
                            <div class="d-flex flex-wrap align-content-center">
                                <div><p class="post-title">洪瑞珍</p></div>
                                <div><p class="post-recomd">必吃：三明治</p></div>
                            </div>
                            <div>
                                <p>營業時間：09:00 - 22:00 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;  電話：04-2462-1398</p>
                                <p>地址：台中市中區中山路125-2號</p>
{{--                                <a href="http://www.miyahara.com.tw/index-go.php" class="btn view-detail-btn">Visit Website <i class="fas fa-long-arrow-alt-right"></i></a>--}}
                            </div>
                        </div>
                    </div>

                    <div class="single-nearby-area d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="nearby-thumbnail col-12 col-sm-4"><a href="#"><img src="img/attraction1.jpg"></a></div>
                        <div class="nearby-content d-flex flex-column justify-content-around col-12 col-sm-8">
                            <div class="post-meta">
                                <a id="food" href="#" class="post-author">Food</a>&emsp;|&emsp;
                                <a href="#" class="post-tutorial">Afternoon Tea</a>
                            </div>
                            <div class="d-flex flex-wrap align-content-center">
                                <div><p class="post-title">台中第二市場</p></div>
                                <div><p class="post-recomd">必吃：-</p></div>
                            </div>
                            <div>
                                <p>07:00 - 20:00 (周三公休)</p>
                                <p>地址：台中市中區三民路二段87號</p>
                                <a href="http://www.miyahara.com.tw/index-go.php" class="btn view-detail-btn">Visit Website <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="single-nearby-area d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="nearby-thumbnail col-12 col-sm-4"><a href="#"><img src="img/attraction1.jpg"></a></div>
                        <div class="nearby-content d-flex flex-column justify-content-around col-12 col-sm-8">
                            <div class="post-meta">
                                <a id="food" href="#" class="post-author">Food</a>&emsp;|&emsp;
                                <a href="#" class="post-tutorial">Afternoon Tea</a>
                            </div>
                            <div class="d-flex flex-wrap align-content-center">
                                <div><p class="post-title">台中市役所 Café 1911</p></div>
                                <div><p class="post-recomd">必吃：定食</p></div>
                            </div>
                            <div>
                                <p>營業時間：11:30 - 20:30 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;  電話：04-3507-9006</p>
                                <p>地址：台中市西區民權路97號</p>
{{--                                <a href="http://www.miyahara.com.tw/index-go.php" class="btn view-detail-btn">Visit Website <i class="fas fa-long-arrow-alt-right"></i></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
@section('end_script')

@stop
