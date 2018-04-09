<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials.head')
    </head>
    <body>
        <section id="app">
            @include('partials.header')
            <div id="all">
                @yield('content')
                @include('partials.footer')
            </div>
        </section>
        @include('partials.scripts')

    </body>
</html>




   
