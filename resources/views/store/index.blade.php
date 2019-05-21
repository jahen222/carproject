<!DOCTYPE html>
<!--
Template Name: Impel Car Dealer Responsive HTML Template
Version: 1.0.0
Author: Kamleshyadav
Website: http://himanshusofttech.com/
Purchase: http://themeforest.net/user/kamleshyadav
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>Impel Car Dealer Responsive HTML Template</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Impel">
    <meta name="keywords" content="">
    <meta name="author" content="hsoft">
    <meta name="MobileOptimized" content="320">
    <!--Srart Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/ion.rangeSlider.skinFlat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/js/plugin/magnific/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/js/plugin/nice_select/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/style.css') }}">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('src/maracucho/img/logo_favicon.png') }}">
</head>

<body>
    <!------ Header Start ------>
    <div class="impl_header_wrapper">
        <div class="impl_logo">
            <a href="index.html"><img src="images/logo.png" alt="Logo" class="img-fluid"></a>
        </div>
        <div class="impl_top_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="impl_top_info">
                            <ul class="impl_header_social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <p class="impl_header_time"><i class="fa fa-clock-o" aria-hidden="true"></i> Working Hours - 6 AM To 8 PM <span>sunday closed</span></p>
                            <ul class="impl_header_icons">
                                <li class="impl_search"><span><i class="fa fa-search" aria-hidden="true"></i></span></li>
                                <li><a href="compare.html"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
                                <li class="cart-popup"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                    <!--shopping cart box-->
                                    <div class="cart-box">
                                        <div class="popup-container">
                                            <div class="cart-entry">
                                                <a href="#" class="image">
												<img src="http://via.placeholder.com/70x60" alt="">
											</a>
                                                <div class="content">
                                                    <a href="#" class="title">Serpent</a>
                                                    <p class="quantity">Quantity: 1</p>
                                                    <span class="price">$4500.00</span>
                                                </div>
                                                <div class="button-x">
                                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="cart-entry">
                                                <a href="#" class="image">
												<img src="http://via.placeholder.com/70x60" alt="">
											</a>
                                                <div class="content">
                                                    <a href="#" class="title">Empire</a>
                                                    <p class="quantity">Quantity: 1</p>
                                                    <span class="price">$900.00</span>
                                                </div>
                                                <div class="button-x">
                                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="summary">
                                                <div class="subtotal">Sub Total</div>
                                                <div class="price-s">$5100.0</div>
                                            </div>
                                            <div class="cart-buttons">
                                                <a href="checkout.html" class="btn impl_btn">View Cart</a>
                                                <a href="checkout.html" class="btn impl_btn">Checkout</a>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#signin" data-toggle="modal"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                            </ul>
                            <div class="impl_search_overlay">
                                <div class="impl_search_area">
                                    <div class="srch_inner">
                                        <form action="#">
                                            <input type="text" placeholder="Search here... ">
                                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                        <div class="srch_close_btn">
                                            <span class="srch_close_btn_icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--sign-in form-->
        <div class="modal" id="signin">
            <div class="impl_signin">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
                <div class="impl_sign_form">
                    <h1>Sign In</h1>
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                        <span class="form_icon">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                        <span class="form_icon">
					<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
                    </div>
                    <div class="forget_password">
                        <div class="remember_checkbox">
                            <label>Keep me signed in
							<input type="checkbox">
							<span class="checkmark"></span>
						</label>
                        </div>
                        <a href="#">Forgot Password ?</a>
                    </div>
                    <a href="#" class="impl_btn">submit</a>
                    <p>Dont Have An Account? <a href="#signup" data-toggle="modal" class="impl_modal">Sign Up</a></p>
                </div>
                <div class="impl_sign_img">
                    <h2>Welcome To Impel Cars</h2>
                    <p>A Perfect Zone To Sell And Purchase Cars</p>
                    <div class="impl_sign_bottom">
                        <h3>It’s Not Just A Car </h3>
                        <h3>It’s Someone’s Dream</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--sign-up form-->
        <div class="modal" id="signup">
            <div class="impl_signin">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
                <div class="impl_sign_form">
                    <h1>Sign up</h1>
                    <div class="form-group">
                        <input type="text" placeholder="Username" class="form-control">
                        <span class="form_icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                        <span class="form_icon">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                        <span class="form_icon">
					<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirm Password" class="form-control">
                        <span class="form_icon">
					<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
                    </div>
                    <a href="#" class="impl_btn">sign up</a>
                    <p>Already Have An Account? <a href="#signup" data-toggle="modal">Sign In</a></p>
                </div>
                <div class="impl_sign_img">
                    <h2>Welcome To Impel Cars</h2>
                    <p>A Perfect Zone To Sell And Purchase Cars</p>
                    <div class="impl_sign_bottom">
                        <h3>It’s Not Just A Car </h3>
                        <h3>It’s Someone’s Dream</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--menu start-->
        <div class="impl_menu_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <button class="impl_menu_btn">
			<i class="fa fa-car" aria-hidden="true"></i>
			<i class="fa fa-bars" aria-hidden="true"></i>
		</button>
                        <div class="impl_menu_inner">
                            <div class="impl_logo_responsive">
                                <a href="index.html"><img src="images/logo1.png" alt="Logo" class="img-fluid"></a>
                            </div>
                            <a href="sell_step.html" class="impl_btn">Sell your car</a>
                            <div class="impl_menu">
                                <nav>
                                    <div class="menu_cross">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                    <ul>
                                        <li class="dropdown"><a href="javascript:;">home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home version1</a></li>
                                                <li><a href="home.html">Home version2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">Company</a></li>
                                        <li class="dropdown"><a href="javascript:;"  class="active">Purchase car</a>
                                            <ul class="sub-menu">
                                                <li><a href="purchase_new.html">New car</a></li>
                                                <li><a href="purchase_used.html">old car</a></li>
                                                <li><a href="purchase_new_single.html">New Car Single</a></li>
                                                <li><a href="purchase_old_single.html">old car single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="service.html">services</a></li>
                                        <li class="dropdown"><a href="javascript:;">blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog_left_sidebar.html">blog left sidebar</a></li>
                                                <li><a href="blog_right_sidebar.html">blog right sidebar</a></li>
                                                <li><a href="blog_single.html">blog single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="javascript:;">pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="sell_step.html">Sell page</a></li>
                                                <li><a href="compare.html">compare page</a></li>
                                                <li><a href="checkout.html">checkout page</a></li>
                                                <li><a href="error.html">404 page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>purchase</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">purchase</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------ Purchase new section Start ------>
    <div class="impl_purchase_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="impl_sorting_text custom_select">
                        <span class="impl_show"> Showing 9 of 68 Results</span>
                        <div class="impl_select_wrapper">
                            <span>sort by</span>
                            <select>
						<option value="1">Newest</option>
						<option value="2">New</option>
						<option value="3">Old</option>
						<option value="4">Oldest</option>
					</select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="impl_category_type">
                        <a href="purchase_new.html" class="impl_btn active">new car</a>
                        <a href="purchase_used.html" class="impl_btn impl_used_car">used car</a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="impl_purchase_inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="impl_sidebar">
                                    <div class="impl_product_search widget woocommerce">
                                        <div class="impl_footer_subs">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <button class="foo_subs_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <!--Brands-->
                                    <div class="impl_product_brand widget woocommerce">
                                        <h2 class="widget-title">brands</h2>
                                        <ul>
                                            <li>
                                                <label class="brnds_check_label">
												Paradox
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												Voyage
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Passion
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Curiosity
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Ivory
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Dawn
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Temper
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Thunder
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Blade
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Origin
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Titan
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Dominion
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Ferocity
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Tempest
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Flow
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Prime
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Grit
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Nimbus
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Essence
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Aura
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--Colors-->
                                    <div class="impl_product_color widget woocommerce">
                                        <h2 class="widget-title">color</h2>
                                        <ul>
                                            <li>
                                                <label class="brnds_check_label">
												black
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												blue
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												white
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												yellow
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												red
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												grey
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												brown
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												orange
												<input type="checkbox" name="check">
												<span class="label-text"></span>
											</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--Price Range-->
                                    <div class="impl_product_price widget woocommerce">
                                        <h2 class="widget-title">price range</h2>
                                        <div class="price_range">
                                            <input type="text" id="range_24" name="ionRangeSlider" value="" />
                                        </div>
                                    </div>
                                    <!--Car Type-->
                                    <div class="impl_product_type widget woocommerce">
                                        <h2 class="widget-title">car type</h2>
                                        <ul>
                                            <li><a href="#">Hatchback</a></li>
                                            <li><a href="#">Sedan</a></li>
                                            <li><a href="#">MPV</a></li>
                                            <li><a href="#">SUV</a></li>
                                            <li><a href="#">Couple</a></li>
                                            <li><a href="#">Convertible</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <div class="row">
                                    @foreach($recommendedProducts as $recommendedProduct)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="impl_fea_car_box">
                                                <div class="impl_fea_car_img">
                                                    <img src="{{$recommendedProduct->path_to_thumbnail}}" alt="" class="img-fluid impl_frst_car_img" />
                                                    <img src="{{$recommendedProduct->path_to_thumbnail}}" alt="" class="img-fluid impl_hover_car_img" />
                                                    <span class="impl_img_tag" title="compare"><a href="{{ url('/products/'.$recommendedProduct->id) }}"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                                                </div>
                                                <div class="impl_fea_car_data">
                                                    <h2><a href="{{ url('/products/'.$recommendedProduct->id) }}">{{$recommendedProduct->name}}</a></h2>
                                                    <ul>
                                                        <li><span class="impl_fea_title">Quantity</span>
                                                            <span class="impl_fea_name">{!!$recommendedProduct->quantity!!}</span></li>
                                                        <li><span class="impl_fea_title">Subcategory</span>
                                                            <span class="impl_fea_name">{!!$recommendedProduct->Subcategory->name!!}</span></li>
                                                      </ul>
                                                    <div class="impl_fea_btn">
                                                        <button class="impl_btn"><a href="{{ url('/products/'.$recommendedProduct->id) }}"><span class="impl_doller">${{$recommendedProduct->price}}</span><span class="impl_bnw">buy now</span></a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!--pagination start-->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="impl_pagination_wrapper">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    {{ $recommendedProducts->links() }}
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Footer Section Start ------>
    <div class="impl_footer_wrapper">
        <div class="impl_social_wrapper">
            <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="impl_foo_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="impl_foo_box footer_abt_text">
                            <a href="#"><img src="images/logo.png" alt=""></a>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable by injected humour.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="impl_foo_box">
                            <h1 class="impl_foo_title">Basic Information</h1>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Changing Oil</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Saving Fuel</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Antilock Brakes</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Battery</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Tips On Long Car Trips</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Air Pressure</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Tire Replacement</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="impl_foo_box">
                            <h1 class="impl_foo_title">contact us</h1>
                            <ul>
                                <li>
                                    <div class="impl_foo_icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                    <div class="impl_foo_text">
                                        <p>+1-202-555-0137</p>
                                        <p>+1-202-555-0137</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="impl_foo_icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                    <div class="impl_foo_text">
                                        <p>514 S. Magnolia St. <br> Orlando , US</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="impl_foo_icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    <div class="impl_foo_text">
                                        <a href="#">dummymail@mail.com</a>
                                        <a href="#">yourmail@mail.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="impl_foo_box">
                            <h1 class="impl_foo_title">Subscribe </h1>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            <div class="impl_footer_subs">
                                <input type="text" class="form-control" placeholder="Enter Your Email">
                                <button class="foo_subs_btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Bottom Footer Start---->
    <div class="impl_btm_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p class="impl_copyright">Copyright &copy; 2018 Impel Car Dealers. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
	<!---- Go To Top---->
	<span class="gotop"><img src="images/goto.png" alt=""></span>
	<!--Main js file Style-->
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/ion.rangeSlider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/magnific/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/nice_select/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/maracucho/js/custom.js') }}"></script>
    <!--Main js file End-->
</body>

</html>
