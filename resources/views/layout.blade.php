<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
    @yield('post_style')
    <body>
        @include('partials.navbar')
        @include('partials.messages')
        @yield('content')
        @include('partials.footer')
    </body>
</html>

