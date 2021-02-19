{{--@include('includes.language')--}}
@extends('layouts.default', ['page_header' =>'Room','page_parent' =>'Home','page_parent_path' =>'/','page_path' =>'Room'])
@section('content')

    <section id="room" class="section">
        <div class="col-12 col-sm-10 col-lg-8">
            <div class="col-12 d-flex">
                <div class="col-12 col-lg-8">
                    <div class="single-room-area d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="room-thumbnail col-12 col-lg-6">
                            <img src="img/Room1.jpg" alt="">
                        </div>
                        <div class="single-room-content col-12 col-lg-6 nopadding">
                            <h3 class="nopadding">單人頭等艙</h3>
                            <h4><span class="tag">NT$800 - 1000</span> <span>/ 平日</span></h4>
                            <div class="room-feature d-flex flex-wrap">
                                <h6 class="col-6">Size: <span>10 ft</span></h6>
                                <h6 class="col-6">Gender Availability: <span>Female / Male</span></h6>
                                <h6 class="col-6">Bed: <span>Single bed</span></h6>
                                <h6 class="col-6">Services: <span>Wifi, ...</span></h6>
                            </div>
                            <a href="./single-room1.php" class="btn view-detail-btn">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>

                    <div class="single-room-area d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="room-thumbnail col-12 col-lg-6">
                            <img src="img/Room2.jpg" alt="">
                        </div>
                        <div class="single-room-content col-12 col-lg-6 nopadding">
                            <h3 class="nopadding">二人商務艙</h3>
                            <h4><span class="tag">NT$1200 - 1400</span> <span>/ 平日</span></h4>
                            <div class="room-feature d-flex flex-wrap">
                                <h6 class="col-6">Size: <span>10 ft</span></h6>
                                <h6 class="col-6">Gender Availability: <span>Female / Male</span></h6>
                                <h6 class="col-6">Bed: <span>Single bed</span></h6>
                                <h6 class="col-6">Services: <span>Wifi, ...</span></h6>
                            </div>
                            <a href="./single-room2.php" class="btn view-detail-btn">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>

                    <div class="single-room-area d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="room-thumbnail col-12 col-lg-6">
                            <img src="img/Room3.jpg" alt="">
                        </div>
                        <div class="single-room-content col-12 col-lg-6 nopadding">
                            <h3 class="nopadding">三人商務艙</h3>
                            <h4><span class="tag">NT$1500 - 1650</span> <span>/ 平日</span></h4>
                            <div class="room-feature d-flex flex-wrap">
                                <h6 class="col-6">Size: <span>10 ft</span></h6>
                                <h6 class="col-6">Gender Availability: <span style="color: red; font-weight: bolder">Male</span></h6>
                                <h6 class="col-6">Bed: <span>Single bed</span></h6>
                                <h6 class="col-6">Services: <span>Wifi, ...</span></h6>
                            </div>
                            <a href="./single-room3.php" class="btn view-detail-btn">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>

                    <div class="single-room-area d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="room-thumbnail col-12 col-lg-6">
                            <img src="img/Room4.jpg" alt="">
                        </div>
                        <div class="single-room-content col-12 col-lg-6 nopadding">
                            <h3 class="nopadding">四人商務艙</h3>
                            <h4><span class="tag">NT$1800 - 2100</span> <span>/ 平日</span></h4>
                            <div class="room-feature d-flex flex-wrap">
                                <h6 class="col-6">Size: <span>10 ft</span></h6>
                                <h6 class="col-6">Gender Availability: <span>Female / Male</span></h6>
                                <h6 class="col-6">Bed: <span>Single bed</span></h6>
                                <h6 class="col-6">Services: <span>Wifi, ...</span></h6>
                            </div>
                            <a href="./single-room4.php" class="btn view-detail-btn">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>

                    <div class="single-room-area d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="room-thumbnail col-12 col-lg-6">
                            <img src="img/Room5.jpg" alt="">
                        </div>
                        <div class="single-room-content col-12 col-lg-6 nopadding">
                            <h3 class="nopadding">混居經濟艙</h3>
                            <h4><span class="tag">NT$500 - 550</span> <span>/ 平日</span></h4>
                            <div class="room-feature d-flex flex-wrap">
                                <h6 class="col-6">Size: <span>10 ft</span></h6>
                                <h6 class="col-6">Gender Availability: <span>Female / Male</span></h6>
                                <h6 class="col-6">Bed: <span>Single bed</span></h6>
                                <h6 class="col-6">Services: <span>Wifi, ...</span></h6>
                            </div>
                            <a href="./single-room5.php" class="btn view-detail-btn">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <div align="center"><h2>Booking</h2></div>
                        <form action="#" method="post">
                            <div class="form-group mb-30">
                                <label for="checkIn">Check In</label>
                                <input type="date" class="form-control" id="checkIn" name="checkin-date"><br>
                                <label for="checkIn">Check Out</label>
                                <input type="date" class="form-control" id="checkOut" name="checkout-date">
                            </div>

                            <div class="form-group mb-30">
                                <label for="room">Room Type</label>
                                <select name="room" class="form-control">
                                    <option value="01">單人經濟艙</option>
                                    <option value="02">雙人商務艙</option>
                                    <option value="03">三人商務艙</option>
                                    <option value="04">四人商務艙</option>
                                    <option value="05">混居經濟艙</option>
                                </select>
                            </div>
                            <br><br>

                            <div class="form-group mb-30">
                                <label for="children">Quantity</label>
                                <select name="children" id="children" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <br><br>



                            <div class="form-group">
                                <button type="submit" class="btn roberto-btn w-100">Check Available</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@stop
@section('end_script')

@stop
