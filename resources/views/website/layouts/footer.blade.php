
<footer class="site-footer_v8">
    <div class="bg-primary">
        <div class="container">

            <div class="space-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="pr-lg-10">

                            <div class="form-row justify-content-center">
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-dark btn-wide py-2 height-60 font-weight-medium">اشترك الان
                                    </button>
                                </div>
                                <div class="col-lg mb-2 ml-10">
                                    <div class="js-form-message">
                                        <div class="input-group">
                                            <input type="text" class="form-control font-size-2 px-5 py-2 rounded-md border-0 height-60 text-right" name="name" id="signupSrName" placeholder="للإشتراك بنشر المقالات" aria-label="Your name" required="" data-msg="Name must contain only letters." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <h5 class="font-size-7 font-weight-medium text-white" dir="ltr"> <span dir="ltr">"المقالات"</span> اشترك في صفحة</h5>
                            <p class="text-white font-size-2 mb-0">وكن واحداً ممن تُنشر مقالاته لدى موقع دار السمان</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="bg-dark space-1 space-lg-1">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 mb-5 mb-md-0">
                    <h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1 text-gray-500">روابط هامة</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="pb-2">
                            <a class="font-size-2 text-white widgets-hover transition-3d-hover" href="{{route('website.products.index')}}">إصدارات الدار</a>
                        </li>
                        <li class="pb-2">
                            <a class="font-size-2 text-white widgets-hover transition-3d-hover" href="{{route('website.suppliers.index')}}">الموزعون المعتمدون</a>
                        </li>
                        <li class="pb-2">
                            <a class="font-size-2 text-white widgets-hover transition-3d-hover" href="{{route('website.about')}}">تأسيس الدار</a>
                        </li>
                        <li class="py-2">
                            <a class="font-size-2 text-white widgets-hover transition-3d-hover" href="{{route('website.contact')}}">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-5 mb-md-0">
                    <h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1 text-gray-500">من أهم التصنيفات</h4>
                    <ul class="list-unstyled mb-0">
{{--                        @foreach($footerCategories as $category)--}}
                        <li class="pb-2"><a class="font-size-2 text-white widgets-hover transition-3d-hover" href="https://daralsamman.com/books/category/20">الفقه وعلومه</a></li>
                        <li class="pb-2"><a class="font-size-2 text-white widgets-hover transition-3d-hover" href="https://daralsamman.com/books/category/14">النحو واللغة</a></li>
                        <li class="pb-2"><a class="font-size-2 text-white widgets-hover transition-3d-hover" href="https://daralsamman.com/books/category/18">الحديث وعلومه</a></li>
                        <li class="pb-2"><a class="font-size-2 text-white widgets-hover transition-3d-hover" href="https://daralsamman.com/books/category/12">التزكية والرقائق</a></li>
{{--                        @endforeach--}}

                    </ul>
                </div>
                <div class="col-lg-6 mb-4 mb-md-0">
                    <div class="pb-md-6">
                        <a href="{{route('website.home')}}" class="d-inline-block mb-5">
                            <img src="{{asset('website/img/logo/logo-white.png')}}" class="logo" alt="دار السّمان">
                        </a>
                        <address class="font-size-2 mb-5">
                                <span class="mb-2 font-weight-normal text-white">
                                   تركيا - إسطنبول - الفاتح
                                </span>
                        </address>
                        <div class="mb-4">
                            <a href="mailto:info@daralsamman.com" class="font-size-2 d-block text-white mb-1">info@daralsamman.com</a>
                            <a href="tel:+905050839104" class="font-size-2 d-block text-white">+90 505 083 9104</a>
                        </div>
                        <ul class="list-unstyled mb-0 d-flex">
                            <li class="btn pr-0">
                                <a class="text-white" href="https://twitter.com/daralsamman?lang=en" target="_blank">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li class="btn">
                                <a class="text-white" href="https://www.facebook.com/dar.alsamman" target="_blank">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="btn">
                                <a class="text-white" href="#">
                                    <span class="fab fa-youtube"></span>
                                </a>
                            </li>
                            <li class="btn">
                                <a class="text-white" href="https://wa.me/message/OBTLDVAQ5NVFC1" target="_blank">
                                    <span class="fab fa-whatsapp"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-1 bg-dark border-top border-gray-810">
        <div class="container">
            <div class="d-lg-flex text-center text-lg-left justify-content-between align-items-center">

                <p class="mb-3 mb-lg-0 font-size-2 text-gray-500">Copyright Dar Alsamman © 2023. All Rights Reserved. </p>



            </div>
        </div>
    </div>
</footer>

