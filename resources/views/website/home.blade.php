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
                <h2 class="font-size-7 mb-3 mb-md-0">صدر حديثاً</h2>
                <a href="{{route('website.products.index')}}" class="h-primary d-block">مشاهدة الكل <i
                        class="glyph-icon flaticon-next"></i></a>
            </header>
            <div class="js-slick-carousel products no-gutters border-top border-left border-right"
                 data-pagi-classes="d-xl-none text-center position-absolute right-0 left-0 u-slick__pagination mt-4 mb-0"
                 data-arrows-classes="d-none d-xl-block u-slick__arrow u-slick__arrow-centered--y"
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
                @foreach($products as $product)
                    <div class="product">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div
                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    @foreach($product->media as $image)
                                        @if($image->is_featured =='true')
                                            <a href="{{route('website.product.details',$product->id)}}" class="d-block"><img
                                                    src="{{$image->image_url}}"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="{{$image->image_name}}"></a>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                            href="#">{{$product->category->name}}</a></div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="{{route('website.product.details',$product->id)}}">{{$product->name}}</a></h2>
                                    <div class="font-size-2  mb-1 text-truncate">
                                        @foreach($product->author as $author)
                                        <a href="#" class="text-gray-700">{{$author->first_name}} {{$author->middle_name}} {{$author->last_name}}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

    <section class="space-bottom-3 banner-with-product">
        <div class="container">
            <header class="mb-5 d-md-flex justify-content-between align-items-center">
                <h2 class="font-size-7 mb-3 mb-md-0">الفئات المميزة</h2>
            </header>
            @foreach($categories as $category)
                <div class="tab-content u-slick__tab mb-5">
                    <div class="tab-pane fade show active" id="history-1" role="tabpanel" aria-labelledby="history-tab">
                        <div class="row no-gutters">
                            <div class="col-xl-4 border-right-0 border bg-gray-200 px-1">
                                <div
                                    class="banner px-lg-8 px-3 py-4 py-xl-0 d-flex h-100 align-items-center justify-content-center">
                                    <div class="banner__body">
                                        <div class="banner__image pb-1 mb-5">
                                            <img class="img-fluid" src="{{$category->image_url}}"
                                                 alt="image-description">
                                        </div>
                                        <h3 class="banner_text m-0">
                                            <span
                                                class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">{{$category->name}}</span>
                                        </h3>
                                        <a href="../shop/v1.html" class="btn btn-primary btn-wide rounded-0 mb-2">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
                                    @foreach($category->products as $product)
                                        <li class="product col">
                                            <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                                <div
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                    <div class="woocommerce-loop-product__thumbnail">
                                                        <a href="../shop/single-product-v1.html" class="d-block"><img
                                                                src="{{$product->featuredMedia->first()->image_url}}"
                                                                class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                alt="image-description"></a>
                                                    </div>
                                                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                                href="../shop/single-product-v1.html">{{$product->name}}</a></div>
                                                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="../shop/single-product-v1.html">{{$product->descrpiton}}y</a></h2>
                                                        <div class="font-size-2  mb-1 text-truncate"><a
                                                                href="../others/authors-single.html" class="text-gray-700">Jay
                                                                Shetty</a></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </section>
    <section class="home-latest-news space-bottom-3">
    <div class="container">
        <div class="mb-5 mb-lg-7">
            <div class="d-md-flex align-items-center justify-content-between px-xl-10">
                <div class="text-center mb-3 mb-md-0">
                    <div class="font-size-12 font-weight-medium ml-lg-2">{{$numberOfProducts}}</div>
                    <span class="font-size-4">Number of Products</span>
                </div>
                <div class="text-center mb-3 mb-md-0">
                    <div class="font-size-12 font-weight-medium ml-2">{{$numberOfCategories}}</div>
                    <span class="font-size-4">Number of Categories</span>
                </div>
                <div class="text-center mb-3 mb-md-0">
                    <div class="font-size-12 font-weight-medium ">{{$numbOfAuthors}}</div>
                    <span class="font-size-4">Number of Authors</span>
                </div>
                <div class="text-center mb-0">
                    <div class="font-size-12 font-weight-medium ml-2">283</div>
                    <span class="font-size-4">Cup Of Coffe</span>
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
