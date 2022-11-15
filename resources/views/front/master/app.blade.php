<!DOCTYPE html>
<html lang="en">


    <head>
        @include('front.include.head')
    </head>
    @yield('style')

    <body>
        <div class="main-wrapper">
            @include('front.include.header')
            @yield('main-body')
        </div>
        @include('front.include.footer')

        @include('front.include.script')
        @yield('script')
    </body>


</html>
