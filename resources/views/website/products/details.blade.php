@extends('website.layouts.app')
@section('style')
    <meta name="description" content="{{$product->meta_description}}">
    <meta name="keywords" content="{{ implode(', ', $product->tags->pluck('tag')->toArray()) }}">
@endsection
@section('content')

    <div class="page-header border-bottom">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-4">
                <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg"></h1>
                <nav class="woocommerce-breadcrumb font-size-2">
                    <a href="../home/index.html" class="h-primary">كافة الكتب</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-left"></i></span>
                    <a href="../shop/v1.html" class="h-primary">{{$product->category->name}}</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-left"></i></span>{{$product->name}}
                </nav>
            </div>
        </div>
    </div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main ">
            <div class="product">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-5 woocommerce-product-gallery woocommerce-product-gallery--with-images images">
                            <figure class="woocommerce-product-gallery__wrapper pt-8 mb-0">
                                <div class="js-slick-carousel u-slick slick-initialized slick-slider slick-dotted"
                                     data-pagi-classes="text-center u-slick__pagination my-4">
                                    <div class="slick-list draggable">
                                        <div class="slick-track"
                                             style="opacity: 1; width: 1698px; transform: translate3d(0px, 0px, 0px);">
                                            @if($product->media)
                                                @foreach($product->media as $image)
                                                    @if($image->is_featured=='true')
                                                        <div class="js-slide slick-slide slick-current slick-active"
                                                             data-slick-index="0" aria-hidden="false"
                                                             style="width: auto; height: auto;" tabindex="0"
                                                             role="tabpanel"
                                                             id="slick-slide00"
                                                             aria-describedby="slick-slide-control00">
                                                            <img src="{{$image->image_url}}"
                                                                 alt="{{$image->image_name}}"
                                                                 class="mx-auto img-fluid">
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>


                        <div class="col-md-7 pl-0 summary entry-summary border-left">
                            <div class="space-top-1 px-4 px-xl-7 border-bottom pb-5">
                                <h1 class="product_title entry-title font-size-7 mb-3">{{$product->name}}</h1>

                                @if($product->author)
                                    <div class="font-size-3 mb-4">
                                        <span class="ml-3 font-weight-medium"> @if(count($product->author)>1 )
                                                الكتاب:
                                            @else
                                                الكاتب:
                                            @endif</span>
                                        @foreach($product->author as $author)
                                            <span class="ml-2 text-gray-600"> {{$author->first_name}} {{$author->middle_name}} {{$author->last_name}}</span>
                                        @endforeach
                                    </div>
                                @endif

                                @if($product->auditor)
                                    <div class="mb-4 font-size-3">
                                        <span class=" ml-3 font-weight-medium">@if(count($product->auditor)>1 )
                                                المحققون:
                                            @else
                                                المحقق:
                                            @endif</span>
                                        @foreach($product->auditor as $auditor)
                                            <span class="ml-2 text-gray-600">{{$auditor->first_name}} {{$auditor->middle_name}} {{$auditor->last_name}}</span>
                                        @endforeach
                                    </div>
                                @endif

                                @if($product->sku)
                                    <div class="mb-4 font-size-3">
                                        <span class="ml-3 font-weight-medium">SKU: </span>
                                        <span class="ml-2 text-gray-600">{{$product->sku}} </span>
                                    </div>
                                @endif

                                @if($product->short_description)
                                    <div class="woocommerce-product-details__short-description font-size-2 mb-5">
                                        <p class="">{{$product->short_description}}</p>
                                    </div>
                                @endif

                            </div>
                            <!-- Mockup Block -->
                            <div class="table-responsive mb-4">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach($product->attributes as $attribute)
                                        <tr>
                                            <th class="px-4 px-xl-5 ">{{$attribute->name}}:</th>
                                            <td>{{$attribute->value}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Mockup Block -->
                        </div>
                    </div>
                </div>

                <div class="woocommerce-tabs wc-tabs-wrapper mb-10">

                    @if (!empty($product->description))
                        <!-- Nav Classic -->
                        <ul class="tabs wc-tabs nav border-bottom justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble"
                            id="pills-tab" role="tablist">
                            <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                                <a class="py-4 nav-link font-weight-medium active" id="pills-one-example1-tab"
                                   data-toggle="pill" href="#pills-one-example1" role="tab"
                                   aria-controls="pills-one-example1" aria-selected="true">
                                    شرح عن الكتاب
                                </a>
                            </li>

                        </ul>
                        <!-- End Nav Classic -->

                        <!-- Tab Content -->
                        <div class="tab-content container" id="pills-tabContent">
                            <div
                                class="woocommerce-Tabs-panel panel col-xl-8 offset-xl-2 entry-content wc-tab tab-pane fade pt-9 active show"
                                id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                                {!! $product->description !!}
                            </div>


                        </div>
                        <!-- End Tab Content -->
                    @endif

                    <section class="space-bottom-3">
                        <div class="container">
                            <header class="mb-5 d-md-flex justify-content-between align-items-center">
                                <h2 class="font-size-7 mb-3 mb-md-0">Customers Also Considered</h2>
                            </header>

                            <div
                                class="js-slick-carousel products no-gutters border-top border-left border-right slick-initialized slick-slider"
                                data-arrows-classes="u-slick__arrow u-slick__arrow-centered--y"
                                data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10"
                                data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10"
                                data-slides-show="5" data-responsive="[{
                               &quot;breakpoint&quot;: 1500,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 4
                               }
                            },{
                               &quot;breakpoint&quot;: 1199,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 3
                               }
                            }, {
                               &quot;breakpoint&quot;: 992,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 2
                               }
                            }, {
                               &quot;breakpoint&quot;: 554,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 2
                               }
                            }]">
                                <div
                                    class="js-prev u-slick__arrow u-slick__arrow-centered--y fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10 slick-arrow slick-disabled"
                                    aria-disabled="true" style=""></div>
                                <div class="slick-list draggable">
                                    <div class="slick-track"
                                         style="opacity: 1; width: 2240px; transform: translate3d(0px, 0px, 0px);">
                                        <div class="product slick-slide slick-current slick-active" data-slick-index="0"
                                             aria-hidden="false" style="width: 280px; height: auto;" tabindex="0">
                                            <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                                <div
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                    <div class="woocommerce-loop-product__thumbnail">
                                                        <a href="../shop/single-product-v3.html" class="d-block"
                                                           tabindex="0"><img src="https://placehold.it/120x180"
                                                                             class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                             alt="image-description"></a>
                                                    </div>
                                                    <div
                                                        class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                                href="../shop/single-product-v3.html" tabindex="0">Paperback</a>
                                                        </div>
                                                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="../shop/single-product-v3.html" tabindex="0">Think
                                                                Like a Monk: Train Your Mind for Peace and Purpose
                                                                Everyday</a></h2>
                                                        <div class="font-size-2  mb-1 text-truncate"><a
                                                                href="../others/authors-single.html"
                                                                class="text-gray-700" tabindex="0">Jay Shetty</a></div>
                                                        <div
                                                            class="price d-flex align-items-center font-weight-medium font-size-3">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover d-flex align-items-center">
                                                        <a href="../shop/single-product-v3.html"
                                                           class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                           tabindex="0">
                                                            <span class="product__add-to-cart">ADD TO CART</span>
                                                            <span class="product__add-to-cart-icon font-size-4"><i
                                                                    class="flaticon-icon-126515"></i></span>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="mr-1 h-p-bg btn btn-outline-primary border-0"
                                                           tabindex="0">
                                                            <i class="flaticon-switch"></i>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                            <i class="flaticon-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product slick-slide slick-active" data-slick-index="1"
                                             aria-hidden="false" style="width: 280px; height: auto;" tabindex="0">
                                            <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                                <div
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                    <div class="woocommerce-loop-product__thumbnail">
                                                        <a href="../shop/single-product-v3.html" class="d-block"
                                                           tabindex="0"><img src="https://placehold.it/120x180"
                                                                             class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                             alt="image-description"></a>
                                                    </div>
                                                    <div
                                                        class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                                href="../shop/single-product-v3.html" tabindex="0">Kindle
                                                                Edition</a></div>
                                                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="../shop/single-product-v3.html" tabindex="0">The
                                                                Overdue Life of Amy Byler</a></h2>
                                                        <div class="font-size-2  mb-1 text-truncate"><a
                                                                href="../others/authors-single.html"
                                                                class="text-gray-700" tabindex="0">Kelly Harms</a></div>
                                                        <div
                                                            class="price d-flex align-items-center font-weight-medium font-size-3">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover d-flex align-items-center">
                                                        <a href="../shop/single-product-v3.html"
                                                           class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                           tabindex="0">
                                                            <span class="product__add-to-cart">ADD TO CART</span>
                                                            <span class="product__add-to-cart-icon font-size-4"><i
                                                                    class="flaticon-icon-126515"></i></span>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="mr-1 h-p-bg btn btn-outline-primary border-0"
                                                           tabindex="0">
                                                            <i class="flaticon-switch"></i>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                            <i class="flaticon-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product slick-slide slick-active" data-slick-index="2"
                                             aria-hidden="false" style="width: 280px; height: auto;" tabindex="0">
                                            <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                                <div
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                    <div class="woocommerce-loop-product__thumbnail">
                                                        <a href="../shop/single-product-v3.html" class="d-block"
                                                           tabindex="0"><img src="https://placehold.it/120x180"
                                                                             class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                             alt="image-description"></a>
                                                    </div>
                                                    <div
                                                        class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                                href="../shop/single-product-v3.html" tabindex="0">Paperback</a>
                                                        </div>
                                                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="../shop/single-product-v3.html" tabindex="0">All
                                                                You Can Ever Know: A Memoir</a></h2>
                                                        <div class="font-size-2  mb-1 text-truncate"><a
                                                                href="../others/authors-single.html"
                                                                class="text-gray-700" tabindex="0">Jay Shetty</a></div>
                                                        <div
                                                            class="price d-flex align-items-center font-weight-medium font-size-3">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover d-flex align-items-center">
                                                        <a href="../shop/single-product-v3.html"
                                                           class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                           tabindex="0">
                                                            <span class="product__add-to-cart">ADD TO CART</span>
                                                            <span class="product__add-to-cart-icon font-size-4"><i
                                                                    class="flaticon-icon-126515"></i></span>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="mr-1 h-p-bg btn btn-outline-primary border-0"
                                                           tabindex="0">
                                                            <i class="flaticon-switch"></i>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                            <i class="flaticon-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product slick-slide slick-active" data-slick-index="3"
                                             aria-hidden="false" style="width: 280px; height: auto;" tabindex="0">
                                            <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                                <div
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                    <div class="woocommerce-loop-product__thumbnail">
                                                        <a href="../shop/single-product-v3.html" class="d-block"
                                                           tabindex="0"><img src="https://placehold.it/120x180"
                                                                             class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                             alt="image-description"></a>
                                                    </div>
                                                    <div
                                                        class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                                href="../shop/single-product-v3.html" tabindex="0">Kindle
                                                                Edition</a></div>
                                                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="../shop/single-product-v3.html" tabindex="0">The
                                                                Last Sister (Columbia River Book 1)</a></h2>
                                                        <div class="font-size-2  mb-1 text-truncate"><a
                                                                href="../others/authors-single.html"
                                                                class="text-gray-700" tabindex="0">Kelly Harms</a></div>
                                                        <div
                                                            class="price d-flex align-items-center font-weight-medium font-size-3">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover d-flex align-items-center">
                                                        <a href="../shop/single-product-v3.html"
                                                           class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                           tabindex="0">
                                                            <span class="product__add-to-cart">ADD TO CART</span>
                                                            <span class="product__add-to-cart-icon font-size-4"><i
                                                                    class="flaticon-icon-126515"></i></span>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="mr-1 h-p-bg btn btn-outline-primary border-0"
                                                           tabindex="0">
                                                            <i class="flaticon-switch"></i>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                            <i class="flaticon-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product slick-slide slick-active" data-slick-index="4"
                                             aria-hidden="false" style="width: 280px; height: auto;" tabindex="0">
                                            <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                                <div
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                    <div class="woocommerce-loop-product__thumbnail">
                                                        <a href="../shop/single-product-v3.html" class="d-block"
                                                           tabindex="0"><img src="https://placehold.it/120x180"
                                                                             class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                             alt="image-description"></a>
                                                    </div>
                                                    <div
                                                        class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                                href="../shop/single-product-v3.html" tabindex="0">Paperback</a>
                                                        </div>
                                                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="../shop/single-product-v3.html" tabindex="0">Think
                                                                Like a Monk: Train Your Mind for Peace and Purpose
                                                                Everyday</a></h2>
                                                        <div class="font-size-2  mb-1 text-truncate"><a
                                                                href="../others/authors-single.html"
                                                                class="text-gray-700" tabindex="0">Jay Shetty</a></div>
                                                        <div
                                                            class="price d-flex align-items-center font-weight-medium font-size-3">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover d-flex align-items-center">
                                                        <a href="../shop/single-product-v3.html"
                                                           class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                           tabindex="0">
                                                            <span class="product__add-to-cart">ADD TO CART</span>
                                                            <span class="product__add-to-cart-icon font-size-4"><i
                                                                    class="flaticon-icon-126515"></i></span>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="mr-1 h-p-bg btn btn-outline-primary border-0"
                                                           tabindex="0">
                                                            <i class="flaticon-switch"></i>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                            <i class="flaticon-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product slick-slide" data-slick-index="5" aria-hidden="true"
                                             style="width: 280px; height: auto;" tabindex="-1">
                                            <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                                <div
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                    <div class="woocommerce-loop-product__thumbnail">
                                                        <a href="../shop/single-product-v3.html" class="d-block"
                                                           tabindex="-1"><img src="https://placehold.it/120x180"
                                                                              class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                              alt="image-description"></a>
                                                    </div>
                                                    <div
                                                        class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                                href="../shop/single-product-v3.html" tabindex="-1">Kindle
                                                                Edition</a></div>
                                                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="../shop/single-product-v3.html" tabindex="-1">The
                                                                Overdue Life of Amy Byler</a></h2>
                                                        <div class="font-size-2  mb-1 text-truncate"><a
                                                                href="../others/authors-single.html"
                                                                class="text-gray-700" tabindex="-1">Kelly Harms</a>
                                                        </div>
                                                        <div
                                                            class="price d-flex align-items-center font-weight-medium font-size-3">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover d-flex align-items-center">
                                                        <a href="../shop/single-product-v3.html"
                                                           class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                           tabindex="-1">
                                                            <span class="product__add-to-cart">ADD TO CART</span>
                                                            <span class="product__add-to-cart-icon font-size-4"><i
                                                                    class="flaticon-icon-126515"></i></span>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="mr-1 h-p-bg btn btn-outline-primary border-0"
                                                           tabindex="-1">
                                                            <i class="flaticon-switch"></i>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="h-p-bg btn btn-outline-primary border-0"
                                                           tabindex="-1">
                                                            <i class="flaticon-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product slick-slide" data-slick-index="6" aria-hidden="true"
                                             style="width: 280px; height: auto;" tabindex="-1">
                                            <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                                <div
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                    <div class="woocommerce-loop-product__thumbnail">
                                                        <a href="../shop/single-product-v3.html" class="d-block"
                                                           tabindex="-1"><img src="https://placehold.it/120x180"
                                                                              class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                              alt="image-description"></a>
                                                    </div>
                                                    <div
                                                        class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                                href="../shop/single-product-v3.html" tabindex="-1">Paperback</a>
                                                        </div>
                                                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="../shop/single-product-v3.html" tabindex="-1">All
                                                                You Can Ever Know: A Memoir</a></h2>
                                                        <div class="font-size-2  mb-1 text-truncate"><a
                                                                href="../others/authors-single.html"
                                                                class="text-gray-700" tabindex="-1">Jay Shetty</a></div>
                                                        <div
                                                            class="price d-flex align-items-center font-weight-medium font-size-3">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover d-flex align-items-center">
                                                        <a href="../shop/single-product-v3.html"
                                                           class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                           tabindex="-1">
                                                            <span class="product__add-to-cart">ADD TO CART</span>
                                                            <span class="product__add-to-cart-icon font-size-4"><i
                                                                    class="flaticon-icon-126515"></i></span>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="mr-1 h-p-bg btn btn-outline-primary border-0"
                                                           tabindex="-1">
                                                            <i class="flaticon-switch"></i>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="h-p-bg btn btn-outline-primary border-0"
                                                           tabindex="-1">
                                                            <i class="flaticon-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product slick-slide" data-slick-index="7" aria-hidden="true"
                                             style="width: 280px; height: auto;" tabindex="-1">
                                            <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                                <div
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                    <div class="woocommerce-loop-product__thumbnail">
                                                        <a href="../shop/single-product-v3.html" class="d-block"
                                                           tabindex="-1"><img src="https://placehold.it/120x180"
                                                                              class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                              alt="image-description"></a>
                                                    </div>
                                                    <div
                                                        class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                                href="../shop/single-product-v3.html" tabindex="-1">Kindle
                                                                Edition</a></div>
                                                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="../shop/single-product-v3.html" tabindex="-1">The
                                                                Last Sister (Columbia River Book 1)</a></h2>
                                                        <div class="font-size-2  mb-1 text-truncate"><a
                                                                href="../others/authors-single.html"
                                                                class="text-gray-700" tabindex="-1">Kelly Harms</a>
                                                        </div>
                                                        <div
                                                            class="price d-flex align-items-center font-weight-medium font-size-3">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover d-flex align-items-center">
                                                        <a href="../shop/single-product-v3.html"
                                                           class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                           tabindex="-1">
                                                            <span class="product__add-to-cart">ADD TO CART</span>
                                                            <span class="product__add-to-cart-icon font-size-4"><i
                                                                    class="flaticon-icon-126515"></i></span>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="mr-1 h-p-bg btn btn-outline-primary border-0"
                                                           tabindex="-1">
                                                            <i class="flaticon-switch"></i>
                                                        </a>
                                                        <a href="../shop/single-product-v3.html"
                                                           class="h-p-bg btn btn-outline-primary border-0"
                                                           tabindex="-1">
                                                            <i class="flaticon-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="js-next u-slick__arrow u-slick__arrow-centered--y fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10 slick-arrow"
                                    style="" aria-disabled="false">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
@endsection

@section('scripts')

@endsection

