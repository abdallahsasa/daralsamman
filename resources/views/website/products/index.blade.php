@extends('website.layouts.app')
@section('content')


    <div class="page-header border-bottom mb-8">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-4 rtl-container">
                <nav class="woocommerce-breadcrumb font-size-2">
                    <a href="{{route('website.home')}}" class="h-primary">الصفحة الرئيسية</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-left"></i></span>إصدارات الدار
                </nav>
            </div>
        </div>
    </div>
    <div class="site-content space-bottom-3" id="content">
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area order-1">
                    <div class="shop-control-bar d-lg-flex justify-content-between align-items-center mb-5 text-center text-md-left rtl-container">

                        <div class="shop-control-bar__right d-md-flex align-items-center">
                            <form class="woocommerce-ordering mb-4 m-md-0" method="get" style="display: none;">
                                <!-- Select -->
                                <select class="js-select selectpicker dropdown-select orderby" name="orderby"
                                        data-style="border-bottom shadow-none outline-none py-2">
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="default" selected="selected">Default sorting</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                                <!-- End Select -->
                            </form>


                            <ul class="nav nav-tab ml-lg-4 justify-content-center justify-content-md-start ml-md-auto" id="pills-tab" role="tablist">
                                <li class="nav-item border">
                                    <a class="nav-link p-0 height-38 width-38 justify-content-center d-flex align-items-center active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="17px">
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,0.000 L3.000,0.000 L3.000,3.000 L-0.000,3.000 L-0.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,0.000 L10.000,0.000 L10.000,3.000 L7.000,3.000 L7.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M14.000,0.000 L17.000,0.000 L17.000,3.000 L14.000,3.000 L14.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,7.000 L3.000,7.000 L3.000,10.000 L-0.000,10.000 L-0.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,7.000 L10.000,7.000 L10.000,10.000 L7.000,10.000 L7.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M14.000,7.000 L17.000,7.000 L17.000,10.000 L14.000,10.000 L14.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,14.000 L3.000,14.000 L3.000,17.000 L-0.000,17.000 L-0.000,14.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,14.000 L10.000,14.000 L10.000,17.000 L7.000,17.000 L7.000,14.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M14.000,14.000 L17.000,14.000 L17.000,17.000 L14.000,17.000 L14.000,14.000 Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item border">
                                    <a class="nav-link p-0 height-38 width-38 justify-content-center d-flex align-items-center" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="17px">
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,0.000 L3.000,0.000 L3.000,3.000 L-0.000,3.000 L-0.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,0.000 L23.000,0.000 L23.000,3.000 L7.000,3.000 L7.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,7.000 L3.000,7.000 L3.000,10.000 L-0.000,10.000 L-0.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,7.000 L23.000,7.000 L23.000,10.000 L7.000,10.000 L7.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,14.000 L3.000,14.000 L3.000,17.000 L-0.000,17.000 L-0.000,14.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,14.000 L23.000,14.000 L23.000,17.000 L7.000,17.000 L7.000,14.000 Z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                            <!-- Mockup Block -->
                            <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 border-top border-left mb-6">
                                @foreach($products as $product)

                                    <li class="product product__center col">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="{{route('website.product.details',$product->id)}}" class="d-block"><img src="{{$product->featuredMedia->first()->image_url}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="{{$product->name}}"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="{{route('website.product.details',$product->id)}}">{{$product->category->name}}</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="{{route('website.product.details',$product->id)}}" class="product-name" data-full-name="{{ $product->name }}"
                                                                                                                                                                  data-limit-desktop="50"
                                                                                                                                                                  data-limit-mobile="28">{{ Str::limit($product->name, 50)}}</a></h2>


                                            </div>
                                            <div class="product__hover d-flex align-items-center">
{{--                                                <p>{{$product->short_description}}</p>--}}
                                                <div class="font-size-2 mb-1 text-truncate">
                                                    @foreach($product->author as $index => $author)
                                                        <a href="{{ route('website.product.details', $product->id) }}" class="text-gray-700">
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
                                </li>
                                @endforeach

                            </ul>
                            <!-- End Mockup Block -->
                            {{$products->links()}}

                        </div>

                        <div class="tab-pane fade" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">
                            <!-- Mockup Block -->
                            <ul class="products list-unstyled mb-6">
                                @foreach($products as $product)
                                <li class="product product__list">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                                            <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0 pills-two-image">
                                                <a href="{{route('website.product.details',$product->id)}}" class="d-block"><img src="{{$product->featuredMedia->first()->image_url}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="{{$product->name}}"></a>
{{--                                                <a href="{{route('website.product.details',$product->id)}}" class="d-block"><img src="{{$product->featuredMedia->first()->image_url}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>--}}
                                            </div>
                                            <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="{{route('website.product.details',$product->id)}}">{{$product->category->name}}</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="{{route('website.product.details',$product->id)}}">{{ Str::limit($product->name, 50)}}</a></h2>

                                                <div class="font-size-2 mb-2 text-truncate">
                                                    @foreach($product->author as $index => $author)
                                                        <a href="{{ route('website.product.details', $product->id) }}" class="text-gray-700">
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
{{--                                                <p>{{$product->short_description}}</p>--}}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                            <!-- End Mockup Block -->
                            {{$products->links()}}
                        </div>
                    </div>
                    <!-- End Tab Content -->


                </div>
                <div id="secondary" class="sidebar widget-area order-2" role="complementary">
                    <div id="widgetAccordion">
                        @if($categories)
                        <div id="woocommerce_product_categories-2" class="widget p-4d875 border woocommerce widget_product_categories">

                            <div id="BooksCategories" class="widget-head">
                                <a class="d-flex align-items-center justify-content-between text-dark" href="#"
                                   data-toggle="collapse"
                                   data-target="#widgetCollapseOne"
                                   aria-expanded="false"
                                   aria-controls="widgetCollapseOne">

                                    <h3 class="widget-title mb-0 font-weight-medium font-size-3">جميع الأصناف</h3>

                                    <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                    </svg>

                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                    </svg>
                                </a>
                            </div>


                            <div id="widgetCollapseOne" class="mt-3 widget-content collapse "
                                 aria-labelledby="BooksCategories"
                                 data-parent="#widgetAccordion">
                                <ul class="product-categories">
                                    @foreach($categories as $category)
                                    <li class="cat-item cat-item-45"><a href="{{route('website.products.category.index',$category->id)}}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif

                        @if($authors)
                        <div id="Authors" class="widget widget_search widget_author p-4d875 border">
                            <div id="widgetHeading21" class="widget-head">
                                <a class="d-flex align-items-center justify-content-between text-dark" href="#"
                                   data-toggle="collapse"
                                   data-target="#widgetCollapse21"
                                   aria-expanded="false"
                                   aria-controls="widgetCollapse21">

                                    <h3 class="widget-title mb-0 font-weight-medium font-size-3">المؤلفون</h3>

                                    <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                    </svg>

                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                    </svg>
                                </a>
                            </div>

                            <div id="widgetCollapse21" class="mt-4 widget-content collapse "
                                 aria-labelledby="widgetHeading21"
                                 data-parent="#widgetAccordion">

                                <ul class="product-categories">
                                    @foreach($authors as $author)
                                        <li class="cat-item cat-item-45"><a href="{{route('website.products.author.index',$author->id)}}">{{$author->first_name}} {{$author->middle_name}} {{$author->last_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                            @endif

                            @if($auditors)
                                <div id="Auditors" class="widget widget_search widget_author p-4d875 border">
                                    <div id="widgetHeading22" class="widget-head">
                                        <a class="d-flex align-items-center justify-content-between text-dark" href="#"
                                           data-toggle="collapse"
                                           data-target="#widgetCollapse22"
                                           aria-expanded="false"
                                           aria-controls="widgetCollapse22">

                                            <h3 class="widget-title mb-0 font-weight-medium font-size-3">المحققون</h3>

                                            <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                            </svg>

                                            <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                            </svg>
                                        </a>
                                    </div>

                                    <div id="widgetCollapse22" class="mt-4 widget-content collapse "
                                         aria-labelledby="widgetHeading22"
                                         data-parent="#widgetAccordion">

                                        <ul class="product-categories">
                                            @foreach($auditors as $auditor)
                                                <li class="cat-item cat-item-45"><a href="{{route('website.products.auditor.index',$auditor->id)}}">{{$auditor->first_name}} {{$auditor->middle_name}} {{$auditor->last_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            // Add a class to the body tag
            $('body').addClass('left-sidebar');
        });
    </script>
@endsection


