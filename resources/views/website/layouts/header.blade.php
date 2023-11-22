<header id="site-header" class="site-header__v9 site-header__white-text">
    <div class="masthead">
        <div class="container pt-3 pt-md-4 pb-3 pb-md-5">
            <div class="d-flex align-items-center position-relative flex-wrap justify-content-center">
                <div class="site-branding ">
                    <a href="{{route('website.home')}}" class="d-block mb-1">
                        <img src="{{asset('website/img/logo/Logo.png')}}" class="logo" alt="دار السّمان">
                    </a>
                </div>
                <div class="site-search ml-xl-0 ml-md-auto w-r-100 flex-grow-1 mr-md-5 mt-2 mt-md-0 order-1 order-md-0">
                    <form class="form-inline my-2 my-xl-0">
                        <div class="input-group input-group-borderless w-100">
                            <div class="input-group-prepend border-right mr-0 d-none d-xl-block">
                                <select class="custom-select pl-7 pr-5 rounded-left-0 height-5 shadow-none border-0 text-dark bg-gray-200" id="inputGroupSelect01">
                                    <option selected>جميع الأصناف</option>
                                    @foreach($SearchBarCategories as $SearchBarCategorie)
                                        <option value="{{$SearchBarCategorie->name}}">{{$SearchBarCategorie->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="text" class="form-control px-3 bg-gray-200 bg-focus__1"
                                   placeholder="ابحث عن اسم الكتاب"
                                   aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-3 py-2" type="submit"><i
                                        class="mx-1 glph-icon flaticon-loupe text-white"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="offcanvas-toggler mr-5 hmenu">
                    <a id="sidebarNavToggler2" href="javascript:;" role="button" class="cat-menu"
                       aria-controls="sidebarContent2"
                       aria-haspopup="true"
                       aria-expanded="false"
                       data-unfold-event="click"
                       data-unfold-hide-on-scroll="false"
                       data-unfold-target="#sidebarContent2"
                       data-unfold-type="css-animation"
                       data-unfold-overlay='{
                            "className": "u-sidebar-bg-overlay",
                            "background": "rgba(0, 0, 0, .7)",
                            "animationSpeed": 100
                        }'
                       data-unfold-animation-in="fadeInLeft"
                       data-unfold-animation-out="fadeOutLeft"
                       data-unfold-duration="100">
                        <svg width="20px" height="18px">
                            <path fill-rule="evenodd"  fill="rgb(25, 17, 11)" d="M-0.000,-0.000 L20.000,-0.000 L20.000,2.000 L-0.000,2.000 L-0.000,-0.000 Z"/>
                            <path fill-rule="evenodd"  fill="rgb(25, 17, 11)" d="M-0.000,8.000 L15.000,8.000 L15.000,10.000 L-0.000,10.000 L-0.000,8.000 Z"/>
                            <path fill-rule="evenodd"  fill="rgb(25, 17, 11)" d="M-0.000,16.000 L20.000,16.000 L20.000,18.000 L-0.000,18.000 L-0.000,16.000 Z"/>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="bg-primary rounded-md d-none d-md-block">
                <div class="d-flex align-items-center justify-content-center position-relative">
                    <div class="site-navigation mr-auto d-none d-xl-block">
                        <ul class="nav pl-xl-4">
                            <li class="nav-item"><a href="{{route('website.home')}}" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">الصفحة الرئيسية</a></li>
                            <li class="nav-item dropdown">
                                <a id="shopDropdownInvoker"
                                   href="{{route('website.products.index')}}"
                                   class="dropdown-toggle nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium d-flex align-items-center"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   data-unfold-event="hover"
                                   data-unfold-target="#shopDropdownMenu"
                                   data-unfold-type="css-animation"
                                   data-unfold-duration="200"
                                   data-unfold-delay="50"
                                   data-unfold-hide-on-scroll="true"
                                   data-unfold-animation-in="slideInUp"
                                   data-unfold-animation-out="fadeOut">
                                    إصدارات الدار
                                </a>

                                <ul id="shopDropdownMenu" class="dropdown-unfold dropdown-menu font-size-2 rounded-0 border-gray-900" aria-labelledby="shopDropdownInvoker">
                                    @foreach($MenuCategories as $category )
                                        @if($category->parent_id==0)
                                            <li class="position-relative">

                                                <a id="shopDropdownsubmenu{{$category->id}}Invoker"
                                                   href="{{route('website.products.category.index',$category->id)}}"
                                                   class="@if(count($category->subcategories)>0) dropdown-toggle  dropdown-item__sub-menu  d-flex align-items-center justify-content-between @endif dropdown-item link-black-100"
                                                   aria-haspopup="true"
                                                   aria-expanded="false"
                                                   data-unfold-event="hover"
                                                   data-unfold-target="#shopDropdownsubMenuone{{$category->id}}"
                                                   data-unfold-type="css-animation"
                                                   data-unfold-duration="200"
                                                   data-unfold-delay="100"
                                                   data-unfold-hide-on-scroll="true"
                                                   data-unfold-animation-in="slideInUp"
                                                   data-unfold-animation-out="fadeOut">
                                                    {{$category->name}}
                                                </a>
                                                @if(count($category->subcategories)>0)
                                                <ul id="shopDropdownsubMenuone{{$category->id}}" class="dropdown-unfold dropdown-menu dropdown-sub-menu font-size-2 rounded-0 border-gray-900" aria-labelledby="shopDropdownsubmenu{{$category->id}}Invoker">
                                                    @foreach($category->subcategories as $sub )
                                                        <li> <a href="{{route('website.products.category.index',$sub->id)}}" class="dropdown-item link-black-100">{{$sub->name}}</a> </li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>

                                        @endif
                                    @endforeach

                                </ul>
                            </li>
                            <li class="nav-item"><a href="{{route('website.suppliers.index')}}" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">الموزعون المعتمدون</a></li>
                            <li class="nav-item dropdown">
                                <a id="homeDropdownInvoker" href="javascript:void(0)"
                                   class="dropdown-toggle nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium d-flex align-items-center"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   data-unfold-event="hover"
                                   data-unfold-target="#AuthorsAndAuditorsMenu"
                                   data-unfold-type="css-animation"
                                   data-unfold-duration="200"
                                   data-unfold-delay="50"
                                   data-unfold-hide-on-scroll="true"
                                   data-unfold-animation-in="slideInUp"
                                   data-unfold-animation-out="fadeOut">
                                    محققون و مؤلفون
                                </a>
                                <ul id="AuthorsAndAuditorsMenu"
                                    class="dropdown-unfold dropdown-menu font-size-2 rounded-0 border-gray-900"
                                    aria-labelledby="homeDropdownInvoker">

                                    <li><a href="{{route('website.authors.index')}}"
                                           class="dropdown-item link-black-100">المؤلفون</a></li>
                                    <li><a href="{{route('website.auditors.index')}}"
                                           class="dropdown-item link-black-100">المحققون</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="{{route('website.scientific.index')}}" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">اللجنة العلمية</a></li>
                            <li class="nav-item"><a href="javascript:void(0)" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">مقالات</a></li>
                            <li class="nav-item"><a href="{{route('website.about')}}" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">تأسيس الدار</a></li>
                            <li class="nav-item"><a href="{{route('website.contact')}}" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">تواصل معنا</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Sidebar Navigation -->
        <aside id="sidebarContent2" class="u-sidebar u-sidebar__md u-sidebar--left" aria-labelledby="sidebarNavToggler2">
            <div class="u-sidebar__scroller js-scrollbar">
                <div class="u-sidebar__container">
                    <div class="u-header-sidebar__footer-offset">
                        <!-- Content -->
                        <div class="u-sidebar__body">
                            <div class="u-sidebar__content u-header-sidebar__content">
                                <!-- Title -->
                                <header class="border-bottom px-4 px-md-5 py-4 d-flex align-items-center justify-content-between">
                                    <h2 class="font-size-3 mb-0">Daralsamman</h2>

                                    <!-- Toggle Button -->
                                    <div class="d-flex align-items-center">
                                        <button type="button" class="close ml-auto"
                                                aria-controls="sidebarContent2"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-event="click"
                                                data-unfold-hide-on-scroll="false"
                                                data-unfold-target="#sidebarContent2"
                                                data-unfold-type="css-animation"
                                                data-unfold-animation-in="fadeInLeft"
                                                data-unfold-animation-out="fadeOutLeft"
                                                data-unfold-duration="500">
                                            <span aria-hidden="true"><i class="fas fa-times ml-2"></i></span>
                                        </button>
                                    </div>
                                    <!-- End Toggle Button -->
                                </header>
                                <!-- End Title -->
                                <div class="border-bottom">
                                    <div class="zeynep pt-4">
                                        <ul>
                                            <li class="nav-item"><a href="{{route('website.home')}}" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">الصفحة الرئيسية</a></li>
                                            <li class="has-submenu">
                                                <a href="#" data-submenu="travel">                                    إصدارات الدار
                                                </a>
                                                <div id="travel" class="submenu">
                                                    <div class="submenu-header" data-submenu-close="travel">
                                                        <a href="#">                                    إصدارات الدار
                                                        </a>
                                                    </div>

                                                    <ul>
                                                        <li>
                                                            <a href="{{route('website.products.index')}}">الكل</a>
                                                        </li>
                                                        @foreach($MenuCategories as $category )
                                                                    <li>
                                                                        <a href="{{route('website.products.category.index',$category->id)}}">{{$category->name}}</a>
                                                                    </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a href="{{route('website.suppliers.index')}}" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">الموزعون المعتمدون</a></li>
                                            <li class="nav-item"><a href="{{route('website.scientific.index')}}" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">اللجنة العلمية</a></li>
                                            <li class="nav-item"><a href="{{route('website.authors.index')}}" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium" >المؤلفون</a></li>
                                            <li class="nav-item"><a href="{{route('website.auditors.index')}}" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">المحققون</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">مقالات</a></li>
                                            <li class="nav-item"><a href="{{route('website.about')}}" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">تأسيس الدار</a></li>
                                            <li class="nav-item"><a href="{{route('website.contact')}}" class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">تواصل معنا</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </aside>
        <!-- End Categories Sidebar Navigation -->
    </div>
</header>
