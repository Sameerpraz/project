@include('backend.layouts.top')
@include('backend.layouts.header')
@include('backend.layouts.aside')
@include('backend.layouts.footer')


@yield('header')
@yield('top')
@yield('aside')
@yield('content')
@yield('footer')