@extends('website.layouts.app')
@section('content')

    <div class="page-header border-bottom">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-4">
                <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Shop Single</h1>
                <nav class="woocommerce-breadcrumb font-size-2">
                    <a href="../home/index.html" class="h-primary">Home</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
                    <a href="../shop/v1.html" class="h-primary">Shop</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>Shop Single
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
                                            <div class="js-slide slick-slide slick-current slick-active"
                                                 data-slick-index="0" aria-hidden="false"
                                                 style="width: 566px; height: auto;" tabindex="0" role="tabpanel"
                                                 id="slick-slide00" aria-describedby="slick-slide-control00">
                                                <img src="https://placehold.it/300x452" alt="Image Description"
                                                     class="mx-auto img-fluid">
                                            </div>
                                            <div class="js-slide slick-slide" data-slick-index="1" aria-hidden="true"
                                                 style="width: 566px; height: auto;" tabindex="-1" role="tabpanel"
                                                 id="slick-slide01" aria-describedby="slick-slide-control01">
                                                <img src="https://placehold.it/300x452" alt="Image Description"
                                                     class="mx-auto img-fluid">
                                            </div>
                                            <div class="js-slide slick-slide" data-slick-index="2" aria-hidden="true"
                                                 style="width: 566px; height: auto;" tabindex="-1" role="tabpanel"
                                                 id="slick-slide02" aria-describedby="slick-slide-control02">
                                                <img src="https://placehold.it/300x452" alt="Image Description"
                                                     class="mx-auto img-fluid">
                                            </div>
                                        </div>
                                    </div>


                                    <ul class="js-pagination text-center u-slick__pagination my-4" style=""
                                        role="tablist">
                                        <li class="slick-active slick-current" role="presentation"><span></span></li>
                                        <li role="presentation"><span></span></li>
                                        <li role="presentation"><span></span></li>
                                    </ul>
                                </div>
                            </figure>
                        </div>
                        <div class="col-md-7 pl-0 summary entry-summary border-left">
                            <div class="space-top-2 px-4 px-xl-7 border-bottom pb-5">
                                <h1 class="product_title entry-title font-size-7 mb-3">{{$product->name}}</h1>
                                <div class="font-size-2 mb-4">

                                    <span class="ml-3 font-weight-medium">By (author)</span>
                                    <span class="ml-2 text-gray-600">Anna Banks</span>
                                </div>
                                <div class="mb-2 font-size-2">
                                    <span class="font-weight-medium">Book Format:</span>
                                    <span class="ml-2 text-gray-600">Choose an option</span>
                                </div>
                                <!-- Radio Checkbox Group -->
                                <div class="row mx-gutters-2 mb-4">
                                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                                        <div class="">
                                            <input type="radio" id="typeOfListingRadio1" name="typeOfListingRadio1"
                                                   class="custom-control-input checkbox-outline__input">
                                            <label class="border-bottom d-block checkbox-outline__label py-3 px-1 mb-0"
                                                   for="typeOfListingRadio1">
                                                <span class="d-block">Hardcover</span>
                                                <span class="">$9.59</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                                        <div class="">
                                            <input type="radio" id="typeOfListingRadio2" name="typeOfListingRadio1"
                                                   class="custom-control-input checkbox-outline__input" checked="">
                                            <label class="border-bottom d-block checkbox-outline__label py-3 px-1 mb-0"
                                                   for="typeOfListingRadio2">
                                                <span class="d-block">Paperback</span>
                                                <span class="">$9.59</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="">
                                            <input type="radio" id="typeOfListingRadio3" name="typeOfListingRadio1"
                                                   class="custom-control-input checkbox-outline__input">
                                            <label class="border-bottom d-block checkbox-outline__label py-3 px-1 mb-0"
                                                   for="typeOfListingRadio3">
                                                <span class="d-block">Kindle</span>
                                                <span class="">$9.59</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Radio Checkbox Group -->

                                <div class="woocommerce-product-details__short-description font-size-2 mb-5">
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Excepteur sint occaecat.</p>
                                </div>

                                <form class="cart d-md-flex align-items-center" method="post"
                                      enctype="multipart/form-data">
                                    <div class="quantity mb-4 mb-md-0 d-flex align-items-center">
                                        <!-- Quantity -->
                                        <div class="border px-3 width-120">
                                            <div class="js-quantity">
                                                <div class="d-flex align-items-center">
                                                    <label class="screen-reader-text sr-only">Quantity</label>
                                                    <a class="js-minus text-dark" href="javascript:;">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="10px"
                                                             height="1px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                  d="M-0.000,-0.000 L10.000,-0.000 L10.000,1.000 L-0.000,1.000 L-0.000,-0.000 Z"></path>
                                                        </svg>
                                                    </a>
                                                    <input type="number"
                                                           class="input-text qty text js-result form-control text-center border-0"
                                                           step="1" min="1" max="100" name="quantity" value="1"
                                                           title="Qty">
                                                    <a class="js-plus text-dark" href="javascript:;">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="10px"
                                                             height="10px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                  d="M10.000,5.000 L6.000,5.000 L6.000,10.000 L5.000,10.000 L5.000,5.000 L-0.000,5.000 L-0.000,4.000 L5.000,4.000 L5.000,-0.000 L6.000,-0.000 L6.000,4.000 L10.000,4.000 L10.000,5.000 Z"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Quantity -->
                                    </div>

                                    <button type="submit" name="add-to-cart" value="7145"
                                            class="btn btn-dark border-0 rounded-0 p-3 min-width-250 ml-md-4 single_add_to_cart_button button alt">
                                        Add to cart
                                    </button>

                                </form>
                            </div>
                            <div class="px-4 px-xl-7 py-5 d-flex align-items-center">
                                <ul class="list-unstyled nav">
                                    <li class="mr-6 mb-4 mb-md-0">
                                        <a href="#" class="h-primary"><i class="flaticon-heart mr-2"></i> Add to
                                            Wishlist</a>
                                    </li>
                                    <li class="mr-6">
                                        <a href="#" class="h-primary"><i class="flaticon-share mr-2"></i> Share</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="woocommerce-tabs wc-tabs-wrapper mb-10">
                    <!-- Nav Classic -->
                    <ul class="tabs wc-tabs nav border-bottom justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble"
                        id="pills-tab" role="tablist">
                        <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                            <a class="py-4 nav-link font-weight-medium active" id="pills-one-example1-tab"
                               data-toggle="pill" href="#pills-one-example1" role="tab"
                               aria-controls="pills-one-example1" aria-selected="true">
                                Description
                            </a>
                        </li>
                        <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                            <a class="py-4 nav-link font-weight-medium" id="pills-two-example1-tab" data-toggle="pill"
                               href="#pills-two-example1" role="tab" aria-controls="pills-two-example1"
                               aria-selected="false">
                                Product Details
                            </a>
                        </li>
                        <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                            <a class="py-4 nav-link font-weight-medium" id="pills-three-example1-tab" data-toggle="pill"
                               href="#pills-three-example1" role="tab" aria-controls="pills-three-example1"
                               aria-selected="false">
                                Videos
                            </a>
                        </li>
                    </ul>
                    <!-- End Nav Classic -->

                    <!-- Tab Content -->
                    <div class="tab-content container" id="pills-tabContent">
                        <div
                            class="woocommerce-Tabs-panel panel col-xl-8 offset-xl-2 entry-content wc-tab tab-pane fade pt-9 active show"
                            id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                            <!-- Mockup Block -->
                            <p class="mb-0">We aim to show you accurate product information. Manufacturers, suppliers
                                and others provide what you see here, and we have not verified it. See our
                                disclaimer</p>
                            <p class="mb-0">#1 New York Times Bestseller</p>
                            <p class="mb-0">A Reese Witherspoon x Hello Sunshine Book Club Pick</p>
                            <p class="mb-4">"I can't even express how much I love this book! I didn't want this story to
                                end!"--Reese Witherspoon</p>
                            <p class="mb-4">"Painfully beautiful."--The New York Times Book Review</p>
                            <p>"Perfect for fans of Barbara Kingsolver."--Bustle</p>
                            <p class="mb-4">For years, rumors of the "Marsh Girl" have haunted Barkley Cove, a quiet
                                town on the North Carolina coast. So in late 1969, when handsome Chase Andrews is found
                                dead, the locals immediately suspect Kya Clark, the so-called Marsh Girl. But Kya is not
                                what they say. Sensitive and intelligent, she has survived for years alone in the marsh
                                that she calls home, finding friends in the gulls and lessons in the sand. Then the time
                                comes when she yearns to be touched and loved. When two young men from town become
                                intrigued by her wild beauty, Kya opens herself to a new life--until the unthinkable
                                happens.</p>
                            <p class="mb-4">Perfect for fans of Barbara Kingsolver and Karen Russell, Where the Crawdads
                                Sing is at once an exquisite ode to the natural world, a heartbreaking coming-of-age
                                story, and a surprising tale of possible murder. Owens reminds us that we are forever
                                shaped by the children we once were, and that we are all subject to the beautiful and
                                violent secrets that nature keeps</p>
                            <p>WHERE THE CRAWDADS LP</p>
                            <!-- End Mockup Block -->
                        </div>
                        <div
                            class="woocommerce-Tabs-panel panel col-xl-8 offset-xl-2 entry-content wc-tab tab-pane fade pt-9"
                            id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">
                            <!-- Mockup Block -->
                            <div class="table-responsive mb-4">
                                <table class="table table-hover table-borderless">
                                    <tbody>
                                    <tr>
                                        <th class="px-4 px-xl-5">Format:</th>
                                        <td class="">Paperback | 384 pages</td>
                                    </tr>
                                    <tr>
                                        <th class="px-4 px-xl-5">Dimensions</th>
                                        <td>9126 x 194 x 28mm | 301g</td>
                                    </tr>
                                    <tr>
                                        <th class="px-4 px-xl-5">Publication date:</th>
                                        <td>20 Dec 2020</td>
                                    </tr>
                                    <tr>
                                        <th class="px-4 px-xl-5">Publisher:</th>
                                        <td>Little, Brown Book Group</td>
                                    </tr>
                                    <tr>
                                        <th class="px-4 px-xl-5">Imprint:</th>
                                        <td>Corsair</td>
                                    </tr>
                                    <tr>
                                        <th class="px-4 px-xl-5">Publication City/Country:</th>
                                        <td>London, United Kingdom</td>
                                    </tr>
                                    <tr>
                                        <th class="px-4 px-xl-5">Language:</th>
                                        <td>English</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Mockup Block -->
                        </div>
                        <div
                            class="woocommerce-Tabs-panel panel col-xl-8 offset-xl-2 entry-content wc-tab tab-pane fade pt-9"
                            id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab">
                            <!-- Mockup Block -->
                            <div class="d-flex mb-8 justify-content-center">
                                <a href="javascript:;"
                                   class="product__video js-fancybox d-block p-4 border position-relative max-width-234"
                                   data-src="//www.youtube.com/watch?v=u-0Z0iVBxUY?autoplay=0" data-speed="700">
                                    <span class="position-absolute-center text-dark font-size-10"><i
                                            class="flaticon-multimedia"></i></span>
                                    <div class="hover-area">
                                        <img src="https://placehold.it/120x180" class="img-fluid d-block mx-auto mb-3"
                                             alt="image-description">
                                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-dark">
                                            Where The Crawdads Sing Overview</h2>
                                        <div class="font-size-2 text-gray-700">Solomon</div>
                                    </div>
                                    <span
                                        class="text-white bg-dark px-3 py-1 position-absolute bottom-0 right-0">1:45</span>
                                </a>
                                <a href="javascript:;"
                                   class="product__video js-fancybox d-block p-4 border position-relative max-width-234"
                                   data-src="www.youtube.com/watch?v=F7yO1tYCYxQ?autoplay=0" data-speed="700">
                                    <span class="position-absolute-center text-dark font-size-10"><i
                                            class="flaticon-multimedia"></i></span>
                                    <div class="hover-area">
                                        <img src="https://placehold.it/120x180" class="img-fluid d-block mx-auto mb-3"
                                             alt="image-description">
                                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-dark">
                                            Where The Crawdads Sing Overview</h2>
                                        <div class="font-size-2 text-gray-700">Solomon</div>
                                    </div>
                                    <span
                                        class="text-white bg-dark px-3 py-1 position-absolute bottom-0 right-0">2:21</span>
                                </a>
                            </div>
                            <!-- End Mockup Block -->
                        </div>

                    </div>
                    <!-- End Tab Content -->
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

                                <div class="js-next u-slick__arrow u-slick__arrow-centered--y fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10 slick-arrow"
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

