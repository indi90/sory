<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')
    </head>
    <body class="fixed-left">
    <!-- Begin page -->
        <div id="wrapper">
            @include('layouts.top')
            @include('layouts.left')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
                <footer class="footer text-right">
                    2016 &copy; PT. JST Indonesia.
                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('js/detect.js') }}"></script>
        <script src="{{ asset('js/script.min.js') }}"></script>
        <script src="{{ asset('js/waves.js') }}"></script>

        <script src="{{ asset('js/jquery.core.js') }}"></script>
        <script src="{{ asset('js/jquery.app.js') }}"></script>

        @stack('scripts')
    </body>
</html>