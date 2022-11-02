<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="AbTebka3XxqDQLLNrGqj4zpB9YUjAN7oDilO21Ea">
        <meta name="description" content="Some description for the page" />
        <meta property="og:title" content="Zenix - Crypto Laravel Admin Dashboard" />
        <meta property="og:description" content="Zenix | Dashboard Light" />
        <meta property="og:image" content="../social-image.png" />
        <meta name="format-detection" content="telephone=no">
        <title>Zenix | Dashboard Light</title>
        <!-- Favicon icon -->

        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}assets/admin/images/favicon.png">


        <link href="{{ asset('/') }}assets/admin/vendor/chartist/css/chartist.min.css" rel="stylesheet"
          type="text/css" />
        <link href="{{ asset('/') }}assets/admin/vendor/owl-carousel/owl.carousel.css" rel="stylesheet"
          type="text/css" />

        <link
          href="{{ asset('/') }}assets/admin/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
          rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}assets/admin/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet"
          type="text/css" />
        <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js">
        </script>
        <link href="{{ asset('/') }}assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
          rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}assets/admin/css/style.css" rel="stylesheet" type="text/css" />


    </head>

    <body>

        <!--*******************
        Preloader start
    ********************-->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <!--*******************
        Preloader end
    ********************-->


        <!--**********************************
        Main wrapper start
    ***********************************-->
        <div id="main-wrapper">

            @include('admin.inc.nav')


            @include('admin.inc.chatbox')

            @include('admin.inc.header')

            @include('admin.inc.sidebar')






            <!--**********************************
            Content body start
        ***********************************-->
            <div class="content-body">


                <div class="container-fluid">
                    @yield('main-body')
                </div>
            </div>
            <!--**********************************
            Content body end
        ***********************************-->


            <!--**********************************
            Footer start
        ***********************************-->

            <!--**********************************

            <!--**********************************
            Footer end
        ***********************************-->

            <!--**********************************
           Support ticket button start
        ***********************************-->

            <!--**********************************
           Support ticket button end
        ***********************************-->


        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <script src="{{ asset('/') }}assets/admin/vendor/global/global.min.js" type="text/javascript"></script>
        <script src="{{ asset('/') }}assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"
          type="text/javascript"></script>
        <script src="{{ asset('/') }}assets/admin/vendor/chart.js/Chart.bundle.min.js" type="text/javascript"></script>
        <script src="{{ asset('/') }}assets/admin/vendor/peity/jquery.peity.min.js" type="text/javascript"></script>
        <script src="{{ asset('/') }}assets/admin/vendor/apexchart/apexchart.js" type="text/javascript"></script>
        <script src="{{ asset('/') }}assets/admin/vendor/owl-carousel/owl.carousel.js" type="text/javascript"></script>
        <script src="{{ asset('/') }}assets/admin/js/dashboard/dashboard-1.js" type="text/javascript"></script>
        <script src="{{ asset('/') }}assets/admin/js/custom.js" type="text/javascript"></script>
        <script src="{{ asset('/') }}assets/admin/js/deznav-init.js" type="text/javascript"></script>
        <script src="{{ asset('/') }}assets/admin/js/demo.js" type="text/javascript"></script>
        <script src="{{ asset('/') }}assets/admin/js/plugins-init/material-date-picker-init.js" type="text/javascript">
        </script>
        <script src="{{ asset('/') }}assets/admin/vendor/datatables/js/jquery.dataTables.min.js" type="text/javascript">
        </script>
        <script src="{{ asset('/') }}assets/admin/js/plugins-init/datatables.init.js" type="text/javascript"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
        </script>
        {{-- <script src="{{ asset('/') }}assets/admin/js/styleSwitcher.js" type="text/javascript"></script> --}}
    </body>

</html>
