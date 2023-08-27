@extends('website.layouts.app')
@section('content')
    <main id="content">
        <div class="space-bottom-2 space-bottom-lg-3">
            <div class="pb-lg-1">
                <div class="page-header border-bottom">
                    <div class="container">
                        <div class="d-md-flex justify-content-between align-items-center py-4">
                            <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Authors</h1>
                            <nav class="woocommerce-breadcrumb font-size-2">
                                <a href="../home/index.html" class="h-primary">Home</a>
                                <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
                                <span>Authors</span>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="u-cubeportfolio mb-5 mb-lg-7">
                        <!-- Filter -->
                        <ul id="filterControls"
                            class="d-flex justify-content-between list-inline cbp-l-filters-alignRight cbp-l-filters-alignRight__custom text-left pl-lg-8 pt-4 pt-lg-8 mb-5 mb-lg-8 overflow-auto">
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item cbp-filter-item-active"
                                data-filter="*">All
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".branding">A
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".abstract">B
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".graphic">C
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".illustration">D
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".branding">E
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".abstract">F
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".graphic">G
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".illustration">H
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".branding">I
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".abstract">J
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".graphic">K
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".illustration">L
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".branding">M
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".abstract">N
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".graphic">O
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".illustration">P
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".branding">Q
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".abstract">R
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".graphic">S
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".illustration">T
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".branding">U
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".abstract">V
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".graphic">W
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".illustration">X
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".branding">Y
                            </li>
                            <li class="list-inline-item bg-white text-secondary-gray-700 px-2 px-md-0 font-size-2 border-0 cbp-filter-item m-0 u-cubeportfolio__item"
                                data-filter=".abstract">Z
                            </li>
                        </ul>
                        <!-- End Filter -->

                        <!-- Content -->
                        <div class="cbp cbp-caption-active cbp-caption-overlayBottomAlong cbp-ready" data-layout="grid"
                             data-controls="#filterControls" data-animation="quicksand" data-x-gap="20" data-y-gap="100"
                             data-media-queries="[
                            {&quot;width&quot;: 1100, &quot;cols&quot;: 5},
                            {&quot;width&quot;: 800, &quot;cols&quot;: 3},
                            {&quot;width&quot;: 480, &quot;cols&quot;: 1}
                          ]" style="height: 937px;">
                            <div class="cbp-wrapper-outer">
                                <div class="cbp-wrapper">




                                    <!-- Item -->
                                    <div class="cbp-item branding" style="width: 200px; left: 600px; top: 0px;">
                                        <div class="cbp-item-wrapper">
                                            <a class="cbp-caption" href="../others/authors-single.html">
                                                <img class="rounded-circle img-fluid mb-3"
                                                     src="https://placehold.it/140x140" alt="Image Description">
                                                <div class="py-3 text-center">
                                                    <h4 class="h6 text-dark">David Williams</h4>
                                                    <span class="font-size-2 text-secondary-gray-700">21,658 Published Books</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Item -->


                                    <!-- Item -->
                                    <div class="cbp-item branding" style="width: 200px; left: 900px; top: 0px;">
                                        <div class="cbp-item-wrapper">
                                            <a class="cbp-caption" href="../others/authors-single.html">
                                                <img class="rounded-circle img-fluid mb-3"
                                                     src="https://placehold.it/140x140" alt="Image Description">
                                                <div class="py-3 text-center">
                                                    <h4 class="h6 text-dark">Joe Wicks</h4>
                                                    <span class="font-size-2 text-secondary-gray-700">21,658 Published Books</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="cbp-item branding" style="width: 200px; left: 1200px; top: 0px;">
                                        <div class="cbp-item-wrapper">
                                            <a class="cbp-caption" href="../others/authors-single.html">
                                                <img class="rounded-circle img-fluid mb-3"
                                                     src="https://placehold.it/140x140" alt="Image Description">
                                                <div class="py-3 text-center">
                                                    <h4 class="h6 text-dark">Jessica Simpson</h4>
                                                    <span class="font-size-2 text-secondary-gray-700">21,658 Published Books</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Item -->



                                    <!-- Item -->
                                    <div class="cbp-item abstract graphic"
                                         style="width: 200px; left: 300px; top: 319px;">
                                        <div class="cbp-item-wrapper">
                                            <a class="cbp-caption" href="../others/authors-single.html">
                                                <img class="rounded-circle img-fluid mb-3"
                                                     src="https://placehold.it/140x140" alt="Image Description">
                                                <div class="py-3 text-center">
                                                    <h4 class="h6 text-dark">Stephen King</h4>
                                                    <span class="font-size-2 text-secondary-gray-700">21,658 Published Books</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Item -->



                                </div>
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-wide border-dark text-dark rounded-0 transition-3d-hover">
                            Load More
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@section('scripts')


@endsection
