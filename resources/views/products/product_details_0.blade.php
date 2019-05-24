@extends('layouts.layout_carprojects')

@section('content')
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>purchase single</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">purchase single</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------ Purchase Car Start ------>
    <div class="impl_buy_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="impl_buycar_wrapper">
                        <div class="impl_buycar_color" id="color_car">
                            <div class="slider slider-for1 slick-initialized slick-slider">
                                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3330px;"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 555px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"><img src="http://via.placeholder.com/555x236" alt=""></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 555px; position: relative; left: -555px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">
                                    <h3><img src="http://via.placeholder.com/555x236" alt=""></h3>
                                </div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 555px; position: relative; left: -1110px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">
                                    <h3><img src="http://via.placeholder.com/555x236" alt=""></h3>
                                </div><div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 555px; position: relative; left: -1665px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">
                                    <h3><img src="http://via.placeholder.com/555x236" alt=""></h3>
                                </div><div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 555px; position: relative; left: -2220px; top: 0px; z-index: 998; opacity: 0;">
                                    <h3><img src="http://via.placeholder.com/555x236" alt=""></h3>
                                </div><div class="slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 555px; position: relative; left: -2775px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">
                                    <h3><img src="http://via.placeholder.com/555x236" alt=""></h3>
                                </div></div></div>
                            </div>
                            <div class="slider slider-nav1 slick-initialized slick-slider">
                                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 558px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 93px;"><span class="car_color car_clr1"></span></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 93px;"><span class="car_color car_clr2"></span></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 93px;"><span class="car_color car_clr3"></span></div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 93px;"><span class="car_color car_clr4"></span></div><div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" style="width: 93px;"><span class="car_color car_clr5"></span></div><div class="slick-slide slick-active" data-slick-index="5" aria-hidden="false" tabindex="0" style="width: 93px;"><span class="car_color car_clr6"></span></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class
                    ="impl_buycar_data">
                        <h1>Expedition , Centaur</h1>
                        <h1>$81000 </h1>
                        <div class="car_emi_wrapper">
                            <span>Emi Starts at $2400 /- *</span>
                            <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Get EMI Assistance</a>
                        </div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="impl_old_buy_btn">
                            <a href="checkout.html" class="impl_btn">add to cart</a>
                            <a href="#" class="impl_btn">buy now</a>
                            <a href="compare.html" class="impl_btn">compare</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Purchase Car Start ------>
    <div class="impl_spesi_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="impl_car_spesi_list">
                        <div class="impl_heading">
                            <h1>Car Specifications</h1>
                        </div>
                        <ul>
                            <li>
                                <h3>Acceleration</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width:70%"></div>
                                </div>
                            </li>
                            <li>
                                <h3>weight</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width:30%"></div>
                                </div>
                            </li>
                            <li>
                                <h3>control</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width:80%"></div>
                                </div>
                            </li>
                            <li>
                                <h3>off-road</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width:60%"></div>
                                </div>
                            </li>
                            <li>
                                <h3>top speed</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width:40%"></div>
                                </div>
                            </li>
                            <li>
                                <h3>toughness</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width:50%"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 impl_padderleft impl_padderright">
                    <div class="impl_car_spesi_img">
                        <img src="http://via.placeholder.com/945x389/666" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!------ Car parts wrapper Start ------>
    <div class="impl_carparts_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_carparts_inner">
                        <div class="impl_carparts">
                            <div class="slider slider-for slick-initialized slick-slider">
                                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3420px;"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 1140px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                    <div class="impl_slider_img"><img src="http://via.placeholder.com/1140x353" alt="">
                                        <ul class="impl_car_prts">
                                            <li>
                                                <span class="impl_cr_no">1</span>
                                                <span class="impl_cr_prts_des">Anti-Lock Braking </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">2</span>
                                                <span class="impl_cr_prts_des"> Premium Headlights</span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">3</span>
                                                <span class="impl_cr_prts_des">Night Vision Windshield </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">4</span>
                                                <span class="impl_cr_prts_des">Leather Seats </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">5</span>
                                                <span class="impl_cr_prts_des">Best Quality Tires </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">6</span>
                                                <span class="impl_cr_prts_des">Ground Clearance of 170mm </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">7</span>
                                                <span class="impl_cr_prts_des">350 Liters Boot Capacity </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 1140px; position: relative; left: -1140px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="impl_slider_img"><img src="http://via.placeholder.com/1140x353" alt="">
                                        <ul class="impl_car_prts">
                                            <li>
                                                <span class="impl_cr_no">1</span>
                                                <span class="impl_cr_prts_des">radiator support </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">2</span>
                                                <span class="impl_cr_prts_des">premium headlights</span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">3</span>
                                                <span class="impl_cr_prts_des">Night Vision Windshield </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">4</span>
                                                <span class="impl_cr_prts_des">Leather Seats </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">5</span>
                                                <span class="impl_cr_prts_des">premium headlights</span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">6</span>
                                                <span class="impl_cr_prts_des">solid bumber </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">7</span>
                                                <span class="impl_cr_prts_des">mirror</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 1140px; position: relative; left: -2280px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="impl_slider_img"><img src="http://via.placeholder.com/1140x353" alt="">
                                        <ul class="impl_car_prts">
                                            <li>
                                                <span class="impl_cr_no">1</span>
                                                <span class="impl_cr_prts_des">step bumper </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">2</span>
                                                <span class="impl_cr_prts_des"> tail lights</span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">3</span>
                                                <span class="impl_cr_prts_des">Night Vision Windshield </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">4</span>
                                                <span class="impl_cr_prts_des">grilles </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">5</span>
                                                <span class="impl_cr_prts_des">tailgates trunk lids </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">6</span>
                                                <span class="impl_cr_prts_des">silencer </span>
                                            </li>
                                            <li>
                                                <span class="impl_cr_no">7</span>
                                                <span class="impl_cr_prts_des">tail light </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div></div></div>
                            </div>
                            <div class="slider slider-nav slick-initialized slick-slider">
                                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 684px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 228px;">
                                    <div class="impl_thumb_ovrly"><img src="http://via.placeholder.com/170x100" alt=""></div>
                                </div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 228px;">
                                    <div class="impl_thumb_ovrly"><img src="http://via.placeholder.com/170x100" alt=""></div>
                                </div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 228px;">
                                    <div class="impl_thumb_ovrly"><img src="http://via.placeholder.com/170x100" alt=""></div>
                                </div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Car description wrapper Start ------>
    <div class="impl_descrip_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        <h1>description</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>Car Brand</h2>
                        <p>Expedition ,</p>
                        <p>Centaur</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>FUEL ECONOMY</h2>
                        <p>EPA combined/city/highway : </p>
                        <p>15-16/13/20-21 mpg</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>ENGINE TYPE</h2>
                        <p>DOHC 32-valve V-8, aluminum</p>
                        <p>block and heads, port fuel</p>
                        <p>injection</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>TRANSMISSION</h2>
                        <p>6-speed Automatic With Manual </p>
                        <p>Shifting Mode</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>Displacement</h2>
                        <p>286 cu in, 4691 cc</p>
                        <p>Power: 454 hp @ 7000 rpm</p>
                        <p>Torque: 384 lb-ft @ 4750 rpm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>VEHICLE TYPE</h2>
                        <p>Front-Engine, </p>
                        <p>Rear-Wheel-Drive, </p>
                        <p>4-Passenger, 2-Door </p>
                        <p>Coupe or Convertible</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>PERFORMANCE</h2>
                        <p>Zero to 60 mph: 4.5-4.7 sec</p>
                        <p>Standing ¼-mile: 13.0-13.2 sec</p>
                        <p>Top speed: 178-187 mph</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>DIMENSIONS</h2>
                        <p>Wheelbase: 115.8 in</p>
                        <p>Length: 193.3-193.7 in</p>
                        <p>Width: 75.4 in Height: 54.3 in</p>
                        <p>Curb weight : 4400-4600 lb</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Car description wrapper Start ------>
    <div class="impl_review_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        <h1>user reviews</h1>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="review_slider slick-initialized slick-slider slick-vertical">
                        <div class="slick-list draggable" style="height: 765px;"><div class="slick-track" style="opacity: 1; height: 3825px; transform: translate3d(0px, -1530px, 0px);"><div class="impl_review_box slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Reviewing After 10,000 kms And Six Months Of Driving Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Best Deal , Value For Money Review After 7000 kms </h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> By : Christopher Brown
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Not Meeting Expectation Regarding The Features Listed By Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jake Nolan</h4>
                        </div><div class="impl_review_box slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Reviewing After 10,000 kms And Six Months Of Driving Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Best Deal , Value For Money Review After 7000 kms </h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> By : Christopher Brown
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Not Meeting Expectation Regarding The Features Listed By Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jake Nolan</h4>
                        </div><div class="impl_review_box slick-slide slick-current slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 945px;">
                            <h2>Reviewing After 10,000 kms And Six Months Of Driving Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" style="width: 945px;">
                            <h2>Best Deal , Value For Money Review After 7000 kms </h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> By : Christopher Brown
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-active" data-slick-index="5" aria-hidden="false" tabindex="0" style="width: 945px;">
                            <h2>Not Meeting Expectation Regarding The Features Listed By Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jake Nolan</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Reviewing After 10,000 kms And Six Months Of Driving Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Best Deal , Value For Money Review After 7000 kms </h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> By : Christopher Brown
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Not Meeting Expectation Regarding The Features Listed By Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jake Nolan</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Reviewing After 10,000 kms And Six Months Of Driving Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Best Deal , Value For Money Review After 7000 kms </h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> By : Christopher Brown
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Not Meeting Expectation Regarding The Features Listed By Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jake Nolan</h4>
                        </div></div></div>
                        <!--2-->

                        <!--3-->

                        <!--4-->

                        <!--5-->

                        <!--6-->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
