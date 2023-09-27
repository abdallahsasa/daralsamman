<header id="site-header" class="site-header__v9 site-header__white-text">
    <div class="masthead">
        <div class="container pt-3 pt-md-4 pb-3 pb-md-5">
            <div class="d-flex align-items-center position-relative flex-wrap">
                <div class="site-branding pl-7">
                    <a href="{{route('website.home')}}" class="d-block mb-1">
                        <img src="{{asset('website/img/logo/Logo.png')}}" class="logo">
                    </a>
                </div>
                <div class="site-search ml-xl-0 ml-md-auto w-r-100 flex-grow-1 mr-md-5 mt-2 mt-md-0 order-1 order-md-0">
                    <form class="form-inline my-2 my-xl-0">
                        <div class="input-group input-group-borderless w-100">
                            <div class="input-group-prepend border-right mr-0 d-none d-xl-block">
                                <select
                                    class="custom-select pl-7 pr-5 rounded-left-0 height-5 shadow-none border-0 text-dark bg-gray-200"
                                    id="inputGroupSelect01">
                                    <option selected>جميع الأصناف</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <input type="text" class="form-control px-3 bg-gray-200 bg-focus__1"
                                   placeholder="Search for books by keyword"
                                   aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-3 py-2" type="submit"><i
                                        class="mx-1 glph-icon flaticon-loupe text-white"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="bg-primary rounded-md d-none d-md-block">
                <div class="d-flex align-items-center justify-content-center position-relative">
                    <div class="site-navigation mr-auto d-none d-xl-block">
                        <ul class="nav pl-xl-4">
                            <li class="nav-item"><a href="{{route('website.home')}}"
                                                    class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">الصفحة
                                    الرئيسية</a></li>
                            <li class="nav-item dropdown">
                                <a id="homeDropdownInvoker" href="{{route('website.products.index')}}"
                                   class="dropdown-toggle nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium d-flex align-items-center"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   data-unfold-event="hover"
                                   data-unfold-target="#homeDropdownMenu"
                                   data-unfold-type="css-animation"
                                   data-unfold-duration="200"
                                   data-unfold-delay="50"
                                   data-unfold-hide-on-scroll="true"
                                   data-unfold-animation-in="slideInUp"
                                   data-unfold-animation-out="fadeOut">
                                    اصدارات الدار
                                </a>
                                <ul id="homeDropdownMenu"
                                    class="dropdown-unfold dropdown-menu font-size-2 rounded-0 border-gray-900"
                                    aria-labelledby="homeDropdownInvoker" >
                                    @if(isset($MenuCategories) && !$MenuCategories->isEmpty())
                                        @foreach($MenuCategories as $category )
                                            <li><a href="{{route('website.products.category.index',$category->id)}}"
                                                   class="dropdown-item link-black-100">{{$category->name}}</a></li>
                                        @endforeach
                                    @endif

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


                            <li class="nav-item"><a href="#"
                                                    class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">اللجنة
                                    العلمية</a></li>
                            <li class="nav-item"><a href="#"
                                                    class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">مقالات</a>
                            </li>
                            <li class="nav-item"><a href="{{route('website.about')}}"
                                                    class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">تأسيس
                                    الدار</a></li>
                            <li class="nav-item"><a href="{{route('website.contact')}}"
                                                    class="nav-link link-black-100 mx-3 px-0 py-3 font-size-2 font-weight-medium">تواصل
                                    معنا</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
