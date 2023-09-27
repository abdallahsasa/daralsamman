@extends('website.layouts.app')
@section('content')
    <main id="content">
        <div class="space-bottom-2 space-bottom-lg-3">
            <div class="pb-lg-1">
                <div class="page-header border-bottom">
                    <div class="container">
                        <div class="d-md-flex justify-content-between align-items-center py-4 rtl-container">
                            <nav class="woocommerce-breadcrumb font-size-2">
                                <a href="https://daralsamman.com" class="h-primary">الصفحة الرئيسية</a>
                                <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-left"></i></span>المحققون
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="container ">
                    <div class="u-cubeportfolio mb-5 mb-lg-7 ">
                        <!-- Filter -->
                        <ul id="filterControls" class="rtl-container d-flex justify-content-between list-inline cbp-l-filters-alignRight cbp-l-filters-alignRight__custom text-left pl-lg-8 pt-4 pt-lg-8 mb-5 mb-lg-8 overflow-auto">
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 cbp-filter-item-active u-cubeportfolio__item" data-filter="*">الكل</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".branding">أ</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".abstract">ب</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".graphic">ت</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".illustration">ث</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".branding">ج</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".abstract">ح</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".graphic">خ</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".illustration">د</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".branding">ذ</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".abstract">ر</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".graphic">ز</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".illustration">س</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".branding">ش</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".abstract">ص</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".graphic">ض</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".illustration">ط</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".branding">ظ</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".abstract">ع</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".graphic">غ</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".illustration">ف</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".branding">ق</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".abstract">ك</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".graphic">ل</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".illustration">م</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".branding">ن</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".abstract">ه</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".abstract">و</li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item" data-filter=".abstract">ي</li>


                        </ul>
                        <!-- End Filter -->

                        <!-- Content -->
                        <div class="cbp"
                             data-layout="grid"
                             data-controls="#filterControls"
                             data-animation="quicksand"
                             data-x-gap="20"
                             data-y-gap="100"
                             data-media-queries='[
                            {"width": 1100, "cols": 5},
                            {"width": 800, "cols": 3},
                            {"width": 480, "cols": 1}
                          ]'>

                            <!-- Item -->
                            @foreach($auditors as $auditor)
                                <div class="cbp-item graphic">
                                    <a class="cbp-caption" href="{{route('website.products.auditor.index',$auditor->id)}}">
                                        <img class="rounded-circle img-fluid mb-3" src="https://placehold.it/140x140" alt="{{$auditor->image_name}}">
                                        <div class="py-3 text-center">
                                            <h4 class="h6 text-dark">{{$auditor->first_name}} {{$auditor->middle_name}} {{$auditor->last_name}}</h4>
                                            <span class="font-size-2 text-secondary-gray-700">21,658 Published Books</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            <!-- End Item -->
                        </div>
                        <!-- End Content -->
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection


@section('scripts')


@endsection
