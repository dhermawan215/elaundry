<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} </title>
    @include('layouts.admin_style')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        @include('layouts.admin_navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('layouts.admin_sidebar')
            <!-- partial -->
            @yield('content')
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">

                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All
                    rights reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- container-scroller -->

    @include('layouts.admin_script')
    @stack('custom_script')
</body>

</html>