<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Custom fonts for this template-->
        <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body class="bg-gradient-primary">
       <div id="app"></div>

       <!-- Bootstrap core JavaScript-->
       <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
       <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

       <!-- Core plugin JavaScript-->
       <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

       <!-- Custom scripts for all pages-->
       <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
       <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
