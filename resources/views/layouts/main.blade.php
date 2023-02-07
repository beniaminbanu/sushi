
<!DOCTYPE html>
<html lang="en">
    @include('layouts.components.head')
    <body>
        <!-- website container -->
        <div id="wrapper">
            <!-- header content -->
            <header>
                @include('layouts.components.header')
            </header>
            @include("layouts.svg")
            <!-- main content -->
            <div id="main">
                @yield('content')
                @include('layouts.components.backToTop')
            </div>
            <!-- footer content -->
            <footer>
                @include('layouts.components.footer')
            </footer>
        </div>
        <div id="scripts">
            @include('layouts.includes.scripts')
            @stack('scripts')
        </div>
    </body>
</html>
