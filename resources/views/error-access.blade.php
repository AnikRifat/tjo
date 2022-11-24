<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>{{ $content->name }}</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}assets/front/img/favicon.svg">

        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/bootstrap.min.css">

        <link rel="stylesheet" href="{{ asset('/') }}assets/front/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/plugins/fontawesome/css/all.min.css">

        <link rel="stylesheet" href="{{ asset('/') }}assets/front/plugins/feather/feather.css">

        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/style.css">
    </head>

    <body class="error-page">

        <div class="main-wrapper">
            <div class="error-box">
                <div class="error-logo">
                    <a href="index-2.html">
                        <img src="{{ asset('/') }}assets/images/content/{{ $content->logo }}" class="img-fluid"
                          alt="Logo">
                    </a>
                </div>
                <div class="error-box-img">
                    <img src="{{ asset('/') }}assets/front/img/error-01.png" alt="" class="img-fluid">
                </div>
                <h3 class="h2 mb-3"> Oh No! You have no access to this page</h3>
                <a href="{{ route('index') }}" class="btn btn-primary">Back to Home</a>
            </div>
        </div>


        <script src="{{ asset('/') }}assets/front/js/jquery-3.6.0.min.js"></script>

        <script src="{{ asset('/') }}assets/front/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('/') }}assets/front/js/script.js"></script>
    </body>

    <!-- Mirrored from dreamslms.dreamguystech.com/html/error-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Oct 2022 05:53:58 GMT -->

</html>
