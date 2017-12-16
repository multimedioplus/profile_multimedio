<!DOCTYPE html>
<html lang="en" class="full-height">
    <head>
        <title>MultimedioPlus - @yield('title')</title>

        @include('includes.header')
        @yield('custom_css')
    </head>

    <body class="@yield('body_class')">
        @yield('header')

        @yield('content')

        <footer class="@yield('footer_class')">
            @include('includes.footer_content')
        </footer>

        @include('includes.footer')
        @yield('custom_js')
    </body>
</html>