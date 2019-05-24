@extends('layouts.layout_carprojects')

@section('content')
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
                                                    <img src="{{$recommendedProduct->path_to_thumbnail}}" alt="" class="img-fluid impl_frst_car_img" style="display:block;margin:auto;"/>
                                                    <img src="{{$recommendedProduct->path_to_thumbnail}}" alt="" class="img-fluid impl_hover_car_img" style="display:block;margin:auto;"/>
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
@endsection
