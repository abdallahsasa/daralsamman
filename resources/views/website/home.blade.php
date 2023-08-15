@extends('website.layouts.app')
@section('content')

    <!--===== MAIN CONTENT ===== -->
    {{--    Slider--}}
    <section class="mb-8">
        <div class="container">
            <div class="pt-5 pb-5">
                <div class="bg-img-hero img-fluid rounded-md"
                     style="background-image: url({{asset('website/img/slider/slider-1.png')}});">
                    <div class="js-slick-carousel u-slick"
                         data-pagi-classes="d-lg-none text-center u-slick__pagination mt-5 position-absolute left-0 right-0"
                         data-arrows-classes="d-none d-lg-block u-slick__arrow u-slick__arrow--v4 u-slick__arrow-centered--y"
                         data-arrow-left-classes="flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left text-gray-360 ml-lg-3"
                         data-arrow-right-classes="flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right text-dark mr-lg-3">
                        <div class="px-4 px-md-6 px-lg-7 px-xl-10 d-flex min-height-530">
                            <div class="max-width-565 my-auto">
                                <div class="media">
                                    <div class="media-body align-self-center mb-4 mb-lg-0">
                                        <p class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2"
                                           data-scs-animation-in="fadeInUp"
                                           data-scs-animation-delay="200">THE BOOKWORM EDITORS’</p>
                                        <h2 class="font-size-15 mb-3 pb-1"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="300">
                                            <span class="hero__title-line-1 font-weight-normal d-block">Feature Books Of The </span>
                                            <span class="hero__title-line-2 font-weight-bold d-block">Fabruary</span>
                                        </h2>
                                        <a href="../shop/v3.html"
                                           class="banner_btn btn btn-wide bg-dark text-white rounded-xs"
                                           data-scs-animation-in="fadeInLeft"
                                           data-scs-animation-delay="400">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 px-md-6 px-lg-7 px-xl-10 d-flex min-height-530">
                            <div class="max-width-565 my-auto">
                                <div class="media">
                                    <div class="media-body align-self-center mb-4 mb-lg-0">
                                        <p class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2"
                                           data-scs-animation-in="fadeInUp"
                                           data-scs-animation-delay="200">THE BOOKWORM EDITORS’</p>
                                        <h2 class="font-size-15 mb-3 pb-1"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="300">
                                            <span class="hero__title-line-1 font-weight-normal d-block">Feature Books Of The </span>
                                            <span class="hero__title-line-2 font-weight-bold d-block">Fabruary</span>
                                        </h2>
                                        <a href="../shop/v3.html"
                                           class="banner_btn btn btn-wide bg-dark text-white rounded-xs"
                                           data-scs-animation-in="fadeInLeft"
                                           data-scs-animation-delay="400">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 px-md-6 px-lg-7 px-xl-10 d-flex min-height-530">
                            <div class="max-width-565 my-auto">
                                <div class="media">
                                    <div class="media-body align-self-center mb-4 mb-lg-0">
                                        <p class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2"
                                           data-scs-animation-in="fadeInUp"
                                           data-scs-animation-delay="200">THE BOOKWORM EDITORS’</p>
                                        <h2 class="font-size-15 mb-3 pb-1"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="300">
                                            <span class="hero__title-line-1 font-weight-normal d-block">Feature Books Of The </span>
                                            <span class="hero__title-line-2 font-weight-bold d-block">Fabruary</span>
                                        </h2>
                                        <a href="../shop/v3.html"
                                           class="banner_btn btn btn-wide bg-dark text-white rounded-xs"
                                           data-scs-animation-in="fadeInLeft"
                                           data-scs-animation-delay="400">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 px-md-6 px-lg-7 px-xl-10 d-flex min-height-530">
                            <div class="max-width-565 my-auto">
                                <div class="media">
                                    <div class="media-body align-self-center mb-4 mb-lg-0">
                                        <p class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2"
                                           data-scs-animation-in="fadeInUp"
                                           data-scs-animation-delay="200">THE BOOKWORM EDITORS’</p>
                                        <h2 class="font-size-15 mb-3 pb-1"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="300">
                                            <span class="hero__title-line-1 font-weight-normal d-block">Feature Books Of The </span>
                                            <span class="hero__title-line-2 font-weight-bold d-block">Fabruary</span>
                                        </h2>
                                        <a href="../shop/v3.html"
                                           class="banner_btn btn btn-wide bg-dark text-white rounded-xs"
                                           data-scs-animation-in="fadeInLeft"
                                           data-scs-animation-delay="400">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--End Slider --}}



    <!---===== END MAIN CONTENT ===== -->


    <section class="space-bottom-3">
        <div class="container">
            <header class="mb-5 d-md-flex justify-content-between align-items-center">
                <h2 class="font-size-7 mb-3 mb-md-0">Bestselling Books</h2>
                <a href="../shop/v1.html" class="h-primary d-block">View All <i class="glyph-icon flaticon-next"></i></a>
            </header>
            <div class="js-slick-carousel products no-gutters border-top border-left border-right" data-pagi-classes="d-xl-none text-center position-absolute right-0 left-0 u-slick__pagination mt-4 mb-0" data-arrows-classes="d-none d-xl-block u-slick__arrow u-slick__arrow-centered--y" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10" data-slides-show="5" data-responsive="[{
                   &quot;breakpoint&quot;: 1500,
                   &quot;settings&quot;: {
                     &quot;slidesToShow&quot;: 4
                   }
                },{
                   &quot;breakpoint&quot;: 1199,
                   &quot;settings&quot;: {
                     &quot;slidesToShow&quot;: 3
                   }
                },{
                   &quot;breakpoint&quot;: 992,
                   &quot;settings&quot;: {
                     &quot;slidesToShow&quot;: 2
                   }
                }, {
                   &quot;breakpoint&quot;: 768,
                   &quot;settings&quot;: {
                     &quot;slidesToShow&quot;: 1
                   }
                }, {
                   &quot;breakpoint&quot;: 554,
                   &quot;settings&quot;: {
                     &quot;slidesToShow&quot;: 1
                   }
                }]">
                <div class="product">
                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                            <div class="woocommerce-loop-product__thumbnail">
                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/150x226/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                            </div>
                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                </div>
                            </div>
                            <div class="product__hover d-flex align-items-center">
                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                    <span class="product__add-to-cart">ADD TO CART</span>
                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                </a>
                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-switch"></i>
                                </a>
                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                            <div class="woocommerce-loop-product__thumbnail">
                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/150x226/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                            </div>
                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Last Sister (Columbia River Book 1)</a></h2>
                                <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Kelly Harms</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                </div>
                            </div>
                            <div class="product__hover d-flex align-items-center">
                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                    <span class="product__add-to-cart">ADD TO CART</span>
                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                </a>
                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-switch"></i>
                                </a>
                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                            <div class="woocommerce-loop-product__thumbnail">
                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/150x226/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                            </div>
                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">All You Can Ever Know: A Memoir</a></h2>
                                <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                </div>
                            </div>
                            <div class="product__hover d-flex align-items-center">
                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                    <span class="product__add-to-cart">ADD TO CART</span>
                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                </a>
                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-switch"></i>
                                </a>
                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                            <div class="woocommerce-loop-product__thumbnail">
                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/150x226/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                            </div>
                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                                <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Kelly Harms</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                </div>
                            </div>
                            <div class="product__hover d-flex align-items-center">
                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                    <span class="product__add-to-cart">ADD TO CART</span>
                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                </a>
                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-switch"></i>
                                </a>
                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                            <div class="woocommerce-loop-product__thumbnail">
                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/150x226/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                            </div>
                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Last Sister (Columbia River Book 1)</a></h2>
                                <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Kelly Harms</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                </div>
                            </div>
                            <div class="product__hover d-flex align-items-center">
                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                    <span class="product__add-to-cart">ADD TO CART</span>
                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                </a>
                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-switch"></i>
                                </a>
                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                            <div class="woocommerce-loop-product__thumbnail">
                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/150x226/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                            </div>
                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">All You Can Ever Know: A Memoir</a></h2>
                                <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                </div>
                            </div>
                            <div class="product__hover d-flex align-items-center">
                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                    <span class="product__add-to-cart">ADD TO CART</span>
                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                </a>
                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-switch"></i>
                                </a>
                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                            <div class="woocommerce-loop-product__thumbnail">
                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/150x226/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                            </div>
                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                                <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Kelly Harms</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                </div>
                            </div>
                            <div class="product__hover d-flex align-items-center">
                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                    <span class="product__add-to-cart">ADD TO CART</span>
                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                </a>
                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-switch"></i>
                                </a>
                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space-bottom-3 banner-with-product">
        <div class="container">
            <header class="mb-5 d-md-flex justify-content-between align-items-center">
                <h2 class="font-size-7 mb-3 mb-md-0">New Releases</h2>
                <ul class="nav nav-gray-700 flex-nowrap flex-md-wrap overflow-auto overflow-md-visible" role="tablist">
                    <li class="nav-item mx-4 flex-shrink-0 flex-md-shrink-1">
                        <a class="nav-link pb-1 px-0 active" id="history-tab" data-toggle="tab" href="#history-1" role="tab" aria-controls="history-1" aria-selected="true">History</a>
                    </li>
                    <li class="nav-item mx-4 flex-shrink-0 flex-md-shrink-1">
                        <a class="nav-link pb-1 px-0" id="sciencemath-tab" data-toggle="tab" href="#sciencemath-1" role="tab" aria-controls="sciencemath-1" aria-selected="false">Science &amp; Math</a>
                    </li>
                    <li class="nav-item mx-4 flex-shrink-0 flex-md-shrink-1">
                        <a class="nav-link pb-1 px-0" id="romance-tab" data-toggle="tab" href="#romance-1" role="tab" aria-controls="romance-1" aria-selected="false">Romance</a>
                    </li>
                    <li class="nav-item ml-4 flex-shrink-0 flex-md-shrink-1">
                        <a class="nav-link pb-1 px-0" id="travel-tab" data-toggle="tab" href="#travel-1" role="tab" aria-controls="travel-1" aria-selected="false">Travel</a>
                    </li>
                </ul>
            </header>
            <div class="tab-content u-slick__tab">
                <div class="tab-pane fade show active" id="history-1" role="tabpanel" aria-labelledby="history-tab">
                    <div class="row no-gutters">
                        <div class="col-xl-4 border-right-0 border bg-gray-200 px-1">
                            <div class="banner px-lg-8 px-3 py-4 py-xl-0 d-flex h-100 align-items-center justify-content-center">
                                <div class="banner__body">
                                    <div class="banner__image pb-1 mb-5">
                                        <img class="img-fluid" src="../../assets/img/350x282/img1.png" alt="image-description">
                                    </div>
                                    <h3 class="banner_text m-0">
                                        <span class="d-block mb-1 font-size-10 font-weight-regular">Get Extra</span>
                                        <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">Sale -25%</span>
                                        <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">On Order Over $100</span>
                                    </h3>
                                    <a href="../shop/v1.html" class="btn btn-primary btn-wide rounded-0">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Call Me By Your Name</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Camino Winds</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col d-xl-none d-wd-block">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col d-xl-none d-wd-block">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sciencemath-1" role="tabpanel" aria-labelledby="sciencemath-tab">
                    <div class="row no-gutters">
                        <div class="col-xl-4 border-right-0 border bg-gray-200 px-1">
                            <div class="banner px-lg-8 px-3 py-4 py-xl-0 d-flex h-100 align-items-center justify-content-center">
                                <div class="banner__body">
                                    <div class="banner__image pb-1 mb-5">
                                        <img class="img-fluid" src="../../assets/img/350x282/img1.png" alt="image-description">
                                    </div>
                                    <h3 class="banner_text m-0">
                                        <span class="d-block mb-1 font-size-10 font-weight-regular">Get Extra</span>
                                        <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">Sale -25%</span>
                                        <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">On Order Over $100</span>
                                    </h3>
                                    <a href="../shop/v1.html" class="btn btn-primary btn-wide rounded-0">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Call Me By Your Name</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Camino Winds</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col d-xl-none d-wd-block">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col d-xl-none d-wd-block">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="romance-1" role="tabpanel" aria-labelledby="romance-tab">
                    <div class="row no-gutters">
                        <div class="col-xl-4 border-right-0 border bg-gray-200 px-1">
                            <div class="banner px-lg-8 px-3 py-4 py-xl-0 d-flex h-100 align-items-center justify-content-center">
                                <div class="banner__body">
                                    <div class="banner__image pb-1 mb-5">
                                        <img class="img-fluid" src="../../assets/img/350x282/img1.png" alt="image-description">
                                    </div>
                                    <h3 class="banner_text m-0">
                                        <span class="d-block mb-1 font-size-10 font-weight-regular">Get Extra</span>
                                        <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">Sale -25%</span>
                                        <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">On Order Over $100</span>
                                    </h3>
                                    <a href="../shop/v1.html" class="btn btn-primary btn-wide rounded-0">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Call Me By Your Name</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Camino Winds</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col d-xl-none d-wd-block">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col d-xl-none d-wd-block">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="travel-1" role="tabpanel" aria-labelledby="travel-tab">
                    <div class="row no-gutters">
                        <div class="col-xl-4 border-right-0 border bg-gray-200 px-1">
                            <div class="banner px-lg-8 px-3 py-4 py-xl-0 d-flex h-100 align-items-center justify-content-center">
                                <div class="banner__body">
                                    <div class="banner__image pb-1 mb-5">
                                        <img class="img-fluid" src="../../assets/img/350x282/img1.png" alt="image-description">
                                    </div>
                                    <h3 class="banner_text m-0">
                                        <span class="d-block mb-1 font-size-10 font-weight-regular">Get Extra</span>
                                        <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">Sale -25%</span>
                                        <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">On Order Over $100</span>
                                    </h3>
                                    <a href="../shop/v1.html" class="btn btn-primary btn-wide rounded-0">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Call Me By Your Name</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Camino Winds</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col d-xl-none d-wd-block">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product col d-xl-none d-wd-block">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img src="../../assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space-bottom-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-4 col-xl-3 mb-4 mb-md-0">
                    <div class="bg-img-hero min-height-440 rounded" style="background-image: url(../../assets/img/300x440/img2.jpg);">
                        <div class="p-5">
                            <h4 class="font-size-22">Romance</h4>
                            <p>Lorem ipsum dolor consectetu eiusmo tempor ametsum.</p>
                            <a href="#" class="text-dark font-weight-medium text-uppercase stretched-link">View All</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="mx-lg-8 mx-wd-4">
                        <div class="js-slick-carousel products no-gutters slick-initialized slick-slider slick-dotted" data-pagi-classes="d-lg-none text-center u-slick__pagination u-slick__pagination mt-5 mb-0" data-arrows-classes="d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y rounded-circle" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n8 ml-wd-n4" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n8 mr-wd-n4" data-slides-show="4" data-responsive="[{
                               &quot;breakpoint&quot;: 1500,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 3
                               }
                            }, {
                               &quot;breakpoint&quot;: 1199,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 2
                               }
                            }, {
                               &quot;breakpoint&quot;: 554,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 2
                               }
                            }]"><div class="js-prev d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y rounded-circle fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n8 ml-wd-n4 slick-arrow slick-disabled" aria-disabled="true" style=""></div>
                            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1992px; transform: translate3d(0px, 0px, 0px);"><div class="product product__no-border border-right slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 249px; height: auto;" tabindex="0" role="tabpanel" id="slick-slide50" aria-describedby="slick-slide-control50">
                                        <div class="product__inner overflow-hidden px-3 px-md-4d875">
                                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                <div class="woocommerce-loop-product__thumbnail">
                                                    <a href="../shop/single-product-v2.html" class="d-block" tabindex="0"><img src="../../assets/img/120x180/img1.jpg" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v2.html" tabindex="0">Paperback</a></div>
                                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v2.html" tabindex="0">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700" tabindex="0">Jay Shetty</a></div>
                                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                    </div>

                                                </div>
                                                <div class="product__hover d-flex align-items-center">
                                                    <a href="../shop/single-product-v2.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" tabindex="0" data-original-title="ADD TO CART">
                                                        <span class="product__add-to-cart">ADD TO CART</span>
                                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="mr-1 h-p-bg btn btn-outline-primary-green border-0" tabindex="0">
                                                        <i class="flaticon-switch"></i>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="h-p-bg btn btn-outline-primary-green border-0" tabindex="0">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="product product__no-border border-right slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 249px; height: auto;" tabindex="0" role="tabpanel" id="slick-slide51" aria-describedby="slick-slide-control51">
                                        <div class="product__inner overflow-hidden px-3 px-md-4d875">
                                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                <div class="woocommerce-loop-product__thumbnail">
                                                    <a href="../shop/single-product-v2.html" class="d-block" tabindex="0"><img src="../../assets/img/120x180/img2.jpg" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v2.html" tabindex="0">Kindle Edition</a></div>
                                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v2.html" tabindex="0">The Overdue Life of Amy Byler</a></h2>
                                                    <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700" tabindex="0">Kelly Harms</a></div>
                                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                    </div>
                                                </div>
                                                <div class="product__hover d-flex align-items-center">
                                                    <a href="../shop/single-product-v2.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" tabindex="0" data-original-title="ADD TO CART">
                                                        <span class="product__add-to-cart">ADD TO CART</span>
                                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="mr-1 h-p-bg btn btn-outline-primary-green border-0" tabindex="0">
                                                        <i class="flaticon-switch"></i>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="h-p-bg btn btn-outline-primary-green border-0" tabindex="0">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="product product__no-border border-right slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 249px; height: auto;" tabindex="0" role="tabpanel" id="slick-slide52" aria-describedby="slick-slide-control52">
                                        <div class="product__inner overflow-hidden px-3 px-md-4d875">
                                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                <div class="woocommerce-loop-product__thumbnail">
                                                    <a href="../shop/single-product-v2.html" class="d-block" tabindex="0"><img src="../../assets/img/120x180/img3.jpg" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v2.html" tabindex="0">Paperback</a></div>
                                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v2.html" tabindex="0">Call Me By Your Name</a></h2>
                                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700" tabindex="0">Jay Shetty</a></div>
                                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                    </div>

                                                </div>
                                                <div class="product__hover d-flex align-items-center">
                                                    <a href="../shop/single-product-v2.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" tabindex="0" data-original-title="ADD TO CART">
                                                        <span class="product__add-to-cart">ADD TO CART</span>
                                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="mr-1 h-p-bg btn btn-outline-primary-green border-0" tabindex="0">
                                                        <i class="flaticon-switch"></i>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="h-p-bg btn btn-outline-primary-green border-0" tabindex="0">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="product product__no-border border-right slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 249px; height: auto;" tabindex="0" role="tabpanel" id="slick-slide53" aria-describedby="slick-slide-control53">
                                        <div class="product__inner overflow-hidden px-3 px-md-4d875">
                                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                <div class="woocommerce-loop-product__thumbnail">
                                                    <a href="../shop/single-product-v2.html" class="d-block" tabindex="0"><img src="../../assets/img/120x180/img4.jpg" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v2.html" tabindex="0">Kindle Edition</a></div>
                                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v2.html" tabindex="0">The Cinderella Reversal</a></h2>
                                                    <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700" tabindex="0">Kelly Harms</a></div>
                                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                    </div>
                                                </div>
                                                <div class="product__hover d-flex align-items-center">
                                                    <a href="../shop/single-product-v2.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" tabindex="0" data-original-title="ADD TO CART">
                                                        <span class="product__add-to-cart">ADD TO CART</span>
                                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="mr-1 h-p-bg btn btn-outline-primary-green border-0" tabindex="0">
                                                        <i class="flaticon-switch"></i>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="h-p-bg btn btn-outline-primary-green border-0" tabindex="0">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="product product__no-border border-right slick-slide" data-slick-index="4" aria-hidden="true" style="width: 249px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide54" aria-describedby="slick-slide-control54">
                                        <div class="product__inner overflow-hidden px-3 px-md-4d875">
                                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                <div class="woocommerce-loop-product__thumbnail">
                                                    <a href="../shop/single-product-v2.html" class="d-block" tabindex="-1"><img src="../../assets/img/120x180/img5.jpg" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v2.html" tabindex="-1">Paperback</a></div>
                                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v2.html" tabindex="-1">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700" tabindex="-1">Jay Shetty</a></div>
                                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                    </div>

                                                </div>
                                                <div class="product__hover d-flex align-items-center">
                                                    <a href="../shop/single-product-v2.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" tabindex="-1" data-original-title="ADD TO CART">
                                                        <span class="product__add-to-cart">ADD TO CART</span>
                                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="mr-1 h-p-bg btn btn-outline-primary-green border-0" tabindex="-1">
                                                        <i class="flaticon-switch"></i>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="h-p-bg btn btn-outline-primary-green border-0" tabindex="-1">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="product product__no-border border-right slick-slide" data-slick-index="5" aria-hidden="true" style="width: 249px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide55" aria-describedby="slick-slide-control55">
                                        <div class="product__inner overflow-hidden px-3 px-md-4d875">
                                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                <div class="woocommerce-loop-product__thumbnail">
                                                    <a href="../shop/single-product-v2.html" class="d-block" tabindex="-1"><img src="../../assets/img/120x180/img6.jpg" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v2.html" tabindex="-1">Kindle Edition</a></div>
                                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v2.html" tabindex="-1">The Overdue Life of Amy Byler</a></h2>
                                                    <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700" tabindex="-1">Kelly Harms</a></div>
                                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                    </div>
                                                </div>
                                                <div class="product__hover d-flex align-items-center">
                                                    <a href="../shop/single-product-v2.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" tabindex="-1" data-original-title="ADD TO CART">
                                                        <span class="product__add-to-cart">ADD TO CART</span>
                                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="mr-1 h-p-bg btn btn-outline-primary-green border-0" tabindex="-1">
                                                        <i class="flaticon-switch"></i>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="h-p-bg btn btn-outline-primary-green border-0" tabindex="-1">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="product product__no-border border-right slick-slide" data-slick-index="6" aria-hidden="true" style="width: 249px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide56" aria-describedby="slick-slide-control56">
                                        <div class="product__inner overflow-hidden px-3 px-md-4d875">
                                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                <div class="woocommerce-loop-product__thumbnail">
                                                    <a href="../shop/single-product-v2.html" class="d-block" tabindex="-1"><img src="../../assets/img/120x180/img7.jpg" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v2.html" tabindex="-1">Paperback</a></div>
                                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v2.html" tabindex="-1">Call Me By Your Name</a></h2>
                                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700" tabindex="-1">Jay Shetty</a></div>
                                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                    </div>

                                                </div>
                                                <div class="product__hover d-flex align-items-center">
                                                    <a href="../shop/single-product-v2.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" tabindex="-1" data-original-title="ADD TO CART">
                                                        <span class="product__add-to-cart">ADD TO CART</span>
                                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="mr-1 h-p-bg btn btn-outline-primary-green border-0" tabindex="-1">
                                                        <i class="flaticon-switch"></i>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="h-p-bg btn btn-outline-primary-green border-0" tabindex="-1">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="product product__no-border border-right slick-slide" data-slick-index="7" aria-hidden="true" style="width: 249px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide57" aria-describedby="slick-slide-control57">
                                        <div class="product__inner overflow-hidden px-3 px-md-4d875">
                                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                <div class="woocommerce-loop-product__thumbnail">
                                                    <a href="../shop/single-product-v2.html" class="d-block" tabindex="-1"><img src="../../assets/img/120x180/img8.jpg" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v2.html" tabindex="-1">Kindle Edition</a></div>
                                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v2.html" tabindex="-1">The Cinderella Reversal</a></h2>
                                                    <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700" tabindex="-1">Kelly Harms</a></div>
                                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                    </div>
                                                </div>
                                                <div class="product__hover d-flex align-items-center">
                                                    <a href="../shop/single-product-v2.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" tabindex="-1" data-original-title="ADD TO CART">
                                                        <span class="product__add-to-cart">ADD TO CART</span>
                                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="mr-1 h-p-bg btn btn-outline-primary-green border-0" tabindex="-1">
                                                        <i class="flaticon-switch"></i>
                                                    </a>
                                                    <a href="../shop/single-product-v2.html" class="h-p-bg btn btn-outline-primary-green border-0" tabindex="-1">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div></div>







                            <div class="js-next d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y rounded-circle fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n8 mr-wd-n4 slick-arrow" style="" aria-disabled="false"></div><ul class="js-pagination d-lg-none text-center u-slick__pagination mt-5 mb-0" style="display: block;" role="tablist"><li class="slick-active slick-current" role="presentation"><span></span></li><li role="presentation"><span></span></li><li role="presentation"><span></span></li><li role="presentation"><span></span></li><li role="presentation"><span></span></li></ul></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="home-latest-news space-bottom-3">
        <div class="container">
            <header class="border-bottom d-md-flex justify-content-between align-items-center mb-10d75 pb-4d75">
                <h2 class="font-size-7 mb-3 mb-md-0">Latest News</h2>
                <a href="../shop/v2.html" class="h-primary d-block">View All <i
                        class="glyph-icon flaticon-next"></i></a>
            </header>
            <ul class="blog-posts list-unstyled my-0 row row-cols-md-2 row-cols-lg-3">
                <li class="blog-post col mb-4 mb-lg-0">
                    <div class="blog-post__inner">
                        <a href="../blog/blog-single.html"><img src="https://placehold.it/445x300"
                                                                class="img-fluid rounded-md mb-3"
                                                                alt="image-description"></a>
                        <div class="blog-post__body">
                            <ul class="blog-post__meta list-unstyled d-flex font-size-2 mb-2d75">
                                <li><a href="../blog/blog-single.html" class="text-secondary-gray-700">10 November,
                                        2019</a></li>
                                <li class="ml-3"><a href="../blog/blog-single.html" class="text-secondary-gray-700">2
                                        Comments</a></li>
                            </ul>
                            <h2 class="blog-post__title text-truncate font-weight-regular h6"><a
                                    href="../blog/blog-single.html">Benefits of Reading: Getting Smart, Thin, Healthy,
                                    Happy</a></h2>
                        </div>
                    </div>
                </li>
                <li class="blog-post col mb-4 mb-lg-0">
                    <div class="blog-post__inner">
                        <a href="../blog/blog-single.html"><img src="https://placehold.it/445x300"
                                                                class="img-fluid rounded-md mb-3"
                                                                alt="image-description"></a>
                        <div class="blog-post__body">
                            <ul class="blog-post__meta list-unstyled d-flex font-size-2 mb-2d75">
                                <li><a href="../blog/blog-single.html" class="text-secondary-gray-700">10 November,
                                        2019</a></li>
                                <li class="ml-3"><a href="../blog/blog-single.html" class="text-secondary-gray-700">2
                                        Comments</a></li>
                            </ul>
                            <h2 class="blog-post__title text-truncate font-weight-regular h6"><a
                                    href="../blog/blog-single.html">'American Dirt' Invites Readers into the Journey of
                                    Mexican Migrants</a></h2>
                        </div>
                    </div>
                </li>
                <li class="blog-post col mb-4 mb-lg-0">
                    <div class="blog-post__inner">
                        <a href="../blog/blog-single.html"><img src="https://placehold.it/445x300"
                                                                class="img-fluid rounded-md mb-3"
                                                                alt="image-description"></a>
                        <div class="blog-post__body">
                            <ul class="blog-post__meta list-unstyled d-flex font-size-2 mb-2d75">
                                <li><a href="../blog/blog-single.html" class="text-secondary-gray-700">10 November,
                                        2019</a></li>
                                <li class="ml-3"><a href="../blog/blog-single.html" class="text-secondary-gray-700">2
                                        Comments</a></li>
                            </ul>
                            <h2 class="blog-post__title text-truncate font-weight-regular h6"><a
                                    href="../blog/blog-single.html">Anne Bogel's 5 Tips to Restore Your Love of
                                    Reading</a></h2>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
