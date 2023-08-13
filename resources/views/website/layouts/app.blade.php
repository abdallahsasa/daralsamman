<!DOCTYPE html>
<html lang="en">

@include('website.layouts.head')
@yield('style')

<body>


@include('website.layouts.header')


    @yield('content')

    @include('website.layouts.footer')


@include('website.layouts.footer-scripts')

@yield('scripts')


</body>
</html>



