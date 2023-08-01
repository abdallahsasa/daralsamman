<!DOCTYPE html>
<html lang="en">

@include('website.layouts.head')
@yield('style')

<body>


@include('website.layouts.header')


    <!--=================================
    page-title-->

    @yield('content')
    <!--=================================
     footer -->
    @include('website.layouts.footer')

    <!--=================================
     footer -->



@include('website.layouts.footer-scripts')

@yield('scripts')


</body>
</html>



