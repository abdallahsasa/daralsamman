@extends('website.layouts.app')
@section('content')

    <!--===== MAIN CONTENT ===== -->
    <section class="mb-8">
        <div class="container">
            <div class="pt-5 pb-5">

                <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('website/img/slider/1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('website/img/slider/2.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('website/img/slider/3.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('website/img/slider/4.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('website/img/slider/5.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>

                    <button class="carousel-control-prev slider-btn" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next slider-btn" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    @if($products)
        <section class="space-bottom-3">
            <div class="container">
                <header class="mb-5 d-md-flex justify-content-between align-items-center">
                    <h2 class="font-size-7 mb-3 mb-md-0 hide-mobile">صدر حديثاً</h2>
                    <a href="{{route('website.products.index')}}" class="h-primary d-block">مشاهدة جميع الإصدارات<i
                            class="glyph-icon flaticon-next"></i></a>
                </header>
                <div class="js-slick-carousel products no-gutters border-top border-left border-right"
                     data-pagi-classes="d-xl-none text-center position-absolute right-0 left-0 u-slick__pagination mt-4 mb-0"
                     data-arrows-classes="d-none d-xl-block u-slick__arrow u-slick__arrow-centered--y"
                     data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10"
                     data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10"
                     data-slides-show="4"
                     data-responsive='[{
                   "breakpoint": 1500,
                   "settings": {
                     "slidesToShow": 4
                   }
                },{
                   "breakpoint": 1199,
                   "settings": {
                     "slidesToShow": 3
                   }
                },{
                   "breakpoint": 992,
                   "settings": {
                     "slidesToShow": 2
                   }
                }, {
                   "breakpoint": 768,
                   "settings": {
                     "slidesToShow": 2
                   }
                }, {
                   "breakpoint": 554,
                   "settings": {
                     "slidesToShow": 2
                   }
                }]'>

                    @foreach($products as $product)
                        <div class="product">
                            <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                    <div class="woocommerce-loop-product__thumbnail">
                                        @if($product->featuredMedia->first())
                                            <a href="{{route('website.product.details',$product->id)}}" class="d-block"><img
                                                    src="{{$product->featuredMedia->first()->image_url}}"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="{{$product->featuredMedia->first()->image_name}}"></a>
                                        @endif
                                    </div>

                                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                        <div class="text-uppercase font-size-1 mb-1 text-truncate">
                                            <a href="{{route('website.products.category.index',$product->category->id)}}"> {{$product->category->name}}</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                            <a href="{{route('website.product.details',$product->id)}}">{{ Str::limit($product->name, 30)}}</a>
                                        </h2>
                                        <div class="font-size-2  mb-1 text-truncate">
                                            @foreach($product->author as $index => $author)
                                                <a href="{{route('website.products.author.index',$author->id)}}"
                                                   class="text-gray-700">
                                                <span class="m-lg-2 font-weight-medium">
                                                    @if($index === 0)
                                                        @if(count($product->author) > 1)
                                                            المؤلفون:
                                                        @else
                                                            المؤلف:
                                                        @endif
                                                    @endif
                                                            </span>
                                                    {{$author->first_name}} {{$author->middle_name}} {{$author->last_name}}
                                                </a>
                                                @if(!$loop->last)
                                                    ,
                                                @endif
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
    @endif


    @if($FeaturedCategories)
        @foreach($FeaturedCategories as $category)
            <section class="space-bottom-3">
                <div class="container">
                    <div class="row align-items-center @if($loop->index%2!=0) rtl-container @endif ">
                        <div class="col-md-5 col-lg-4 col-xl-3 mb-4 mb-md-0">
                            <div class="bg-img-hero min-height-440 rounded"
                                 style="background-image: url({{$category->image_url}});">
                                <div class="p-5">
                                    <a href="{{route('website.products.category.index',$category->id)}}"
                                       class="text-dark font-weight-medium text-uppercase stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-8 col-xl-9">
                            <div class="mx-lg-8 mx-wd-4">
                                <div class="js-slick-carousel products no-gutters"
                                     data-pagi-classes="d-lg-none text-center u-slick__pagination u-slick__pagination mt-5 mb-0"
                                     data-arrows-classes="d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y rounded-circle"
                                     data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n8 ml-wd-n4"
                                     data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n8 mr-wd-n4"
                                     data-slides-show="4"
                                     data-responsive='[{
                            "breakpoint": 1500,
                            "settings": {
                            "slidesToShow": 4
                            }
                            },
                            {
                            "breakpoint": 1199,
                            "settings": {
                            "slidesToShow": 3
                            }
                            },{
                            "breakpoint": 992,
                            "settings": {
                            "slidesToShow": 2
                            }
                            }, {
                            "breakpoint": 768,
                            "settings": {
                            "slidesToShow": 2
                            }
                            }, {
                            "breakpoint": 554,
                            "settings": {
                            "slidesToShow": 2
                            }
                            }]'>
                                    @foreach($category->getAllProducts() as $product)
                                        @if($product->status =='active')
                                            <div class="product product__no-border border-right">
                                                <div class="product__inner overflow-hidden px-3 px-md-4d875">
                                                    <div
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                        <div class="woocommerce-loop-product__thumbnail">
                                                            @if($product->featuredMedia->first())
                                                                <a href="{{route('website.product.details',$product->id)}} "
                                                                   class="d-block" tabindex="0">
                                                                    <img
                                                                        src="{{$product->featuredMedia->first()->image_url}}"
                                                                        class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                                        alt="image-description">
                                                                </a>
                                                            @endif
                                                        </div>
                                                        <div
                                                            class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                            <div class="text-uppercase font-size-1 mb-1 text-truncate">
                                                                <a href="{{route('website.products.category.index',$product->category->id)}}"
                                                                   tabindex="0">{{$product->category->name}}</a>
                                                            </div>
                                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark text-right">
                                                                <a href="{{route('website.product.details',$product->id)}}"
                                                                   tabindex="0" class="product-name" data-full-name="{{ $product->name }}"
                                                                   data-limit-desktop="32"
                                                                   data-limit-mobile="28">
                                                                    {{ Str::limit($product->name, 32)}}</a>
                                                            </h2>


                                                        </div>
                                                        <div class="product__hover d-flex align-items-center">
                                                            <div class="font-size-2 mb-1 text-truncate">
                                                                @foreach($product->author as $index => $author)
                                                                    <a href="{{ route('website.product.details', $product->id) }}" class="text-gray-700 text-right">
                                                                        <span class="m-lg-2 font-weight-medium rtl">
                                                                            @if($index === 0)
                                                                                @if(count($product->author) > 1)
                                                                                    المؤلفون:
                                                                                @else
                                                                                    المؤلف:
                                                                                @endif
                                                                            @endif
                                                                        </span>
                                                                        {{$author->first_name}} {{$author->middle_name}} {{$author->last_name}}
                                                                    </a>
                                                                    @if(!$loop->last)
                                                                        ,
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    @endif

    <section class="home-latest-news space-bottom-3">
        <div class="container">
            <div class="mb-5 mb-lg-7">
                <div class="d-md-flex align-items-center justify-content-between px-xl-10">
                    <div class="text-center mb-3 mb-md-0">
                        <div class="font-size-12 font-weight-medium ml-lg-2">{{$numberOfProducts}}</div>
                        <span class="font-size-4"> كتاب</span>
                    </div>
                    <div class="text-center mb-3 mb-md-0">
                        <div class="font-size-12 font-weight-medium ml-2">{{$numberOfCategories}}</div>
                        <span class="font-size-4">صنف مختلف</span>
                    </div>
                    <div class="text-center mb-3 mb-md-0">
                        <div class="font-size-12 font-weight-medium ">{{$numbOfAuthors}}</div>
                        <span class="font-size-4">كاتب</span>
                    </div>
                    <div class="text-center mb-0">
                        <div class="font-size-12 font-weight-medium ml-2">{{$numbOfSuppliers}}</div>
                        <span class="font-size-4">موزع معتمد</span>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="home-latest-news space-bottom-3" style="display: none;">
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


