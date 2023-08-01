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


    <section class="space-bottom-2 space-bottom-lg-3">
        <div class="container">
            <div class="d-md-flex align-items-md-center justify-content-md-between">
                <header class="mb-4">
                    <h2 class="font-size-7">New Releases</h2>
                </header>
                <ul class="nav justify-content-md-center nav-gray-700 mb-5 flex-nowrap flex-md-wrap overflow-auto overflow-md-visible"
                    id="featuredBooks" role="tablist">
                    <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
                        <a class="nav-link px-0 active" id="history-tab" data-toggle="tab" href="#history-1" role="tab"
                           aria-controls="history-1" aria-selected="true">Hisotry</a>
                    </li>
                    <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
                        <a class="nav-link px-0" id="science-tab" data-toggle="tab" href="#science" role="tab"
                           aria-controls="science" aria-selected="false">Science &amp; Math</a>
                    </li>
                    <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
                        <a class="nav-link px-0" id="romance-tab" data-toggle="tab" href="#romance-1" role="tab"
                           aria-controls="romance-1" aria-selected="false">Romance</a>
                    </li>
                    <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
                        <a class="nav-link px-0" id="travel-tab" data-toggle="tab" href="#travel-1" role="tab"
                           aria-controls="travel-1" aria-selected="false">Travel</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content u-slick__tab" id="featuredBooksContent">
                <div class="tab-pane fade active show" id="history-1" role="tabpanel" aria-labelledby="history-tab">
                    <ul class="js-slick-carousel products border-top border-left border-right list-unstyled my-0 slick-initialized slick-slider slick-dotted"
                        data-pagi-classes="d-lg-none text-center u-slick__pagination mt-3  mb-0 position-absolute right-0 left-0"
                        data-arrows-classes="d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y"
                        data-arrow-left-classes="fas flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10"
                        data-arrow-right-classes="fas flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10"
                        data-slides-show="5" data-responsive="[{
                           &quot;breakpoint&quot;: 1500,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 4
                           }
                        }, {
                           &quot;breakpoint&quot;: 1199,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 3
                           }
                        }, {
                           &quot;breakpoint&quot;: 554,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 2
                           }
                        }]">
                        <div
                            class="js-prev d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y fas flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10 slick-arrow slick-disabled"
                            aria-disabled="true" style=""></div>
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                 style="opacity: 1; width: 2240px; transform: translate3d(0px, 0px, 0px);">
                                <li class="product bg-white slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide20" aria-describedby="slick-slide-control20">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Think Like a
                                                        Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="1"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide21" aria-describedby="slick-slide-control21">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">The Overdue
                                                        Life of Amy Byler</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="2"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide22" aria-describedby="slick-slide-control22">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Man's Search
                                                        for Meaning</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="3"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide23" aria-describedby="slick-slide-control23">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Until the End
                                                        of Time: Mind, Matter</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="4"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide24" aria-describedby="slick-slide-control24">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Blindside
                                                        (Michael Bennett)</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide" data-slick-index="5" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide25"
                                    aria-describedby="slick-slide-control25">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="-1"><img src="https://placehold.it/150x225"
                                                                      class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                      alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="-1">Camino
                                                        Winds</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide" data-slick-index="6" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide26"
                                    aria-describedby="slick-slide-control26">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="-1"><img src="https://placehold.it/150x225"
                                                                      class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                      alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html"
                                                        tabindex="-1">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="-1">Scot Under
                                                        the Covers: The Wild Wicked</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide" data-slick-index="7" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide27"
                                    aria-describedby="slick-slide-control27">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="-1"><img src="https://placehold.it/150x225"
                                                                      class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                      alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="-1">Call Me By
                                                        Your Name</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </div>
                        </div>


                        <div
                            class="js-next d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y fas flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10 slick-arrow"
                            style="" aria-disabled="false"></div>
                        <ul class="js-pagination d-lg-none text-center u-slick__pagination mt-3 mb-0 position-absolute right-0 left-0"
                            style="display: block;" role="tablist">
                            <li class="slick-active slick-current" role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                        </ul>
                    </ul>
                </div>
                <div class="tab-pane fade" id="science" role="tabpanel" aria-labelledby="science-tab">
                    <ul class="js-slick-carousel products border-top border-left border-right list-unstyled my-0 slick-initialized slick-slider slick-dotted"
                        data-pagi-classes="d-lg-none text-center u-slick__pagination mt-3  mb-0 position-absolute right-0 left-0"
                        data-arrows-classes="d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y"
                        data-arrow-left-classes="fas flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10"
                        data-arrow-right-classes="fas flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10"
                        data-slides-show="5" data-responsive="[{
                           &quot;breakpoint&quot;: 1500,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 4
                           }
                        }, {
                           &quot;breakpoint&quot;: 1199,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 3
                           }
                        }, {
                           &quot;breakpoint&quot;: 554,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 2
                           }
                        }]">
                        <div
                            class="js-prev d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y fas flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10 slick-arrow slick-disabled"
                            aria-disabled="true" style=""></div>
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                 style="opacity: 1; width: 2240px; transform: translate3d(0px, 0px, 0px);">
                                <li class="product bg-white slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide30" aria-describedby="slick-slide-control30">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Think Like a
                                                        Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="1"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide31" aria-describedby="slick-slide-control31">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">The Overdue
                                                        Life of Amy Byler</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="2"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide32" aria-describedby="slick-slide-control32">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Man's Search
                                                        for Meaning</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="3"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide33" aria-describedby="slick-slide-control33">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Until the End
                                                        of Time: Mind, Matter</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="4"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide34" aria-describedby="slick-slide-control34">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Blindside
                                                        (Michael Bennett)</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide" data-slick-index="5" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide35"
                                    aria-describedby="slick-slide-control35">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="-1"><img src="https://placehold.it/150x225"
                                                                      class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                      alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="-1">Camino
                                                        Winds</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide" data-slick-index="6" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide36"
                                    aria-describedby="slick-slide-control36">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="-1"><img src="https://placehold.it/150x225"
                                                                      class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                      alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html"
                                                        tabindex="-1">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="-1">Scot Under
                                                        the Covers: The Wild Wicked</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide" data-slick-index="7" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide37"
                                    aria-describedby="slick-slide-control37">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="-1"><img src="https://placehold.it/150x225"
                                                                      class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                      alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="-1">Call Me By
                                                        Your Name</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>


                        <div
                            class="js-next d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y fas flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10 slick-arrow"
                            style="" aria-disabled="false"></div>
                        <ul class="js-pagination d-lg-none text-center u-slick__pagination mt-3 mb-0 position-absolute right-0 left-0"
                            style="display: block;" role="tablist">
                            <li class="slick-active slick-current" role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                        </ul>
                    </ul>
                </div>
                <div class="tab-pane fade" id="romance-1" role="tabpanel" aria-labelledby="romance-tab">
                    <ul class="js-slick-carousel products border-top border-left border-right list-unstyled my-0 slick-initialized slick-slider slick-dotted"
                        data-pagi-classes="d-lg-none text-center u-slick__pagination mt-3  mb-0 position-absolute right-0 left-0"
                        data-arrows-classes="d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y"
                        data-arrow-left-classes="fas flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10"
                        data-arrow-right-classes="fas flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10"
                        data-slides-show="5" data-responsive="[{
                           &quot;breakpoint&quot;: 1500,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 4
                           }
                        }, {
                           &quot;breakpoint&quot;: 1199,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 3
                           }
                        }, {
                           &quot;breakpoint&quot;: 554,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 2
                           }
                        }]">
                        <div
                            class="js-prev d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y fas flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10 slick-arrow slick-disabled"
                            aria-disabled="true" style=""></div>
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                 style="opacity: 1; width: 2240px; transform: translate3d(0px, 0px, 0px);">
                                <li class="product bg-white slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide40" aria-describedby="slick-slide-control40">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Think Like a
                                                        Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="1"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide41" aria-describedby="slick-slide-control41">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">The Overdue
                                                        Life of Amy Byler</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="2"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide42" aria-describedby="slick-slide-control42">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Man's Search
                                                        for Meaning</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="3"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide43" aria-describedby="slick-slide-control43">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Until the End
                                                        of Time: Mind, Matter</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="4"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide44" aria-describedby="slick-slide-control44">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Blindside
                                                        (Michael Bennett)</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide" data-slick-index="5" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide45"
                                    aria-describedby="slick-slide-control45">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="-1"><img src="https://placehold.it/150x225"
                                                                      class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                      alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="-1">Camino
                                                        Winds</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide" data-slick-index="6" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide46"
                                    aria-describedby="slick-slide-control46">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="-1"><img src="https://placehold.it/150x225"
                                                                      class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                      alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html"
                                                        tabindex="-1">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="-1">Scot Under
                                                        the Covers: The Wild Wicked</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide" data-slick-index="7" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide47"
                                    aria-describedby="slick-slide-control47">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="-1"><img src="https://placehold.it/150x225"
                                                                      class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                      alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="-1">Call Me By
                                                        Your Name</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>


                        <div
                            class="js-next d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y fas flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10 slick-arrow"
                            style="" aria-disabled="false"></div>
                        <ul class="js-pagination d-lg-none text-center u-slick__pagination mt-3 mb-0 position-absolute right-0 left-0"
                            style="display: block;" role="tablist">
                            <li class="slick-active slick-current" role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                        </ul>
                    </ul>
                </div>
                <div class="tab-pane fade" id="travel-1" role="tabpanel" aria-labelledby="travel-tab">
                    <ul class="js-slick-carousel products border-top border-left border-right list-unstyled my-0 slick-initialized slick-slider slick-dotted"
                        data-pagi-classes="d-lg-none text-center u-slick__pagination mt-3  mb-0 position-absolute right-0 left-0"
                        data-arrows-classes="d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y"
                        data-arrow-left-classes="fas flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10"
                        data-arrow-right-classes="fas flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10"
                        data-slides-show="5" data-responsive="[{
                           &quot;breakpoint&quot;: 1500,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 4
                           }
                        }, {
                           &quot;breakpoint&quot;: 1199,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 3
                           }
                        }, {
                           &quot;breakpoint&quot;: 554,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 2
                           }
                        }]">
                        <div
                            class="js-prev d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y fas flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10 slick-arrow slick-disabled"
                            aria-disabled="true" style=""></div>
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                 style="opacity: 1; width: 2240px; transform: translate3d(0px, 0px, 0px);">
                                <li class="product bg-white slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide50" aria-describedby="slick-slide-control50">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Think Like a
                                                        Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="1"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide51" aria-describedby="slick-slide-control51">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">The Overdue
                                                        Life of Amy Byler</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="2"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide52" aria-describedby="slick-slide-control52">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Man's Search
                                                        for Meaning</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="3"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide53" aria-describedby="slick-slide-control53">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Until the End
                                                        of Time: Mind, Matter</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide slick-active" data-slick-index="4"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0" role="tabpanel"
                                    id="slick-slide54" aria-describedby="slick-slide-control54">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="0"><img src="https://placehold.it/150x225"
                                                                     class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                     alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="0">Blindside
                                                        (Michael Bennett)</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide" data-slick-index="5" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide55"
                                    aria-describedby="slick-slide-control55">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="-1"><img src="https://placehold.it/150x225"
                                                                      class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                      alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="-1">Camino
                                                        Winds</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide" data-slick-index="6" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide56"
                                    aria-describedby="slick-slide-control56">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="-1"><img src="https://placehold.it/150x225"
                                                                      class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                      alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html"
                                                        tabindex="-1">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="-1">Scot Under
                                                        the Covers: The Wild Wicked</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product bg-white slick-slide" data-slick-index="7" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide57"
                                    aria-describedby="slick-slide-control57">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v6.html" class="d-block"
                                                   tabindex="-1"><img src="https://placehold.it/150x225"
                                                                      class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                      alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v6.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v6.html" tabindex="-1">Call Me By
                                                        Your Name</a></h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                                <div
                                                    class="d-none product__rating d-md-flex align-items-center font-size-2">
                                                    <div class="text-yellow-darker mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                    <div class="">(3,714)</div>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v6.html"
                                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                   tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v6.html"
                                                   class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>


                        <div
                            class="js-next d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y fas flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10 slick-arrow"
                            style="" aria-disabled="false"></div>
                        <ul class="js-pagination d-lg-none text-center u-slick__pagination mt-3 mb-0 position-absolute right-0 left-0"
                            style="display: block;" role="tablist">
                            <li class="slick-active slick-current" role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                        </ul>
                    </ul>
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

    <!---===== END MAIN CONTENT ===== -->

@endsection
