<!DOCTYPE html>
<html lang="en" class="full-height">
    <head>
        <title>Arco - @yield('title')</title>

        @include('includes.header')
    </head>

    <body class="@yield('body_class')">
        <header class="@yield('header_class')">
            @include('includes.header_content')
        </header>

        @yield('content')

        <footer class="@yield('footer_class')">
            @include('includes.footer_content')
        </footer>

        @include('includes.footer')
        @yield('custom_js')
    </body>
</html>